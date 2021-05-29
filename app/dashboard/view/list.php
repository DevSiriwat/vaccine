<script src="<?php echo $ASSETS_URL; ?>app/dashboard/controller/dashboardController.js"></script>
<div ng-controller="dashboardController">
	<div class="row">
		<div class="col-sm-12">
			<div class="card shadow">
					
				<div class="card-header">
					<h4>จำนวนผู้ที่ฉีดวัคซีน</h4>
					<div class="card-header-right">
						<?php include "app/dashboard/view/_menu.php"; ?>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- <div class="card">
		<div class="card-header text-center">
			<h5>{{provinceInstanceList[0].date}}</h5>
		</div>
	</div>

	<div class="card" ng-repeat="time in provinceInstanceList[0].time">
		<div class="card-header">
			<h5>{{time.time_start+" "+"-"+" "+time.time_end}}</h5>
		</div>
		<div class="card-body">
			<div class="progress mb-4">
				<div class="progress-bar progress-bar-striped" role="progressbar" style="width: {{time.total}}%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
			</div>
		</div>
	</div> -->
</div>
