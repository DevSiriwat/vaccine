<?php $ID = isset($_GET['id']) ? $_GET['id'] : $ID; ?>
<script src="<?php echo $ASSETS_URL; ?>app/date_work/controller/date_workController.js"></script>
<div ng-controller="date_workController" ng-init="date_workShow('<?php echo $ID; ?>');">
	

	<div class="row">
		<div class="col-sm-12">
			<div class="card shadow">
					
				<div class="card-header">
					<h4>แสดงข้อมูลdate_work : {{ "#"+date_workInstance.id }}</h4>
					<div class="card-header-right">
						<?php include "app/date_work/view/_menu.php"; ?>
					</div>
				</div>
				


				<div class="card-body lead">
					
						<div class="row mb-3 mb-sm-1 border-bottom">
							<div class="col-sm-3 text-left text-sm-right font-weight-bold bg-light">{{ massages.date_work.date }}</div>
							<div class="col-sm-9">{{ date_workInstance.date }}</div>
						</div>
								
				</div>

				<div class="d-block card-footer">
					<a class="btn btn-warning float-right shadow-sm" href="<?php echo $LINK_URL; ?>date_work/edit/{{ date_workInstance.id }}/"> 
						<i class="fas fa-edit"></i>
						แก้ไขข้อมูล
					</a> 
					<button type="button" class="btn btn-danger float-right shadow-sm mr-1" ng-confirm-click="คุณแน่ใจว่าต้องการลบข้อมูล ใช่หรือไม่?" confirmed-click="date_workDelete(date_workInstance.id);"> 
						<i class="fas fa-trash-alt"></i> {{ massages.default.btn_del }} 
					</button>
				</div>

			</div>
		</div>
	</div>
</div>