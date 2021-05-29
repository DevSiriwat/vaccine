<script src="<?php echo $ASSETS_URL; ?>app/date_work/controller/date_workController.js"></script>
<div ng-controller="date_workController" ng-init="date_workList();">
	

	<div class="row">
		<div class="col-sm-12">
			<div class="card shadow">
					
				<div class="card-header">
					<h4>รายการข้อมูลdate_work</h4>
					<div class="card-header-right">
						<?php include "app/date_work/view/_menu.php"; ?>
					</div>
				</div>
				


				<div class="card-body">

					<div class="table-responsive">
						<table class="table table-hover">
							<thead class="thead-light">
								<tr>
									<th class="text-center"><i class="fas fa-bars"></i></th>
									<th>#</th>
									<th>{{ massages.date_work.date }}</th>
								</tr>
							</thead>
							<tbody>
								<tr ng-repeat="date_work in date_workInstanceList">
								<td class="text-center">
									<div class="btn-group btn-group-sm" role="group" aria-label="Small button group">
										<a href="<?php echo $LINK_URL; ?>date_work/show/{{date_work.id}}/"  title="แสดงข้อมูล" class="btn btn-info">
											<i class="fas fa-info-circle"></i> 
											
										</a>
										<a href="<?php echo $LINK_URL; ?>date_work/create/{{date_work.id}}/"  title="ตัดลอกข้อมูล" class="btn btn-secondary">
											<i class="far fa-copy"></i>
											
										</a>
										<button type="button" class="btn btn-danger" ng-confirm-click="คุณแน่ใจว่าต้องการลบข้อมูล ใช่หรือไม่?" title="ลบข้อมูล" confirmed-click="date_workDelete(date_work);">
											<i class="fas fa-trash-alt"></i> 
											
										</button>
									</div>
								</td>
								<td>{{ date_work.id }}</td>
									
									<td>{{ date_work.date }}</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>

				<div class="d-block card-footer">
					<div class="row">

						<div class="col-sm-8 form-inline">
							<div ng-show="pagination.perPage < pagination.total">
								<button class="btn btn-sm btn-light" ng-click="pagination.page=1;date_workList();" ng-disabled="pagination.page<=1"> 
									<i class="fas fa-angle-double-left"></i>
								</button> &nbsp;

								<button class="btn btn-sm btn-light" ng-click="pagination.page=pagination.page-1;date_workList();" ng-disabled="pagination.page<=1"> 
									<i class="fas fa-angle-left"></i>
								</button>  &nbsp;

								<input class="form-control form-control-sm" type="number" ng-model="pagination.page" min="1" max="{{ pagination.total/pagination.perPage | roundup }}" ng-change="date_workList();" style="text-align: center;">  &nbsp;

								<button class="btn btn-sm btn-light" ng-click="pagination.page=pagination.page+1;date_workList();" ng-disabled="pagination.page>=(pagination.total/pagination.perPage | roundup)"> 
									<i class="fas fa-angle-right"></i>
								</button>  &nbsp;

								<button class="btn btn-sm btn-light" ng-click="pagination.page=(pagination.total/pagination.perPage | roundup);date_workList();" 
									ng-disabled="pagination.page>=(pagination.total/pagination.perPage | roundup)"> 
									<i class="fas fa-angle-double-right"></i>
								</button>  &nbsp;
							</div>
						</div>

						<div class="col-sm-4 form-inline ml-auto">
							<div class="input-group input-group-sm input-group-flat pull-right">
								<span class="input-group-btn">
									<button class="btn btn-light btn-sm" type="button" style="font-size: 0.9rem;">
										{{ massages.default.list_display }}
									</button>
								</span>
								<input type="number" class="form-control form-control-sm" type="number" id="perPage" ng-model="pagination.perPage" ng-change="date_workList();" min="1" style="text-align: center;">
								<span class="input-group-btn">
									<button class="btn btn-light btn-sm" type="button" style="font-size: 0.9rem;"> / 
										{{ massages.default.list_total }} {{ pagination.total }} {{ massages.default.list_row }}
									</button>
								</span>
							</div>
						</div>

					</div>
				</div>

			</div>
		</div>
	</div>
</div>
