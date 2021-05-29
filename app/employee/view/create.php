<script src="<?php echo $ASSETS_URL; ?>app/employee/controller/employeeController.js"></script>
<div ng-controller="employeeController" >
	

	<div class="row">
		<div class="col-sm-12">
			<div class="card shadow">
					
				<div class="card-header">
					<h4>เพิ่มข้อมูลemployee</h4>
					<div class="card-header-right">
						<?php include "app/employee/view/_menu.php"; ?>
					</div>
				</div>
				
	

				<div class="card-body" ng-init="employeeShow('<?php echo $ID; ?>');">
					<form name="employeeForm" method="post" ng-submit="employeeInsert(employeeInstance);">
						<?php include("app/employee/view/_form.php"); ?>		
						<button type="reset" class="btn btn-light bg-ligh float-right mr-1 shadow"><i class="fas fa-broom"></i> {{ massages.default.btn_clear }} </button>
					</form>
				</div>
				
			</div>
		</div>
	</div>
</div>