<div class="form-group row">
	<label for="date_work_id" class="col-sm-2 col-form-label">{{ massages.time_work.date_work_id }} <span class="text-danger">*</span> : </label>
	<div class="col-sm-10">
		<!-- <input type="text" class="form-control" id="date_work_id" name="date_work_id" ng-model="time_workInstance.date_work_id" required="required"> -->
		<select ui-select2 ng-model="time_workInstance.date_work_id" data-placeholder="" class="col-sm-12" style="padding-right: 0px; padding-left:0px; width: 100%;">
			<option value="">กรุณาเลือกวันที่ทำงาน</option>
			<option ng-repeat="date in dataInstanceDateList" value="{{date.id}}">{{ date.date }}</option>
		</select>
	</div>
</div>

<div class="form-group row">
	<label for="time_start" class="col-sm-2 col-form-label">{{ massages.time_work.time_start }} <span class="text-danger">*</span> : </label>
	<div class="col-sm-10">
		<input type="text" class="form-control" id="time_start" name="time_start" ng-model="time_workInstance.time_start" required="required">
	</div>
</div>

<div class="form-group row">
	<label for="time_end" class="col-sm-2 col-form-label">{{ massages.time_work.time_end }} <span class="text-danger">*</span> : </label>
	<div class="col-sm-10">
		<input type="text" class="form-control" id="time_end" name="time_end" ng-model="time_workInstance.time_end" required="required">
	</div>
</div>

<div class="form-group row">
	<label for="people" class="col-sm-2 col-form-label">{{ massages.time_work.people }} <span class="text-danger">*</span> : </label>
	<div class="col-sm-10">
		<input type="text" class="form-control" id="people" name="people" ng-model="time_workInstance.people" required="required">
	</div>
</div>

<hr>
<button class="btn btn-success float-right shadow" type="submit"><i class="fas fa-save"></i> {{ massages.default.btn_save }}</button>