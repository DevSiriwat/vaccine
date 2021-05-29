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
	<link rel="icon" href="<?php echo $ASSETS_URL; ?>assets/images/favicon.ico" type="image/x-icon">

	

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
<div class="auth-wrapper" ng-controller="studentsController" ng-init="addLang('system')">
<!-- ======= Header ======= -->
	<header id="header" class="header fixed-top">
		<div class="container-fluid container-xl d-flex align-items-center justify-content-between">

		<a href="" class="logo d-flex align-items-center">
			<img src="<?php echo $ASSETS_URL; ?>assets/images/logo2.png" alt="">
			<!-- <span>FlexStart</span> -->
		</a>

		<nav id="navbar" class="navbar">
			<ul>
			<li><a class="getstarted scrollto" href="/questionnaire/auth/">LOGIN Admin</a></li>
			<li class="dropdown"><a href=""><span>{{LANG}}</span> <i class="bi bi-chevron-down"></i></a>
				<ul>
					<li><a href="">{{LANG}}</a></li>
					<li><a href="" ng-repeat="la in languageList | filter: '!'+LANG " ng-click="setLang(la);">{{la}}</a></li>
				</ul>
			</li>
			</ul>
			<i class="bi bi-list mobile-nav-toggle"></i>
		</nav><!-- .navbar -->

		</div>
	</header><!-- End Header -->

	<main id="main">

		<!-- ======= Counts Section ======= -->
		<br><br>
		<section id="counts" class="counts">
            <div class="container" data-aos="fade-up">

                <div class="row gy-4">

                    <div class="col-lg-12 col-md-12">
                        <div class="count-box">
                            <div>
                                <div class="text-center mb-3">
                                    <img src="<?php echo $ASSETS_URL; ?>assets/images/save.png" class="img-fluid" alt="" style="width: 15%;">
                                </div>
                                <h3 class="text-center"><b>{{ massages.system.domain_save }}</b></h3>
                                <hr>
                                <h5> {{ massages.system.domain_save_detail  }} </h5>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
		</section>

	</main><!-- End #main -->

	<!-- ======= Footer ======= -->
	<footer id="footer" class="footer">

	

		<div class="footer-top">
		<div class="container">
			<div class="row gy-4">
			<div class="col-lg-5 col-md-12 footer-info">
				<a href="index.html" class="logo d-flex align-items-center">
				<img src="<?php echo $ASSETS_URL; ?>assets/images/logo2.png" alt="">
				<!-- <span>FlexStart</span> -->
				</a>
				<p>Questionnaire System by Suranaree University of Technology.</p>
				<div class="social-links mt-3">
				<a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
				<a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
				<a href="#" class="instagram"><i class="bi bi-instagram bx bxl-instagram"></i></a>
				<a href="#" class="linkedin"><i class="bi bi-linkedin bx bxl-linkedin"></i></a>
				</div>
			</div>

		

			<div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
				<h4>ช่องทางติดต่อ</h4>
				<p>
				ส่วนส่งเสริมวิชาการ <br>
				นายภาณุพงศ์ ศรีมงคล <br>
				เจ้าหน้าที่บริหารงานทั่วไป <br><br>
				<strong>Phone:</strong> 0-4422-4031/4031<br>
				<strong>Email:</strong> nu.panupong@sut.ac.th<br>
				</p>

			</div>

			<div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
				<h4>ช่องทางติดต่อ</h4>
				<p>
				ส่วนส่งเสริมวิชาการ <br>
				นางสาวรุจิรัตน์ ชุมใหม่ <br>
				เจ้าหน้าที่บริหารงานทั่วไป <br><br>
				<strong>Phone:</strong> 0-4422-4046/4046<br>
				<strong>Email:</strong> rujirat@sut.ac.th<br>
				</p>

			</div>

			</div>
		</div>
		</div>

		<div class="container">
		<div class="copyright">
			&copy; Copyright <strong><span>Division of Academic Support (DAS)</span></strong>
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




}]);
</script>



</body>

</html>
