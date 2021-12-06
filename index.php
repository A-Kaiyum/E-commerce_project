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
    <title>eCommerce</title>
    <meta charset="utf-8">
    <meta name="keywords" content="boostrap, responsive, html5, css3, jquery, theme, multicolor, parallax, retina, business" />
    <meta name="author" content="Magentech">
    <meta name="robots" content="index, follow" />

	<!-- Mobile specific metas
	============================================ -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	
	<!-- Favicon
	============================================ -->

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

	<!-- Theme CSS
	============================================ -->
	<link href="css/themecss/so_megamenu.css" rel="stylesheet">
	<link href="css/themecss/so-categories.css" rel="stylesheet">
	<link href="css/themecss/so-listing-tabs.css" rel="stylesheet">
	<link href="css/themecss/so-newletter-popup.css" rel="stylesheet">
	<link href="css/themecss/just_purchased_notification.css" rel=stylesheet>

	<link href="css/footer1.css" rel="stylesheet">
	<link href="css/header1.css" rel="stylesheet">
	<link id="color_scheme" href="css/theme.css" rel="stylesheet">
	
	
</head>

<body class="common-home res layout-home1">



	<div id="wrapper" class="wrapper-full banners-effect-7">

		

		<!-- Header Container  -->
		 <?php include("include/header.php"); ?>
		<!-- //Header Container  -->

		<!-- Block Spotlight1  -->
		<section class="so-spotlight1 ">
			<div class="container">
				<div class="row">
					<?php include("include/sidebar-menu.php"); ?>
					<div id="yt_header_right" class="col-sm-12 col-md-9 col-lg-9 ">
						<div class="slider-container "> 
							<div class="owl-carousel owl-slider-1 owl" data-dots="yes" data-nav="yes" data-loop="yes" data-items_xs="1" data-items_sm="1" data-items_md="1" data-margin="0" >
								<div class="img-slider">
									<a href="#"><img src="img/demo/slider/slider-1.jpg" alt=""></a>
								</div>
								<div class="img-slider">
									<a href="#"><img src="img/demo/slider/slider-2.jpg" alt=""></a>
								</div>
								<div class="img-slider">
									<a href="#"><img src="img/demo/slider/slider-3.jpg" alt=""></a>
								</div>
							</div>

							
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12 col-sm-12 four-block">
						<div class="modcontent clearfix">
							<div class="policy-detail">
								<div class="banner-policy">
									<div class="policy policy1">
										<a href="#"> 
											<span class="ico-policy"></span> 
											<div class="service-info">
												<span class="title">Free Shipping & Return</span> <br> <span>Free shipping on orders over $49</span> 
											</div>
										</a>
									</div>
									<div class="policy policy2">
										<a href="#">
											<span class="ico-policy"></span>
											<div class="service-info">
												<span class="title">Money Guarantee</span> <br><span>30 days money back guarantee</span>
											</div>
										</a>
									</div>
									<div class="policy policy3">
										<a href="#"> 
											<span class="ico-policy"></span> 
											<div class="service-info">
												<span class="title">Online Support</span> <br><span>We support online 24/24 on day</span> 
											</div>
										</a></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>  
			</section>
			<!-- //Block Spotlight1  -->

			<!-- Main Container  -->
			<div class="main-container container">

				<div class="row">
					<div class="smartphone-tablet col-sm-12">
						<h3 class="modtitle"> Latest Products  </h3>
						<hr>
						<hr>
						<hr>
						<div class="smartphone-tablet-owl">
							<div class=" owl-carousel related-owl " data-dots="yes" data-nav="yes" data-loop="no" data-items_xs="1" data-items_sm="3" data-items_md="5" data-margin="10" >
								<?php foreach($getProducts as $key=>$products) { ?>
								<div class="product-layout">
									<div class="product-item-container">
										<div class="left-block">
											<div class="product-image-container  second_img ">
												<a href="#" class="product-img"><img src="admin/uploads/product/<?php echo $products['image']; ?>" alt=""></a>
												<!--Sale Label-->
												<span class="new">New</span>

												<div class="hover">
													<ul>
														<li class="icon-heart"><a class="wishlist"   data-toggle="tooltip" title="" onclick="wishlist.add('42');" data-original-title="Add to Wish List"><i class="fa fa-heart"></i></a></li>
														<li class="icon-exchange"><a class="compare"   data-toggle="tooltip" title="" onclick="compare.add('42');" data-original-title="Compare this Product"><i class="fa fa-exchange"></i></a></li>
														<li class="icon-search"><a class="quickview iframe-link " data-fancybox-type="iframe" href="quickview.html">  <i class="fa fa-search" aria-hidden="true"></i></a></li>
													</ul>
												</div>
											</div>
										</div>
										<div class="right-block">
											<div class="caption">
												<h4><a href="product.php?id=<?=$products['id']?>"><?php echo $products['name']; ?></a></h4>		
												<div class="ratings">
													<div class="rating-box">
														<span class=""><i class="fa fa-star "></i></span>
														<span class=""><i class="fa fa-star "></i></span>
														<span class=""><i class="fa fa-star "></i></span>
														<span class=""><i class="fa fa-star "></i></span>
														<span class="gray"><i class="fa fa-star "></i></span>
													</div>
												</div>

												<div class="price">
													<span class="price-new">Tk. 74.00</span>
													<span class="price-old">TK. <?php echo $products['price']; ?></span>		   
												</div>
												<div class="description item-desc hidden">
													<p><?php echo $products['description']; ?></p>
												</div>
											</div>

											<div class="button-group">
												<button class="addToCart btn btn-default "   data-toggle="tooltip" title="" onclick="cart.add('42', '1');" data-original-title="Add to Cart"> <span class="">Add to Cart</span></button>
											</div>
										</div><!-- right block -->
									</div>
								</div>
								<?php } ?>


							
							</div>
						</div>
					</div>
					<div class="module col-sm-12 hidden-xs">
						<div class="modcontent clearfix">
							<div class="banner-wraps ">
								<div class="m-banner ">
									<div class="banners htmlconten1 row">
										<div class="banners banner1-1 col-lg-6 col-md-6 col-sm-6 col-xs-12">
											<div>
												<a href="#"><img src="img/demo/banner/banner1-1.jpg" alt="banner1"></a>
											</div>
										</div>
										<div class=" banners banner1-2 col-sm-6 col-xs-12">
											<div>
												<a href="#"><img src="img/demo/banner/banner1-2.jpg" alt="banner1"></a>
											</div>
										</div>
									</div>
									<div class="htmlconten2 row">
										<div class="banners banner2-1 col-sm-3 col-xs-12">
											<div>
												<a href="#"><img src="img/demo/banner/banner2-1.jpg" alt="banner1"></a>
											</div>
										</div>
										<div class="banners banner2-2 col-sm-6 col-xs-12">
											<div>
												<a href="#"><img src="img/demo/banner/banner2-2.jpg" alt="banner1"></a>
											</div>
										</div>
										<div class="banners banner2-3 col-sm-3 col-xs-12">
											<div>
												<a href="#"><img src="img/demo/banner/banner2-3.jpg" alt="banner1"></a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					

					<div class="module no-margin titleLine col-sm-12 latest-blog">
						<h3 class="modtitle">Latest Blog</h3>
						<hr><hr><hr>
						<div class="latest-blog-owl">
							<div class="owl-carousel latest-owl" data-dots="yes" data-nav="yes" data-loop="yes" data-items_xs="1" data-items_sm="3" data-items_md="4" data-margin="10" >
								<div class="itemBlogImg">
									<div class="article-image ">
										<div>
											<div class="day">
												<p>24</p>
												<p>Dec</p>
											</div>

											<a class="popup-gallery" href="blog-detail.html"><img src="img/demo/blog/blog-1.jpg" alt="Kire tuma demonstraverunt lector">
												<p class="text">Lorem Ipsum is simply dummy text of the printing.</p></a>
											</div>
										</div>
									</div>
									<div class="itemBlogImg">
										<div class="article-image ">
											<div>
												<div class="day">
													<p>24</p>
													<p>Dec</p>
												</div>

												<a class="popup-gallery" href="blog-detail.html"><img src="img/demo/blog/blog-2.jpg" alt="Kire tuma demonstraverunt lector">
													<p class="text">Lorem Ipsum is simply dummy text of the printing.</p></a>
												</div>
											</div>
										</div>
										<div class="itemBlogImg">
											<div class="article-image ">
												<div>
													<div class="day">
														<p>24</p>
														<p>Dec</p>
													</div>

													<a class="popup-gallery" href="blog-detail.html"><img src="img/demo/blog/blog-3.jpg" alt="Kire tuma demonstraverunt lector">
														<p class="text">Lorem Ipsum is simply dummy text of the printing.</p></a>
													</div>
												</div>
											</div>
											<div class="itemBlogImg">
												<div class="article-image ">
													<div>
														<div class="day">
															<p>24</p>
															<p>Dec</p>
														</div>

														<a class="popup-gallery" href="blog-detail.html"><img src="img/demo/blog/blog-4.jpg" alt="Kire tuma demonstraverunt lector">
															<p class="text">Lorem Ipsum is simply dummy text of the printing.</p></a>
														</div>
													</div>
												</div>
												<div class="itemBlogImg">
													<div class="article-image ">
														<div>
															<div class="day">
																<p>24</p>
																<p>Dec</p>
															</div>

															<a class="popup-gallery" href="blog-detail.html"><img src="img/demo/blog/blog-5.jpg" alt="Kire tuma demonstraverunt lector">
																<p class="text">Lorem Ipsum is simply dummy text of the printing.</p></a>
															</div>
														</div>
													</div>
													<div class="itemBlogImg">
														<div class="article-image ">
															<div>
																<div class="day">
																	<p>24</p>
																	<p>Dec</p>
																</div>

																<a class="popup-gallery" href="blog-detail.html"><img src="img/demo/blog/blog-6.jpg" alt="Kire tuma demonstraverunt lector">
																	<p class="text">Lorem Ipsum is simply dummy text of the printing.</p></a>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>

										</div>
									</div>
								</div>
								<!-- //Main Container -->
								<!-- Block Spotlight3  -->
								<section class="so-spotlight3">
									<div class="container">
										<div class="row">
											<div id="so_categories_173761471880018" class="so-categories module titleLine preset01-4 preset02-3 preset03-3 preset04-1 preset05-1">
												<div class="wrap-categories">
													<div class="col-xs-12 col-sm-6  col-md-3 col-lg-3 new-arrivals ">
														<div class="module latest-product titleLine">
															<h3 class="modtitle">New Arrivals</h3>
															<hr>
															<hr>
															<hr>
															<div class="modcontent owl-carousel owl-new-arrivals " data-dots="yes" data-nav="yes" data-loop="yes" data-items_xs="1" data-items_sm="1" data-items_md="1" data-margin="10">
																<div class="product-latest-item">
																	<div class="media">
																		<div class="media-left">
																			<a href="product.html"><img src="img/demo/shop/product/product-2.jpg" alt="Cisi Chicken" title="Cisi Chicken" class="img-responsive" style="width: 78px; height: 104px;"></a>
																		</div>
																		<div class="media-body">
																			<div class="caption">
																				<h4><a href="product.html">Sunt Molup</a></h4>


																				<div class="ratings">
																					<div class="rating-box">
																						<span class=""><i class="fa fa-star "></i></span>
																						<span class=""><i class="fa fa-star "></i></span>
																						<span class=""><i class="fa fa-star "></i></span>
																						<span class=""><i class="fa fa-star "></i></span>
																						<span class=""><i class="fa fa-star "></i></span>
																					</div>
																				</div>
																				<div class="price">
																					<span class="price-new">$100.00</span>
																				</div>
																			</div>

																		</div>
																	</div>

																	<div class="media">
																		<div class="media-left">
																			<a href="product.html"><img src="img/demo/shop/product/product-3.jpg" alt="Cisi Chicken" title="Cisi Chicken" class="img-responsive" style="width: 78px; height: 104px;"></a>
																		</div>
																		<div class="media-body">
																			<div class="caption">
																				<h4><a href="product.html">Et Spare</a></h4>


																				<div class="ratings">
																					<div class="rating-box">
																						<span class=""><i class="fa fa-star "></i></span>
																						<span class=""><i class="fa fa-star "></i></span>
																						<span class=""><i class="fa fa-star "></i></span>
																						<span class=""><i class="fa fa-star "></i></span>
																						<span class="gray"><i class="fa fa-star "></i></span>
																					</div>
																				</div>
																				<div class="price">
																					<span class="price-new">$36.00</span>
																				</div>
																			</div>

																		</div>
																	</div>

																	<div class="media">
																		<div class="media-left">
																			<a href="product.html"><img src="img/demo/shop/product/product-4.jpg" alt="Cisi Chicken" title="Cisi Chicken" class="img-responsive" style="width: 78px; height: 104px;"></a>
																		</div>
																		<div class="media-body">
																			<div class="caption">
																				<h4><a href="product.html">Cisi Chicken</a></h4>


																				<div class="ratings">
																					<div class="rating-box">
																						<span class=""><i class="fa fa-star "></i></span>
																						<span class=""><i class="fa fa-star "></i></span>
																						<span class=""><i class="fa fa-star "></i></span>
																						<span class=""><i class="fa fa-star "></i></span>
																						<span class="gray"><i class="fa fa-star"></i></span>
																					</div>
																				</div>
																				<div class="price">
																					<span class="price-new">$71.00</span>
																				</div>
																			</div>

																		</div>
																	</div>
																</div>
																<div class="product-latest-item">
																	<div class="media">
																		<div class="media-left">
																			<a href="product.html"><img src="img/demo/shop/product/product-5.jpg" alt="Cisi Chicken" title="Cisi Chicken" class="img-responsive" style="width: 78px; height: 104px;"></a>
																		</div>
																		<div class="media-body">
																			<div class="caption">
																				<h4><a href="product.html">Sunt Molup</a></h4>


																				<div class="ratings">
																					<div class="rating-box">
																						<span class=""><i class="fa fa-star "></i></span>
																						<span class=""><i class="fa fa-star "></i></span>
																						<span class=""><i class="fa fa-star "></i></span>
																						<span class=""><i class="fa fa-star "></i></span>
																						<span class=""><i class="fa fa-star "></i></span>
																					</div>
																				</div>
																				<div class="price">
																					<span class="price-new">$126.00</span>
																				</div>
																			</div>

																		</div>
																	</div>

																	<div class="media">
																		<div class="media-left">
																			<a href="product.html"><img src="img/demo/shop/product/product-6.jpg" alt="Cisi Chicken" title="Cisi Chicken" class="img-responsive" style="width: 78px; height: 104px;"></a>
																		</div>
																		<div class="media-body">
																			<div class="caption">
																				<h4><a href="product.html">Et Spare</a></h4>


																				<div class="ratings">
																					<div class="rating-box">
																						<span class=""><i class="fa fa-star "></i></span>
																						<span class=""><i class="fa fa-star "></i></span>
																						<span class=""><i class="fa fa-star "></i></span>
																						<span class=""><i class="fa fa-star "></i></span>
																						<span class="gray"><i class="fa fa-star "></i></span>
																					</div>
																				</div>
																				<div class="price">
																					<span class="price-new">$65.00</span>
																				</div>
																			</div>

																		</div>
																	</div>

																	<div class="media">
																		<div class="media-left">
																			<a href="product.html"><img src="img/demo/shop/product/product-7.jpg" alt="Cisi Chicken" title="Cisi Chicken" class="img-responsive" style="width: 78px; height: 104px;"></a>
																		</div>
																		<div class="media-body">
																			<div class="caption">
																				<h4><a href="product.html">Cisi Chicken</a></h4>


																				<div class="ratings">
																					<div class="rating-box">
																						<span class=""><i class="fa fa-star "></i></span>
																						<span class=""><i class="fa fa-star "></i></span>
																						<span class=""><i class="fa fa-star "></i></span>
																						<span class=""><i class="fa fa-star "></i></span>
																						<span class="gray"><i class="fa fa-star"></i></span>
																					</div>
																				</div>
																				<div class="price">
																					<span class="price-new">$68.00</span>
																				</div>
																			</div>

																		</div>
																	</div>
																</div>
																<div class="product-latest-item">
																	<div class="media">
																		<div class="media-left">
																			<a href="product.html"><img src="img/demo/shop/product/product-8.jpg" alt="Cisi Chicken" title="Cisi Chicken" class="img-responsive" style="width: 78px; height: 104px;"></a>
																		</div>
																		<div class="media-body">
																			<div class="caption">
																				<h4><a href="product.html">Sunt Molup</a></h4>


																				<div class="ratings">
																					<div class="rating-box">
																						<span class=""><i class="fa fa-star "></i></span>
																						<span class=""><i class="fa fa-star "></i></span>
																						<span class=""><i class="fa fa-star "></i></span>
																						<span class=""><i class="fa fa-star "></i></span>
																						<span class=""><i class="fa fa-star "></i></span>
																					</div>
																				</div>
																				<div class="price">
																					<span class="price-new">$130.00</span>
																					<span class="price-old">$165.00</span>
																				</div>
																			</div>

																		</div>
																	</div>

																	<div class="media">
																		<div class="media-left">
																			<a href="product.html"><img src="img/demo/shop/product/product-1.jpg" alt="Cisi Chicken" title="Cisi Chicken" class="img-responsive" style="width: 78px; height: 104px;"></a>
																		</div>
																		<div class="media-body">
																			<div class="caption">
																				<h4><a href="product.html">Et Spare</a></h4>


																				<div class="ratings">
																					<div class="rating-box">
																						<span class=""><i class="fa fa-star "></i></span>
																						<span class=""><i class="fa fa-star "></i></span>
																						<span class=""><i class="fa fa-star "></i></span>
																						<span class=""><i class="fa fa-star "></i></span>
																						<span class="gray"><i class="fa fa-star "></i></span>
																					</div>
																				</div>
																				<div class="price">
																					<span class="price-new">$69.00</span>
																					<span class="price-old">$89.00</span>
																				</div>
																			</div>

																		</div>
																	</div>

																	<div class="media">
																		<div class="media-left">
																			<a href="product.html"><img src="img/demo/shop/product/product-2.jpg" alt="Cisi Chicken" title="Cisi Chicken" class="img-responsive" style="width: 78px; height: 104px;"></a>
																		</div>
																		<div class="media-body">
																			<div class="caption">
																				<h4><a href="product.html">Cisi Chicken</a></h4>


																				<div class="ratings">
																					<div class="rating-box">
																						<span class=""><i class="fa fa-star "></i></span>
																						<span class=""><i class="fa fa-star "></i></span>
																						<span class=""><i class="fa fa-star "></i></span>
																						<span class=""><i class="fa fa-star "></i></span>
																						<span class="gray"><i class="fa fa-star"></i></span>
																					</div>
																				</div>
																				<div class="price">
																					<span class="price-new">$96.00</span>
																				</div>
																			</div>

																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 bestsellers">
														<div class="module latest-product titleLine">
															<h3 class="modtitle">Bestsellers</h3>
															<hr>
															<hr>
															<hr>
															<div class="modcontent">
																<div class="owl-carousel owl-bestsellers" data-nav="yes" data-loop="yes" data-margin="0" data-items_xs="1" data-items_sm="1" data-items_md="1">
																	<div class="product-latest-item">
																		<div class="media">
																			<div class="media-left">
																				<a href="product.html"><img src="img/demo/shop/product/product-3.jpg" alt="Cisi Chicken" title="Cisi Chicken" class="img-responsive" style="width: 78px; height: 104px;"></a>
																			</div>
																			<div class="media-body">
																				<div class="caption">
																					<h4><a href="product.html">Sunt Molup</a></h4>


																					<div class="ratings">
																						<div class="rating-box">
																							<span class=""><i class="fa fa-star "></i></span>
																							<span class=""><i class="fa fa-star "></i></span>
																							<span class=""><i class="fa fa-star "></i></span>
																							<span class=""><i class="fa fa-star "></i></span>
																							<span class=""><i class="fa fa-star "></i></span>
																						</div>
																					</div>
																					<div class="price">
																						<span class="price-new">$98.00</span>
																					</div>
																				</div>

																			</div>
																		</div>

																		<div class="media">
																			<div class="media-left">
																				<a href="product.html"><img src="img/demo/shop/product/product-1.jpg" alt="Cisi Chicken" title="Cisi Chicken" class="img-responsive" style="width: 78px; height: 104px;"></a>
																			</div>
																			<div class="media-body">
																				<div class="caption">
																					<h4><a href="product.html">Et Spare</a></h4>


																					<div class="ratings">
																						<div class="rating-box">
																							<span class=""><i class="fa fa-star "></i></span>
																							<span class=""><i class="fa fa-star "></i></span>
																							<span class=""><i class="fa fa-star "></i></span>
																							<span class=""><i class="fa fa-star "></i></span>
																							<span class="gray"><i class="fa fa-star "></i></span>
																						</div>
																					</div>
																					<div class="price">
																						<span class="price-new">$165.00</span>
																					</div>
																				</div>

																			</div>
																		</div>

																		<div class="media">
																			<div class="media-left">
																				<a href="product.html"><img src="img/demo/shop/product/product-2.jpg" alt="Cisi Chicken" title="Cisi Chicken" class="img-responsive" style="width: 78px; height: 104px;"></a>
																			</div>
																			<div class="media-body">
																				<div class="caption">
																					<h4><a href="product.html">Cisi Chicken</a></h4>


																					<div class="ratings">
																						<div class="rating-box">
																							<span class=""><i class="fa fa-star "></i></span>
																							<span class=""><i class="fa fa-star "></i></span>
																							<span class=""><i class="fa fa-star "></i></span>
																							<span class=""><i class="fa fa-star "></i></span>
																							<span class="gray"><i class="fa fa-star"></i></span>
																						</div>
																					</div>
																					<div class="price">
																						<span class="price-new">$59.00</span>
																					</div>
																				</div>

																			</div>
																		</div>
																	</div>
																	<div class="product-latest-item">
																		<div class="media">
																			<div class="media-left">
																				<a href="product.html"><img src="img/demo/shop/product/product-3.jpg" alt="Cisi Chicken" title="Cisi Chicken" class="img-responsive" style="width: 78px; height: 104px;"></a>
																			</div>
																			<div class="media-body">
																				<div class="caption">
																					<h4><a href="product.html">Sunt Molup</a></h4>


																					<div class="ratings">
																						<div class="rating-box">
																							<span class=""><i class="fa fa-star "></i></span>
																							<span class=""><i class="fa fa-star "></i></span>
																							<span class=""><i class="fa fa-star "></i></span>
																							<span class=""><i class="fa fa-star "></i></span>
																							<span class=""><i class="fa fa-star "></i></span>
																						</div>
																					</div>
																					<div class="price">
																						<span class="price-new">$98.00</span>
																					</div>
																				</div>

																			</div>
																		</div>

																		<div class="media">
																			<div class="media-left">
																				<a href="product.html"><img src="img/demo/shop/product/product-1.jpg" alt="Cisi Chicken" title="Cisi Chicken" class="img-responsive" style="width: 78px; height: 104px;"></a>
																			</div>
																			<div class="media-body">
																				<div class="caption">
																					<h4><a href="product.html">Et Spare</a></h4>


																					<div class="ratings">
																						<div class="rating-box">
																							<span class=""><i class="fa fa-star "></i></span>
																							<span class=""><i class="fa fa-star "></i></span>
																							<span class=""><i class="fa fa-star "></i></span>
																							<span class=""><i class="fa fa-star "></i></span>
																							<span class="gray"><i class="fa fa-star "></i></span>
																						</div>
																					</div>
																					<div class="price">
																						<span class="price-new">$165.00</span>
																					</div>
																				</div>

																			</div>
																		</div>

																		<div class="media">
																			<div class="media-left">
																				<a href="product.html"><img src="img/demo/shop/product/product-2.jpg" alt="Cisi Chicken" title="Cisi Chicken" class="img-responsive" style="width: 78px; height: 104px;"></a>
																			</div>
																			<div class="media-body">
																				<div class="caption">
																					<h4><a href="product.html">Cisi Chicken</a></h4>


																					<div class="ratings">
																						<div class="rating-box">
																							<span class=""><i class="fa fa-star "></i></span>
																							<span class=""><i class="fa fa-star "></i></span>
																							<span class=""><i class="fa fa-star "></i></span>
																							<span class=""><i class="fa fa-star "></i></span>
																							<span class="gray"><i class="fa fa-star"></i></span>
																						</div>
																					</div>
																					<div class="price">
																						<span class="price-new">$59.00</span>
																					</div>
																				</div>

																			</div>
																		</div>
																	</div>
																</div>
																
															</div>
														</div>
													</div>
													<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 featured">
														<div class="module latest-product titleLine">
															<h3 class="modtitle">Featured</h3>
															<hr>
															<hr>
															<hr>
															<div class="modcontent">
																<div class="owl-carousel owl-featured" data-nav="yes" data-loop="yes" data-margin="0" data-items_xs="1" data-items_sm="1" data-items_md="1">
																	<div class="product-latest-item">
																		<div class="media">
																			<div class="media-left">
																				<a href="product.html"><img src="img/demo/shop/product/product-3.jpg" alt="Cisi Chicken" title="Cisi Chicken" class="img-responsive" style="width: 78px; height: 104px;"></a>
																			</div>
																			<div class="media-body">
																				<div class="caption">
																					<h4><a href="product.html">Sunt Molup</a></h4>


																					<div class="ratings">
																						<div class="rating-box">
																							<span class=""><i class="fa fa-star "></i></span>
																							<span class=""><i class="fa fa-star "></i></span>
																							<span class=""><i class="fa fa-star "></i></span>
																							<span class=""><i class="fa fa-star "></i></span>
																							<span class=""><i class="fa fa-star "></i></span>
																						</div>
																					</div>
																					<div class="price">
																						<span class="price-new">$78.00</span>
																						<span class="price-old">$105.00</span>
																					</div>
																				</div>

																			</div>
																		</div>

																		<div class="media">
																			<div class="media-left">
																				<a href="product.html"><img src="img/demo/shop/product/product-4.jpg" alt="Cisi Chicken" title="Cisi Chicken" class="img-responsive" style="width: 78px; height: 104px;"></a>
																			</div>
																			<div class="media-body">
																				<div class="caption">
																					<h4><a href="product.html">Et Spare</a></h4>


																					<div class="ratings">
																						<div class="rating-box">
																							<span class=""><i class="fa fa-star "></i></span>
																							<span class=""><i class="fa fa-star "></i></span>
																							<span class=""><i class="fa fa-star "></i></span>
																							<span class=""><i class="fa fa-star "></i></span>
																							<span class="gray"><i class="fa fa-star "></i></span>
																						</div>
																					</div>
																					<div class="price">
																						<span class="price-new">$145.00</span>
																					</div>
																				</div>

																			</div>
																		</div>

																		<div class="media">
																			<div class="media-left">
																				<a href="product.html"><img src="img/demo/shop/product/product-5.jpg" alt="Cisi Chicken" title="Cisi Chicken" class="img-responsive" style="width: 78px; height: 104px;"></a>
																			</div>
																			<div class="media-body">
																				<div class="caption">
																					<h4><a href="product.html">Cisi Chicken</a></h4>


																					<div class="ratings">
																						<div class="rating-box">
																							<span class=""><i class="fa fa-star "></i></span>
																							<span class=""><i class="fa fa-star "></i></span>
																							<span class=""><i class="fa fa-star "></i></span>
																							<span class=""><i class="fa fa-star "></i></span>
																							<span class="gray"><i class="fa fa-star"></i></span>
																						</div>
																					</div>
																					<div class="price">
																						<span class="price-new">$72.00</span>
																					</div>
																				</div>

																			</div>
																		</div>
																	</div>
																	<div class="product-latest-item">
																		<div class="media">
																			<div class="media-left">
																				<a href="product.html"><img src="img/demo/shop/product/product-3.jpg" alt="Cisi Chicken" title="Cisi Chicken" class="img-responsive" style="width: 78px; height: 104px;"></a>
																			</div>
																			<div class="media-body">
																				<div class="caption">
																					<h4><a href="product.html">Sunt Molup</a></h4>


																					<div class="ratings">
																						<div class="rating-box">
																							<span class=""><i class="fa fa-star "></i></span>
																							<span class=""><i class="fa fa-star "></i></span>
																							<span class=""><i class="fa fa-star "></i></span>
																							<span class=""><i class="fa fa-star "></i></span>
																							<span class=""><i class="fa fa-star "></i></span>
																						</div>
																					</div>
																					<div class="price">
																						<span class="price-new">$78.00</span>
																						<span class="price-old">$105.00</span>
																					</div>
																				</div>

																			</div>
																		</div>

																		<div class="media">
																			<div class="media-left">
																				<a href="product.html"><img src="img/demo/shop/product/product-4.jpg" alt="Cisi Chicken" title="Cisi Chicken" class="img-responsive" style="width: 78px; height: 104px;"></a>
																			</div>
																			<div class="media-body">
																				<div class="caption">
																					<h4><a href="product.html">Et Spare</a></h4>


																					<div class="ratings">
																						<div class="rating-box">
																							<span class=""><i class="fa fa-star "></i></span>
																							<span class=""><i class="fa fa-star "></i></span>
																							<span class=""><i class="fa fa-star "></i></span>
																							<span class=""><i class="fa fa-star "></i></span>
																							<span class="gray"><i class="fa fa-star "></i></span>
																						</div>
																					</div>
																					<div class="price">
																						<span class="price-new">$145.00</span>
																					</div>
																				</div>

																			</div>
																		</div>

																		<div class="media">
																			<div class="media-left">
																				<a href="product.html"><img src="img/demo/shop/product/product-5.jpg" alt="Cisi Chicken" title="Cisi Chicken" class="img-responsive" style="width: 78px; height: 104px;"></a>
																			</div>
																			<div class="media-body">
																				<div class="caption">
																					<h4><a href="product.html">Cisi Chicken</a></h4>


																					<div class="ratings">
																						<div class="rating-box">
																							<span class=""><i class="fa fa-star "></i></span>
																							<span class=""><i class="fa fa-star "></i></span>
																							<span class=""><i class="fa fa-star "></i></span>
																							<span class=""><i class="fa fa-star "></i></span>
																							<span class="gray"><i class="fa fa-star"></i></span>
																						</div>
																					</div>
																					<div class="price">
																						<span class="price-new">$72.00</span>
																					</div>
																				</div>

																			</div>
																		</div>
																	</div>
																</div>
																
															</div>
														</div>
													</div>
													<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 hot-sale">
														<div class="module latest-product titleLine">
															<h3 class="modtitle">Hot Sale</h3>
															<hr>
															<hr>
															<hr>
															<div class="modcontent">
																<div class="owl-carousel owl-hot-sale" data-nav="yes" data-loop="yes" data-margin="0" data-items_xs="1" data-items_sm="1" data-items_md="1">
																	<div class="product-latest-item">
																		<div class="media">
																			<div class="media-left">
																				<a href="product.html"><img src="img/demo/shop/product/product-6.jpg" alt="Cisi Chicken" title="Cisi Chicken" class="img-responsive" style="width: 78px; height: 104px;"></a>
																			</div>
																			<div class="media-body">
																				<div class="caption">
																					<h4><a href="product.html">Sunt Molup</a></h4>


																					<div class="ratings">
																						<div class="rating-box">
																							<span class=""><i class="fa fa-star "></i></span>
																							<span class=""><i class="fa fa-star "></i></span>
																							<span class=""><i class="fa fa-star "></i></span>
																							<span class=""><i class="fa fa-star "></i></span>
																							<span class=""><i class="fa fa-star "></i></span>
																						</div>
																					</div>
																					<div class="price">
																						<span class="price-new">$132.00</span>
																					</div>
																				</div>

																			</div>
																		</div>

																		<div class="media">
																			<div class="media-left">
																				<a href="product.html"><img src="img/demo/shop/product/product-7.jpg" alt="Cisi Chicken" title="Cisi Chicken" class="img-responsive" style="width: 78px; height: 104px;"></a>
																			</div>
																			<div class="media-body">
																				<div class="caption">
																					<h4><a href="product.html">Et Spare</a></h4>


																					<div class="ratings">
																						<div class="rating-box">
																							<span class=""><i class="fa fa-star "></i></span>
																							<span class=""><i class="fa fa-star "></i></span>
																							<span class=""><i class="fa fa-star "></i></span>
																							<span class=""><i class="fa fa-star "></i></span>
																							<span class="gray"><i class="fa fa-star "></i></span>
																						</div>
																					</div>
																					<div class="price">
																						<span class="price-new">$87.00</span>
																					</div>
																				</div>

																			</div>
																		</div>

																		<div class="media">
																			<div class="media-left">
																				<a href="product.html"><img src="img/demo/shop/product/product-8.jpg" alt="Cisi Chicken" title="Cisi Chicken" class="img-responsive" style="width: 78px; height: 104px;"></a>
																			</div>
																			<div class="media-body">
																				<div class="caption">
																					<h4><a href="product.html">Cisi Chicken</a></h4>


																					<div class="ratings">
																						<div class="rating-box">
																							<span class=""><i class="fa fa-star "></i></span>
																							<span class=""><i class="fa fa-star "></i></span>
																							<span class=""><i class="fa fa-star "></i></span>
																							<span class=""><i class="fa fa-star "></i></span>
																							<span class="gray"><i class="fa fa-star"></i></span>
																						</div>
																					</div>
																					<div class="price">
																						<span class="price-new">$63.00</span>
																						<span class="price-old">$84.00</span>
																					</div>
																				</div>

																			</div>
																		</div>
																	</div>
																	<div class="product-latest-item">
																		<div class="media">
																			<div class="media-left">
																				<a href="product.html"><img src="img/demo/shop/product/product-6.jpg" alt="Cisi Chicken" title="Cisi Chicken" class="img-responsive" style="width: 78px; height: 104px;"></a>
																			</div>
																			<div class="media-body">
																				<div class="caption">
																					<h4><a href="product.html">Sunt Molup</a></h4>


																					<div class="ratings">
																						<div class="rating-box">
																							<span class=""><i class="fa fa-star "></i></span>
																							<span class=""><i class="fa fa-star "></i></span>
																							<span class=""><i class="fa fa-star "></i></span>
																							<span class=""><i class="fa fa-star "></i></span>
																							<span class=""><i class="fa fa-star "></i></span>
																						</div>
																					</div>
																					<div class="price">
																						<span class="price-new">$132.00</span>
																					</div>
																				</div>

																			</div>
																		</div>

																		<div class="media">
																			<div class="media-left">
																				<a href="product.html"><img src="img/demo/shop/product/product-7.jpg" alt="Cisi Chicken" title="Cisi Chicken" class="img-responsive" style="width: 78px; height: 104px;"></a>
																			</div>
																			<div class="media-body">
																				<div class="caption">
																					<h4><a href="product.html">Et Spare</a></h4>


																					<div class="ratings">
																						<div class="rating-box">
																							<span class=""><i class="fa fa-star "></i></span>
																							<span class=""><i class="fa fa-star "></i></span>
																							<span class=""><i class="fa fa-star "></i></span>
																							<span class=""><i class="fa fa-star "></i></span>
																							<span class="gray"><i class="fa fa-star "></i></span>
																						</div>
																					</div>
																					<div class="price">
																						<span class="price-new">$87.00</span>
																					</div>
																				</div>

																			</div>
																		</div>

																		<div class="media">
																			<div class="media-left">
																				<a href="product.html"><img src="img/demo/shop/product/product-8.jpg" alt="Cisi Chicken" title="Cisi Chicken" class="img-responsive" style="width: 78px; height: 104px;"></a>
																			</div>
																			<div class="media-body">
																				<div class="caption">
																					<h4><a href="product.html">Cisi Chicken</a></h4>


																					<div class="ratings">
																						<div class="rating-box">
																							<span class=""><i class="fa fa-star "></i></span>
																							<span class=""><i class="fa fa-star "></i></span>
																							<span class=""><i class="fa fa-star "></i></span>
																							<span class=""><i class="fa fa-star "></i></span>
																							<span class="gray"><i class="fa fa-star"></i></span>
																						</div>
																					</div>
																					<div class="price">
																						<span class="price-new">$63.00</span>
																						<span class="price-old">$84.00</span>
																					</div>
																				</div>

																			</div>
																		</div>
																	</div>

																</div>
															</div>
														</div>
													</div>
												</div>

												<div id="container-module-newletter" class="hidden-md hidden-sm hidden-xs">
													<div class="so_newletter_custom_popup_bg popup_bg"></div> 
													<div class="module main-newsleter-popup so_newletter_custom_popup so_newletter_oca_popup" id="so_newletter_custom_popup"> <div class="so-custom-popup so-custom-oca-popup" style="width: 850px; background: url('img/demo/cms/newletter-bg.jpg') no-repeat white;  "> 
														<div class="modcontent"> 
															<div class="oca_popup" id="test-popup"> <div class="popup-content"> <p class="newsletter_promo">Daily Promotion</p> 
																<div class="popup-title">SIGN UP FOR NEWSLETTER					</div>
																<form method="post" name="signup" class="form-group signup"> 
																	<div class="input-control"> <div class="email"> <input type="email" placeholder="Your email address..." value="" class="form-control" id="txtemail" name="txtemail"> </div> <button class="btn btn-default" type="submit" onclick="return subscribe_newsletter();" name="submit">Subscribe	</button> </div> 
																</form> 
																<label class="hidden-popup"> <input type="checkbox" value="1" name="hidden-popup"> <span class="inline">&nbsp;&nbsp;Don't show this popup again</span> </label> </div> 
															</div> 
														</div> <!--/.modcontent--> 
														<button title="Close"   class="popup-close">×</button> </div> 
													</div> 
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-12">
												<div class="brands">
													<h3>Fetured brands</h3>
													<hr><hr><hr>
													<div class="owl-carousel owl-fetured-brand" data-dots="yes" data-nav="yes" data-loop="yes" data-items_xs="2" data-items_sm="4" data-items_md="6" data-margin="10" >
														<div class="img-brand">
															<a href="#"><img src="img/demo/brands/brand-1.jpg" alt=""></a>
														</div>
														<div class="img-brand">
															<a href="#"><img src="img/demo/brands/brand-2.jpg" alt=""></a>
														</div>
														<div class="img-brand">
															<a href="#"><img src="img/demo/brands/brand-3.jpg" alt=""></a>
														</div>
														<div class="img-brand">
															<a href="#"><img src="img/demo/brands/brand-4.jpg" alt=""></a>
														</div>
														<div class="img-brand">
															<a href="#"><img src="img/demo/brands/brand-5.jpg" alt=""></a>
														</div>
														<div class="img-brand">
															<a href="#"><img src="img/demo/brands/brand-6.jpg" alt=""></a>
														</div>
														<div class="img-brand">
															<a href="#"><img src="img/demo/brands/brand-1.jpg" alt=""></a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</section>
								<!-- //Block Spotlight3  -->
								<script type="text/javascript"><!--
									var $typeheader = 'header-home1';
	//-->
</script>

<!-- Footer Container -->
 <?php include("include/footer.php"); ?>
<!-- //end Footer Container -->


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
	<script type="text/javascript" src="js/modernizr/modernizr-2.6.2.min.js"></script>
	<!-- <script type="text/javascript" src="js/bootstrap-notify.min.js"></script> -->

<!-- Theme files
	============================================ -->
	<script type="text/javascript" src="js/themejs/application.js"></script>
	<script type="text/javascript" src="js/themejs/homepage.js"></script>
	<!-- <script type="text/javascript" src="js/themejs/toppanel.js"></script> -->
	<script type="text/javascript" src="js/themejs/so_megamenu.js"></script>
	<script type="text/javascript" src="js/themejs/addtocart.js"></script>	
	<script type="text/javascript" src="js/themejs/pathLoader.js"></script>	

</body>
</html>