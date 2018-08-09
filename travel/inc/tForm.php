<div class="tab-pane <?php if($pageurl == 'tours.php'){echo 'active';} ?>" id="tours">
	 <form>
	  <!-- start destination -->
	  <div class="form-row">										  
		<div class="col-sm-6">
		 <div class="form-group">
			<label>From:</label>
			<input type="text" class="form-control from-place" placeholder="Kuala Lumpur, Malaysia"/>
		 </div>
		</div>
		
		<div class="col-sm-6">
		  <div class="form-group">
			<label>To:</label>
			<input type="text" class="form-control to-place" placeholder="Singapore, Singapore"/>
		  </div>
		</div>
	  </div>
	  <!-- end destination -->
	  
	  <!-- start check in -->
	  <div class="form-row">										  
		<div class="col-sm-6">
		 <div class="form-group">
			<label>Check In:</label>
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
			<input type="submit" class="btn btn-primary btn-block" value="Search Flight">
		</div>
	  </div>	
	  
	</form>
 </div>