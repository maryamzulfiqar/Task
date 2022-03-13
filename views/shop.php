<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" rel="stylesheet">

      <title>Groci - Organic Food & Grocery Market Template</title>
      <!-- Favicon Icon -->
      <link rel="icon" type="image/png" href="<?php echo base_url().'img/favicon.png';?>">
      <!-- Bootstrap core CSS -->
      <link href="<?php echo base_url().'assets/vendor/bootstrap/css/bootstrap.min.css';?>" rel="stylesheet" />
      <!-- Material Design Icons -->
      <link href="<?php echo base_url().'assets/vendor/icons/css/materialdesignicons.min.css';?>" media="all" rel="stylesheet" type="text/css" />
      <!-- Select2 CSS -->
      <link href="<?php echo base_url().'assets/vendor/select2/css/select2-bootstrap.css';?>" />
      <link href="<?php echo base_url().'assets/vendor/select2/css/select2.min.css';?>" rel="stylesheet" />
      <!-- Custom styles for this template -->
      <link href="<?php echo base_url().'css/osahan.css';?>" rel="stylesheet">
      <!-- Owl Carousel -->   
      <link href="<?php    echo base_url().'assets/vendor/owl-carousel/owl.theme.css';?>" rel="stylesheet" />
      <link href="<?php    echo base_url().'assets/vendor/owl-carousel/owl.carousel.css';?>" rel="stylesheet" />
      <link href="https://unpkg.com/material-components-web@latest/dist/material-components-web.min.css" rel="stylesheet">
       <script src="https://unpkg.com/material-components-web@latest/dist/material-components-web.min.js"></script>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/@mdi/font@6.x/css/materialdesignicons.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/font-awesome@4.x/css/font-awesome.min.css" rel="stylesheet">
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
      <!-- Material Design Icons -->
      <link href="<?php echo base_url().'assets/vendor/icons/css/materialdesignicons.min.css';?>" media="all" rel="stylesheet" type="text/css" />
      <!-- Select2 CSS -->
      <link href="<?php echo base_url().'assets/vendor/select2/css/select2-bootstrap.css';?>" />
      <link href="<?php echo base_url().'assets/vendor/select2/css/select2.min.css';?>" rel="stylesheet" />
      <!-- Custom styles for this template -->
      <link href="<?php echo base_url().'assets/css/osahan.css';?>" rel="stylesheet">
      <!-- Owl Carousel -->
      <link rel="stylesheet" href="<?php echo base_url().'assets/vendor/owl-carousel/owl.carousel.css';?>">
      <link rel="stylesheet" href="<?php echo base_url().'assets/vendor/owl-carousel/owl.theme.css';?>">



<style>
   .navbar-dark .nav-item .nav-link {
  color:  #FF69B4;
}

.navbar-dark .nav-item .nav-link:hover {
  background-color:  #FF69B4;
  transition: all 0.3s ease;
  border-radius: 0.25rem;
  color: #FF69B4;
}

.fa-li {
  position: relative;
  left: 0;
}
</style>
   </head>
   <body>
      <div class="modal fade login-modal-main" id="bd-example-modal "  >
         <div class="modal-dialog modal-lg modal-dialog-centered" role="document" >
            <div class="modal-content" >
               <div class="modal-body">
                  <div class="login-modal">
                     <div class="row">
                        <div class="col-lg-6 pad-right-0">
                           <div class="login-modal-left">
                           </div>
                        </div>
                        <div class="col-lg-6 pad-left-0">
                           <button type="button" class="close close-top-right" data-dismiss="modal" aria-label="Close">
                           <span aria-hidden="true"><i class="mdi mdi-close"></i></span>
                           <span class="sr-only">Close</span>
                           </button>
                           <form>
                              <div class="login-modal-right">
                                 <!-- Tab panes -->
                                 <div class="tab-content">
                                    <div class="tab-pane active" id="login" role="tabpanel">
                                       <h5 class="heading-design-h5">Login to your account</h5>
                                       <fieldset class="form-group">
                                          <label>Enter Email/Mobile number</label>
                                          <input type="text" class="form-control" placeholder="+91 123 456 7890">
                                       </fieldset>
                                       <fieldset class="form-group">
                                          <label>Enter Password</label>
                                          <input type="password" class="form-control" placeholder="********">
                                       </fieldset>
                                       <fieldset class="form-group">
                                          <button type="submit" class="btn btn-lg btn-secondary btn-block">Enter to your account</button>
                                       </fieldset>
                                       <div class="login-with-sites text-center">
                                          <p>or Login with your social profile:</p>
                                          <button class="btn-facebook login-icons btn-lg"><i class="mdi mdi-facebook"></i> Facebook</button>
                                          <button class="btn-google login-icons btn-lg"><i class="mdi mdi-google"></i> Google</button>
                                          <button class="btn-twitter login-icons btn-lg"><i class="mdi mdi-twitter"></i> Twitter</button>
                                       </div>
                                       <div class="custom-control custom-checkbox">
                                          <input type="checkbox" class="custom-control-input" id="customCheck1">
                                          <label class="custom-control-label" for="customCheck1">Remember me</label>
                                       </div>
                                    </div>
                                    <div class="tab-pane" id="register" role="tabpanel">
                                       <h5 class="heading-design-h5">Register Now!</h5>
                                       <fieldset class="form-group">
                                          <label>Enter Email/Mobile number</label>
                                          <input type="text" class="form-control" placeholder="+91 123 456 7890">
                                       </fieldset>
                                       <fieldset class="form-group">
                                          <label>Enter Password</label>
                                          <input type="password" class="form-control" placeholder="********">
                                       </fieldset>
                                       <fieldset class="form-group">
                                          <label>Enter Confirm Password </label>
                                          <input type="password" class="form-control" placeholder="********">
                                       </fieldset>
                                       <fieldset class="form-group">
                                          <button type="submit" class="btn btn-lg btn-secondary btn-block">Create Your Account</button>
                                       </fieldset>
                                       <div class="custom-control custom-checkbox">
                                          <input type="checkbox" class="custom-control-input" id="customCheck2">
                                          <label class="custom-control-label" for="customCheck2">I Agree with <a href="#">Term and Conditions</a></label>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="clearfix"></div>
                                 <div class="text-center login-footer-tab">
                                    <ul class="nav nav-tabs" role="tablist">
                                       <li class="nav-item">
                                          <a class="nav-link active" data-toggle="tab" href="#login" role="tab"><i class="mdi mdi-lock"></i> LOGIN</a>
                                       </li>
                                       <li class="nav-item">
                                          <a class="nav-link" data-toggle="tab" href="#register" role="tab"><i class="mdi mdi-pencil"></i> REGISTER</a>
                                       </li>
                                    </ul>
                                 </div>
                                 <div class="clearfix"></div>
                              </div>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="pt-2 pb-2" style="background-color: 	#FFC0CB" >
         <div class="container" style="background-color: 	#FFC0CB">
            <div class="row"  >
               <div class="col-md-6"  >
               <marquee width="100%" direction="right">
                  <a href="#" class="mb-0 text-white">
                     20% cashback for all users | Code: <strong><span class="text-light">OGOFERS13 <span class="mdi mdi-tag-faces"></span></span> </strong>                   </a>
