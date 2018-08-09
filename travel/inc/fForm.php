<!-- start tab flights -->
 <div class="tab-pane <?php if ($pageurl == 'index.php' || $pageurl == 'flight.php'){ echo 'active'; }?>" id="flights">
	 <form>
	  <!-- start destination -->
	  <div class="form-row">										  
		<div class="col-sm-6">
		 <div class="form-group">
			<label>From:</label>
			<input type="text" class="form-control from-place" placeholder="Jakarta, Indonesia"/>
		 </div>
		</div>
		
		<div class="col-sm-6">
		  <div class="form-group">
			<label>To:</label>
			<input type="text" class="form-control to-place" placeholder="Istanbul, Turkey"/>
		  </div>
		</div>
	  </div>
	  <!-- end destination -->
	  
	  <!-- start check in -->
	  <div class="form-row">										  
		<div class="col-sm-6">
		 <div class="form-group">
			<label>Check In:</label>
			<input type="text" class="form-control" id="date-start" placeholder="mm/dd/yyyy"/>
		 </div>
		</div>
		
		<div class="col-sm-6">
		  <div class="form-group">
			<label>Check Out:</label>
			<input type="text" class="form-control" id="date-end" placeholder="mm/dd/yyyy"/>
		  </div>
		</div>
	  </div>
	  <!-- end check in -->
	  
	  <!-- start class -->		
	  <div class="form-row">										  
		<div class="col-sm-12">
		 <div class="form-group">
			<label>Class:</label>
			<select class="form-control">
				<option value="economy" selected>Economy</option>
				<option value="first">First</option>
				<option value="business">Business</option>
			</select>
		 </div>
		</div>
	  </div>
	  <!-- end class -->
	  
	  <!-- start age -->		
	  <div class="form-row">										  
		<div class="col-md-6">
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
		
		<div class="col-md-6">
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
			<input type="submit" class="btn btn-primary btn-block" value="Search Flight">
		</div>
	  </div>	
	  
	</form>
 </div>
 <!-- end tab flights -->