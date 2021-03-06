<?php
	session_start();
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
    <title>Customer::Registration</title>
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
				<li class="home"><a href="#">Home   </a><i class="fa fa-angle-right" aria-hidden="true"></i></li><li class="home"><a href="#">Account   </a><i class="fa fa-angle-right" aria-hidden="true"></i></li>
				<li>  Register</li>
			</ul>
			
			<div class="row">
				<div id="content" class="col-sm-12">
					<h2 class="title">Register Account</h2>
					<p>If you already have an account with us, please login at the <a href="login.php">login page</a>.</p>
					<?php if(isset($_SESSION['message'])) echo $_SESSION['message']; ?>
					<form action="admin/coltroller/CustomerController.php" method="post" enctype="multipart/form-data" class="form-horizontal account-register clearfix">
						<fieldset id="account">
							<legend>Your Personal Details</legend>
							<div class="form-group required" style="display: none;">
								<label class="col-sm-2 control-label">Customer Group</label>
								<div class="col-sm-10">
									<div class="radio">
										<label>
											<input type="radio" name="customer_group_id" value="1" checked="checked"> Default
										</label>
									</div>
								</div>
							</div>
							<div class="form-group required">
								<label class="col-sm-2 control-label" for="input-name">Name</label>
								<div class="col-sm-10">
									<input type="text" name="name" value="" placeholder="Enter your full name" id="input-name" class="form-control">
								</div>
							</div>
							
							<div class="form-group required">
								<label class="col-sm-2 control-label" for="input-email">E-Mail</label>
								<div class="col-sm-10">
									<input type="email" name="email" value="" placeholder="E-Mail" id="input-email" class="form-control">
								</div>
							</div>
							<div class="form-group required">
								<label class="col-sm-2 control-label" for="input-telephone">Telephone</label>
								<div class="col-sm-10">
									<input type="tel" name="phone" value="" placeholder="Telephone" id="input-telephone" class="form-control">
								</div>
							</div>
							
						</fieldset>
						<fieldset id="address">
							<legend>Your Address</legend>
							<div class="form-group">
								<label class="col-sm-2 control-label" for="input-company">Company</label>
								<div class="col-sm-10">
									<input type="text" name="company" value="" placeholder="Company" id="input-company" class="form-control">
								</div>
							</div>
							<div class="form-group required">
								<label class="col-sm-2 control-label" for="input-address">Address</label>
								<div class="col-sm-10">
									<input type="text" name="address" value="" placeholder="Address" id="input-address" class="form-control">
								</div>
							</div>
							
							<div class="form-group required">
								<label class="col-sm-2 control-label" for="input-city">City</label>
								<div class="col-sm-10">
									<input type="text" name="city" value="" placeholder="City" id="input-city" class="form-control">
								</div>
							</div>
							<div class="form-group required">
								<label class="col-sm-2 control-label" for="input-postcode">Post Code</label>
								<div class="col-sm-10">
									<input type="text" name="postcode" value="" placeholder="Post Code" id="input-postcode" class="form-control">
								</div>
							</div>
							
						</fieldset>
						<fieldset>
							<legend>Your Password</legend>
							<div class="form-group required">
								<label class="col-sm-2 control-label" for="input-password">Password</label>
								<div class="col-sm-10">
									<input type="password" name="password" value="" placeholder="Password" id="input-password" class="form-control">
								</div>
							</div>
							<div class="form-group required">
								<label class="col-sm-2 control-label" for="input-confirm">Password Confirm</label>
								<div class="col-sm-10">
									<input type="password" name="confirm" value="" placeholder="Password Confirm" id="input-confirm" class="form-control">
								</div>
							</div>
						</fieldset>
						<input type="hidden" name="action" value="save_customer">
						<div class="buttons">
							<div class="pull-right">I have read and agree to the <a href="#" class="agree"><b>Terms & Conditions</b></a>
								<input class="box-checkbox" type="checkbox" name="agree" value="1" required=""> &nbsp;
								<input type="submit" name="submit" value="Continue" class="btn btn-primary">
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
		<!-- //Main Container -->
		

		<!-- Footer Container -->
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
<?php unset($_SESSION['message']); ?>
</html>