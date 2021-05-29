angular.module("myApp").controller("employeeController", ["$scope", "$http", "$window", "$filter", function($scope, $http, $window, $filter){
	
	$scope.employeeInstanceList = [];
	$scope.employeeInstance = {};
	$scope.pagination = {};
	$scope.pagination.page = 1;

	$scope.employeeInsert = function(obj, act=true){
		$http({
			method: "POST",
			url: PATH+"app/employee/model/?action=employeeInsert",
			data: $.param(obj),
			headers: {"Content-Type": "application/x-www-form-urlencoded"}
		}).then(function successCallback(response) {
			var last_id = response.data.last_id ? response.data.last_id : null;
			if (last_id>0){
				if (act){
					$window.location.href = LINK+"employee/show/"+last_id+"/";
				}
				$scope.displayNotify('success', "เพิ่มข้อมูล employee ใหม่สำเร็จ");
			}else{
				$scope.displayNotify('warning', "เพิ่มข้อมูล employee ใหม่ไม่สำเร็จ!!");
				console.log(response.data.sql);
			}
			
		}, function errorCallback(error) {
			$scope.displayNotify('error', "เกิดข้อผิดพลาด!! ในการเพิ่มข้อมูล employee ใหม่");
			console.log("employeeController save ERROR!!!");
			console.log(error);
		});
	};

	$scope.employeeShow= function(id){
		$http({
			method: "GET",
			url: PATH+"app/employee/model/?action=employeeShow",
			params: {id: id}
		}).then(function successCallback(response) {
			if (response.data.instance){
				$scope.employeeInstance = response.data.instance;
			}
			else{
				$scope.displayNotify('warning', "แสดงข้อมูล  employee  ไม่สำเร็จ!!");
				console.log(response.data.sql);
			}
			
		}, function errorCallback(error) {
			$scope.displayNotify('error', "เกิดข้อผิดพลาด!! ในการแสดงข้อมูล employee  #"+id);
			console.log("employeeController show ERROR!!!");
			console.log(error);
		});
	};

	$scope.employeeList= function(){
		$http({
			method: "GET",
			url: PATH+"app/employee/model/?action=employeeList",
			params: $scope.pagination
		}).then(function successCallback(response) {
			$scope.employeeInstanceList = response.data.instance;
			$scope.pagination = response.data.pagination;
			
		}, function errorCallback(error) {
			$scope.displayNotify('error', "เกิดข้อผิดพลาด!! ในการแสดรายการข้อมูล employee ");
			console.log("employeeController list ERROR!!!");
			console.log(error);
		});
	};

	$scope.employeeUpdate = function(obj, act=true){
		$http({
			method: "POST",
			url: PATH+"app/employee/model/?action=employeeUpdate",
			data: $.param(obj),
			headers: {"Content-Type": "application/x-www-form-urlencoded"}
		}).then(function successCallback(response) {
			var update_id = response.data.update_id ? response.data.update_id : null;
			if (update_id){
				if (act){
					$window.location.href = LINK+"employee/show/"+update_id+"/";
				}
				$scope.employeeShow(obj.id); // $scope.employeeList();
				$scope.displayNotify('success', "ปรับปรุงข้อมูล employee สำเร็จ");
			}else{
				$scope.displayNotify('warning', "ปรับปรุงข้อมูล employee ไม่สำเร็จ!!");
				console.log(response.data);
			}
			
		}, function errorCallback(error) {
			$scope.displayNotify('error', "เกิดข้อผิดพลาด!! ในการปรับปรุงข้อมูล employee !! #"+$scope.employeeInstance.id);
			console.log("employeeController update ERROR!!!");
			console.log(error);
		});
	};
	$scope.updateEmployee= function(){
		console.log("updateEmployee");
		$http({
			method: "POST",
			url: "http://ascend.sut.ac.th/rest-api/employee",
			headers: {"Content-Type": "application/x-www-form-urlencoded"}
		}).then(function successCallback(response) {
			console.log(response.data)
			$scope.insertEmployee(response.data)
			// $scope.employeeInstanceList = response.data.instance;
			// $scope.pagination = response.data.pagination;
			
		}, function errorCallback(error) {
			$scope.displayNotify('error', "เกิดข้อผิดพลาด!! ในการแสดรายการข้อมูล employee ");
			console.log("employeeController list ERROR!!!");
			console.log(error);
		});
	};

	$scope.insertEmployee= function(data, act=false){
		console.log("insertEmployee");
		console.log(data);
		$http({
			method: "POST",
			url: PATH+"app/employee/model/?action=insertEmployee",
			data: $.param({list: data}),
			headers: {"Content-Type": "application/x-www-form-urlencoded"}
		}).then(function successCallback(response) {
			console.log(response.data);
			var status = response.data.status ? response.data.status : null;
			if (status == 200){
				if (act){
					$window.location.href = LINK+"employee/show/"+last_id+"/";
				}
				swal("อัพเดตข้อมูลสำเร็จ", "อัพเดตข้อมูลพนักงานสำเร็จ", "success").then(() => {
					// location.reload(); 
				});;
			}else{
				$scope.displayNotify('warning', "เพิ่มข้อมูล employee ใหม่ไม่สำเร็จ!!");
				console.log(response.data.sql);
			}
			
		}, function errorCallback(error) {
			$scope.displayNotify('error', "เกิดข้อผิดพลาด!! ในการเพิ่มข้อมูล employee ใหม่");
			console.log("employeeController save ERROR!!!");
			console.log(error);
		});
	};



	$scope.employeeDelete = function(obj, act=true){
		$http({
			method: "POST",
			url: PATH+"app/employee/model/?action=employeeDelete",
			data: $.param({id: obj.id}),
			headers: {"Content-Type": "application/x-www-form-urlencoded"}
		}).then(function successCallback(response) {
			var status = response.data.status ? response.data.status : false;
			if (status){
				if (act){
					$window.location.href = LINK+"employee/list/";
				}
				$scope.employeeList();
				$scope.displayNotify('success', "ลบข้อมูล employee สำเร็จ");
			}else{
				$scope.displayNotify('warning', "ลบข้อมูล employee ไม่สำเร็จ!!");
				console.log(response.data.sql);
			}
			
		}, function errorCallback(error) {
			$scope.displayNotify('error', "เกิดข้อผิดพลาด!! ในการลบข้อมูล employee !! #"+id);
			console.log("employeeController delete ERROR!!!");
			console.log(error);
		});
	};

}]);