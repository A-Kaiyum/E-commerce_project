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
	$getProduct = $product->getProductById($_GET['id']);
	
	?>
<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Basic page needs
    ============================================ -->
    <title><?=$getProduct['name']?></title>
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
    <link href="js/owl-carousel/assets/owl.carousel.css" rel="stylesheet">
    <link href="js/owl-carousel/assets/owl.theme.default.min.css" rel="stylesheet">
    <link href="css/themecss/lib.css" rel="stylesheet">
    <link href="js/jquery-ui/jquery-ui.min.css" rel="stylesheet">
    <link href="js/lightslider/lightslider.css" rel="stylesheet">

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
		<!-- Main Container  -->
		<div class="main-container container">
			<ul class="header-main product-v2">
				<li class="home"><a href="#" class="product-img">Home<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
				<li class="home"><a href="#" class="product-img">Smartphone & Tablets<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
				<li><a href="#" class="product-img"><?=$getProduct['name']?></a></li>
			</ul>

			<div class="row">
				<!--Middle Part Start-->
				<div id="content" class="col-md-12 col-sm-12 type-2">

					<div class="product-view row">
						<div class="left-content-product col-lg-12 col-xs-12">
							<div class="row">
								<div class="content-product-left  col-sm-6 col-xs-12 ">

									<div id="thumb-slider-vertical" class="thumb-vertical-outer">
										<span class="btn-more prev-thumb nt"><i class="fa fa-angle-up"></i></span>
										<span class="btn-more next-thumb nt"><i class="fa fa-angle-down"></i></span>
										<ul class="thumb-vertical">
											<li class="owl2-item">
												<a data-index="0" class="img thumbnail" data-image="img/demo/shop/product/resize/product-1.jpg" title="Canon EOS 5D">
													<img src="img/demo/shop/product/product-1.jpg" title="Canon EOS 5D" alt="Canon EOS 5D">
												</a>
											</li>
											<li class="owl2-item">
												<a data-index="1" class="img thumbnail " data-image="img/demo/shop/product/resize/product-2.jpg" title="Bint Beef">
													<img src="img/demo/shop/product/product-2.jpg" title="Bint Beef" alt="Bint Beef">
												</a>
											</li>
											<li class="owl2-item">
												<a data-index="2" class="img thumbnail" data-image="img/demo/shop/product/resize/product-3.jpg" title="Bint Beef">
													<img src="img/demo/shop/product/product-3.jpg" title="Bint Beef" alt="Bint Beef">
												</a>
											</li>
											<li class="owl2-item">
												<a data-index="3" class="img thumbnail" data-image="img/demo/shop/product/resize/product-4.jpg" title="Bint Beef">
													<img src="img/demo/shop/product/product-4.jpg" title="Bint Beef" alt="Bint Beef">
												</a>
											</li>
											<li class="owl2-item">
												<a data-index="0" class="img thumbnail" data-image="img/demo/shop/product/resize/product-1.jpg" title="Canon EOS 5D">
													<img src="img/demo/shop/product/product-1.jpg" title="Canon EOS 5D" alt="Canon EOS 5D">
												</a>
											</li>

										</ul>


									</div>
									<div class="large-image  vertical">
										<img itemprop="image" class="product-image-zoom" src="admin/uploads/product/<?php echo $getProduct['image']; ?>" data-zoom-image="admin/uploads/product/<?php echo $getProduct['image']; ?>" title="<?php echo $getProduct['name']; ?>" alt="<?php echo $getProduct['name']; ?>">
									</div>

								</div>

								<div class="content-product-right col-sm-6 col-xs-12">
									<div class="title-product">
										<h1><?=$getProduct['name']?></h1>
									</div>
									<!-- Review -->
									<div class="box-review form-group">
										<div class="ratings">
											<div class="rating-box">
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star gray"></i>
											</div>
										</div>

									</div>
									<div class="product-box-desc">
										<ul>
											<li>45 inch HD Touch Screen (1280 x 720)</li>
											<li>Android 4.4 KitKat OS</li>
											<li>1.4 GHz Quad Core™ Processor</li>
											<li>20 MP front and 28 megapixel CMOS rear camera</li>
										</ul>
									</div>
									<div class="product-label form-group">
										<div class="stock">
											<span>Availability:</span> <span class="instock">In Stock</span>
											<p>SKU: <?=$getProduct['sku']?></p>
										</div>
										<div class="product_page_price price" itemprop="offerDetails" itemscope="" itemtype="#">
									<?php if($getProduct['spacial_price']<=0) { ?>
<span class="price-new" itemprop="price"><?=$getProduct['price']?></span>
										<?php

									} else{ ?>
								<span class="price-new" itemprop="price"><?=$getProduct['spacial_price']?></span>
								<span class="price-old">TK. <?=$getProduct['price']?></span>
								 <?php } ?>
										</div>

									</div>
									<div id="product">
										<div class="form-group box-info-product">
											<div class="option quantity">
												<div class="input-group quantity-control" unselectable="on" style="-webkit-user-select: none;">
													<label>Qty:  </label>
					<input class="form-control" type="text" name="quantity" value="1" id="quantity">
						<input type="hidden" name="product_id" value="50">
													<span class="input-group-addon product_quantity_down"><i class="fa fa-angle-down" aria-hidden="true"></i></span>
													<span class="input-group-addon product_quantity_up"><i class="fa fa-angle-up" aria-hidden="true"></i></span>
													
												</div>
											</div>
											<div class="info-product-right">
												<div class="cart">
	<input type="button" data-toggle="tooltip" title="" value="Add to Cart" data-loading-text="Loading..." id="button-cart" class="btn btn-mega btn-lg" onclick="cart.add('<?=$getProduct['id']?>', '<?=$getProduct['name']?>', '<?=$getProduct['price']?>', '<?=$getProduct['image']?>');" data-original-title="Add to Cart">
												</div>
												<div class="add-to-links wish_comp">
													<ul class="blank list-inline">
														<li class="wishlist">
															<a class="icon" data-toggle="tooltip" title=""
															onclick="wishlist.add('50');" data-original-title="Add to Wish List"><i class="fa fa-heart"></i>
														</a>
													</li>
													<li class="compare">
														<a class="icon" data-toggle="tooltip" title=""
														onclick="compare.add('50');" data-original-title="Compare this Product"><i class="fa fa-exchange"></i>
													</a>
												</li>
											</ul>
										</div>
									</div>


								</div>

							</div>
							<!-- end box info product -->
							<div class="share">
								<p>Share This:</p>
								<div class="share-icon">
									<ul>
										<li class="facebook"><a href="#" class="product-img"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
										<li class="twitter"><a href="#" class="product-img"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
										<li class="google"><a href="#" class="product-img"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
										<li class="skype"><a href="#" class="product-img"><i class="fa fa-skype" aria-hidden="true"></i></a></li>
									</ul>
								</div>
							</div>

						</div>
					</div>
					<div class="row">
						<div class="col-sx-12">
							<div class="producttab ">
								<div class="tabsslider  col-xs-12">
									<ul class="nav nav-tabs">
										<li class="active"><a data-toggle="tab" href="#tab-1">Description</a></li>
										<li class="item_nonactive "><a data-toggle="tab" href="#tab-review">Reviews (1)</a></li>
										<li class="item_nonactive"><a data-toggle="tab" href="#tab-4">Tags</a></li>
										<li class="item_nonactive"><a data-toggle="tab" href="#tab-5">Custom Tab</a></li>
									</ul>
									<div class="tab-content col-xs-12">
										<div id="tab-1" class="tab-pane fade active in">
											<?php echo $getProduct['description']; ?>

										</div>
										<div id="tab-review" class="tab-pane fade  in">
											<form>
												<div id="review">
													<table class="table table-striped table-bordered">
														<tbody>
															<tr>
																<td style="width: 50%;"><strong>Super Administrator</strong></td>
																<td class="text-right">29/07/2015</td>
															</tr>
															<tr>
																<td colspan="2">
																	<p>Best this product opencart</p>
																	<div class="ratings">
																		<div class="rating-box">
																			<i class="fa fa-star"></i>
																			<i class="fa fa-star"></i>
																			<i class="fa fa-star"></i>
																			<i class="fa fa-star"></i>
																			<i class="fa fa-star gray"></i>
																		</div>
																	</div>
																</td>
															</tr>
														</tbody>
													</table>
													<div class="text-right"></div>
												</div>
												<h2 id="review-title">Write a review</h2>
												<div class="contacts-form">
													<div class="form-group"> <span class="icon icon-user"></span>
														<input type="text" name="name" class="form-control" value="Your Name" onblur="if (this.value == '') {this.value = 'Your Name';}" onfocus="if(this.value == 'Your Name') {this.value = '';}"> 
													</div>
													<div class="form-group"> <span class="icon icon-bubbles-2"></span>
														<textarea class="form-control" name="text" onblur="if (this.value == '') {this.value = 'Your Review';}" onfocus="if(this.value == 'Your Review') {this.value = '';}">Your Review</textarea>
													</div> 
													<span style="font-size: 11px;"><span class="text-danger">Note:</span>						HTML is not translated!</span>

													<div class="form-group">
														<b>Rating</b> <span>Bad</span>&nbsp;
														<input type="radio" name="rating" value="1"> &nbsp;
														<input type="radio" name="rating" value="2"> &nbsp;
														<input type="radio" name="rating" value="3"> &nbsp;
														<input type="radio" name="rating" value="4"> &nbsp;
														<input type="radio" name="rating" value="5"> &nbsp;<span>Good</span>

													</div>
													<div class="buttons clearfix"><a id="button-review" class="btn buttonGray">Continue</a></div>
												</div>
											</form>
										</div>
										<div id="tab-4" class="tab-pane fade">
											<a href="#" class="product-img">Monitor</a>,
											<a href="#" class="product-img">Apple</a>				
										</div>
										<div id="tab-5" class="tab-pane fade">
											<p>Lorem ipsum dolor sit amet, consetetur
												sadipscing elitr, sed diam nonumy eirmod
												tempor invidunt ut labore et dolore
												magna aliquyam erat, sed diam voluptua.
												At vero eos et accusam et justo duo
												dolores et ea rebum. Stet clita kasd
												gubergren, no sea takimata sanctus est
												Lorem ipsum dolor sit amet. Lorem ipsum
												dolor sit amet, consetetur sadipscing
												elitr, sed diam nonumy eirmod tempor
												invidunt ut labore et dolore magna aliquyam
												erat, sed diam voluptua. </p>
												<p>At vero eos et accusam et justo duo dolores
													et ea rebum. Stet clita kasd gubergren,
													no sea takimata sanctus est Lorem ipsum
													dolor sit amet. Lorem ipsum dolor sit
													amet, consetetur sadipscing elitr.</p>
													<p>Sed diam nonumy eirmod tempor invidunt
														ut labore et dolore magna aliquyam erat,
														sed diam voluptua. At vero eos et accusam
														et justo duo dolores et ea rebum. Stet
														clita kasd gubergren, no sea takimata
														sanctus est Lorem ipsum dolor sit amet.</p>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<!-- Product Tabs -->
						<!-- //Product Tabs -->

						<!-- Related Products -->
						

						


					</div>


				</div>
				<!--Middle Part End-->
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
	<script type="text/javascript" src="js/lightslider/lightslider.js"></script>
	
	<!-- Theme files
	============================================ -->
	
	
	<script type="text/javascript" src="js/themejs/so_megamenu.js"></script>
	<script type="text/javascript" src="js/themejs/addtocart.js"></script>
	<script type="text/javascript" src="js/themejs/application.js"></script>
	<script type="text/javascript" src="js/themejs/product-v2.js"></script>




</body>
</html>