angular.module("myApp").controller("bookingController", ["$scope", "$http", "$window", "$filter", function($scope, $http, $window, $filter){
	
	$scope.bookingInstanceList = [];
	$scope.dataInstanceDateList = [];
	$scope.dataInstanceTimeList = [];
	$scope.bookingInstance = {};
	$scope.pagination = {};
	$scope.pagination.page = 1;

	$scope.bookingInsert = function(obj, act=true){
		$http({
			method: "POST",
			url: PATH+"app/booking/model/?action=bookingInsert",
			data: $.param(obj),
			headers: {"Content-Type": "application/x-www-form-urlencoded"}
		}).then(function successCallback(response) {
			var last_id = response.data.last_id ? response.data.last_id : null;
			if (last_id>0){
				if (act){
					$window.location.href = LINK+"booking/show/"+last_id+"/";
				}
				$scope.displayNotify('success', "เพิ่มข้อมูล booking ใหม่สำเร็จ");
			}else{
				$scope.displayNotify('warning', "เพิ่มข้อมูล booking ใหม่ไม่สำเร็จ!!");
				console.log(response.data.sql);
			}
			
		}, function errorCallback(error) {
			$scope.displayNotify('error', "เกิดข้อผิดพลาด!! ในการเพิ่มข้อมูล booking ใหม่");
			console.log("bookingController save ERROR!!!");
			console.log(error);
		});
	};

	$scope.bookingShow= function(id){
		$http({
			method: "GET",
			url: PATH+"app/booking/model/?action=bookingShow",
			params: {id: id}
		}).then(function successCallback(response) {
			if (response.data.instance){
				$scope.bookingInstance = response.data.instance;
			}
			else{
				$scope.displayNotify('warning', "แสดงข้อมูล  booking  ไม่สำเร็จ!!");
				console.log(response.data.sql);
			}
			
		}, function errorCallback(error) {
			$scope.displayNotify('error', "เกิดข้อผิดพลาด!! ในการแสดงข้อมูล booking  #"+id);
			console.log("bookingController show ERROR!!!");
			console.log(error);
		});
	};

	$scope.bookingList= function(employee_id){
		console.log(employee_id);
		$http({
			method: "GET",
			url: PATH+"app/booking/model/?action=bookingList",
			params: {employee_id: employee_id}
		}).then(function successCallback(response) {
			console.log(response.data.instance);
			$scope.bookingInstanceList = response.data.instance;
			
		}, function errorCallback(error) {
			$scope.displayNotify('error', "เกิดข้อผิดพลาด!! ในการแสดรายการข้อมูล booking ");
			console.log("bookingController list ERROR!!!");
			console.log(error);
		});
	};

	$scope.bookingUpdate = function(obj, id, act=true){
		obj.id  = id;
		console.log(obj);
		if(obj.date_work_id == "" || obj.date_work_id == null || obj.date_work_id == undefined){
			swal("แจ้งเตือน", "กรุณาเลือกวันที่จะจองวัคซีน!", "warning").then(() => {
			});;
		}else if(obj.time_work_id == "" || obj.time_work_id == null || obj.time_work_id == undefined){
			swal("แจ้งเตือน", "กรุณาเลือกเวลาจะจองวัคซีน!", "warning").then(() => {
			});;
		}else{
			$http({
				method: "POST",
				url: PATH+"app/booking/model/?action=bookingUpdate",
				data: $.param(obj),
				headers: {"Content-Type": "application/x-www-form-urlencoded"}
			}).then(function successCallback(response) {
				var update_id = response.data.update_id ? response.data.update_id : null;
				if (update_id){
					swal("บันทึกข้อมูลสำเร็จ", "บันทึกข้อมูลการการจองวัคซีนสำเร็จ!", "success").then(() => {
						$window.location.href = LINK+"booking/list/";
					});;
					// if (act){
					// 	$window.location.href = LINK+"booking/show/"+update_id+"/";
					// }
					// $scope.bookingShow(obj.id); // $scope.bookingList();
					// $scope.displayNotify('success', "ปรับปรุงข้อมูล booking สำเร็จ");
				}else{
					$scope.displayNotify('warning', "ปรับปรุงข้อมูล booking ไม่สำเร็จ!!");
					console.log(response.data);
				}
				
			}, function errorCallback(error) {
				$scope.displayNotify('error', "เกิดข้อผิดพลาด!! ในการปรับปรุงข้อมูล booking !! #"+$scope.bookingInstance.id);
				console.log("bookingController update ERROR!!!");
				console.log(error);
			});
		}
	};

	$scope.bookingDelete = function(obj, act=true){
		$http({
			method: "POST",
			url: PATH+"app/booking/model/?action=bookingDelete",
			data: $.param({id: obj.id}),
			headers: {"Content-Type": "application/x-www-form-urlencoded"}
		}).then(function successCallback(response) {
			var status = response.data.status ? response.data.status : false;
			if (status){
				if (act){
					$window.location.href = LINK+"booking/list/";
				}
				$scope.bookingList();
				$scope.displayNotify('success', "ลบข้อมูล booking สำเร็จ");
			}else{
				$scope.displayNotify('warning', "ลบข้อมูล booking ไม่สำเร็จ!!");
				console.log(response.data.sql);
			}
			
		}, function errorCallback(error) {
			$scope.displayNotify('error', "เกิดข้อผิดพลาด!! ในการลบข้อมูล booking !! #"+id);
			console.log("bookingController delete ERROR!!!");
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
	$scope.dataTimeList = function(date){
		console.log("dataTimeList");
		console.log(date);
		$http({
			method: "GET",
			url: PATH+"app/system/model/?action=dataTimeList",
			params: {date: date}
		}).then(function successCallback(response) {
			//  console.log(response.data);
			 $scope.dataInstanceTimeList = response.data.instance;
			 console.log($scope.dataInstanceTimeList);
		}, function errorCallback(error) {
			// $scope.displayNotify('error', "เกิดข้อผิดพลาด!! ในการแสดรายการข้อมูล หลักสูตร ");
			console.log("bookController SearchByFaculty ERROR!!!");
			// console.log(error);
		});
	};

}]);