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

	<title>ระบบจองวัคซีน Covid - 19</title>
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
	<script src="<?php echo $ASSETS_URL; ?>assets/js/jquery-1.11.3.min.js"></script>
	<script src="<?php echo $ASSETS_URL; ?>node_modules/angular/angular.min.js"></script>
	<script src="<?php echo $ASSETS_URL; ?>node_modules/angular-sanitize/angular-sanitize.min.js"></script>
	<script src="<?php echo $ASSETS_URL; ?>node_modules/ng-notify/dist/ng-notify.min.js"></script>
	<script type="text/javascript" src="<?php echo $ASSETS_URL; ?>bower_components/select2/select2.js"></script>
	<script type="text/javascript" src="<?php echo $ASSETS_URL; ?>bower_components/angular-ui-select2/src/select2.js"></script>
	<script src="<?php echo $ASSETS_URL; ?>conf/myApp//myApp.js"></script>
	<script src="<?php echo $ASSETS_URL; ?>conf/myApp/myAppController.js"></script>

	<!-- <link href="<?php echo $ASSETS_URL; ?>assets/css/cusstom.css" rel="stylesheet"> -->

	<!-- Favicons -->
	<link href="<?php echo $ASSETS_URL; ?>assets/template_questionnaire/assets/img/favicon.png" rel="icon">
	<link href="<?php echo $ASSETS_URL; ?>assets/template_questionnaire/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

	<!-- Vendor CSS Files -->
	<link href="<?php echo $ASSETS_URL; ?>assets/template_questionnaire/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo $ASSETS_URL; ?>assets/template_questionnaire/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
	<link href="<?php echo $ASSETS_URL; ?>assets/template_questionnaire/assets/vendor/aos/aos.css" rel="stylesheet">
	<link href="<?php echo $ASSETS_URL; ?>assets/template_questionnaire/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
	<link href="<?php echo $ASSETS_URL; ?>assets/template_questionnaire/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
	<link href="<?php echo $ASSETS_URL; ?>assets/template_questionnaire/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">

	<!-- Template Main CSS File -->
	<link href="<?php echo $ASSETS_URL; ?>assets/template_questionnaire/assets/css/style.css" rel="stylesheet">

	<link rel="stylesheet" href="<?php echo $ASSETS_URL; ?>bower_components/select2/select2.css">
	<script src="<?php echo $ASSETS_URL; ?>assets/js/sweetalert.min.js"></script>
	
	


</head>

