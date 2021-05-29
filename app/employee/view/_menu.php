<div class="btn-group" role="group" ng-init="addLang('employee')">


	<div class="align-items-left align-items-md-center flex-column flex-md-row">
		<div class="ml-md-auto py-2 py-md-0">
			<button title="อัพเดตข้อมูลพนักงาน" class="btn btn-info btn-round shadow-sm" ng-click="updateEmployee();">
				<i class="fas fa-plus-circle"></i> 
					อัพเดตข้อมูลพนักงาน
			</button>
		</div>
	</div>
	
	<a href="<?php echo $LINK_URL; ?>employee/list/" title="รายการข้อมูลemployee" class="btn btn-light btn-round shadow-sm">
		<i class="fas fa-table"></i> 
			{{ massages.default.list+massages.employee.domain }}
	</a>
	<a href="<?php echo $LINK_URL; ?>employee/create/" title="เพิ่มข้อมูลemployee" class="btn btn-primary btn-round shadow-sm">
		<i class="fas fa-plus-circle"></i> 
			{{ massages.default.create+massages.employee.domain }}
	</a>
</div>