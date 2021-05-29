<?php $ID = isset($_GET['id']) ? $_GET['id'] : $ID; ?>
<script src="<?php echo $ASSETS_URL; ?>app/booking/controller/bookingController.js"></script>
<div ng-controller="bookingController" ng-init="bookingShow('<?php echo $ID; ?>'); dataList();">
	

	<div class="row">
		<div class="col-sm-12">
			<div class="card shadow">
					
				<div class="card-header">
					<h4>แก้ไขข้อมูลbooking
						<small>
							<a href="<?php echo $LINK_URL; ?>booking/show/{{bookingInstance.id}}/" ng-attr-title="{{ 'กลับไปหน้า แสดงข้อมูล '+bookingInstance.employee_id }}">
								<i class="fas fa-hand-point-left"></i> 
								{{ "#"+bookingInstance.id }}
							</a>
						</small>
					</h4>
					<div class="card-header-right">
						<?php include "app/booking/view/_menu.php"; ?>
					</div>
				</div>
				
	

				<div class="card-body">
					<form name="bookingForm" method="post" ng-submit="bookingUpdate(bookUpdate, bookingInstance.id);">
						<?php include("app/booking/view/_form.php"); ?>
						
						<!-- <button type="button" class="btn btn-danger float-right mr-1 shadow" ng-confirm-click="คุณแน่ใจว่าต้องการลบข้อมูล ใช่หรือไม่?" title="ลบข้อมูล" confirmed-click="bookingDelete(bookingInstance.id);"><i class="fas fa-trash-alt"></i> {{ massages.default.btn_del }} </button>		 -->
						<!-- <button type="reset" class="btn btn-light bg-ligh float-right mr-1 shadow"><i class="fas fa-broom"></i> {{ massages.default.btn_clear }} </button> -->
					</form>
				</div>
				
			</div>
		</div>
	</div>
</div>