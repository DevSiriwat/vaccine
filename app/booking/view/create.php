<script src="<?php echo $ASSETS_URL; ?>app/booking/controller/bookingController.js"></script>
<div ng-controller="bookingController" >
	

	<div class="row">
		<div class="col-sm-12">
			<div class="card shadow">
					
				<div class="card-header">
					<h4>เพิ่มข้อมูลbooking</h4>
					<div class="card-header-right">
						<?php include "app/booking/view/_menu.php"; ?>
					</div>
				</div>
				
	

				<div class="card-body" ng-init="bookingShow('<?php echo $ID; ?>');">
					<form name="bookingForm" method="post" ng-submit="bookingInsert(bookingInstance);">
						<?php include("app/booking/view/_form.php"); ?>		
						<button type="reset" class="btn btn-light bg-ligh float-right mr-1 shadow"><i class="fas fa-broom"></i> {{ massages.default.btn_clear }} </button>
					</form>
				</div>
				
			</div>
		</div>
	</div>
</div>