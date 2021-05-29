angular.module("myApp").controller("date_workController", ["$scope", "$http", "$window", "$filter", function($scope, $http, $window, $filter){
	
	$scope.date_workInstanceList = [];
	$scope.date_workInstance = {};
	$scope.pagination = {};
	$scope.pagination.page = 1;

	$scope.date_workInsert = function(obj, act=true){
		$http({
			method: "POST",
			url: PATH+"app/date_work/model/?action=date_workInsert",
			data: $.param(obj),
			headers: {"Content-Type": "application/x-www-form-urlencoded"}
		}).then(function successCallback(response) {
			var last_id = response.data.last_id ? response.data.last_id : null;
			if (last_id>0){
				if (act){
					$window.location.href = LINK+"date_work/show/"+last_id+"/";
				}
				$scope.displayNotify('success', "เพิ่มข้อมูล date_work ใหม่สำเร็จ");
			}else{
				$scope.displayNotify('warning', "เพิ่มข้อมูล date_work ใหม่ไม่สำเร็จ!!");
				console.log(response.data.sql);
			}
			
		}, function errorCallback(error) {
			$scope.displayNotify('error', "เกิดข้อผิดพลาด!! ในการเพิ่มข้อมูล date_work ใหม่");
			console.log("date_workController save ERROR!!!");
			console.log(error);
		});
	};

	$scope.date_workShow= function(id){
		$http({
			method: "GET",
			url: PATH+"app/date_work/model/?action=date_workShow",
			params: {id: id}
		}).then(function successCallback(response) {
			if (response.data.instance){
				$scope.date_workInstance = response.data.instance;
			}
			else{
				$scope.displayNotify('warning', "แสดงข้อมูล  date_work  ไม่สำเร็จ!!");
				console.log(response.data.sql);
			}
			
		}, function errorCallback(error) {
			$scope.displayNotify('error', "เกิดข้อผิดพลาด!! ในการแสดงข้อมูล date_work  #"+id);
			console.log("date_workController show ERROR!!!");
			console.log(error);
		});
	};

	$scope.date_workList= function(){
		$http({
			method: "GET",
			url: PATH+"app/date_work/model/?action=date_workList",
			params: $scope.pagination
		}).then(function successCallback(response) {
			$scope.date_workInstanceList = response.data.instance;
			$scope.pagination = response.data.pagination;
			
		}, function errorCallback(error) {
			$scope.displayNotify('error', "เกิดข้อผิดพลาด!! ในการแสดรายการข้อมูล date_work ");
			console.log("date_workController list ERROR!!!");
			console.log(error);
		});
	};

	$scope.date_workUpdate = function(obj, act=true){
		$http({
			method: "POST",
			url: PATH+"app/date_work/model/?action=date_workUpdate",
			data: $.param(obj),
			headers: {"Content-Type": "application/x-www-form-urlencoded"}
		}).then(function successCallback(response) {
			var update_id = response.data.update_id ? response.data.update_id : null;
			if (update_id){
				if (act){
					$window.location.href = LINK+"date_work/show/"+update_id+"/";
				}
				$scope.date_workShow(obj.id); // $scope.date_workList();
				$scope.displayNotify('success', "ปรับปรุงข้อมูล date_work สำเร็จ");
			}else{
				$scope.displayNotify('warning', "ปรับปรุงข้อมูล date_work ไม่สำเร็จ!!");
				console.log(response.data);
			}
			
		}, function errorCallback(error) {
			$scope.displayNotify('error', "เกิดข้อผิดพลาด!! ในการปรับปรุงข้อมูล date_work !! #"+$scope.date_workInstance.id);
			console.log("date_workController update ERROR!!!");
			console.log(error);
		});
	};

	$scope.date_workDelete = function(obj, act=true){
		$http({
			method: "POST",
			url: PATH+"app/date_work/model/?action=date_workDelete",
			data: $.param({id: obj.id}),
			headers: {"Content-Type": "application/x-www-form-urlencoded"}
		}).then(function successCallback(response) {
			var status = response.data.status ? response.data.status : false;
			if (status){
				if (act){
					$window.location.href = LINK+"date_work/list/";
				}
				$scope.date_workList();
				$scope.displayNotify('success', "ลบข้อมูล date_work สำเร็จ");
			}else{
				$scope.displayNotify('warning', "ลบข้อมูล date_work ไม่สำเร็จ!!");
				console.log(response.data.sql);
			}
			
		}, function errorCallback(error) {
			$scope.displayNotify('error', "เกิดข้อผิดพลาด!! ในการลบข้อมูล date_work !! #"+id);
			console.log("date_workController delete ERROR!!!");
			console.log(error);
		});
	};

}]);