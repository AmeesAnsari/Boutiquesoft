<!-------
Author:Juna Mathew & Subuhana Shanavas
-------->


<?php include('dashboard.php')?>
<!------------------body--------------------------->

<!-----------slider-------------------------------->
<div class="container font-hint">
	<div class="row">
		
		<div class="col-md-8 mt-md-4 mt-3 ">
			<div class="container">
			<p class="font-20">Add Boutique</p>
			<p class="mt-3">Boutique profiles are created for
            <span class="d-block"> blah blah blah blah blah.</span> </p>
<!--------------------Navbar--------------------->
			 <ul class="nav mt-md-3">
				  <li class="nav-item">
					<a class="nav-link font-weight-bolder text-dark border-bottom border-primary" href="add_boutique.php"><span class="mr-2">1</span>Basic Boutique Details</a>
				  </li>
				  <li class="nav-item">
					<a class="nav-link  text-muted" href="#"><span class="mr-2">2</span>Address Details</a>
				  </li>
				  <li class="nav-item">
					<a class="nav-link text-muted" href="#"><span class="mr-2">3</span>Contact Person Details</a>
				  </li>
			</ul>
  
<!--------------------form--------------------->		
		<div class="row">
		<div class="col-md-9">
		<form action="boutique-address-detail.php">
			<p class="mt-md-4 mt-3 font-weight-bolder text-secondary">Boutique Name</p>
			<input type="text" placeholder="Aham Boutique" class="form-control" required>
			
			<p class="mt-md-4 mt-3 font-weight-bolder text-secondary">Tell us a bit about Aham Boutique</p>
			<textarea placeholder="Description" class="form-control" required></textarea>
				
			<div class="form-row">
					<div class="form-group col-md-6 col-12 ">
					<p class="mt-md-4 mt-3 font-weight-bolder text-secondary">Number of Employees</p>
						<select class="form-control">
								<option selected >1-10 employees</option>
								<option>...</option>
								
							</select>
					</div>
					<div class="form-group col-md-6 col-12 ">
					<p class="mt-md-4 mt-3 font-weight-bolder text-secondary">Founding year</p>
					     <select class="form-control">
								<option selected >2019</option>
								<option>...</option>
								
							</select>
						
					</div>
			</div>
					<div>
						<button class="btn btn-primary  text-white mt-md-4 mt-2">Next: Address Details <i class="fa fa-arrow-right ml-5 "></i></button>
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
			<h5 class="font-weight-bolder">Hey John</h5>
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





  