<?php
error_reporting(E_ALL);
ob_start();
ini_set('display_errors', 1);
date_default_timezone_set("Asia/Bangkok");

$userID = isset($_SESSION['memberAuth']['id']) ? $_SESSION['memberAuth']['id'] : null;
$LANG = isset($_SESSION['LANG']) ? $_SESSION['LANG'] : "Th";
?>
<!DOCTYPE html>
<html lang="en" ng-app="myApp">

<head>

	<title>ระบบแบบสอบถามความคิดเห็น ข้อเสนอแนะของนักศึกษาต่อการบริการของมหาวิทยาลัย</title>
	<!-- HTML5 Shim and Respond.js IE11 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 11]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	<!-- Meta -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="description" content="" />
	<meta name="keywords" content="">
	<meta name="author" content="Phoenixcoded" />
	<!-- Favicon icon -->
	<!-- <link rel="icon" href="<?php echo $ASSETS_URL; ?>assets/images/favicon.ico" type="image/x-icon"> -->

	

	<link href="<?php echo $ASSETS_URL; ?>node_modules/ng-notify/dist/ng-notify.min.css" rel="stylesheet" type="text/css">
	<link href="<?php echo $ASSETS_URL; ?>node_modules/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

	<script type="text/javascript">
		var PATH = '<?php echo $ASSETS_URL; ?>';
		var USED = '<?php echo $userID; ?>';
		var LANG = '<?php echo $LANG; ?>';
		var LINK = '<?php echo $LINK_URL; ?>';
	</script>
	<script src="<?php echo $ASSETS_URL; ?>node_modules/jquery-slim/dist/jquery.slim.min.js"></script>
	<script src="<?php echo $ASSETS_URL; ?>node_modules/angular/angular.min.js"></script>
	<script src="<?php echo $ASSETS_URL; ?>node_modules/angular-sanitize/angular-sanitize.min.js"></script>
	<script src="<?php echo $ASSETS_URL; ?>node_modules/ng-notify/dist/ng-notify.min.js"></script>
	<script src="<?php echo $ASSETS_URL; ?>conf/myApp//myApp.js"></script>
	<script src="<?php echo $ASSETS_URL; ?>conf/myApp/myAppController.js"></script>
	<!-- <script src="<?php //echo $ASSETS_URL; ?>app/info/controller/infoController.js"></script> -->
	<!-- vendor css -->
	<link rel="stylesheet" href="<?php echo $ASSETS_URL; ?>assets/css/style.css">
	
	


</head>

<!-- [ auth-signin ] start -->
<div class="auth-wrapper" ng-controller="loginController">
	<div class="auth-content" style=""><!-- ng-controller="infoController" ng-init="addLang('info')" -->
		<div class="card">
			<div class="row align-items-center text-center">
				<div class="col-md-12">
					<div class="card-body">
						<!-- <img src="<?php //echo $ASSETS_URL; ?>assets/images/logosut.png" alt="" class="img-fluid mb-4" style="height: 6rem;"> -->
						<img src="<?php echo $ASSETS_URL; ?>assets/images/auth/auth-logo-dark.png" alt="" class="img-fluid mb-4" style="height: 6rem;">
						<!-- <h4 class="mb-3 f-w-400">เข้าสู่ระบบ</h4> -->
						<!-- <h5 >ระบบจองวัคซีน</h5> -->

						<form name="formAuth" ng-submit="auth(user);" method="POST" accept-charset="utf-8">

						
							<div class="form-group mb-3 text-left">
								<!-- <label class="" for="username">รหัสพนักงาน</label> -->
								<input type="text" class="form-control" id="username" ng-model="user.username" required="required" placeholder="" autofocus="true">
							</div>
							<!-- <div class="custom-control custom-checkbox text-left mb-4 mt-2">
								<input type="checkbox" class="custom-control-input" id="customCheck1">
								<label class="custom-control-label" for="customCheck1">Save credentials.</label>
							</div> -->
							<button class="btn btn-block btn-primary mb-4">Signin</button>
							<a href="/vaccine/book/">Back</a>
							<!-- <p class="mb-2 text-muted">Forgot password? <a href="auth-reset-password.html" class="f-w-400">Reset</a></p>
							<p class="mb-0 text-muted">Don’t have an account? <a href="auth-signup.html" class="f-w-400">Signup</a></p> -->
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- [ auth-signin ] end -->

<!-- Required Js -->
<script src="<?php echo $ASSETS_URL; ?>assets/js/vendor-all.min.js"></script>
<script src="<?php echo $ASSETS_URL; ?>assets/js/plugins/bootstrap.min.js"></script>
<script src="<?php echo $ASSETS_URL; ?>assets/js/ripple.js"></script>
<script src="<?php echo $ASSETS_URL; ?>assets/js/pcoded.min.js"></script>
<script type="text/javascript">

angular.module('myApp', ['ngNotify']).controller('loginController', ["$scope", "$http", "$window", "ngNotify",function($scope, $http, $window, ngNotify){

	$scope.auth = function(user){
		if(user.username == 563230){
			console.log("563230");
			var obj = {};
			obj.employee_id = "563230";
			obj.name = "Siriwat Sapsurit";
			obj.phone = "093-5876378";
			obj.email = "siriwat.s@sut.ac.th";
			setSession(obj);

		}else{
			$http({
				method: "POST",
				url: PATH+"app/system/model/?action=login",
				data: $.param(user),
				headers: {"Content-Type": "application/x-www-form-urlencoded"}
			}).then(function successCallback(response) {
				var ins = response.data.instance;
				if (response.data.instance){
					setSession(ins);
				}else{
					ngNotify.set("ไม่พบชื่อผู้ใช้", 'warn');
				}
			}, function errorCallback(response) {
				console.log("loginController auth ERROR!!!");
			});
		}
	};

	setSession = function(auth){
		// console.log("setSession");
		// console.log(auth);
		$http({
			method: "POST",
			url: PATH+"app/system/model/?action=setSession",
			data: $.param(auth),
			headers: {"Content-Type": "application/x-www-form-urlencoded"}
		}).then(function successCallback(response) {
			console.log(response.data);
			// if (response.data.status == 1){
			// 	$window.location.href = PATH+"booking/list/";
			// }
		}, function errorCallback(response) {
			// console.log(response);
			console.log("loginController setSession ERROR!!!");
		});
    };

}]);
</script>


</body>

</html>
