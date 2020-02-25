<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>BoutiqueSoft</title>

  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="css/simple-sidebar.css" rel="stylesheet">
   <link href="css/style.css" rel="stylesheet">
   <link rel="stylesheet"href="css/fa/css/all.min.css">

</head>

<body>

  <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class=" border-right" id="sidebar-wrapper">
      <div class="py-sm-2 px-3 ml-sm-2 ml-1"><p class="h5">BoutiqueSoft</p></div>
      
      <ul class="list-group list-group-flush">
		<li class="list-group-item border-0 ml-1"><span class="text-high font-family-roboto font-weight-bolder font-10">ADMINISTRATOR TOOLS</span></li>
        <li class="list-group-item border-0"><a href="#"  class="list-group-item-action text-primary">
		<i class="fas fa-angle-right"></i> Dashboards</a></li>
        <li class="list-group-item border-0 ml-1"><a href="#" class="list-group-item-action">Boutiques</li></a>
        <li class="list-group-item border-0 ml-1"><a href="#"  class="list-group-item-action">Orders</li></a>
        <li class="list-group-item border-0 ml-1"><a href="#"  class="list-group-item-action">Customers</li></a>
        <li class="list-group-item border-0 ml-1"><a href="#"  class="list-group-item-action">Designers</li></a>
        <li class="list-group-item border-0 ml-1"><a href="#"  class="list-group-item-action">Production Manager</li></a>
        <li class="list-group-item border-0 ml-1"><a href="#"  class="list-group-item-action">Reports</li></a>
		<li class="list-group-item border-0 ml-1"><span class="font-family-roboto text-high font-weight-bolder font-10">PREFERENCES</span></li>
		<li class="list-group-item border-0 ml-1"><a href="#"  class="list-group-item-action">Account Settings</li></a>
        <li class="list-group-item border-0 ml-1"><a href="#"  class="list-group-item-action">Support & Help</li></a>
   <li class="list-group-item">
	  
		  <div class=" border-rounded bg-sec2 p-2">
		 <!-----------<div class="row">
				<div class="col-md-3">
					<img src="img/order.png" class="img-fluid  mt-2">
				</div>
				<div class="col-md-5">
					<p class="small">Recent Orders<p>
				</div>
					<div class="col-md-4 text-left">
					<a href="#"  class="list-group-item-action small text-black">View all</a>
				</div>
		   </div>---------->
		   <div class="d-flex">
			<div>
				<img src="img/recent-order.png" class="img-fluid ml-1 mr-2"></div>
				<p class="small mr-2 mt-1 font-14">Recent Orders<p>
				<a href="#"  class="list-group-item-action small text-black font-12">View all</a>
			</div>
		   <p class="text-center py-5 text-secondary font-15">No Recent Orders</p>
		  </div>
	</li>
	     </ul>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">

      <nav class="navbar navbar-expand-lg navbar-light  border-bottom">

        <button class="navbar-toggler" type="button" data-toggle="collapse" id="menu-toggle" aria-controls="menu-toggle" aria-expanded="false" aria-label="Toggle navigation">
          <span><i class="fa fa-arrow-right"></i></span>
        </button>
 
         <div>
          <p class="text-right font-25 font-weight-bold"> Dashboard</p>
         </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav ml-auto mt-2 mt-lg-0">
							<li class="nav-item active">
								<div class="p-2">
								<a class="nav-link" href="#" id="userDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<i class="fas fa-comment-alt text-dark fa-lg mr-md-3"></i>
									<span class="badge signin text-white badge-counter rounded-circle badg-hint font-10">2</span>
									
								</a>
						
								<div class="dropdown-menu dropdown-menu-right dropdown-message pr-5 mr-5 shadow animated--grow-in" aria-labelledby="userDropdown2">
									<a class="dropdown-item" href="#">
									
										Message1
									</a>
									<a class="dropdown-item" href="#">
										
										Message1
									</a>
									<a class="dropdown-item" href="#">
										
										Message1
									</a>
									
								</div>
								</div>
							</li>
							<!-------------Notification dropdown----------->
							<li class="nav-item">
								<div class="bg-sec2 rounded p-2">
								<a class="nav-link" href="#" id="userDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									
									<i class="fa fa-bell text-dark fa-lg"></i>
									<span class="badge signin badge-counter text-white rounded-circle font-15">2</span>
									
								</a>
								
								<div class="dropdown-menu dropdown-menu-right dropdown-notification mr-5 shadow animated--grow-in" aria-labelledby="userDropdown1">
									<a class="dropdown-item" href="#">
									
										Notification1
									</a>
									<a class="dropdown-item" href="#">
										
										Notification2
									</a>
									<a class="dropdown-item" href="#">
										
										Notification3
									</a>
									
								</div>
								
								</div>
							</li>

						<!--  User Information -->
							<li class="nav-item dropdown no-arrow">
								<a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									
									<img class="img-fluid rounded-circle" src="img/avatar.png" width="45px" height="45px">
									<span class="mr-3 mb-2 d-lg-inline font-weight-bold text-black font-17.5">John Doe</span>
									
								</a>
								<small class="d-block admin-position font-15 font-weight-bold font-9c9c9c">Administrator</small>
						<!-- Dropdown User Information -->
								<div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
									<a class="dropdown-item" href="#">
									<i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
										Profile
									</a>
									<a class="dropdown-item" href="#">
										<i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
										Settings
									</a>
									<a class="dropdown-item" href="#">
										<i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
										Activity Log
									</a>
									<div class="dropdown-divider"></div>
									<a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
									  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
									  Logout
									</a>
								</div>
							</li>
						</ul>
					</div>
      </nav>



      
<!------------------body--------------------------->
    
<!----------------------------------------------------------------->
  