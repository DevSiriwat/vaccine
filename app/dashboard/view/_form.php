<div class="form-group row">
	<label for="id" class="col-sm-2 col-form-label">{{ massages.dashboard.id }} <span class="text-danger">*</span> : </label>
	<div class="col-sm-10">
		<input type="text" class="form-control" id="id" name="id" ng-model="dashboardInstance.id" required="required">
	</div>
</div>

<hr>
<button class="btn btn-success float-right shadow" type="submit"><i class="fas fa-save"></i> {{ massages.default.btn_save }}</button>