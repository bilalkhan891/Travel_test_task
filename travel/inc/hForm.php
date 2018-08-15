<div class="tab-pane <?php if ($pageurl == 'index.php' || $pageurl == 'hotel.php'){ echo 'active'; }?>" id="hotels">
	<form action="inc/formSubmit.php" method="post">
	  <!-- start city -->
	  <div class="form-row">										  
		<div class="col-sm-12">
		 <div class="form-group">
			<label>City:</label>
			<input id = "destination" type="text" autocomplete="nope" name="destination" class="form-control from-place" placeholder="Destination"/>
		 </div>
		</div>
	  </div>
	  <!-- end city -->
	  
	  <!-- start check in -->
	  <div class="form-row">										  
		<div class="col-sm-6">
		 <div class="form-group">
			<label>Check In:</label>
			<input type="text" class="form-control date-start datepicker" placeholder="mm/dd/yyyy" name="checkin" />
		 </div>
		</div>
		
		<div class="col-sm-6">
		  <div class="form-group">
			<label>Check Out:</label>
			<input type="text" class="form-control date-end datepicker" placeholder="mm/dd/yyyy" name="checkout" />
		  </div>
		</div>
	  </div>
	  <!-- end check in -->
	  
	  <!-- start rooms -->		
	  <div class="form-row">										  
		<div class="col-sm-12">
		 <div class="form-group">
			<label>Rooms:</label>
			<select class="form-control" name="rooms" name="rooms">
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
				<option value="6">6</option>
			</select>
		 </div>
		</div>
	  </div>
	  <!-- end class -->
	  
	  <!-- start age -->		
	  <div class="form-row">										  
		<div class="col-sm-6">
		 <div class="form-group">
			<label>Adult:</label>
			<select class="form-control" name="adults">
				<option value="1" selected>1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
			</select>
		 </div>
		</div>
		
		<div class="col-sm-6">
		 <div class="form-group">
			<label>Children:</label>
			<select class="form-control" id="childs" name="childs">
				<option value="0" selected>None</option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
			</select>
		 </div>
		</div>
		</div>

		<div class="form-row"  id="childs-age-section" style="margin-bottom: 1rem;">
			<div class="col-sm-12">
				<input type="text" class="dropdown-toggle" data-toggle="dropdown" placeholder="Children Age" />
				<div class="dropdown-menu" id="child-ages" style="padding:17px; width: 350px;">
                    
                </div>
			</div>
		</div>

	  <!-- end age -->
	  
	  <div class="form-row">										  
		<div class="col-sm-12">
			<input type="submit" name="hotelsdata" class="btn btn-primary btn-block" value="Search Hotel">
		</div>
	  </div>	
	  
	</form>
 </div>