</marquee>
                  </div>
               <div class="col-md-6 text-right">
                  <a href="#" class="text-white"><i aria-hidden="true" class="mdi mdi-map-marker-circle"></i> New York</a>
                  <a href="#" data-target="#bd-example-modal" data-toggle="modal" class="text-white ml-3 mr-3"><i class="mdi mdi-lock"></i> Sign In</a>
                  <a href="#" data-target="#bd-example-modal" data-toggle="modal" class="text-white"><i class="mdi mdi-account-circle"></i> Sign Up</a>
               </div>
            </div>
         </div>
      </div>
      <nav style="background-color:#FFCEE4; padding-bottom:3px;"  class="navbar navbar-light navbar-expand-lg  bg-faded osahan-menu">
         <div class="container" style="padding-left:100px;" >
            <a style="background-color:#FFCEE4" href="<?php echo base_url().'index/read';?>">
             <h2 style="font-family:Cursive;  color:white; text-shadow: 2px 2px #FF0000;"><i>ELODA</i></h2> </a>
            
            <button class="navbar-toggler navbar-toggler-white" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-collapse" id="navbarNavDropdown ">
               <div class="navbar-nav mr-auto mt-5 mt-lg-2 margin-auto top-categories-search-main">
                  <div class="top-categories-search">
                     <div class="input-group">
                        <span class="input-group-btn categories-dropdown">
                           <select class="form-control-select">
                              <option selected="selected">Your City</option>
                              <option value="0">New Delhi</option>
                              <option value="2">Bengaluru</option>
                              <option value="3">Hyderabad</option>
                              <option value="4">Kolkata</option>
                           </select>
                        </span>
                        <input class="form-control" placeholder="Search products in Your City" aria-label="Search products in Your City" type="text">
                        <span class="input-group-btn" style="background-color:#FFC0CB;">
                        <button style="background-color:#FFC0CB;color:white;"  class="btn " type="button"><i class="mdi mdi-file-find" style="background-color:#FFC0CB; color:white;"></i> Search</button>
                        </span>
                     </div>
                  </div>
               </div>
               <div class="my-2 my-lg-0">
                  <ul class="list-inline main-nav-right">
                     <li class="list-inline-item cart-btn">
                        <a href="#" data-toggle="offcanvas" class="btn btn-link border-none"><i class="mdi mdi-cart"></i> My Cart <small class="cart-value">5</small></a>
                     </li>
                  </ul>
               </div>
            </div>
         </div>
      </nav>
      <nav style="background-color:#fff1f3 ;  padding-left:0px;padding-right:0px; padding-top:0px;" class="navbar navbar-expand-lg  osahan-menu-2 pad-none-mobile">
         <div style="background-color:#fff1f3 ; " class="container-fluid">
            <div style="background-color:#fff1f3; " class="collapse navbar-collapse" id="navbarText">
               <ul class="navbar-nav mr-auto mt-2 mt-lg-0 margin-auto"  style="font-family:Cursive; text-shadow: 2px 2px white;">
                  <li  class="nav-item"  >
                     <a class="nav-link " href="index.html">Super Store</a>
                  </li>
              <li class="nav-item">
                     <a href="index.html" class="nav-link">Home</a>
                  </li>
              <li class="nav-item">
                     <a href="about.html" class="nav-link">About Us</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="shop.html">Fruits & Vegetables</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="shop.html">Grocery & Staples</a>
                  </li>
                  <li class="nav-item dropdown">
                     <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     Pages
                     </a>
                     <div class="dropdown-menu">
                        <a class="dropdown-item" href="shop.html"><i class="mdi mdi-chevron-right" aria-hidden="true"></i> Shop Grid</a>
                        <a class="dropdown-item" href="single.html"><i class="mdi mdi-chevron-right" aria-hidden="true"></i> Single Product</a>
                        <a class="dropdown-item" href="cart.html"><i class="mdi mdi-chevron-right" aria-hidden="true"></i> Shopping Cart</a>
                        <a class="dropdown-item" href="checkout.html"><i class="mdi mdi-chevron-right" aria-hidden="true"></i> Checkout</a> 
                     </div>
                  </li>
                  <li class="nav-item dropdown">
                     <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     My Account
                     </a>
                     <div class="dropdown-menu">
                        <a class="dropdown-item" href="my-profile.html"><i class="mdi mdi-chevron-right" aria-hidden="true"></i>  My Profile</a>
                        <a class="dropdown-item" href="my-address.html"><i class="mdi mdi-chevron-right" aria-hidden="true"></i>  My Address</a>
                        <a class="dropdown-item" href="wishlist.html"><i class="mdi mdi-chevron-right" aria-hidden="true"></i>  Wish List </a>
                        <a class="dropdown-item" href="orderlist.html"><i class="mdi mdi-chevron-right" aria-hidden="true"></i>  Order List</a> 
                     </div>
                  </li>
                  <li class="nav-item dropdown">
                     <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     Blog Page
                     </a>
                     <div class="dropdown-menu">
                        <a class="dropdown-item" href="blog.html"><i class="mdi mdi-chevron-right" aria-hidden="true"></i> Blog</a>
                        <a class="dropdown-item" href="blog-detail.html"><i class="mdi mdi-chevron-right" aria-hidden="true"></i> Blog Detail</a>
                     </div>
                  </li>
              <li class="nav-item dropdown">
                     <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     More Pages
                     </a>
                     <div class="dropdown-menu">
                        <a class="dropdown-item" href="about.html"><i class="mdi mdi-chevron-right" aria-hidden="true"></i>  About Us</a>
                        <a class="dropdown-item" href="contact.html"><i class="mdi mdi-chevron-right" aria-hidden="true"></i>  Contact Us</a>
                        <a class="dropdown-item" href="faq.html"><i class="mdi mdi-chevron-right" aria-hidden="true"></i>  FAQ </a>
                        <a class="dropdown-item" href="not-found.html"><i class="mdi mdi-chevron-right" aria-hidden="true"></i>  404 Error</a> 
                     </div>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="contact.html">Contact</a>
                  </li>
               </ul>
            </div>
         </div>
      </nav>
	  <section class="pt-3 pb-3 page-info section-padding border-bottom bg-white">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <a href="#"><strong><span class="mdi mdi-home"></span> Home</strong></a> <span class="mdi mdi-chevron-right"></span> <a href="#">Shop</a>
               </div>
            </div>
         </div>
      </section>
      <section class="shop-list section-padding">
         <div class="container">
            <div class="row">
               <div class="col-md-3">
				   <div class="shop-filters">
					  <div id="accordion">
						 <div class="card">
							<div class="card-header" id="headingOne">
							   <h5 class="mb-0">
								  <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
								  Category <span class="mdi mdi-chevron-down float-right"></span>
								  </button>
							   </h5>
							</div>
							<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
							   <div class="card-body card-shop-filters">
								  <form class="form-inline mb-3">
									 <div  class="form-group">
										<input style="padding-left:0px; height:50px;width:180px;" type="text" class="form-control" placeholder="Search By Category">
										<button style="padding-left:0px;  background-color:#ffe4e1;"type="submit" class="pl-2 pr-2 btn-lg"><i  style="background-color:#ffe4e1;" class="mdi mdi-file-find"></i></button>
									 </div>
								  </form>
								  <div class="custom-control custom-checkbox">
									 <input type="checkbox" class="custom-control-input" id="cb1">
									 <label class="custom-control-label" for="cb1">All Fruits </label>
								  </div>
								  <div class="custom-control custom-checkbox">
									 <input type="checkbox" class="custom-control-input" id="cb8">
									 <label class="custom-control-label" for="cb8">Fresh & Herbs <span class="badge badge-primary">5% OFF</span></label>
								  </div>
								  <div class="custom-control custom-checkbox">
									 <input type="checkbox" class="custom-control-input" id="cb2">
									 <label class="custom-control-label" for="cb2">Seasonal Fruits <span class="badge badge-secondary">NEW</span></label>
								  </div>
								  <div class="custom-control custom-checkbox">
									 <input type="checkbox" class="custom-control-input" id="cb3">
									 <label class="custom-control-label" for="cb3">Imported Fruits <span class="badge badge-danger">10% OFF</span></label>
								  </div>
								  <div class="custom-control custom-checkbox">
									 <input type="checkbox" class="custom-control-input" id="cb4">
									 <label class="custom-control-label" for="cb4">Citrus <span class="badge badge-info">50% OFF</span></label>
								  </div>
								  <div class="custom-control custom-checkbox">
									 <input type="checkbox" class="custom-control-input" id="cb5">
									 <label class="custom-control-label" for="cb5">Cut Fresh & Herbs</label>
								  </div>
								  <div class="custom-control custom-checkbox">
									 <input type="checkbox" class="custom-control-input" id="cb6">
									 <label class="custom-control-label" for="cb6">Seasonal Fruits <span class="badge badge-success">25% OFF</span></label>
								  </div>
								  <div class="custom-control custom-checkbox">
									 <input type="checkbox" class="custom-control-input" id="cb7">
									 <label class="custom-control-label" for="cb7">Fresh & Herbs <span class="badge badge-primary">5% OFF</span></label>
								  </div>
							   </div>
							</div>
						 </div>
						 <div class="card">
							<div class="card-header" id="headingTwo">
							   <h5 class="mb-0">
								  <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
								  Price <span class="mdi mdi-chevron-down float-right"></span>
								  </button>
							   </h5>
							</div>
							<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
							   <div class="card-body card-shop-filters">
								  <div class="custom-control custom-checkbox">
									 <input type="checkbox" class="custom-control-input" id="1">
									 <label class="custom-control-label" for="1">$68 to $659 <span class="badge badge-warning">50% OFF</span></label>
								  </div>
								  <div class="custom-control custom-checkbox">
									 <input type="checkbox" class="custom-control-input" id="2">
									 <label class="custom-control-label" for="2">$660 to $1014</label>
								  </div>
								  <div class="custom-control custom-checkbox">
									 <input type="checkbox" class="custom-control-input" id="3">
									 <label class="custom-control-label" for="3">$1015 to $1679</label>
								  </div>
								  <div class="custom-control custom-checkbox">
									 <input type="checkbox" class="custom-control-input" id="4">
									 <label class="custom-control-label" for="4">$1680 to $1856</label>
								  </div>
							   </div>
							</div>
						 </div>
						 <div class="card">
							<div class="card-header" id="headingThree">
							   <h5 class="mb-0">
								  <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
								  Brand <span class="mdi mdi-chevron-down float-right"></span>
								  </button>
							   </h5>
							</div>
							<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
							   <div class="card-body card-shop-filters">
								  <form class="form-inline mb-3">
									 <div class="form-group">
										<input type="text" class="form-control" placeholder="Search By Brand">
									 </div>
									 <button type="submit" class="btn btn-secondary ml-2">GO</button>
								  </form>
								  <div class="custom-control custom-checkbox">
									 <input type="checkbox" class="custom-control-input" id="b1">
									 <label class="custom-control-label" for="b1">Imported Fruits <span class="badge badge-warning">50% OFF</span></label>
								  </div>
								  <div class="custom-control custom-checkbox">
									 <input type="checkbox" class="custom-control-input" id="b2">
									 <label class="custom-control-label" for="b2">Seasonal Fruits <span class="badge badge-secondary">NEW</span></label>
								  </div>
								  <div class="custom-control custom-checkbox">
									 <input type="checkbox" class="custom-control-input" id="b3">
									 <label class="custom-control-label" for="b3">Imported Fruits <span class="badge badge-danger">10% OFF</span></label>
								  </div>
								  <div class="custom-control custom-checkbox">
									 <input type="checkbox" class="custom-control-input" id="b4">
									 <label class="custom-control-label" for="b4">Citrus</label>
								  </div>
							   </div>
							</div>
						 </div>
						 <div class="card">
							<div class="card-header" id="headingThree">
							   <h5 class="mb-0">
								  <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
								  Imported Fruits <span class="mdi mdi-chevron-down float-right"></span>
								  </button>
							   </h5>
							</div>
							<div id="collapsefour" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
							   <div class="card-body">
								  <div class="list-group">
									 <a href="#" class="list-group-item list-group-item-action">All Fruits</a>
									 <a href="#" class="list-group-item list-group-item-action">Imported Fruits</a>
									 <a href="#" class="list-group-item list-group-item-action">Seasonal Fruits</a>
									 <a href="#" class="list-group-item list-group-item-action">Citrus</a>
									 <a href="#" class="list-group-item list-group-item-action disabled">Cut Fresh & Herbs</a>
								  </div>
							   </div>
							</div>
						 </div>
					  </div>
				   </div>
				   <div class="left-ad mt-4">
					  <img class="img-fluid" Style="height:400px;" src="<?php echo base_url().'img/roll.png';?>" alt="">
				   </div>
				</div>
               <div class="col-md-9">
                  <a href="#"><img class="img-fluid mb-3"  src="" alt=""></a>
                  <div class="shop-head">
                     <a href="#"><span class="mdi mdi-home"></span> Home</a> <span class="mdi mdi-chevron-right"></span> <a href="#">Fruits & Vegetables</a> <span class="mdi mdi-chevron-right"></span> <a href="#">Fruits</a>
                  
                     <h5 class="mb-3">Fruits</h5>
                  </div>



                  <div id="asd" class="carousel slide carousel-fade" data-ride="carousel">
  <div class="carousel-inner">
  <div class="carousel-item active">
