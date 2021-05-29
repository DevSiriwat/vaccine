<script src="<?php echo $ASSETS_URL; ?>app/date_work/controller/date_workController.js"></script>
<div ng-controller="date_workController" >
	

	<div class="row">
		<div class="col-sm-12">
			<div class="card shadow">
					
				<div class="card-header">
					<h4>เพิ่มข้อมูลdate_work</h4>
					<div class="card-header-right">
						<?php include "app/date_work/view/_menu.php"; ?>
					</div>
				</div>
				
	

				<div class="card-body" ng-init="date_workShow('<?php echo $ID; ?>');">
					<form name="date_workForm" method="post" ng-submit="date_workInsert(date_workInstance);">
						<?php include("app/date_work/view/_form.php"); ?>		
						<button type="reset" class="btn btn-light bg-ligh float-right mr-1 shadow"><i class="fas fa-broom"></i> {{ massages.default.btn_clear }} </button>
					</form>
				</div>
				
			</div>
		</div>
	</div>
</div>