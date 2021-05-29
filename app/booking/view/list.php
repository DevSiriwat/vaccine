<script src="<?php echo $ASSETS_URL; ?>app/booking/controller/bookingController.js"></script>
<div ng-controller="bookingController" ng-init="bookingList('<?php echo $_SESSION["info"]["employee_id"]; ?>');">
	

	<div class="row">
		<div class="col-sm-12">
			<div class="card shadow">
					
				<div class="card-header">
					<h4>รายการข้อมูลbooking</h4>
					<div class="card-header-right">
						<?php include "app/booking/view/_menu.php"; ?>
					</div>
				</div>

				<div class="card-body">

					<div class="table-responsive">
						<table class="table table-hover">
							<thead class="thead-light">
								<tr>
									<th>วันที่จอง</th>
									<th>เวลาที่จอง</th>
									<th class="text-center">#</th>
								</tr>
							</thead>
							<tbody>
								<tr ng-repeat="booking in bookingInstanceList">
									<td>{{ booking.date_work_date }}</td>
									<td>{{ booking.time_work_time_start+" "+"-"+" "+booking.time_work_time_end }}</td>
									<td class="text-center">
										<div class="btn-group btn-group-sm" role="group" aria-label="Small button group">
											<a href="<?php echo $LINK_URL; ?>booking/edit/{{booking.book_id}}/"  title="แสดงข้อมูล" class="btn btn-info">
												<i class="fas fa-info-circle"></i> 
												
											</a>
										</div>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
