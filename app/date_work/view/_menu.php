<div class="btn-group" role="group" ng-init="addLang('date_work')">
	<a href="<?php echo $LINK_URL; ?>date_work/list/" title="รายการข้อมูลdate_work" class="btn btn-light btn-round shadow-sm">
		<i class="fas fa-table"></i> 
			{{ massages.default.list+massages.date_work.domain }}
	</a>
	<a href="<?php echo $LINK_URL; ?>date_work/create/" title="เพิ่มข้อมูลdate_work" class="btn btn-primary btn-round shadow-sm">
		<i class="fas fa-plus-circle"></i> 
			{{ massages.default.create+massages.date_work.domain }}
	</a>
</div>