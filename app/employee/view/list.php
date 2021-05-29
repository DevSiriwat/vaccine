<script src="<?php echo $ASSETS_URL; ?>app/employee/controller/employeeController.js"></script>
<div ng-controller="employeeController" ng-init="employeeList();">
	

	<div class="row">
		<div class="col-sm-12">
			<div class="card shadow">
					
				<div class="card-header">
					<h4>รายการข้อมูลemployee</h4>
					<div class="card-header-right">
						<?php include "app/employee/view/_menu.php"; ?>
					</div>
				</div>
				


				<div class="card-body">

					<div class="table-responsive">
						<table class="table table-hover">
							<thead class="thead-light">
								<tr>
									<th class="text-center"><i class="fas fa-bars"></i></th>
									<th>#</th>
									<th>{{ massages.employee.id }}</th>
									<th>{{ massages.employee.employee_id }}</th>
									<th>{{ massages.employee.name }}</th>
									<th>{{ massages.employee.phone }}</th>
									<th>{{ massages.employee.email }}</th>
								</tr>
							</thead>
							<tbody>
								<tr ng-repeat="employee in employeeInstanceList">
								<td class="text-center">
									<div class="btn-group btn-group-sm" role="group" aria-label="Small button group">
										<a href="<?php echo $LINK_URL; ?>employee/show/{{employee.id}}/"  title="แสดงข้อมูล" class="btn btn-info">
											<i class="fas fa-info-circle"></i> 
											
										</a>
										<a href="<?php echo $LINK_URL; ?>employee/create/{{employee.id}}/"  title="ตัดลอกข้อมูล" class="btn btn-secondary">
											<i class="far fa-copy"></i>
											
										</a>
										<button type="button" class="btn btn-danger" ng-confirm-click="คุณแน่ใจว่าต้องการลบข้อมูล ใช่หรือไม่?" title="ลบข้อมูล" confirmed-click="employeeDelete(employee);">
											<i class="fas fa-trash-alt"></i> 
											
										</button>
									</div>
								</td>
								<td>{{ employee.id }}</td>
									
									<td>{{ employee.id }}</td>
									<td>{{ employee.employee_id }}</td>
									<td>{{ employee.name }}</td>
									<td>{{ employee.phone }}</td>
									<td>{{ employee.email }}</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>

				<div class="d-block card-footer">
					<div class="row">

						<div class="col-sm-8 form-inline">
							<div ng-show="pagination.perPage < pagination.total">
								<button class="btn btn-sm btn-light" ng-click="pagination.page=1;employeeList();" ng-disabled="pagination.page<=1"> 
									<i class="fas fa-angle-double-left"></i>
								</button> &nbsp;

								<button class="btn btn-sm btn-light" ng-click="pagination.page=pagination.page-1;employeeList();" ng-disabled="pagination.page<=1"> 
									<i class="fas fa-angle-left"></i>
								</button>  &nbsp;

								<input class="form-control form-control-sm" type="number" ng-model="pagination.page" min="1" max="{{ pagination.total/pagination.perPage | roundup }}" ng-change="employeeList();" style="text-align: center;">  &nbsp;

								<button class="btn btn-sm btn-light" ng-click="pagination.page=pagination.page+1;employeeList();" ng-disabled="pagination.page>=(pagination.total/pagination.perPage | roundup)"> 
									<i class="fas fa-angle-right"></i>
								</button>  &nbsp;

								<button class="btn btn-sm btn-light" ng-click="pagination.page=(pagination.total/pagination.perPage | roundup);employeeList();" 
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
								<input type="number" class="form-control form-control-sm" type="number" id="perPage" ng-model="pagination.perPage" ng-change="employeeList();" min="1" style="text-align: center;">
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
