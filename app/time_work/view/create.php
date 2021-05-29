<script src="<?php echo $ASSETS_URL; ?>app/time_work/controller/time_workController.js"></script>
<div ng-controller="time_workController" ng-init="dataList();">
	

	<div class="row">
		<div class="col-sm-12">
			<div class="card shadow">
					
				<div class="card-header">
					<h4>เพิ่มข้อมูลtime_work</h4>
					<div class="card-header-right">
						<?php include "app/time_work/view/_menu.php"; ?>
					</div>
				</div>
				
	

				<div class="card-body" ng-init="time_workShow('<?php echo $ID; ?>');">
					<form name="time_workForm" method="post" ng-submit="time_workInsert(time_workInstance);">
						<?php include("app/time_work/view/_form.php"); ?>		
						<button type="reset" class="btn btn-light bg-ligh float-right mr-1 shadow"><i class="fas fa-broom"></i> {{ massages.default.btn_clear }} </button>
					</form>
				</div>
				
			</div>
		</div>
	</div>
</div>