<div class="row">
<?php 
if(!empty($data)) { foreach($data as $mdata) { 
   ?>

<div style="
    margin-bottom: 2rem;  padding: 1rem;" class="item  mh-60 ">
                  <div class="product">
                     <a href="<?php echo base_url().'single.php';?>">
                        <div class="product-header">
                           <span class="badge badge-success"><?php echo $mdata['discount']?> OFF</span>
                           
                           <img class="img-fluid" style="height:200px; width:200px;" src="<?php echo base_url('up/'. $mdata['image']);?>" />
                           <span class="veg text-success mdi mdi-circle"></span>
                        </div>
                        <div class="product-body">
                           <h4 style="color:#FFCEE4; "><?php echo $mdata['title']?></h5>
                           <h4 style="color:pink ;" ><strong>Section</strong> <?php echo $mdata['category']?></h6>
                        </div>
                        <div class="product-footer">
                           <p class="offer-price mb-0">$<?php echo $mdata['price']?> <i class="mdi mdi-tag-outline"></i> <span class="regular-price">$<?php echo $mdata['discount_p']?></span></p><button style="background-color:#FFC0CB"   type="button" class="btn  btn-sm"><i style="background-color:#FFC0CB" class="mdi mdi-cart-outline"></i> Add To Cart</button>
                        </div>
                     </a>
                  </div>
                  
               </div>
               <?php 
        
            }
            } else { ?>
 Record Not ound  

<?php 
}  ?>
</div>
   </div>
   </div>  
   <nav>     <ul class="pagination justify-content-center">
                        <li class="page-item disabled">
                           <span class="page-link">Previous</span>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item active">
                           <span class="page-link">
                           2
                           <span class="sr-only">(current)</span>
                           </span>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                           <a class="page-link" href="#">Next</a>
                        </li>
                     </ul>
                  </nav>
               </div></div>  </div>




      </section>
      <section class="product-items-slider section-padding bg-white border-top">
         <div class="container">
           
