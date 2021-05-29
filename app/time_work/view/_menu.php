<div class="btn-group" role="group" ng-init="addLang('time_work')">
	<a href="<?php echo $LINK_URL; ?>time_work/list/" title="รายการข้อมูลtime_work" class="btn btn-light btn-round shadow-sm">
		<i class="fas fa-table"></i> 
			{{ massages.default.list+massages.time_work.domain }}
	</a>
	<a href="<?php echo $LINK_URL; ?>time_work/create/" title="เพิ่มข้อมูลtime_work" class="btn btn-primary btn-round shadow-sm">
		<i class="fas fa-plus-circle"></i> 
			{{ massages.default.create+massages.time_work.domain }}
	</a>
</div>