<?php
	session_start();
	include("admin/dbconnection/DbConnection.php");
	include("admin/model/category.php");
	include("admin/model/setting.php");
	include("admin/model/products.php");
	$id = $_GET['id'];
	$category = new Category();
	$setting = new Setting();
	$product = new Products();
	$category = $category->getCategoryById($id);
	$getSetting = $setting->getSetting();
	$getProducts = $product->getProductsByCategoryId($id);

	?>

<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Basic page needs
    ============================================ -->
    <title>Product::List</title>
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
	<link rel="stylesheet" type="text/css" href="css/category.css">

	<!-- <link href="css/responsive.css" rel="stylesheet"> -->
	

	
</head>

<body class="res layout-subpage banners-effect-1">
	<div id="wrapper" class="wrapper-full ">
		<!-- Header Container  -->
		<?php include("include/header.php"); ?>
		<!-- //Header Container  -->
		<!-- Main Container  -->
		<div class="main-container container">
			<ul class="header-main">
				<li class="home"><a href="#">Home   </a><i class="fa fa-angle-right" aria-hidden="true"></i></li>
				<li> <?=$category['name']?></li>
			</ul>

			<div class="row">
				

				<!--Middle Part Start-->
				<div id="content" class="col-md-9 col-sm-8 type-3">
					<div class="products-category">
						
							<div class="products-list grid">
								<?php foreach($getProducts as $product){ ?>
								<div class="product-layout">
									<div class="product-item-container">
										
										<div class="left-block">
											<div class="product-image-container  second_img ">
												<a href="product.php?id=<?=$product['id']?>" class="product-img"><img src="admin/uploads/product/<?=$product['image']?>" alt=""></a>
												<!--Sale Label-->
												
												
												<div class="hover">
													<ul>
														<li class="icon-heart"><a class="wishlist" type="button" data-toggle="tooltip" title="" onclick="wishlist.add('42');" data-original-title="Add to Wish List"><i class="fa fa-heart"></i></a></li>
														<li class="icon-exchange"><a class="compare" type="button" data-toggle="tooltip" title="" onclick="compare.add('42');" data-original-title="Compare this Product"><i class="fa fa-exchange"></i></a></li>
														<li class="icon-search"><a class="quickview iframe-link visible-lg" data-fancybox-type="iframe" href="quickview.html">  <i class="fa fa-search" aria-hidden="true"></i></a></li>
													</ul>
												</div>
											</div>
										</div>
									  
										<div class="right-block">
											<div class="caption">
												<h4><a href="product.php?id=<?=$product['id']?>"><?=$product['name']?></a></h4>		
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
													<span class="price-new">Tk.<?=$product['price']?></span>
													
												</div>
												<div class="description item-desc hidden">
													<?=$product['description']?>
												</div>
											</div>

											<div class="button-group">
												<button class="addToCart btn btn-default " type="button" data-toggle="tooltip" title="" onclick="cart.add('<?=$product['id']?>', '1');" data-original-title="Add to Cart"> <span class="">Add to Cart</span></button>
											</div>
										</div><!-- right block -->
									</div>
								</div>
								 <?php } ?>

								<div class="product-layout">
									<div class="product-item-container">
										<div class="left-block">
											<div class="product-image-container  second_img ">
												<a href="product.html" class="product-img"><img src="img/demo/shop/product/product-1.jpg" alt=""></a>
												<!--Sale Label-->
												<span class="new">New</span>
												
												<div class="hover">
													<ul>
														<li class="icon-heart"><a class="wishlist" type="button" data-toggle="tooltip" title="" onclick="wishlist.add('42');" data-original-title="Add to Wish List"><i class="fa fa-heart"></i></a></li>
														<li class="icon-exchange"><a class="compare" type="button" data-toggle="tooltip" title="" onclick="compare.add('42');" data-original-title="Compare this Product"><i class="fa fa-exchange"></i></a></li>
														<li class="icon-search"><a class="quickview iframe-link visible-lg" data-fancybox-type="iframe" href="quickview.html">  <i class="fa fa-search" aria-hidden="true"></i></a></li>
													</ul>
												</div>
											</div>
										</div>
										<div class="right-block">
											<div class="caption">
												<h4><a href="product.html">Dummy product #02</a></h4>		
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
													<span class="price-new">$90.00</span> 	
													
												</div>
												<div class="description item-desc hidden">
													<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est . </p>
												</div>
											</div>

											<div class="button-group">
												<button class="addToCart btn btn-default " type="button" data-toggle="tooltip" title="" onclick="cart.add('42', '1');" data-original-title="Add to Cart"> <span class="">Add to Cart</span></button>
											</div>
										</div><!-- right block -->
									</div>
								</div>
								

								<div class="product-layout">
									<div class="product-item-container">
										<div class="left-block">
											<div class="product-image-container  second_img ">
												<a href="product.html" class="product-img"><img src="img/demo/shop/product/product-2.jpg" alt=""></a>
												<!--Sale Label-->
												<span class="new">New</span>
												
												<div class="hover">
													<ul>
														<li class="icon-heart"><a class="wishlist" type="button" data-toggle="tooltip" title="" onclick="wishlist.add('42');" data-original-title="Add to Wish List"><i class="fa fa-heart"></i></a></li>
														<li class="icon-exchange"><a class="compare" type="button" data-toggle="tooltip" title="" onclick="compare.add('42');" data-original-title="Compare this Product"><i class="fa fa-exchange"></i></a></li>
														<li class="icon-search"><a class="quickview iframe-link visible-lg" data-fancybox-type="iframe" href="quickview.html">  <i class="fa fa-search" aria-hidden="true"></i></a></li>
													</ul>
												</div>
											</div>
										</div>
										<div class="right-block">
											<div class="caption">
												<h4><a href="product.html">Dummy product #03</a></h4>		
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
													<span class="price-new">$45.00</span> 
													
												</div>
												<div class="description item-desc hidden">
													<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est . </p>
												</div>
											</div>

											<div class="button-group">
												<button class="addToCart btn btn-default " type="button" data-toggle="tooltip" title="" onclick="cart.add('42', '1');" data-original-title="Add to Cart"> <span class="">Add to Cart</span></button>
											</div>
										</div><!-- right block -->
									</div>
								</div>
								

								<div class="product-layout">
									<div class="product-item-container">
										<div class="left-block">
											<div class="product-image-container  second_img ">
												<a href="product.html" class="product-img"><img src="img/demo/shop/product/product-3.jpg" alt=""></a>
												<!--Sale Label-->
												
												<span class="sale">-25%</span>
												<div class="hover">
													<ul>
														<li class="icon-heart"><a class="wishlist" type="button" data-toggle="tooltip" title="" onclick="wishlist.add('42');" data-original-title="Add to Wish List"><i class="fa fa-heart"></i></a></li>
														<li class="icon-exchange"><a class="compare" type="button" data-toggle="tooltip" title="" onclick="compare.add('42');" data-original-title="Compare this Product"><i class="fa fa-exchange"></i></a></li>
														<li class="icon-search"><a class="quickview iframe-link visible-lg" data-fancybox-type="iframe" href="quickview.html">  <i class="fa fa-search" aria-hidden="true"></i></a></li>
													</ul>
												</div>
											</div>
										</div>
										<div class="right-block">
											<div class="caption">
												<h4><a href="product.html">Dummy product #04</a></h4>		
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
													<span class="price-new">$89.00</span> 
													<span class="price-old">$132.00</span>	   
												</div>
												<div class="description item-desc hidden">
													<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est . </p>
												</div>
											</div>

											<div class="button-group">
												<button class="addToCart btn btn-default " type="button" data-toggle="tooltip" title="" onclick="cart.add('42', '1');" data-original-title="Add to Cart"> <span class="">Add to Cart</span></button>
											</div>
										</div><!-- right block -->
									</div>
								</div>
								
								<div class="product-layout">
									<div class="product-item-container">
										<div class="left-block">
											<div class="product-image-container  second_img ">
												<a href="product.html" class="product-img"><img src="img/demo/shop/product/product-4.jpg" alt=""></a>
												<!--Sale Label-->
												
												
												<div class="hover">
													<ul>
														<li class="icon-heart"><a class="wishlist" type="button" data-toggle="tooltip" title="" onclick="wishlist.add('42');" data-original-title="Add to Wish List"><i class="fa fa-heart"></i></a></li>
														<li class="icon-exchange"><a class="compare" type="button" data-toggle="tooltip" title="" onclick="compare.add('42');" data-original-title="Compare this Product"><i class="fa fa-exchange"></i></a></li>
														<li class="icon-search"><a class="quickview iframe-link visible-lg" data-fancybox-type="iframe" href="quickview.html">  <i class="fa fa-search" aria-hidden="true"></i></a></li>
													</ul>
												</div>
											</div>
										</div>
										<div class="right-block">
											<div class="caption">
												<h4><a href="product.html">Dummy product #05</a></h4>		
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
													<span class="price-new">$95.00</span> 
													
												</div>
												<div class="description item-desc hidden">
													<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est . </p>
												</div>
											</div>

											<div class="button-group">
												<button class="addToCart btn btn-default " type="button" data-toggle="tooltip" title="" onclick="cart.add('42', '1');" data-original-title="Add to Cart"> <span class="">Add to Cart</span></button>
											</div>
										</div><!-- right block -->
									</div>
								</div>
								
								<div class="product-layout">
									<div class="product-item-container">
										<div class="left-block">
											<div class="product-image-container  second_img ">
												<a href="product.html" class="product-img"><img src="img/demo/shop/product/product-5.jpg" alt=""></a>
												<!--Sale Label-->
												
												
												<div class="hover">
													<ul>
														<li class="icon-heart"><a class="wishlist" type="button" data-toggle="tooltip" title="" onclick="wishlist.add('42');" data-original-title="Add to Wish List"><i class="fa fa-heart"></i></a></li>
														<li class="icon-exchange"><a class="compare" type="button" data-toggle="tooltip" title="" onclick="compare.add('42');" data-original-title="Compare this Product"><i class="fa fa-exchange"></i></a></li>
														<li class="icon-search"><a class="quickview iframe-link visible-lg" data-fancybox-type="iframe" href="quickview.html">  <i class="fa fa-search" aria-hidden="true"></i></a></li>
													</ul>
												</div>
											</div>
										</div>
										<div class="right-block">
											<div class="caption">
												<h4><a href="product.html">Dummy product #06</a></h4>		
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
													<span class="price-new">$34.00</span> 
													
												</div>
												<div class="description item-desc hidden">
													<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est . </p>
												</div>
											</div>

											<div class="button-group">
												<button class="addToCart btn btn-default " type="button" data-toggle="tooltip" title="" onclick="cart.add('42', '1');" data-original-title="Add to Cart"> <span class="">Add to Cart</span></button>
											</div>
										</div><!-- right block -->
									</div>
								</div>
								
								<div class="product-layout">
									<div class="product-item-container">
										<div class="left-block">
											<div class="product-image-container  second_img ">
												<a href="product.html" class="product-img"><img src="img/demo/shop/product/product-6.jpg" alt=""></a>
												<!--Sale Label-->
												
												<span class="sale">-25%</span>
												<div class="hover">
													<ul>
														<li class="icon-heart"><a class="wishlist" type="button" data-toggle="tooltip" title="" onclick="wishlist.add('42');" data-original-title="Add to Wish List"><i class="fa fa-heart"></i></a></li>
														<li class="icon-exchange"><a class="compare" type="button" data-toggle="tooltip" title="" onclick="compare.add('42');" data-original-title="Compare this Product"><i class="fa fa-exchange"></i></a></li>
														<li class="icon-search"><a class="quickview iframe-link visible-lg" data-fancybox-type="iframe" href="quickview.html">  <i class="fa fa-search" aria-hidden="true"></i></a></li>
													</ul>
												</div>
											</div>
										</div>
										<div class="right-block">
											<div class="caption">
												<h4><a href="product.html">Dummy product #07</a></h4>		
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
													<span class="price-old">$109.00</span>   
												</div>
												<div class="description item-desc hidden">
													<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est . </p>
												</div>
											</div>

											<div class="button-group">
												<button class="addToCart btn btn-default " type="button" data-toggle="tooltip" title="" onclick="cart.add('42', '1');" data-original-title="Add to Cart"> <span class="">Add to Cart</span></button>
											</div>
										</div><!-- right block -->
									</div>
								</div>
								

								<div class="product-layout">
									<div class="product-item-container">
										<div class="left-block">
											<div class="product-image-container  second_img ">
												<a href="product.html" class="product-img"><img src="img/demo/shop/product/product-7.jpg" alt=""></a>
												<!--Sale Label-->
												
												<span class="sale">-25%</span>
												<div class="hover">
													<ul>
														<li class="icon-heart"><a class="wishlist" type="button" data-toggle="tooltip" title="" onclick="wishlist.add('42');" data-original-title="Add to Wish List"><i class="fa fa-heart"></i></a></li>
														<li class="icon-exchange"><a class="compare" type="button" data-toggle="tooltip" title="" onclick="compare.add('42');" data-original-title="Compare this Product"><i class="fa fa-exchange"></i></a></li>
														<li class="icon-search"><a class="quickview iframe-link visible-lg" data-fancybox-type="iframe" href="quickview.html">  <i class="fa fa-search" aria-hidden="true"></i></a></li>
													</ul>
												</div>
											</div>
										</div>
										<div class="right-block">
											<div class="caption">
												<h4><a href="product.html">Dummy product #08</a></h4>		
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
													<span class="price-new">$80.00</span> 
													<span class="price-old">$98.00</span>  
												</div>
												<div class="description item-desc hidden">
													<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est . </p>
												</div>
											</div>

											<div class="button-group">
												<button class="addToCart btn btn-default " type="button" data-toggle="tooltip" title="" onclick="cart.add('42', '1');" data-original-title="Add to Cart"> <span class="">Add to Cart</span></button>
											</div>
										</div><!-- right block -->
									</div>
								</div>

							</div>				<!--// End Changed listings-->
							<!-- Filters -->
							<div class="product-filter filters-panel">
								<div class="row">
									<div class="col-md-5 visible-lg">
										<div class="view-mode">
											<div class="list-view">
												<button class="btn btn-default grid active" data-view="grid" data-toggle="tooltip" data-original-title="Grid"><i class="fa fa-th-large" aria-hidden="true"></i></button>
												<button class="btn btn-default list" data-view="list" data-toggle="tooltip" data-original-title="List"><i class="fa fa-th-list"></i></button>
											</div>
										</div>
									</div>
									<div class="short-by-show form-inline text-right col-lg-7 col-sm-12 col-xs-12">
										<div class="text">
											<p>item 01 - 16 of 47 total</p>
										</div>
										<div class="box-pagination text-right">
											<ul class="pagination">
												<li class="active"><span>1</span></li>
												<li><a href="#">2</a></li>
												<li><a href="#">3</a></li>
												<li><a href="#">4</a></li>
												<li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<!-- //end Filters -->

						</div>

					</div>


				</div>
				<!--Middle Part End-->
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
											<li class="facebook"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
											<li class="twitter"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
											<li class="google"><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
											<li class="skype"><a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>
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
								<a href="#"><img src="img/demo/download/app.jpg" alt=""></a>
								<a href="#"><img src="img/demo/download/ggplay.jpg" alt=""></a>
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
	<script type="text/javascript"><!--
	// Check if Cookie exists
	if($.cookie('display')){
		view = $.cookie('display');
	}else{
		view = 'grid';
	}
	if(view) display(view);
	//--></script> 
</body>
</html>