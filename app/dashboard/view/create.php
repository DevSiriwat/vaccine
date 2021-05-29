<script src="<?php echo $ASSETS_URL; ?>app/dashboard/controller/dashboardController.js"></script>
<div ng-controller="dashboardController" >
	

	<div class="row">
		<div class="col-sm-12">
			<div class="card shadow">
					
				<div class="card-header">
					<h4>เพิ่มข้อมูลdashboard</h4>
					<div class="card-header-right">
						<?php include "app/dashboard/view/_menu.php"; ?>
					</div>
				</div>
				
	

				<div class="card-body" ng-init="dashboardShow('<?php echo $ID; ?>');">
					<form name="dashboardForm" method="post" ng-submit="dashboardInsert(dashboardInstance);">
						<?php include("app/dashboard/view/_form.php"); ?>		
						<button type="reset" class="btn btn-light bg-ligh float-right mr-1 shadow"><i class="fas fa-broom"></i> {{ massages.default.btn_clear }} </button>
					</form>
				</div>
				
			</div>
		</div>
	</div>
</div>