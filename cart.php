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
    <title>Cart::eCommerce</title>
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
	<link href="css/checkout.css" rel="stylesheet">
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
				<li> Shopping Cart</li>
			</ul>
			<div class="row">
				<!--Middle Part Start-->
				<div id="content" class="col-sm-12">
					<h2 class="title">Shopping Cart</h2>
					<div class="table-responsive form-group">
						<table class="table table-bordered">
							<thead>
								<tr>
									<td class="text-center">Image</td>
									<td class="text-left">Product Name</td>		
									<td class="text-left">Quantity</td>
									<td class="text-right">Unit Price</td>
									<td class="text-right">Total</td>
								</tr>
							</thead>
							<tbody>
								<?php foreach($_SESSION['cart'] as $key=>$cart){ ?>
								<tr>
									<td class="text-center"><a href="product.php?id=<?=$key?>"><img width="70px" src="admin/uploads/product/<?=$cart['image']?>" alt="<?=$cart['name']?>" title="<?=$cart['name']?>" class="img-thumbnail" /></a></td>
									<td class="text-left"><a href="product.php?id=<?=$key?>"><?=$cart['name']?></a><br />
									</td>
									
									<td class="text-left" width="200px"><div class="input-group btn-block quantity">
										<input type="text" name="quantity" value="<?=$cart['quantity']?>" size="1" class="form-control" />
										<span class="input-group-btn">
											<button type="submit" data-toggle="tooltip" title="Update" class="btn btn-primary"><i class="fa fa-clone"></i></button>
											<button type="button" data-toggle="tooltip" title="Remove" class="btn btn-danger" onClick=""><i class="fa fa-times-circle"></i></button>
										</span></div></td>
										<td class="text-right">TK. <?=$cart['price']?></td>
										<td class="text-right">Tk. <?=$cart['price']*$cart['quantity']?></td>
									</tr>
								<?php } ?>
									
									</tbody>
								</table>
							</div>
							<h3 class="subtitle no-margin">What would you like to do next?</h3>
							<p>Choose if you have a discount code or reward points you want to use or would like to estimate your delivery cost.</p>
							<div class="panel-group" id="accordion">
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a href="#collapse-coupon" class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" aria-expanded="true">Use Coupon Code 
												
												<i class="fa fa-caret-down"></i>
											</a>
										</h4>
									</div>
									<div id="collapse-coupon" class="panel-collapse collapse in" aria-expanded="true">
										<div class="panel-body">
											<label class="col-sm-2 control-label" for="input-coupon">Enter your coupon here</label>
											<div class="input-group">
												<input type="text" name="coupon" value="" placeholder="Enter your coupon here" id="input-coupon" class="form-control">
												<span class="input-group-btn"><input type="button" value="Apply Coupon" id="button-coupon" data-loading-text="Loading..." class="btn btn-primary"></span>
											</div>
										</div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a href="#collapse-shipping" class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" aria-expanded="false">Estimate Shipping &amp; Taxes 
												
												<i class="fa fa-caret-down"></i>
											</a>
										</h4>
									</div>
									<div id="collapse-shipping" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
										<div class="panel-body">
											<p>Enter your destination to get a shipping estimate.</p>
											<div class="form-horizontal">
												<div class="form-group required">
													<label class="col-sm-2 control-label" for="input-country">Country</label>
													<div class="col-sm-10">
														<select name="country_id" id="input-country" class="form-control">
															<option value=""> --- Please Select --- </option>
															<option value="244">Aaland Islands</option>
															<option value="1">Afghanistan</option>
															<option value="2">Albania</option>
															<option value="3">Algeria</option>
														</select>
													</div>
												</div>
												<div class="form-group required">
													<label class="col-sm-2 control-label" for="input-zone">Region / State</label>
													<div class="col-sm-10">
														<select name="zone_id" id="input-zone" class="form-control">
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
												</div>
												<div class="form-group required">
													<label class="col-sm-2 control-label" for="input-postcode">Post Code</label>
													<div class="col-sm-10"><input type="text" name="postcode" value="" placeholder="Post Code" id="input-postcode" class="form-control"></div>
												</div>
												<button type="button" id="button-quote" data-loading-text="Loading..." class="btn btn-primary">Get Quotes</button>
											</div>
										</div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a href="#collapse-voucher" data-toggle="collapse" data-parent="#accordion" class="accordion-toggle collapsed" aria-expanded="false">Use Gift Certificate 
												
												<i class="fa fa-caret-down"></i>
											</a>
										</h4>
									</div>
									<div id="collapse-voucher" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
										<div class="panel-body">
											<label class="col-sm-2 control-label" for="input-voucher">Enter your gift certificate code here</label>
											<div class="input-group">
												<input type="text" name="voucher" value="" placeholder="Enter your gift certificate code here" id="input-voucher" class="form-control">
												<span class="input-group-btn"><input type="submit" value="Apply Gift Certificate" id="button-voucher" data-loading-text="Loading..." class="btn btn-primary"></span>
											</div>
										</div>
									</div>
								</div>
							</div>
							
							<div class="row">
								<div class="col-sm-4 col-sm-offset-8">
									<table class="table table-bordered">
										<tbody>
											<tr>
												<td class="text-right">
													<strong>Sub-Total:</strong>
												</td>
												<td class="text-right">$168.71</td>
											</tr>
											<tr>
												<td class="text-right">
													<strong>Flat Shipping Rate:</strong>
												</td>
												<td class="text-right">$4.69</td>
											</tr>
											<tr>
												<td class="text-right">
													<strong>Eco Tax (-2.00):</strong>
												</td>
												<td class="text-right">$5.62</td>
											</tr>
											<tr>
												<td class="text-right">
													<strong>VAT (20%):</strong>
												</td>
												<td class="text-right">$34.68</td>
											</tr>
											<tr>
												<td class="text-right">
													<strong>Total:</strong>
												</td>
												<td class="text-right">$213.70</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>

							<div class="buttons">
								<div class="pull-left"><a href="index.html" class="btn btn-primary">Continue Shopping</a></div>
								<div class="pull-right"><a href="checkout.html" class="btn btn-primary">Checkout</a></div>
							</div>
						</div>
						<!--Middle Part End -->
						
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
						</div></section>
						<!-- /Footer Top Container -->
						<div class="footer-mid">
							<div class=" help">
								<div class=" container">
									<div class=" row">
										<div class="footer-mid-left col-sm-6 col-xs-12">
											<h3>NEED HELP? </h3>
											<p>SUPPORT TEAM 24/7 AT (844) 555-8386</p>
										</div>
										<div class="footer-mid-right col-sm-6 col-xs-12">
											<div class="btn-sub">
												<i class="fa fa-envelope" aria-hidden="true"></i>
												<input class="autosearch-input form-control" type="text" value="" size="50" autocomplete="off" placeholder="Your Email Address..." name="subscribe">
												<button type="submit" class="button-search btn btn-primary" name="submit_subscribe">Subscribe</button>
											</div>

										</div>
									</div>
								</div>
							</div>
						</div>
					</footer>
					<!-- //end Footer Container -->

				</div>
				<!-- Social widgets -->
				<div class="footer-bottom-block ">
					<div class=" container">
						<div class="row">
							<div class="footer-bottom-header">
								<div class="col-xs-12 col-sm-12 col-md-5 download">
									<h3>Download Our App</h3>
									<a href=""><img src="img/demo/download/app.jpg" alt=""></a>
									<a href=""><img src="img/demo/download/ggplay.jpg" alt=""></a>
								</div>
								<div class="col-xs-12 col-sm-12 col-md-7 pay">
									<ul>
										<li><img src="img/demo/payment/visa.jpg" alt=""></li>
										<li><img src="img/demo/payment/meastro.jpg" alt=""></li>
										<li><img src="img/demo/payment/paypal.jpg" alt=""></li>
										<li><img src="img/demo/payment/union.jpg" alt=""></li>
										<li><img src="img/demo/payment/cirrus.jpg" alt=""></li>
										<li><img src="img/demo/payment/ebay.jpg" alt=""></li>
									</ul>
								</div>
							</div>
							<div class="text-footer-bot">
								<p>Destino - Premium Multipurpose HTML5/CSS3 Theme - Designed by <a href="#">SmartAddons.Com</a></p>
							</div>
							<div class="back-to-top"><i class="fa fa-angle-up"></i><span> Top </span></div>
						</div>
					</div>
				</div>	<!-- End Social widgets -->
				
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