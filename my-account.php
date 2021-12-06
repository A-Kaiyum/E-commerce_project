<?php 
session_start();
 if(empty($_SESSION['customer_id'])){
 	header("Location:login.php");
 	exit();
 }
    include("admin/dbconnection/DbConnection.php");
	include("admin/model/category.php");
	include("admin/model/setting.php");
	include("admin/model/products.php");
	$category = new Category();
	$setting = new Setting();
	$product = new Products();
	$categories = $category->getCategories();
	$getSetting = $setting->getSetting();
	$getProducts = $product->getProducts();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	
    <!-- Basic page needs
    ============================================ -->
    <title>My Account</title>
    <meta charset="utf-8">
    <meta name="keywords" content="boostrap, responsive, html5, css3, jquery, theme, multicolor, parallax, retina, business" />
    <meta name="author" content="Magentech">
    <meta name="robots" content="index, follow" />
    
	<!-- Mobile specific metas
	============================================ -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	
	<!-- Favicon
	============================================ -->
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="ico/apple-touch-icon-144-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="ico/apple-touch-icon-114-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="ico/apple-touch-icon-72-precomposed.png">
	<link rel="apple-touch-icon-precomposed" href="ico/apple-touch-icon-57-precomposed.png">
	<link rel="shortcut icon" href="ico/favicon.png">
	
	<!-- Google web fonts
	============================================ -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
	
    <!-- Libs CSS
    ============================================ -->
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <link href="css/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="js/datetimepicker/bootstrap-datetimepicker.min.css" rel="stylesheet">
    <link href="js/owl-carousel/owl.carousel.css" rel="stylesheet">
    <link href="css/themecss/lib.css" rel="stylesheet">
    <link href="js/jquery-ui/jquery-ui.min.css" rel="stylesheet">
    
	<!-- Theme CSS
	============================================ -->
	<link href="css/themecss/so_megamenu.css" rel="stylesheet">
	<link href="css/themecss/so-categories.css" rel="stylesheet">
	<link href="css/themecss/so-listing-tabs.css" rel="stylesheet">
	<link href="css/footer1.css" rel="stylesheet">
	<link href="css/header1.css" rel="stylesheet">
	<link id="color_scheme" href="css/theme.css" rel="stylesheet">
	
	<!-- <link href="css/responsive.css" rel="stylesheet"> -->
	
	
	

</head>

