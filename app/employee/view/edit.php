<?php $ID = isset($_GET['id']) ? $_GET['id'] : $ID; ?>
<script src="<?php echo $ASSETS_URL; ?>app/employee/controller/employeeController.js"></script>
<div ng-controller="employeeController" ng-init="employeeShow('<?php echo $ID; ?>');">
	

	<div class="row">
		<div class="col-sm-12">
			<div class="card shadow">
					
				<div class="card-header">
					<h4>แก้ไขข้อมูลemployee
						<small>
							<a href="<?php echo $LINK_URL; ?>employee/show/{{employeeInstance.id}}/" ng-attr-title="{{ 'กลับไปหน้า แสดงข้อมูล '+employeeInstance.id }}">
								<i class="fas fa-hand-point-left"></i> 
								{{ "#"+employeeInstance.id }}
							</a>
						</small>
					</h4>
					<div class="card-header-right">
						<?php include "app/employee/view/_menu.php"; ?>
					</div>
				</div>
				
	

				<div class="card-body">
					<form name="employeeForm" method="post" ng-submit="employeeUpdate(employeeInstance);">
						<?php include("app/employee/view/_form.php"); ?>
						
						<button type="button" class="btn btn-danger float-right mr-1 shadow" ng-confirm-click="คุณแน่ใจว่าต้องการลบข้อมูล ใช่หรือไม่?" title="ลบข้อมูล" confirmed-click="employeeDelete(employeeInstance.id);"><i class="fas fa-trash-alt"></i> {{ massages.default.btn_del }} </button>		
						<button type="reset" class="btn btn-light bg-ligh float-right mr-1 shadow"><i class="fas fa-broom"></i> {{ massages.default.btn_clear }} </button>
					</form>
				</div>
				
			</div>
		</div>
	</div>
</div>