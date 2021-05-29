angular.module("myApp").controller("dashboardController", ["$scope", "$http", "$window", "$filter", function($scope, $http, $window, $filter){
	
	$scope.dashboardInstanceList = [];
	$scope.provinceInstanceList = [];
	$scope.setStreamData = function(strData, data){
		data = 2;
		if (strData){
		  source = new EventSource(PATH+"app/dashboard/model/stream.php?action=dashboardReportTime");
		  source.onmessage = function(event) {
			var jdata = JSON.parse(event.data);
			$scope.provinceInstanceList = (jdata.instance);
			console.log($scope.provinceInstanceList);
			$scope.$apply();
		  };
		}else{
		  source.close();
		}
	  };
	  $scope.setStreamData(true);


}]);