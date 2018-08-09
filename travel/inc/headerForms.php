								<div class="tabulation">
								  <!-- Nav tabs -->
								   <ul id="form-tab-panel" class="nav nav-tabs">
								   	  <li class="nav-item <?php if ($pageurl == 'tours.php'){ echo 'active'; }?>">
								    	   <a class="nav-link" href="#tours" data-toggle="tab">Tours</a>
								      </li>
								      <li class="nav-item">
								      	<a class="nav-link <?php if ($pageurl == 'index.php' || $pageurl == 'flight.php'){ echo 'active'; }?>" href="#flights" data-toggle="tab">Flights</a>
								      </li>
								      
									  <li class="nav-item <?php if ($pageurl == 'hotel.php'){ echo 'active'; }?>">
								    	   <a class="nav-link" href="#hotels" data-toggle="tab">Hotels</a>
								      </li>
								   </ul>

								   <!-- Tab panes -->
								   <div class="tab-content">
									
									 <!-- start tab flights -->
									 <!-- end tab flights -->
									 
									  <!-- start tab trains -->
									 <?php include_once('inc/tForm.php'); ?>
									 <?php include_once('inc/fForm.php'); ?>
									 <!-- end tab trains -->
									 
									 <!-- start tab hotels -->	
									 <?php include_once('inc/hForm.php'); ?>
									 <!-- end tab hotel -->

									</div><!-- end tab content -->
								</div><!-- end tabulation -->