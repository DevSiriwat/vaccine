<?php $ID = isset($_GET['']) ? $_GET[''] : $ID; ?>
<script src="<?php echo $ASSETS_URL; ?>app/dashboard/controller/dashboardController.js"></script>
<div ng-controller="dashboardController" ng-init="dashboardShow('<?php echo $ID; ?>');">
	

	<div class="row">
		<div class="col-sm-12">
			<div class="card shadow">
					
				<div class="card-header">
					<h4>แสดงข้อมูลdashboard : {{ "#"+dashboardInstance. }}</h4>
					<div class="card-header-right">
						<?php include "app/dashboard/view/_menu.php"; ?>
					</div>
				</div>
				


				<div class="card-body lead">
					
						<div class="row mb-3 mb-sm-1 border-bottom">
							<div class="col-sm-3 text-left text-sm-right font-weight-bold bg-light">{{ massages.dashboard.id }}</div>
							<div class="col-sm-9">{{ dashboardInstance.id }}</div>
						</div>
								
				</div>

				<div class="d-block card-footer">
					<a class="btn btn-warning float-right shadow-sm" href="<?php echo $LINK_URL; ?>dashboard/edit/{{ dashboardInstance. }}/"> 
						<i class="fas fa-edit"></i>
						แก้ไขข้อมูล
					</a> 
					<button type="button" class="btn btn-danger float-right shadow-sm mr-1" ng-confirm-click="คุณแน่ใจว่าต้องการลบข้อมูล ใช่หรือไม่?" confirmed-click="dashboardDelete(dashboardInstance.);"> 
						<i class="fas fa-trash-alt"></i> {{ massages.default.btn_del }} 
					</button>
				</div>

			</div>
		</div>
	</div>
</div>