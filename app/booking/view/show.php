<?php $ID = isset($_GET['id']) ? $_GET['id'] : $ID; ?>
<script src="<?php echo $ASSETS_URL; ?>app/booking/controller/bookingController.js"></script>
<div ng-controller="bookingController" ng-init="bookingShow('<?php echo $ID; ?>');">
	

	<div class="row">
		<div class="col-sm-12">
			<div class="card shadow">
					
				<div class="card-header">
					<h4>แสดงข้อมูลbooking : {{ "#"+bookingInstance.id }}</h4>
					<div class="card-header-right">
						<?php include "app/booking/view/_menu.php"; ?>
					</div>
				</div>
				


				<div class="card-body lead">
					
						<div class="row mb-3 mb-sm-1 border-bottom">
							<div class="col-sm-3 text-left text-sm-right font-weight-bold bg-light">{{ massages.booking.employee_id }}</div>
							<div class="col-sm-9">{{ bookingInstance.employee_id }}</div>
						</div>
								
						<div class="row mb-3 mb-sm-1 border-bottom">
							<div class="col-sm-3 text-left text-sm-right font-weight-bold bg-light">{{ massages.booking.date_work_id }}</div>
							<div class="col-sm-9">{{ bookingInstance.date_work_id }}</div>
						</div>
								
						<div class="row mb-3 mb-sm-1 border-bottom">
							<div class="col-sm-3 text-left text-sm-right font-weight-bold bg-light">{{ massages.booking.time_work_id }}</div>
							<div class="col-sm-9">{{ bookingInstance.time_work_id }}</div>
						</div>
								
				</div>

				<div class="d-block card-footer">
					<a class="btn btn-warning float-right shadow-sm" href="<?php echo $LINK_URL; ?>booking/edit/{{ bookingInstance.id }}/"> 
						<i class="fas fa-edit"></i>
						แก้ไขข้อมูล
					</a> 
					<button type="button" class="btn btn-danger float-right shadow-sm mr-1" ng-confirm-click="คุณแน่ใจว่าต้องการลบข้อมูล ใช่หรือไม่?" confirmed-click="bookingDelete(bookingInstance.id);"> 
						<i class="fas fa-trash-alt"></i> {{ massages.default.btn_del }} 
					</button>
				</div>

			</div>
		</div>
	</div>
</div>