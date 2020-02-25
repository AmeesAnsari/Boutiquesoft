	  <?php include('dashboard.php')?>
<!------------------------------Body begins----------------------------------->	  
<section class="py-sm-2">
	<div class="container">
		<div class="row font-hint">
			<div class="col-md-8 mt-md-3 mt-3">
				<div class="px-3">
					<strong class="font-20">Add Boutique</strong>
					<p class="text-dark mt-2">Boutique profiles are created for <br>  blah blah blah blah blah.</p> 
					
				</div>
				<div >
					<ul class="nav ">
						<li class="nav-item">
							<a class="nav-link" href="#"><span class="mr-2">1 </span>Basic Boutique Details</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#"><span class="mr-2">2</span> Address Details</a>
						</li>
						<li class="nav-item">
							<a class="nav-link text-dark  border-bottom border-primary" href="#"><span class="mr-2 font-weight-bold">3 </span>Contact Person Details</a>
						</li>
						
					</ul>
				
				</div>
				<div class="form-row py-3 px-3">
							<div class="form-check custom-control custom-checkbox">
								<input class="custom-control-input" type="checkbox" id="customControlAutosizing">
								<label class="custom-control-label font-family-roboto" for="customControlAutosizing">We have other contact person than me.</label>
							</div>
						</div>
<!--............................FORM SECTION...............-->

			
				<div class="form-group">
					<form>
						<div class="col-md-9 py-3 ">
							<label>Contact Person Name</label>
							<input type="text" class="form-control" placeholder="Melinda Raes">
						</div>
						<div class="col-md-3">
						
						</div>
						
						<div class="form-group">
							<div class="col-md-9">
								<label>E-mail Address</label>
								<input type="text" name="email" class="form-control is-valid border-colour" placeholder="melinda@raes.nl" required>
								<!--<div class="valid-feedback"></div>-->
							</div>
						</div>
						<div class="col-md-3">
						
						</div>
						
						<div class="form-row">
							
							<div class="col-md-3  px-3">
								
									Mobile number<select class="form-control " placeholder="+34">
										<option>+91</option>
										<option>+65</option>
										<option>+11</option>
									</select>
								
							</div>
							<div class="col-md-6 col-10 mt-4 px-2">
							
								<input type="text" name="mobno" class="form-control" placeholder="0000 000 0000">
										
							</div>
							
							<div class="col-md-2 py-2 col-2 mt-4">
								<img src="img/netherlands.png">
							</div>
							<div class="col-md-1"></div>
						</div>
						<div class="row">
							<div class="col-md-6 py-4">
								<a href="add-production.php" class="btn btn-primary px-4 ml-2 btn-block ">Finish adding Boutique
								</a>
							</div>
							<div class="col-md-3 py-4">
								<a href="add_pm.php"><button class="btn   btn-light px-3 btn-block text-primary">Skip and Finish
								</button></a>
							</div>
							<div class="col-md-3"></div>
						</div>
					</form>
				</div>
			
			</div>
			
	<!--....................column two...............-->	

	
			<div class="col-md-4  mt-md-3 mt-3">
		<div class="container pl-md-0 pl-4">
			<strong class="font-20">Hey John</strong>
			<p class="mt-3">Let’s learn how to use the software </br>by using it. </p>
				
				
				<div class="right-hint py-md-2  mb-md-3 mb-3 pl-md-3 position-relative">
				<i class="fas fa-check tick-right-bar pr-md-3 pr-3"></i><del><strong>Created account</strong></del></div> 

				<div class="py-md-2 mb-md-3 mb-3 pl-md-3">
				<i class="fas fa-chevron-right fa-1x tick-right-bar1 pr-md-3 pr-3 text-primary"></i><strong>Add first Boutique</strong></div>

				<div class="py-md-2 mb-md-3 mb-3 pl-md-3">
				<i class="fas fa-circle tick-right-bar1 pr-md-3 pr-3 text-muted"></i><strong>Add first Production Managers</strong></div>

				<div class="py-md-2 mb-md-3 mb-3 pl-md-3 "><i class="fas fa-circle tick-right-bar1 pr-md-3 pr-3 text-muted"></i><strong>Add Designers</strong></div>
		</div>
	</div>
</div>	
	</section>
<?php include('footer.php') ?>
	 
	 
<!------------------------------Body ends----------------------------------->	 
 
    
  