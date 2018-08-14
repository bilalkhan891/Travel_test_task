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

		<div class="form-row"  id="childs-age-section" >
			<div class="col-sm-12">
				<a class="dropdown-toggle" href="#" data-toggle="dropdown" id="navLogin">Login</a>
				<div class="dropdown-menu" style="padding:17px; width: 350px;">
                    <form id="formLogin" class="form"> 
                        <label>Login</label> 
                        <input name="_csrf" id="token0" type="hidden" value="Pgadakol-75yGx3mnkofLpsZzfccaHx5i2Oo">
					    <input name="username" id="username" type="text" placeholder="Username" pattern="^[a-z,A-Z,0-9,_]{6,15}$" data-valid-min="6" title="Enter your username" required="">
					    <input name="password" id="password" type="password" placeholder="Password" title="Enter your password" required=""><br>
					    <button type="button" id="btnLogin" class="btn">Login</button>
					</form>
                    <form><a href="#" title="Fast and free sign up!" id="btnNewUser" data-toggle="collapse" data-target="#formRegister">New User? Sign-up..</a></form>
                    <form id="formRegister" class="form collapse">
                        <input name="_csrf" id="token1" type="hidden" value="Pgadakol-75yGx3mnkofLpsZzfccaHx5i2Oo">
                        <input name="email" id="inputEmail1" type="email" placeholder="Email" required="">
					    <input name="username" id="inputUsername1" type="text" placeholder="Username" pattern="^[a-z,A-Z,0-9,_]{6,15}$" data-valid-min="6" title="Choose a username" required=""><br>
					    <input name="password" id="inputpassword1" type="password" placeholder="Password" required=""> 
                        <input name="verify" id="inputVerify1" type="password" placeholder="Password (again)" required=""><br>                                  
					    <button type="button" id="btnRegister" class="btn">Sign Up</button>
					</form>
                    <a data-toggle="modal" role="button" href="#forgotPasswordModal">Forgot username or password?</a>
                    <a data-toggle="modal" role="button" href="#contactModal"><small>Need help? Contact us</small></a>
                </div>
			</div>
		</div>
		<input type="text" id="childernsage" style="display: none !important;" name="childsages">

	  <!-- end age -->
	  
	  <div class="form-row">										  
		<div class="col-sm-12">
			<input type="submit" name="hotelsdata" class="btn btn-primary btn-block" value="Search Hotel">
		</div>
	  </div>	
	  
	</form>
 </div>

