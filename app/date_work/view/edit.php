<?php $ID = isset($_GET['id']) ? $_GET['id'] : $ID; ?>
<script src="<?php echo $ASSETS_URL; ?>app/date_work/controller/date_workController.js"></script>
<div ng-controller="date_workController" ng-init="date_workShow('<?php echo $ID; ?>');">
	

	<div class="row">
		<div class="col-sm-12">
			<div class="card shadow">
					
				<div class="card-header">
					<h4>แก้ไขข้อมูลdate_work
						<small>
							<a href="<?php echo $LINK_URL; ?>date_work/show/{{date_workInstance.id}}/" ng-attr-title="{{ 'กลับไปหน้า แสดงข้อมูล '+date_workInstance.date }}">
								<i class="fas fa-hand-point-left"></i> 
								{{ "#"+date_workInstance.id }}
							</a>
						</small>
					</h4>
					<div class="card-header-right">
						<?php include "app/date_work/view/_menu.php"; ?>
					</div>
				</div>
				
	

				<div class="card-body">
					<form name="date_workForm" method="post" ng-submit="date_workUpdate(date_workInstance);">
						<?php include("app/date_work/view/_form.php"); ?>
						
						<button type="button" class="btn btn-danger float-right mr-1 shadow" ng-confirm-click="คุณแน่ใจว่าต้องการลบข้อมูล ใช่หรือไม่?" title="ลบข้อมูล" confirmed-click="date_workDelete(date_workInstance.id);"><i class="fas fa-trash-alt"></i> {{ massages.default.btn_del }} </button>		
						<button type="reset" class="btn btn-light bg-ligh float-right mr-1 shadow"><i class="fas fa-broom"></i> {{ massages.default.btn_clear }} </button>
					</form>
				</div>
				
			</div>
		</div>
	</div>
</div>