<!-- [ auth-signin ] start -->
<div class="auth-wrapper" ng-controller="studentsController" ng-init="dataList(); addLang('system')">
<!-- ======= Header ======= -->
	<header id="header" class="header fixed-top">
		<div class="container-fluid container-xl d-flex align-items-center justify-content-between">

		<a href="" class="logo d-flex align-items-center">
			<!-- Logo มทส -->
			<!-- <img src="<?php //echo $ASSETS_URL; ?>assets/images/logo2.png" alt=""> -->
			<!-- End Logo มทส -->
			<img src="<?php echo $ASSETS_URL; ?>assets/template_questionnaire/assets/img/logo.png" alt="">
        	<span>FlexStart</span>
		</a>

		<nav id="navbar" class="navbar">
			<ul>
			<!-- <li><a class="getstarted scrollto" href="/vaccine/auth/">LOGIN</a></li> -->
			<!-- <li class="dropdown"><a href=""><span>{{LANG}}</span> <i class="bi bi-chevron-down"></i></a>
				<ul>
					<li><a href="">{{LANG}}</a></li>
					<li><a href="" ng-repeat="la in languageList | filter: '!'+LANG " ng-click="setLang(la);">{{la}}</a></li>
				</ul>
			</li> -->
			</ul>
			<i class="bi bi-list mobile-nav-toggle"></i>
		</nav><!-- .navbar -->

		</div>
	</header><!-- End Header -->

	

	<main id="main">

		<!-- ======= Counts Section ======= -->
		<br><br>
		<form method="POST"  ng-submit="bookInsert(book);">
			<section id="counts" class="counts">
				<div class="container" data-aos="fade-up">

					<div class="row gy-4">

						<!-- <div class="col-lg-12 col-md-12">
							<div class="count-box">
								<div>
									<h3 class="text-center"><b>{{ massages.system.domain }}</b></h3>
									<hr>
									<h5><b>{{ massages.system.directions }}</h5></b> <h5> {{ massages.system.directions_detail  }} </h5>
								</div>
							</div>
						</div> -->

						<!-- <div class="col-lg-12 col-md-12">
							<div class="count-box">
								<h5><b>{{ massages.system.part_one }}</b></h5>
								<span  class="text-danger">{{ massages.system.please_select_employee }}</span>
								<h5>{{ massages.system.employee }}</h5>
								<input type="text" class="form-control" id="employee_id" class="form-control" name="employee_id" ng-model="book.employee_id" required><br>
							</div>
						</div> -->

						<!-- <div class="col-lg-12 col-md-12">
							<div class="count-box">
								<div>
									<h5><b>{{ massages.system.part_two }}</b></h5>
									<span  class="text-danger">{{ massages.system.please_select_date }}</span>
									<h5>{{ massages.system.date }}</h5>
									<div>
										<select ui-select2 ng-model="book.date_work_id" data-placeholder="" class="col-sm-12" style="padding-right: 0px; padding-left:0px; width: 100%;" ng-change="dataTimeList(book.date_work_id);">
											<option value="">กรุณาเลือกวันที่ฉีดวัคซีน</option>
											<option ng-repeat="date in dataInstanceDateList" value="{{date.id}}">{{ date.date }}</option>
										</select>
									</div>
								</div>
							</div>
						</div> -->

						<!-- <div class="col-lg-12 col-md-12">
							<div class="count-box">
								<div>
									<h5><b>{{ massages.system.part_three }}</b></h5>
									<span  class="text-danger">{{ massages.system.please_select_time }}</span>
									<h5>{{ massages.system.time }}</h5>
									<div>
										<select ui-select2 ng-model="book.time_work_id" data-placeholder="" class="col-sm-12" style="padding-right: 0px; padding-left:0px; width: 100%;">
											<option value="">กรุณาเลือกเวลาฉีดวัคซีน</option>
											<option ng-repeat="time in dataInstanceTimeList" value="{{time.id}}">{{ time.time_start+" "+"-"+" "+time.time_end }}</option>
										</select>
									</div>
								</div>
							</div>
						</div> -->

						<!-- <div class="col-lg-12 col-md-12">
							<button type="submit" style="width: 100%;">{{ massages.system.save }}</button>
						</div> -->
					</div>

				</div>
			</section>
		</form>

	</main><!-- End #main -->

	<!-- ======= Footer ======= -->
	<footer id="footer" class="footer">
		<div class="footer-top">
		<div class="container">
			<div class="row gy-4">
			<div class="col-lg-5 col-md-12 footer-info">
				<a href="index.html" class="logo d-flex align-items-center">
				<!-- Logo Sut -->
				<!-- <img src="<?php //echo $ASSETS_URL; ?>assets/images/logo2.png" alt=""> -->
				<!-- End Logo Sut -->
				<img src="<?php echo $ASSETS_URL; ?>assets/template_questionnaire/assets/img/logo.png" alt="">
				<span>FlexStart</span>
				</a>
				<p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita valies darta donna mare fermentum iaculis eu non diam phasellus.</p>
				<div class="social-links mt-3">
				<a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
				<a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
				<a href="#" class="instagram"><i class="bi bi-instagram bx bxl-instagram"></i></a>
				<a href="#" class="linkedin"><i class="bi bi-linkedin bx bxl-linkedin"></i></a>
				</div>
			</div>

			<!-- <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
				<h4>ช่องทางติดต่อ</h4>
				<p>
				สถานส่งเสริมและพัฒนาระบบสารสนเทศเพื่อการจัดการ (MIS) <br>
				นายสิริวัฒน์ ทรัพย์สุฤทธิ์ <br>
				เจ้าหน้าที่วิเคราะห์ระบบคอมพิวเตอร์ <br><br>
				<strong>Phone:</strong> 0-4422-4022/4022<br>
				<strong>Email:</strong> siriwat.s@@sut.ac.th<br>
				</p>

			</div> -->
			</div>
		</div>
		</div>

		<div class="container">
		<div class="copyright">
			&copy; Copyright <strong><span>FlexStart</span></strong>. All Rights Reserved
		</div>
		<div class="credits">
			Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
		</div>
		</div>
	</footer><!-- End Footer -->

	<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
