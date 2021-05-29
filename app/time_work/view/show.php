<?php $ID = isset($_GET['id']) ? $_GET['id'] : $ID; ?>
<script src="<?php echo $ASSETS_URL; ?>app/time_work/controller/time_workController.js"></script>
<div ng-controller="time_workController" ng-init="time_workShow('<?php echo $ID; ?>');">
	

	<div class="row">
		<div class="col-sm-12">
			<div class="card shadow">
					
				<div class="card-header">
					<h4>แสดงข้อมูลtime_work : {{ "#"+time_workInstance.id }}</h4>
					<div class="card-header-right">
						<?php include "app/time_work/view/_menu.php"; ?>
					</div>
				</div>
				


				<div class="card-body lead">
					
						<div class="row mb-3 mb-sm-1 border-bottom">
							<div class="col-sm-3 text-left text-sm-right font-weight-bold bg-light">{{ massages.time_work.date_work_id }}</div>
							<div class="col-sm-9">{{ time_workInstance.date_work_id }}</div>
						</div>
								
						<div class="row mb-3 mb-sm-1 border-bottom">
							<div class="col-sm-3 text-left text-sm-right font-weight-bold bg-light">{{ massages.time_work.time_start }}</div>
							<div class="col-sm-9">{{ time_workInstance.time_start }}</div>
						</div>
								
						<div class="row mb-3 mb-sm-1 border-bottom">
							<div class="col-sm-3 text-left text-sm-right font-weight-bold bg-light">{{ massages.time_work.time_end }}</div>
							<div class="col-sm-9">{{ time_workInstance.time_end }}</div>
						</div>
								
						<div class="row mb-3 mb-sm-1 border-bottom">
							<div class="col-sm-3 text-left text-sm-right font-weight-bold bg-light">{{ massages.time_work.people }}</div>
							<div class="col-sm-9">{{ time_workInstance.people }}</div>
						</div>
								
				</div>

				<div class="d-block card-footer">
					<a class="btn btn-warning float-right shadow-sm" href="<?php echo $LINK_URL; ?>time_work/edit/{{ time_workInstance.id }}/"> 
						<i class="fas fa-edit"></i>
						แก้ไขข้อมูล
					</a> 
					<button type="button" class="btn btn-danger float-right shadow-sm mr-1" ng-confirm-click="คุณแน่ใจว่าต้องการลบข้อมูล ใช่หรือไม่?" confirmed-click="time_workDelete(time_workInstance.id);"> 
						<i class="fas fa-trash-alt"></i> {{ massages.default.btn_del }} 
					</button>
				</div>

			</div>
		</div>
	</div>
</div>