<body class="res layout-subpage">
	<div id="wrapper" class="wrapper-full ">
		<!-- Header Container  -->
		<?php include("include/header.php"); ?>
		<!-- //Header Container  -->
		<!-- Main Container  -->
		<div class="main-container container">
			<ul class="header-main ">
				<li class="home"><a href="#">Home   </a><i class="fa fa-angle-right" aria-hidden="true"></i></li>
				<li class="home"><a href="#">Account   </a><i class="fa fa-angle-right" aria-hidden="true"></i></li>
				<li>  My Account</li>
			</ul>
			
			<div class="row">
				<!--Middle Part Start-->
				<div class="col-sm-9" id="content">
					<h2 class="title">My Account</h2>
					<p class="lead">Hello, <strong>Jhone Cary!</strong> - To update your account information.</p>
					<form>
						<div class="row">
							<div class="col-sm-6">
								<fieldset id="personal-details">
									<legend>Personal Details</legend>
									<div class="form-group required">
										<label for="input-firstname" class="control-label">First Name</label>
										<input type="text" class="form-control" id="input-firstname" placeholder="First Name" value="" name="firstname">
									</div>
									<div class="form-group required">
										<label for="input-lastname" class="control-label">Last Name</label>
										<input type="text" class="form-control" id="input-lastname" placeholder="Last Name" value="" name="lastname">
									</div>
									<div class="form-group required">
										<label for="input-email" class="control-label">E-Mail</label>
										<input type="email" class="form-control" id="input-email" placeholder="E-Mail" value="" name="email">
									</div>
									<div class="form-group required">
										<label for="input-telephone" class="control-label">Telephone</label>
										<input type="tel" class="form-control" id="input-telephone" placeholder="Telephone" value="" name="telephone">
									</div>
									<div class="form-group">
										<label for="input-fax" class="control-label">Fax</label>
										<input type="text" class="form-control" id="input-fax" placeholder="Fax" value="" name="fax">
									</div>
								</fieldset>
								<br>
							</div>
							<div class="col-sm-6">
								<fieldset>
									<legend>Change Password</legend>
									<div class="form-group required">
										<label for="input-password" class="control-label">Old Password</label>
										<input type="password" class="form-control" id="input-password" placeholder="Old Password" value="" name="old-password">
									</div>
									<div class="form-group required">
										<label for="input-password" class="control-label">New Password</label>
										<input type="password" class="form-control" id="input-password" placeholder="New Password" value="" name="new-password">
									</div>
									<div class="form-group required">
										<label for="input-confirm" class="control-label">New Password Confirm</label>
										<input type="password" class="form-control" id="input-confirm" placeholder="New Password Confirm" value="" name="new-confirm">
									</div>
								</fieldset>
								<fieldset>
									<legend>Newsletter</legend>
									<div class="form-group">
										<label class="col-md-4 col-sm-4 col-xs-3 control-label">Subscribe</label>
										<div class="col-md-8 col-sm-8 col-xs-9">
											<label class="radio-inline">
												<input type="radio" value="1" name="newsletter"> Yes
											</label>
											<label class="radio-inline">
												<input type="radio" checked="checked" value="0" name="newsletter"> No
											</label>
										</div>
									</div>
								</fieldset>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-6">
								<fieldset id="address">
									<legend>Payment Address</legend>
									<div class="form-group">
										<label for="input-company" class="control-label">Company</label>

										<input type="text" class="form-control" id="input-company" placeholder="Company" value="" name="company">

									</div>
									<div class="form-group required">
										<label for="input-address-1" class="control-label">Address 1</label>
										<input type="text" class="form-control" id="input-address-1" placeholder="Address 1" value="" name="address_1">
									</div>
									<div class="form-group required">
										<label for="input-city" class="control-label">City</label>
										<input type="text" class="form-control" id="input-city" placeholder="City" value="" name="city">
									</div>
									<div class="form-group required">
										<label for="input-postcode" class="control-label">Post Code</label>
										<input type="text" class="form-control" id="input-postcode" placeholder="Post Code" value="" name="postcode">
									</div>
									<div class="form-group required">
										<label for="input-country" class="control-label">Country</label>
										<select class="form-control" id="input-country" name="country_id">
											<option value=""> --- Please Select --- </option>
											<option value="244">Aaland Islands</option>
											<option value="1">Afghanistan</option>
											<option value="2">Albania</option>
											<option value="3">Algeria</option>
											<option value="4">American Samoa</option>
											<option value="5">Andorra</option>
											<option value="6">Angola</option>
											<option value="7">Anguilla</option>
											<option value="8">Antarctica</option>
											<option value="9">Antigua and Barbuda</option>
											<option value="10">Argentina</option>
											<option value="11">Armenia</option>
											<option value="12">Aruba</option>
											
										</select>
									</div>
									<div class="form-group required">
										<label for="input-zone" class="control-label">Region / State</label>
										<select class="form-control" id="input-zone" name="zone_id">
											<option value=""> --- Please Select --- </option>
											<option value="3513">Aberdeen</option>
											<option value="3514">Aberdeenshire</option>
											<option value="3515">Anglesey</option>
											<option value="3516">Angus</option>
											<option value="3517">Argyll and Bute</option>
											<option value="3518">Bedfordshire</option>
											<option value="3519">Berkshire</option>
											
										</select>
									</div>
								</fieldset>
							</div>
							<div class="col-sm-6">
								<fieldset id="shipping-address">
									<legend>Shipping Address</legend>
									<div class="form-group">
										<label for="input-company" class="control-label">Company</label>
										<input type="text" class="form-control" id="input-company" placeholder="Company" value="" name="company">
									</div>
									<div class="form-group required">
										<label for="input-address-1" class="control-label">Address 1</label>
										<input type="text" class="form-control" id="input-address-1" placeholder="Address 1" value="" name="address_1">
									</div>
									<div class="form-group required">
										<label for="input-city" class="control-label">City</label>
										<input type="text" class="form-control" id="input-city" placeholder="City" value="" name="city">
									</div>
									<div class="form-group required">
										<label for="input-postcode" class="control-label">Post Code</label>
										<input type="text" class="form-control" id="input-postcode" placeholder="Post Code" value="" name="postcode">
									</div>
									<div class="form-group required">
										<label for="input-country" class="control-label">Country</label>
										<select class="form-control" id="input-country" name="country_id">
											<option value=""> --- Please Select --- </option>
											<option value="244">Aaland Islands</option>
											<option value="1">Afghanistan</option>
											<option value="2">Albania</option>
											<option value="3">Algeria</option>
											<option value="4">American Samoa</option>
											<option value="5">Andorra</option>
											<option value="6">Angola</option>
											<option value="7">Anguilla</option>
											<option value="8">Antarctica</option>
											<option value="9">Antigua and Barbuda</option>
											<option value="10">Argentina</option>
											<option value="11">Armenia</option>
											<option value="12">Aruba</option>
											
										</select>
									</div>
									<div class="form-group required">
										<label for="input-zone" class="control-label">Region / State</label>
										<select class="form-control" id="input-zone" name="zone_id">
											<option value=""> --- Please Select --- </option>
											<option value="3513">Aberdeen</option>
											<option value="3514">Aberdeenshire</option>
											<option value="3515">Anglesey</option>
											<option value="3516">Angus</option>
											<option value="3517">Argyll and Bute</option>
											<option value="3518">Bedfordshire</option>
											<option value="3519">Berkshire</option>
											
										</select>
									</div>
								</fieldset>
							</div>
						</div>



						<div class="buttons clearfix">
							<div class="pull-right">
								<input type="submit" class="btn btn-md btn-primary" value="Save Changes">
							</div>
						</div>
					</form>
				</div>
				<!--Middle Part End-->
				<!--Right Part Start -->
				<aside class="col-sm-3 hidden-xs" id="column-right">
					<h2 class="subtitle">Account</h2>
					<div class="list-group">
						<ul class="list-item">
							<li><a href="login.html">Login</a>
							</li>
							<li><a href="register.html">Register</a>
							</li>
							<li><a href="#">Forgotten Password</a>
							</li>
							<li><a href="#">My Account</a>
							</li>
							<li><a href="#">Address Books</a>
							</li>
							<li><a href="wishlist.html">Wish List</a>
							</li>
							<li><a href="#">Order History</a>
							</li>
							<li><a href="#">Downloads</a>
							</li>
							<li><a href="#">Reward Points</a>
							</li>
							<li><a href="#">Returns</a>
							</li>
							<li><a href="#">Transactions</a>
							</li>
							<li><a href="#">Newsletter</a>
							</li>
							<li><a href="#">Recurring payments</a>
							</li>
						</ul>
					</div>
				</aside>
				<!--Right Part End -->
			</div>
		</div>
		<!-- //Main Container -->
		

		<!-- Footer Container -->
		<footer class="footer-container type_footer1">
			<!-- Footer Top Container -->
			<section class="footer-top">
				<div class="container content">
					<div class="">
						<div class=" collapsed-block ">
							<div class="module clearfix">
								<h3 class="modtitle">Contact Us	</h3>
								<div class="modcontent">
									<ul class="contact-address">
										<li><p><span class="fa fa-map-marker"></span><span>Address : </span> My Company, 42 avenue des Champs Elysées</p></li>
										<li><span class="fa fa-envelope-o"></span><span>Email : </span> <a href="#"> sales@yourcompany.com</a></li>
										<li><p><span class="fa fa-phone"> </span><span>Phone :</span> 0123456789</p> </li>
									</ul>
								</div>
								<div class="share-icon">
									<ul>
										<li class="facebook"><a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
										<li class="twitter"><a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
										<li class="google"><a href=""><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
										<li class="skype"><a href=""><i class="fa fa-skype" aria-hidden="true"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class=" box-information">
							<div class="module clearfix">
								<h3 class="modtitle">Information</h3>
								<div class="modcontent">
									<ul class="menu">
										<li><a href="about-us.html">About Us</a></li>
										<li><a href="faq.html">FAQ</a></li>
										<li><a href="order-history.html">Order history</a></li>
										<li><a href="order-information.html">Order information</a></li>
									</ul>
								</div>
							</div>
						</div>

						<div class=" box-extras">
							<div class="module clearfix">
								<h3 class="modtitle">Extras</h3>
								<div class="modcontent">
									<ul class="menu">
										<li><a href="contact.html">Contact Us</a></li>
										<li><a href="return.html">Returns</a></li>
										<li><a href="sitemap.html">Site Map</a></li>
										<li><a href="my-account.html">My Account</a></li>
									</ul>
								</div>
							</div>
						</div>

						<div class="box-account">
							<div class="module clearfix">
								<h3 class="modtitle">My Account</h3>
								<div class="modcontent">
									<ul class="menu">
										<li><a href="#">Brands</a></li>
										<li><a href="gift-voucher.html">Gift Vouchers</a></li>
										<li><a href="#">Affiliates</a></li>
										<li><a href="#">Specials</a></li>
										<li><a href="#" target="_blank">Our Blog</a></li>
									</ul>
								</div>
							</div>
						</div>



					</div>
				</div>
			</section>
		<?php include("include/footer.php"); ?>
		
		
<!-- Include Libs & Plugins
	============================================ -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script type="text/javascript" src="js/jquery-2.2.4.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/owl-carousel/owl.carousel.js"></script>
	<script type="text/javascript" src="js/themejs/libs.js"></script>
	<script type="text/javascript" src="js/unveil/jquery.unveil.js"></script>
	<script type="text/javascript" src="js/countdown/jquery.countdown.min.js"></script>
	<script type="text/javascript" src="js/dcjqaccordion/jquery.dcjqaccordion.2.8.min.js"></script>
	<script type="text/javascript" src="js/datetimepicker/moment.js"></script>
	<script type="text/javascript" src="js/datetimepicker/bootstrap-datetimepicker.min.js"></script>
	<script type="text/javascript" src="js/jquery-ui/jquery-ui.min.js"></script>
	
	
	<!-- Theme files
	============================================ -->
	
	
	<script type="text/javascript" src="js/themejs/so_megamenu.js"></script>
	<script type="text/javascript" src="js/themejs/addtocart.js"></script>
	<script type="text/javascript" src="js/themejs/application.js"></script>
	
</body>
</html>