<div style="background-color:#ffe4e1; width:100%;" class="container bg-white mx-auto   m-2  col-md-11 "  >
<!-- -->
<section style="background-color:#ffe4e1;"  class="product-items-slider section-padding">
<div class="container">
            <div class="section-header">
               <h5 class="heading-design-h5" style="color:white;" >Top Savers Today <span class="badge badge-success">50% OFF</span>
                  <a class="float-right text-white" href="shop.html" >View All</a>
               </h5>
            </div>
<div id="asd" class="carousel slide carousel-fade" data-ride="carousel">
  <div class="carousel-inner">
  <div class="carousel-item active">
<div class="row">
<?php $x=1;
if(!empty($data1)) { foreach($data1 as $mdata1) { 
   ?>

<div class="item col-md-3 mh-100">
                  <div class="product">
                     <a href="<?php echo base_url().'single.php';?>">
                        <div class="product-header">
                           <span class="badge badge-success"><?php echo $mdata1['discount']?> OFF</span>
                           
                           <img class="img-fluid" style="height:200px; width:200px;" src="<?php echo base_url('up/'. $mdata1['image']);?>" />
                           <span class="veg text-success mdi mdi-circle"></span>
                        </div>
                        <div class="product-body">
                           <h4 style="color:#FFCEE4; "><?php echo $mdata1['title']?></h5>
                           <h4 style="height:70px; color:pink ;" ><strong>Section</strong> <?php echo $mdata1['category']?></h6>
                        </div>
                        <div class="product-footer">
                           <p class="offer-price mb-0">$<?php echo $mdata1['price']?> <i class="mdi mdi-tag-outline"></i> <span class="regular-price">$<?php echo $mdata1['discount_p']?></span></p><button style="background-color:#FFC0CB"   type="button" class="btn  btn-sm"><i style="background-color:#FFC0CB" class="mdi mdi-cart-outline"></i> Add To Cart</button>
                        </div>
                     </a>
                  </div>
               </div>
               <?php 
             $x++;
             if($x==5){
         break;    
             }
            }
            } else { ?>
 Record Not ound  

<?php 
}  ?>
</div>

   </div>
            </div>
         </div>
      </section>
      <section class="section-padding bg-white border-top">
         <div class="container">
            <div class="row">
               <div class="col-lg-4 col-sm-6">
                  <div class="feature-box">
                     <i class="mdi mdi-truck-fast"></i>
                     <h6>Free & Next Day Delivery</h6>
                     <p>Lorem ipsum dolor sit amet, cons...</p>
                  </div>
               </div>
               <div class="col-lg-4 col-sm-6">
                  <div class="feature-box">
                     <i class="mdi mdi-basket"></i>
                     <h6>100% Satisfaction Guarantee</h6>
                     <p>Rorem Ipsum Dolor sit amet, cons...</p>
                  </div>
               </div>
               <div class="col-lg-4 col-sm-6">
                  <div class="feature-box">
                     <i class="mdi mdi-tag-heart"></i>
                     <h6>Great Daily Deals Discount</h6>
                     <p>Sorem Ipsum Dolor sit amet, Cons...</p>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Footer -->
      <section class="section-padding footer bg-white border-top">
         <div class="container">
            <div class="row">
               <div class="col-lg-3 col-md-3">
                  <h4 class="mb-5 mt-0"><a class="logo" href="index.html"><img src="img/logo-footer.png" alt="Groci"></a></h4>
                  <p class="mb-0"><a class="text-dark" href="#"><i class="mdi mdi-phone"></i> +61 525 240 310</a></p>
                  <p class="mb-0"><a class="text-dark" href="#"><i class="mdi mdi-cellphone-iphone"></i> 12345 67890, 56847-98562</a></p>
                  <p class="mb-0"><a class="text-success" href="#"><i class="mdi mdi-email"></i> iamosahan@gmail.com</a></p>
                  <p class="mb-0"><a class="text-primary" href="#"><i class="mdi mdi-web"></i> www.askbootstrap.com</a></p>
               </div>
               <div class="col-lg-2 col-md-2">
                  <h6 class="mb-4">TOP CITIES </h6>
                  <ul>
                  <li><a href="#">New Delhi</a></li>
                  <li><a href="#">Bengaluru</a></li>
                  <li><a href="#">Hyderabad</a></li>
                  <li><a href="#">Kolkata</a></li>
                  <li><a href="#">Gurugram</a></li>
                  <ul>
               </div>
               <div class="col-lg-2 col-md-2">
                  <h6 class="mb-4">CATEGORIES</h6>
                  <ul>
                  <li><a href="#">Vegetables</a></li>
                  <li><a href="#">Grocery & Staples</a></li>
                  <li><a href="#">Breakfast & Dairy</a></li>
                  <li><a href="#">Soft Drinks</a></li>
                  <li><a href="#">Biscuits & Cookies</a></li>
                  <ul>
               </div>
               <div class="col-lg-2 col-md-2">
                  <h6 class="mb-4">ABOUT US</h6>
                  <ul>
                  <li><a href="#">Company Information</a></li>
                  <li><a href="#">Careers</a></li>
                  <li><a href="#">Store Location</a></li>
                  <li><a href="#">Affillate Program</a></li>
                  <li><a href="#">Copyright</a></li>
                  <ul>
               </div>
               <div class="col-lg-3 col-md-3">
                  <h6 class="mb-4">Download App</h6>
                  <div class="app">
                     <a href="#"><img src="img/google.png" alt=""></a>
                     <a href="#"><img src="img/apple.png" alt=""></a>
                  </div>
                  <h6 class="mb-3 mt-4">GET IN TOUCH</h6>
                  <div class="footer-social">
                     <a class="btn-facebook" href="#"><i class="mdi mdi-facebook"></i></a>
                     <a class="btn-twitter" href="#"><i class="mdi mdi-twitter"></i></a>
                     <a class="btn-instagram" href="#"><i class="mdi mdi-instagram"></i></a>
                     <a class="btn-whatsapp" href="#"><i class="mdi mdi-whatsapp"></i></a>
                     <a class="btn-messenger" href="#"><i class="mdi mdi-facebook-messenger"></i></a>
                     <a class="btn-google" href="#"><i class="mdi mdi-google"></i></a>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- End Footer -->
      <!-- Copyright -->
      <section class="pt-4 pb-4 footer-bottom">
         <div class="container">
            <div class="row no-gutters">
               <div class="col-lg-6 col-sm-6">
                  <p class="mt-1 mb-0">&copy; Copyright 2018 <strong class="text-dark">Groci</strong>. All Rights Reserved<br>
				  <small class="mt-0 mb-0">Made with <i class="mdi mdi-heart text-danger"></i> by <a href="https://askbootstrap.com/" target="_blank" class="text-primary">Ask Bootstrap</a>
                  </small>
				  </p>
               </div>
               <div class="col-lg-6 col-sm-6 text-right">
                  <img alt="osahan logo" src="img/payment_methods.png">
               </div>
            </div>
         </div>
      </section>
      <!-- End Copyright -->
      <div class="cart-sidebar">
         <div class="cart-sidebar-header">
            <h5>
               My Cart <span class="text-success">(5 item)</span> <a data-toggle="offcanvas" class="float-right" href="#"><i class="mdi mdi-close"></i>
               </a>
            </h5>
         </div>
         <div class="cart-sidebar-body">
            <div class="cart-list-product">
               <a class="float-right remove-cart" href="#"><i class="mdi mdi-close"></i></a>
               <img class="img-fluid" src="img/item/11.jpg" alt="">
               <span class="badge badge-success">50% OFF</span>
               <h5><a href="#">Product Title Here</a></h5>
               <h6><strong><span class="mdi mdi-approval"></span> Available in</strong> - 500 gm</h6>
               <p class="offer-price mb-0">$450.99 <i class="mdi mdi-tag-outline"></i> <span class="regular-price">$800.99</span></p>
            </div>
            <div class="cart-list-product">
               <a class="float-right remove-cart" href="#"><i class="mdi mdi-close"></i></a>
               <img class="img-fluid" src="img/item/7.jpg" alt="">
               <span class="badge badge-success">50% OFF</span>
               <h5><a href="#">Product Title Here</a></h5>
               <h6><strong><span class="mdi mdi-approval"></span> Available in</strong> - 500 gm</h6>
               <p class="offer-price mb-0">$450.99 <i class="mdi mdi-tag-outline"></i> <span class="regular-price">$800.99</span></p>
            </div>
            <div class="cart-list-product">
               <a class="float-right remove-cart" href="#"><i class="mdi mdi-close"></i></a>
               <img class="img-fluid" src="img/item/9.jpg" alt="">
               <span class="badge badge-success">50% OFF</span>
               <h5><a href="#">Product Title Here</a></h5>
               <h6><strong><span class="mdi mdi-approval"></span> Available in</strong> - 500 gm</h6>
               <p class="offer-price mb-0">$450.99 <i class="mdi mdi-tag-outline"></i> <span class="regular-price">$800.99</span></p>
            </div>
            <div class="cart-list-product">
               <a class="float-right remove-cart" href="#"><i class="mdi mdi-close"></i></a>
               <img class="img-fluid" src="img/item/1.jpg" alt="">
               <span class="badge badge-success">50% OFF</span>
               <h5><a href="#">Product Title Here</a></h5>
               <h6><strong><span class="mdi mdi-approval"></span> Available in</strong> - 500 gm</h6>
               <p class="offer-price mb-0">$450.99 <i class="mdi mdi-tag-outline"></i> <span class="regular-price">$800.99</span></p>
            </div>
            <div class="cart-list-product">
               <a class="float-right remove-cart" href="#"><i class="mdi mdi-close"></i></a>
               <img class="img-fluid" src="img/item/2.jpg" alt="">
               <span class="badge badge-success">50% OFF</span>
               <h5><a href="#">Product Title Here</a></h5>
               <h6><strong><span class="mdi mdi-approval"></span> Available in</strong> - 500 gm</h6>
               <p class="offer-price mb-0">$450.99 <i class="mdi mdi-tag-outline"></i> <span class="regular-price">$800.99</span></p>
            </div>
         </div>
         <div class="cart-sidebar-footer">
            <div class="cart-store-details">
               <p>Sub Total <strong class="float-right">$900.69</strong></p>
               <p>Delivery Charges <strong class="float-right text-danger">+ $29.69</strong></p>
               <h6>Your total savings <strong class="float-right text-danger">$55 (42.31%)</strong></h6>
            </div>
            <a href="checkout.html"><button class="btn btn-secondary btn-lg btn-block text-left" type="button"><span class="float-left"><i class="mdi mdi-cart-outline"></i> Proceed to Checkout </span><span class="float-right"><strong>$1200.69</strong> <span class="mdi mdi-chevron-right"></span></span></button></a>
         </div>
      </div>



      <section class="section-padding bg-white border-top">
         <div  class="container">
            <div class="row">
               <div class="col-lg-4 col-sm-6">
                  <div class="feature-box">
                     <i class="mdi mdi-truck-fast"></i>
                     <h6>Free & Next Day Delivery</h6>
                     <p>Lorem ipsum dolor sit amet, cons...</p>
                  </div>
               </div>
               <div class="col-lg-4 col-sm-6">
                  <div class="feature-box">
                     <i class="mdi mdi-basket"></i>
                     <h6>100% Satisfaction Guarantee</h6>
                     <p>Rorem Ipsum Dolor sit amet, cons...</p>
                  </div>
               </div>
               <div class="col-lg-4 col-sm-6">
                  <div class="feature-box">
                     <i class="mdi mdi-tag-heart"></i>
                     <h6>Great Daily Deals Discount</h6>
                     <p>Sorem Ipsum Dolor sit amet, Cons...</p>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Footer -->
      <section style="background-color:#FFCEE4; color:white"class="section-padding footer  border-top">
         <div class="container">
            <div style="color:white;"class="row">
               <div  style="color:white;"class="col-lg-3 col-md-3">
               <h2 style="font-family:Cursive;  color:white; text-shadow: 2px 2px #FF0000;"><i>ELODA</i></h2> </a>
                  <p  style="color:white;" class="mb-0"><a class="text-dark" href="#"><i class="mdi mdi-phone"></i> +61 525 240 310</a></p>
                  <p class="mb-0"><a class="text-dark" href="#"><i class="mdi mdi-cellphone-iphone"></i> 12345 67890, 56847-98562</a></p>
                  <p class="mb-0"><a class="text-success" href="#"><i class="mdi mdi-email"></i> iamosahan@gmail.com</a></p>
                  <p class="mb-0"><a class="text-primary" href="#"><i class="mdi mdi-web"></i> www.askbootstrap.com</a></p>
               </div>
               <div class="col-lg-2 col-md-2">
                  <h6 class="mb-4">TOP CITIES </h6>
                  <ul>
                  <li><a  href="#">New Delhi</a></li>
                  <li><a href="#">Bengaluru</a></li>
                  <li><a href="#">Hyderabad</a></li>
                  <li><a href="#">Kolkata</a></li>
                  <li><a href="#">Gurugram</a></li>
                  <ul>
               </div>
               <div style="color:white;" class="col-lg-2 col-md-2">
                  <h6 class="mb-4">CATEGORIES</h6>
                  <ul>
                  <li><a href="#">Vegetables</a></li>
                  <li><a href="#">Grocery & Staples</a></li>
                  <li><a href="#">Breakfast & Dairy</a></li>
                  <li><a href="#">Soft Drinks</a></li>
                  <li><a href="#">Biscuits & Cookies</a></li>
                  <ul>
               </div>
               <div class="col-lg-2 col-md-2">
                  <h6 class="mb-4">ABOUT US</h6>
                  <ul>
                  <li><a href="#">Company Information</a></li>
                  <li><a href="#">Careers</a></li>
                  <li><a href="#">Store Location</a></li>
                  <li><a href="#">Affillate Program</a></li>
                  <li><a href="#">Copyright</a></li>
                  <ul>
               </div>
               <div class="col-lg-3 col-md-3">
                  <h6 class="mb-4">Download App</h6>
                  <div class="app">
                     <a href="#"><img src="<?php echo base_url().'img/google.png';?>" alt=""></a>
                     <a href="#"><img src="<?php echo base_url().'img/apple.png';?>" alt=""></a>
                  </div>
                  <h6 class="mb-3 mt-4">GET IN TOUCH</h6>
                  <div class="footer-social">
                     <a class="btn-facebook" href="#"><i class="mdi mdi-facebook"></i></a>
                     <a class="btn-twitter" href="#"><i class="mdi mdi-twitter"></i></a>
                     <a class="btn-instagram" href="#"><i class="mdi mdi-instagram"></i></a>
                     <a class="btn-whatsapp" href="#"><i class="mdi mdi-whatsapp"></i></a>
                     <a class="btn-messenger" href="#"><i class="mdi mdi-facebook-messenger"></i></a>
                     <a class="btn-google" href="#"><i class="mdi mdi-google"></i></a>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- End Footer -->
      <!-- Copyright -->
   
      <!-- End Copyright -->
      <div style="background-color:#FFCEE4; color:white" class="cart-sidebar">
         <div style="color:white"class="cart-sidebar-header">
            <h5 style="color:white">
               My Cart <span class="text-success"></span> <a data-toggle="offcanvas" class="float-right" href="#"><i class="mdi mdi-close"></i>
               </a>
            </h5>
         </div>
         <div class="cart-sidebar-body">
            <div class="cart-list-product">
               <a class="float-right remove-cart" href="#"><i class="mdi mdi-close"></i></a>
               <img class="img-fluid" src="img/item/11.jpg" alt="">
               <span class="badge badge-success">50% OFF</span>
               <h5><a href="#">Product Title Here</a></h5>
               <h6><strong><span class="mdi mdi-approval"></span> Available in</strong> - 500 gm</h6>
               <p class="offer-price mb-0">$450.99 <i class="mdi mdi-tag-outline"></i> <span class="regular-price">$800.99</span></p>
            </div>
            <div class="cart-list-product">
               <a class="float-right remove-cart" href="#"><i class="mdi mdi-close"></i></a>
               <img class="img-fluid" src="img/item/7.jpg" alt="">
               <span class="badge badge-success">50% OFF</span>
               <h5><a href="#">Product Title Here</a></h5>
               <h6><strong><span class="mdi mdi-approval"></span> Available in</strong> - 500 gm</h6>
               <p class="offer-price mb-0">$450.99 <i class="mdi mdi-tag-outline"></i> <span class="regular-price">$800.99</span></p>
            </div>
            <div class="cart-list-product">
               <a class="float-right remove-cart" href="#"><i class="mdi mdi-close"></i></a>
               <img class="img-fluid" src="img/item/9.jpg" alt="">
               <span class="badge badge-success">50% OFF</span>
               <h5><a href="#">Product Title Here</a></h5>
               <h6><strong><span class="mdi mdi-approval"></span> Available in</strong> - 500 gm</h6>
               <p class="offer-price mb-0">$450.99 <i class="mdi mdi-tag-outline"></i> <span class="regular-price">$800.99</span></p>
            </div>
            <div class="cart-list-product">
               <a class="float-right remove-cart" href="#"><i class="mdi mdi-close"></i></a>
               <img class="img-fluid" src="img/item/1.jpg" alt="">
               <span class="badge badge-success">50% OFF</span>
               <h5><a href="#">Product Title Here</a></h5>
               <h6><strong><span class="mdi mdi-approval"></span> Available in</strong> - 500 gm</h6>
               <p class="offer-price mb-0">$450.99 <i class="mdi mdi-tag-outline"></i> <span class="regular-price">$800.99</span></p>
            </div>
            <div class="cart-list-product">
               <a class="float-right remove-cart" href="#"><i class="mdi mdi-close"></i></a>
               <img class="img-fluid" src="img/item/2.jpg" alt="">
               <span class="badge badge-success">50% OFF</span>
               <h5><a href="#">Product Title Here</a></h5>
               <h6><strong><span class="mdi mdi-approval"></span> Available in</strong> - 500 gm</h6>
               <p class="offer-price mb-0">$450.99 <i class="mdi mdi-tag-outline"></i> <span class="regular-price">$800.99</span></p>
            </div>
         </div>
         <div class="cart-sidebar-footer">
            <div class="cart-store-details">
               <p>Sub Total <strong class="float-right">$900.69</strong></p>
               <p>Delivery Charges <strong class="float-right text-danger">+ $29.69</strong></p>
               <h6>Your total savings <strong class="float-right text-danger">$55 (42.31%)</strong></h6>
            </div>
            <a href="checkout.html"><button class="btn btn-secondary btn-lg btn-block text-left" type="button"><span class="float-left"><i class="mdi mdi-cart-outline"></i> Proceed to Checkout </span><span class="float-right"><strong>$1200.69</strong> <span class="mdi mdi-chevron-right"></span></span></button></a>
         </div>
      </div>

<!-- Bootstrap core JavaScript -->
<script src="<?php echo base_url().'assets/vendor/jquery/jquery.min.js';?>"></script>
      <script src="<?php echo base_url().'assets/vendor/bootstrap/js/bootstrap.bundle.min.js';?>"></script>
      <!-- select2 Js -->
      <script src="<?php echo base_url().'assets/vendor/select2/js/select2.min.js';?>"></script>
      <!-- Owl Carousel -->
      <script src="<?php echo base_url().'vendor/owl-carousel/owl.carousel.js';?>"></script>
      <!-- Custom -->
      <script src="<?php echo base_url().'js/custom.js';?>"></script>
   </body>
</html>


