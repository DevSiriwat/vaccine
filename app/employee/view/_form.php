<div class="form-group row">
	<label for="id" class="col-sm-2 col-form-label">{{ massages.employee.id }} <span class="text-danger">*</span> : </label>
	<div class="col-sm-10">
		<input type="text" class="form-control" id="id" name="id" ng-model="employeeInstance.id" required="required">
	</div>
</div>

<div class="form-group row">
	<label for="employee_id" class="col-sm-2 col-form-label">{{ massages.employee.employee_id }} <span class="text-danger">*</span> : </label>
	<div class="col-sm-10">
		<input type="text" class="form-control" id="employee_id" name="employee_id" ng-model="employeeInstance.employee_id" required="required">
	</div>
</div>

<div class="form-group row">
	<label for="name" class="col-sm-2 col-form-label">{{ massages.employee.name }} <span class="text-danger">*</span> : </label>
	<div class="col-sm-10">
		<input type="text" class="form-control" id="name" name="name" ng-model="employeeInstance.name" required="required">
	</div>
</div>

<div class="form-group row">
	<label for="phone" class="col-sm-2 col-form-label">{{ massages.employee.phone }} <span class="text-danger">*</span> : </label>
	<div class="col-sm-10">
		<input type="text" class="form-control" id="phone" name="phone" ng-model="employeeInstance.phone" required="required">
	</div>
</div>

<div class="form-group row">
	<label for="email" class="col-sm-2 col-form-label">{{ massages.employee.email }} <span class="text-danger">*</span> : </label>
	<div class="col-sm-10">
		<input type="text" class="form-control" id="email" name="email" ng-model="employeeInstance.email" required="required">
	</div>
</div>

<hr>
<button class="btn btn-success float-right shadow" type="submit"><i class="fas fa-save"></i> {{ massages.default.btn_save }}</button>