

<?php include('dashboard.php')?>


<!-----------slider-------------------------------->
<div class="container font-hint">
	<div class="row">
		
		<div class="col-md-8 mt-md-4 mt-3 ">
			<div class="container">
			<strong class="font-20">Add Boutique</strong>
			<p class="mt-2">Boutique profiles are created for
            <span class="d-block"> blah blah blah blah blah.</span> </p>
<!--------------------Navbar--------------------->
			 <ul class="nav">
				  <li class="nav-item">
					<a class="nav-link  text-primary " href="#"><span class="mr-2">1</span>Basic Boutique Details</a>
				  </li>
				  <li class="nav-item">
					<a class="nav-link font-weight-bolder text-dark border-bottom border-primary" href="#"><span class="mr-2">2</span>Address Details</a>
				  </li>
				  <li class="nav-item">
					<a class="nav-link text-muted" href="#"><span class="mr-2">3</span>Contact Person Details</a>
				  </li>
			</ul>
  
<!--------------------form--------------------->		
		<div class="row">
		<div class="col-md-9">
		<form action="boutique-contact.php">
			<p class="mt-md-3 mt-2 font-weight-bolder text-secondary">Address</p>
			<input type="text" placeholder="Gouda Cheese Market" class="form-control is-valid border-secondary text-dark  border-colour">
			
			
			<div class="form-row">
					<div class="form-group col-md-6 col-12 ">
					<p class="mt-md-3 mt-2 font-weight-bolder text-secondary">City</p>
						<input type="text" placeholder="Gouda" class="form-control">
			
					</div>
					<div class="form-group col-md-6 col-12 ">
					<p class="mt-md-3 mt-3 font-weight-bolder text-secondary">ZIP/ Postal PIN Code</p>
					     
						<input type="text" placeholder="1011 AK" class="form-control">
					</div>
			</div>
			<div class="form-row">
					<div class="form-group col-md-6 col-12 ">
					<p class="mt-md-3 mt-2 font-weight-bolder text-secondary">Country</p>
						<select class="px-5 py-2 form-control">
								<option>Netherlands</option>
								<option>India</option>
								<option>Pakistan</option>
							</select>
			
					</div>
					<div class="form-group col-md-6 col-12 ">
					<p class="mt-md-3">
					</div>
			</div>
			



					<div>
					<button class="btn btn-primary  text-white mt-md-3 mt-2">Next:Contact Person Details <i class="fa fa-arrow-right ml-5 "></i></button>
					</div> 
			</form>
		
		</div>
		<div class="col-md-3"></div>
		</div>
		</div>
		</div>
	
	<!-------------------Right sidebar-------------->
	
	<div class="col-md-4 py-md-4 py-4">
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
</div>



<!--.........................footer......................................-->

		
<?php include('footer.php'); ?>

  