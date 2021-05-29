angular.module("myApp").controller("time_workController", ["$scope", "$http", "$window", "$filter", function($scope, $http, $window, $filter){
	
	$scope.time_workInstanceList = [];
	$scope.dataInstanceDateList = [];
	$scope.time_workInstance = {};
	$scope.pagination = {};
	$scope.pagination.page = 1;

	$scope.time_workInsert = function(obj, act=true){
		$http({
			method: "POST",
			url: PATH+"app/time_work/model/?action=time_workInsert",
			data: $.param(obj),
			headers: {"Content-Type": "application/x-www-form-urlencoded"}
		}).then(function successCallback(response) {
			var last_id = response.data.last_id ? response.data.last_id : null;
			if (last_id>0){
				if (act){
					$window.location.href = LINK+"time_work/show/"+last_id+"/";
				}
				$scope.displayNotify('success', "เพิ่มข้อมูล time_work ใหม่สำเร็จ");
			}else{
				$scope.displayNotify('warning', "เพิ่มข้อมูล time_work ใหม่ไม่สำเร็จ!!");
				console.log(response.data.sql);
			}
			
		}, function errorCallback(error) {
			$scope.displayNotify('error', "เกิดข้อผิดพลาด!! ในการเพิ่มข้อมูล time_work ใหม่");
			console.log("time_workController save ERROR!!!");
			console.log(error);
		});
	};

	$scope.time_workShow= function(id){
		$http({
			method: "GET",
			url: PATH+"app/time_work/model/?action=time_workShow",
			params: {id: id}
		}).then(function successCallback(response) {
			if (response.data.instance){
				$scope.time_workInstance = response.data.instance;
			}
			else{
				$scope.displayNotify('warning', "แสดงข้อมูล  time_work  ไม่สำเร็จ!!");
				console.log(response.data.sql);
			}
			
		}, function errorCallback(error) {
			$scope.displayNotify('error', "เกิดข้อผิดพลาด!! ในการแสดงข้อมูล time_work  #"+id);
			console.log("time_workController show ERROR!!!");
			console.log(error);
		});
	};

	$scope.time_workList= function(){
		$http({
			method: "GET",
			url: PATH+"app/time_work/model/?action=time_workList",
			params: $scope.pagination
		}).then(function successCallback(response) {
			$scope.time_workInstanceList = response.data.instance;
			$scope.pagination = response.data.pagination;
			
		}, function errorCallback(error) {
			$scope.displayNotify('error', "เกิดข้อผิดพลาด!! ในการแสดรายการข้อมูล time_work ");
			console.log("time_workController list ERROR!!!");
			console.log(error);
		});
	};

	$scope.time_workUpdate = function(obj, act=true){
		$http({
			method: "POST",
			url: PATH+"app/time_work/model/?action=time_workUpdate",
			data: $.param(obj),
			headers: {"Content-Type": "application/x-www-form-urlencoded"}
		}).then(function successCallback(response) {
			var update_id = response.data.update_id ? response.data.update_id : null;
			if (update_id){
				if (act){
					$window.location.href = LINK+"time_work/show/"+update_id+"/";
				}
				$scope.time_workShow(obj.id); // $scope.time_workList();
				$scope.displayNotify('success', "ปรับปรุงข้อมูล time_work สำเร็จ");
			}else{
				$scope.displayNotify('warning', "ปรับปรุงข้อมูล time_work ไม่สำเร็จ!!");
				console.log(response.data);
			}
			
		}, function errorCallback(error) {
			$scope.displayNotify('error', "เกิดข้อผิดพลาด!! ในการปรับปรุงข้อมูล time_work !! #"+$scope.time_workInstance.id);
			console.log("time_workController update ERROR!!!");
			console.log(error);
		});
	};

	$scope.time_workDelete = function(obj, act=true){
		$http({
			method: "POST",
			url: PATH+"app/time_work/model/?action=time_workDelete",
			data: $.param({id: obj.id}),
			headers: {"Content-Type": "application/x-www-form-urlencoded"}
		}).then(function successCallback(response) {
			var status = response.data.status ? response.data.status : false;
			if (status){
				if (act){
					$window.location.href = LINK+"time_work/list/";
				}
				$scope.time_workList();
				$scope.displayNotify('success', "ลบข้อมูล time_work สำเร็จ");
			}else{
				$scope.displayNotify('warning', "ลบข้อมูล time_work ไม่สำเร็จ!!");
				console.log(response.data.sql);
			}
			
		}, function errorCallback(error) {
			$scope.displayNotify('error', "เกิดข้อผิดพลาด!! ในการลบข้อมูล time_work !! #"+id);
			console.log("time_workController delete ERROR!!!");
			console.log(error);
		});
	};

	$scope.dataList = function(){
		console.log("dataList");

		$http({
			method: "POST",
			url: PATH+"app/system/model/?action=dataList"
		}).then(function successCallback(response) {
			// console.log(response.data)
			$scope.dataInstanceDateList = response.data.date;
			console.log($scope.dataInstanceDateList)
			
		}, function errorCallback(error) {
			// $scope.displayNotify('error', "เกิดข้อผิดพลาด!! ในการแสดรายการข้อมูล dataList ");
			console.log("bookController dataList ERROR!!!");
			// console.log(error);
		});
	};

}]);