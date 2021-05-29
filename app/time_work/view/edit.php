<?php $ID = isset($_GET['id']) ? $_GET['id'] : $ID; ?>
<script src="<?php echo $ASSETS_URL; ?>app/time_work/controller/time_workController.js"></script>
<div ng-controller="time_workController" ng-init="time_workShow('<?php echo $ID; ?>'); dataList();">
	

	<div class="row">
		<div class="col-sm-12">
			<div class="card shadow">
					
				<div class="card-header">
					<h4>แก้ไขข้อมูลtime_work
						<small>
							<a href="<?php echo $LINK_URL; ?>time_work/show/{{time_workInstance.id}}/" ng-attr-title="{{ 'กลับไปหน้า แสดงข้อมูล '+time_workInstance.date_work_id }}">
								<i class="fas fa-hand-point-left"></i> 
								{{ "#"+time_workInstance.id }}
							</a>
						</small>
					</h4>
					<div class="card-header-right">
						<?php include "app/time_work/view/_menu.php"; ?>
					</div>
				</div>
				
	

				<div class="card-body">
					<form name="time_workForm" method="post" ng-submit="time_workUpdate(time_workInstance);">
						<?php include("app/time_work/view/_form.php"); ?>
						
						<button type="button" class="btn btn-danger float-right mr-1 shadow" ng-confirm-click="คุณแน่ใจว่าต้องการลบข้อมูล ใช่หรือไม่?" title="ลบข้อมูล" confirmed-click="time_workDelete(time_workInstance.id);"><i class="fas fa-trash-alt"></i> {{ massages.default.btn_del }} </button>		
						<button type="reset" class="btn btn-light bg-ligh float-right mr-1 shadow"><i class="fas fa-broom"></i> {{ massages.default.btn_clear }} </button>
					</form>
				</div>
				
			</div>
		</div>
	</div>
</div>