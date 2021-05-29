
<div class="form-group row">
	<label for="date_work_id" class="col-sm-2 col-form-label">{{ massages.booking.date_work_id }} <span class="text-danger">*</span> : </label>
	<div class="col-sm-10">
		<select ui-select2 ng-model="bookUpdate.date_work_id" data-placeholder="" class="col-sm-12" style="padding-right: 0px; padding-left:0px; width: 100%;" ng-change="dataTimeList(bookUpdate.date_work_id);">
			<option value="">กรุณาเลือกวันที่ฉีดวัคซีน</option>
			<option ng-repeat="date in dataInstanceDateList" value="{{date.id}}">{{ date.date }}</option>
		</select>
	</div>
</div>


<div class="form-group row">
	<label for="time_work_id" class="col-sm-2 col-form-label">{{ massages.booking.time_work_id }} <span class="text-danger">*</span> : </label>
	<div class="col-sm-10">
		<select ui-select2 ng-model="bookUpdate.time_work_id" data-placeholder="" class="col-sm-12" style="padding-right: 0px; padding-left:0px; width: 100%;">
			<option value="">กรุณาเลือกเวลาฉีดวัคซีน</option>
			<option ng-repeat="time in dataInstanceTimeList" value="{{time.id}}">{{ time.time_start+" "+"-"+" "+time.time_end }}</option>
		</select>
	</div>
</div>


<hr>
<button class="btn btn-success float-right shadow" type="submit"><i class="fas fa-save"></i> {{ massages.default.btn_save }}</button>