<div class="tab-pane <?php if ($pageurl == 'hotel.php'){ echo 'active'; }?>" id="hotels">
	<form>
	  <!-- start city -->
	  <div class="form-row">										  
		<div class="col-sm-12">
		 <div class="form-group">
			<label>City:</label>
			<input type="text" class="form-control from-place" placeholder="Istanbul, Turkey"/>
		 </div>
		</div>
	  </div>
	  <!-- end city -->
	  
	  <!-- start check in -->
	  <div class="form-row">										  
		<div class="col-sm-6">
		 <div class="form-group">
			<label>Return:</label>
			<input type="text" class="form-control date-start" placeholder="mm/dd/yyyy"/>
		 </div>
		</div>
		
		<div class="col-sm-6">
		  <div class="form-group">
			<label>Check Out:</label>
			<input type="text" class="form-control date-end" placeholder="mm/dd/yyyy"/>
		  </div>
		</div>
	  </div>
	  <!-- end check in -->
	  
	  <!-- start rooms -->		
	  <div class="form-row">										  
		<div class="col-sm-12">
		 <div class="form-group">
			<label>Rooms:</label>
			<select class="form-control">
				<option value="economy">Economy</option>
				<option value="regular">Regular</option>
				<option value="vip" selected>VIP</option>
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
			<select class="form-control">
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
			<select class="form-control">
				<option value="1" selected>1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
			</select>
		 </div>
		</div>
	  </div>
	  <!-- end age -->
	  
	  <div class="form-row">										  
		<div class="col-sm-12">
			<input type="submit" class="btn btn-primary btn-block" value="Search Hotel">
		</div>
	  </div>	
	  
	</form>
 </div>