</div>
  <!-- Vendor JS Files -->
  <script src="<?php echo $ASSETS_URL; ?>assets/template_questionnaire/assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
  <script src="<?php echo $ASSETS_URL; ?>assets/template_questionnaire/assets/vendor/aos/aos.js"></script>
  <script src="<?php echo $ASSETS_URL; ?>assets/template_questionnaire/assets/vendor/php-email-form/validate.js"></script>
  <script src="<?php echo $ASSETS_URL; ?>assets/template_questionnaire/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="<?php echo $ASSETS_URL; ?>assets/template_questionnaire/assets/vendor/purecounter/purecounter.js"></script>
  <script src="<?php echo $ASSETS_URL; ?>assets/template_questionnaire/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="<?php echo $ASSETS_URL; ?>assets/template_questionnaire/assets/vendor/glightbox/js/glightbox.min.js"></script>

  <!-- Template Main JS File -->
  <script src="<?php echo $ASSETS_URL; ?>assets/template_questionnaire/assets/js/main.js"></script>
  <script type="text/javascript">

angular.module('myApp', ['ngNotify', 'ui.select2']).controller('studentsController', ["$scope", "$http", "$window", "ngNotify",function($scope, $http, $window, ngNotify){
	$scope.dataInstanceDateList = [];
	$scope.dataInstanceTimeList = [];
	$scope.LANG = LANG;
	$scope.languageList = ['Th', 'En'];
	$scope.massages = {};
	var domainList = {};
	
	$scope.getWordding = function(){
		$http({
			method: "POST",
			url: PATH+"conf/?action=i18n",
			data: $.param({LANG: $scope.LANG, domain: domainList}),
			headers: {"Content-Type": "application/x-www-form-urlencoded"}
		}).then(function successCallback(response) {
			// console.log(response.data);
			$scope.massages = response.data;
		}, function errorCallback(response) {
			// $window.location.href = PATH+"auth/";
			console.log("myAppController addLang ERROR!!!");
		});
	};
	
	$scope.addLang = function(domain, filename="massages"){
		if (!domainList[domain])
			domainList[domain] = [];
		domainList[domain].push(filename);
		setTimeout(function() {
			$scope.getWordding();
		}, 50);
	};
	$scope.addLang("layout");
	
	$scope.setLang = function(lang){
		$http({
			method: "POST",
			url: PATH+"setLang.php",
			data: $.param({LANG: lang}),
			headers: {"Content-Type": "application/x-www-form-urlencoded"}
		}).then(function successCallback(response) {
			console.log(response.data);
			if (response.data){
				$scope.LANG = lang;
				$scope.getWordding();
			}
		}, function errorCallback(response) {
			// $window.location.href = PATH+"auth/";
			console.log("myAppController checkLang ERROR!!!");
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
	$scope.bookInsert = function(obj){
		console.log("bookInsert");
		console.log(obj);
		if(obj.date_work_id == "" || obj.date_work_id == null || obj.date_work_id == undefined){
			swal("แจ้งเตือน", "กรุณาเลือกวันที่จะจองวัคซีน!", "warning").then(() => {
			});;
		}else if(obj.time_work_id == "" || obj.time_work_id == null || obj.time_work_id == undefined){
			swal("แจ้งเตือน", "กรุณาเลือกเวลาจะจองวัคซีน!", "warning").then(() => {
			});;
		}else{
			// console.log("Insert");

			$http({
				method: "POST",
				url: PATH+"app/system/model/?action=bookInsert",
				data: $.param(obj),
				headers: {"Content-Type": "application/x-www-form-urlencoded"}
			}).then(function successCallback(response) {
				console.log(response.data);
				var last_id = response.data.last_id ? response.data.last_id : null;
				var status = response.data.status ? response.data.status : null;
				if(status == 1){
					swal("แจ้งเตือน", "ท่านได้ทำการจองวันเวลาในการฉีดวัคซีนแล้ว!", "info").then(() => {

					});;

				}else{
					if (last_id>0){
					swal("บันทึกข้อมูลสำเร็จ", "บันทึกข้อมูลการจองวัคซีนสำเร็จ!", "success").then(() => {
						location.reload(); 
					});;
					}else{
						swal("บันทึกข้อมูลไม่สำเร็จ", "บันทึกข้อมูลการการจองวัคซีนไม่สำเร็จ!", "error").then(() => {
							location.reload(); 
					});;
						// console.log(response.data.sql);
					}

				}
				
			}, function errorCallback(error) {
				// $scope.displayNotify('error', "เกิดข้อผิดพลาด!! ในการเพิ่มข้อมูล admin ใหม่");
				console.log("studentsController answerInsert ERROR!!!");
				// console.log(error);
			});
			
		}
	};
}]);
</script>



</body>

</html>
