<div class="btn-group" role="group" ng-init="addLang('booking')">
	<a href="<?php echo $LINK_URL; ?>booking/list/" title="รายการข้อมูลbooking" class="btn btn-light btn-round shadow-sm">
		<i class="fas fa-table"></i> 
			{{ massages.default.list+massages.booking.domain }}
	</a>
	<!-- <a href="<?php echo $LINK_URL; ?>booking/create/" title="เพิ่มข้อมูลbooking" class="btn btn-primary btn-round shadow-sm">
		<i class="fas fa-plus-circle"></i> 
			{{ massages.default.create+massages.booking.domain }}
	</a> -->
</div>