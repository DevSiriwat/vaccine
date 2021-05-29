<div class="form-group row">
	<label for="date" class="col-sm-2 col-form-label">{{ massages.date_work.date }} <span class="text-danger">*</span> : </label>
	<div class="col-sm-10">
		<!-- <input type="date" class="form-control" id="date" name="date" ng-model="date_workInstance.date" required="required"> -->
		<datepicker date-format="yyyy-MM-dd" selector="form-control" button-prev="<i class='fas fa-arrow-alt-circle-left'></i>" button-next="<i class='fas fa-arrow-alt-circle-right'></i>">
			<div class="input-group">
				<input class="form-control" placeholder="Choose a date" id="date" name="date" ng-model="date_workInstance.date" required="required">
			</div>
		</datepicker>
	</div>
</div>

<hr>
<button class="btn btn-success float-right shadow" type="submit"><i class="fas fa-save"></i> {{ massages.default.btn_save }}</button>