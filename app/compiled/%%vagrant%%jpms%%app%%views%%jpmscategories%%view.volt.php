<!DOCTYPE html>
<html>

<!-- Mirrored from jaybabani.com/caliber-html/products.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 28 Mar 2017 04:25:31 GMT -->
<head>
<title>JPMS SALES International Corporation</title>
<meta charset="utf-8"/>
<meta name=viewport content="width=device-width, initial-scale=1">
<script type="text/javascript" src="<?= $this->url->get() ?>public/js/pace.min.js"></script>
<link href="<?= $this->url->get() ?>public/css/pace-loading-bar.css" rel="stylesheet">

		<link rel="stylesheet" type="text/css" href="<?= $this->url->get() ?>public/css/animate.caliber.css">
	
		<link rel="stylesheet" type="text/css" href="<?= $this->url->get() ?>public/css/materialdesignicons.caliber.css">
	
	<link rel="stylesheet" type="text/css" href="<?= $this->url->get() ?>public/css/bootstrap.css">

	<script type="text/javascript" src="<?= $this->url->get() ?>public/js/jquery.min.js"></script>
	<script src="<?= $this->url->get() ?>public/js/inviewport-1.3.2.js"></script>

	
	<!-- Main Style -->
	<link rel="stylesheet" id="main-style" type="text/css" href="<?= $this->url->get() ?>public/css/style.css">

	
	<script type="text/javascript" src="<?= $this->url->get() ?>public/js/main.js"></script>



</head>
<body class=" angled  yellow">


<!-- Section Start - Header -->

	<section class="header bg-lightgray header-small" >


		<!-- Menu Top Bar - Start -->
			<div class="topbar " data-effect="fadeIn">
				<div class="menu">
					<div class="primary inviewport animated delay4" data-effect="fadeInRightBig">
						<div class='cssmenu'>
								
		<!-- Menu - Start -->
		<ul class='menu-ul'>
			<li class='has-sub'>
				<a href='<?= $this->url->get() ?>'>Home</a>
			</li>
			<li class='has-sub'>
				<a href='<?= $this->url->get() ?>#about'>About Us</a>
			</li>
			<li class='has-sub'>
				<a href='<?= $this->url->get() ?>#services'>Services</a>
			</li>

</ul>
		<!-- Menu - End -->
								</div>
					</div>
					<div class="black inviewport animated delay4" data-effect="fadeInLeftBig">
						<div class='cssmenu'>
								
		<!-- Menu - Start -->
		<ul class='menu-ul'>
			<li class='has-sub'>
				<a href='#'>Company Events</a>
			</li>
			<li class='has-sub'>
				<a href='<?= $this->url->get() ?>#products'>Products</a>
			</li>
			<li class='has-sub'>
				<a href='<?= $this->url->get() ?>#contact'>Contact</a>
			</li>		
		</ul>
		<!-- Menu - End -->
								</div>						
					</div>
				</div>
			</div>
		<!-- Menu Top Bar - End -->

		<!-- Logo and Mobile Menu - Start -->
			<div class='header-logo-wrap'>
				<div class="container">
					<div class="logo col-xs-2">
						<span>JPMS</span>
					</div>
					<div class="menu-mobile col-xs-10 pull-right cssmenu">
						<i class="mdi mdi-menu menu-toggle"></i>
						<ul class="menu" id='parallax-mobile-menu'>
						
						</ul>
					</div>

				</div>
			</div>
		<!-- Logo and Mobile Menu - End -->

								
		

	</section>

<!-- Section End - Header -->

<!-- Section Start - Products -->
<section class=' padding-top-100 padding-bottom-0 '>
		<!-- Angled Section - Start -->
		<div class="angled_down_inside white">
			<div class="slope upleft"></div>
			<div class="slope upright"></div>
		</div>
		<!-- Angled Section - End -->
		
	<div class="container">
	
	
	
	<div class="row">
			<h1 class="heading"><?= $cat_title ?></h1>
			<div class="headul"></div>
			
			<div class='products'>
				
		<!-- Product Box - Start -->
		<?php foreach ($items as $item) { ?>			
			<div class="col-lg-4 col-md-4 col-md-offset-0 col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1 product inviewport animated delay1" data-effect="fadeInUp">				
				<div class="pic">
					<img alt="product-image" width="380px" height="350px" src="<?= $this->url->get() ?>public/files/big_pics/<?= $item->big_pic ?>">

					<div class="cart-layer transition">
							<a class="" href="<?= $this->url->get() ?>product/<?= $item->item_url ?>"><i class="mdi mdi-image-area"></i></a>
						</div>
				</div>
				<div class="info">
				<h4 class="text-on-primary"><a href="<?= $this->url->get() ?>"><?= $item->item_title ?></a></h4>
			</div>			
			</div>
		<?php } ?>

			</div>
	   </div>

       	 <?php if ($this->length($item) > 10) { ?>      
	     <div class="row">
	       	<div class="col-xs-12 product_pagination">
	       	<ul class="pagination">
	                                                <li><a href="#">&laquo;</a></li>
	                                                <li><a href="#">1</a></li>
	                                                <li class="active"><a href="#">2</a></li>
	                                                <li><a href="#">3</a></li>
	                                                <li><a href="#">4</a></li>
	                                                <li><a href="#">5</a></li>
	                                                <li><a href="#">&raquo;</a></li>
	                                            </ul>
		       </div>
		</div>
		<?php } ?>
		
	


	</div>



		<!-- Angled Section - Start -->
		<div class="angled_up_inside white">
			<div class="slope upleft"></div>
			<div class="slope upright"></div>
		</div>
		<!-- Angled Section - End -->
		
	</section>
<!-- Section End - Products -->

<!-- Section Start - Footer -->
<section class='footer bg-black padding-top-150 padding-bottom-25 '><div class="container">
	<div class="row">
		<!-- Text Widget - Start -->
		<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 text-widget inviewport animated delay1" data-effect="fadeInUp">
				<div class="logo">
					<span>Caliber</span>
				</div>
			<p>This is a unique & creatively designed layout built in Photoshop with a modern look. All the files are well organized and named as per content. Its very easy to change any part.</p>
			<p>Email: youremail@example.com <br> Phone: +1 234 5678 910</p>
		</div>
		<!-- Text Widget - End -->

		<!-- Twitter Widget - Start -->
		<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 twitter-widget inviewport animated delay2" data-effect="fadeInUp">
			<h4>Twitter</h4>
			<div class="headul left-align"></div>
			<div class="tweet">
				<i class="mdi mdi-twitter"></i>
				<div class="message"><strong>@thePixelsTheme</strong> Actually preparing a blog :)  <small>10 minutes ago</small></div>
			</div>
			<div class="tweet">
				<i class="mdi mdi-twitter"></i>
				<div class="message">Inspired by <strong>@mattjohn</strong> #10Bootstrap #vime <small>30 minutes ago</small></div>
			</div>
			<div class="tweet">
				<i class="mdi mdi-twitter"></i>
				<div class="message"><strong>@AmazingDesign</strong> Current design trends of a blog <small>1 hour ago</small></div>
			</div>
		</div>
		<!-- Twitter Widget - End -->

		<!-- Flickr Widget - Start -->
		<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 flickr-widget inviewport animated delay3" data-effect="fadeInUp">
			<h4>Flickr</h4>
			<div class="headul left-align"></div>
			<div class="row images">
				<div class="col-md-3 col-sm-2 col-xs-4"><img alt="flickr-image" src="<?= $this->url->get() ?>public/img/flickr-1.jpg" class="img-responsive"></div>
				<div class="col-md-3 col-sm-2 col-xs-4"><img alt="flickr-image" src="<?= $this->url->get() ?>public/img/flickr-2.jpg" class="img-responsive"></div>
				<div class="col-md-3 col-sm-2 col-xs-4"><img alt="flickr-image" src="<?= $this->url->get() ?>public/img/flickr-3.jpg" class="img-responsive"></div>
				<div class="col-md-3 col-sm-2 col-xs-4"><img alt="flickr-image" src="<?= $this->url->get() ?>public/img/flickr-4.jpg" class="img-responsive"></div>
				<div class="col-md-3 col-sm-2 col-xs-4"><img alt="flickr-image" src="<?= $this->url->get() ?>public/img/flickr-5.jpg" class="img-responsive"></div>
				<div class="col-md-3 col-sm-2 col-xs-4"><img alt="flickr-image" src="<?= $this->url->get() ?>public/img/flickr-6.jpg" class="img-responsive"></div>
				<div class="col-md-3 hidden-sm hidden-xs"><img alt="flickr-image" src="<?= $this->url->get() ?>public/img/flickr-7.jpg" class="img-responsive"></div>
				<div class="col-md-3 hidden-sm hidden-xs"><img alt="flickr-image" src="<?= $this->url->get() ?>public/img/flickr-8.jpg" class="img-responsive"></div>
			</div>
		</div>
		<!-- Flickr Widget - End -->
	</div>
	
</div>

	<!-- Copyright Bar - Start -->
	<div class="copyright">
		<div class="col-md-12">
		<div class="container">
			<div class="">
			<div class="col-lg-6 col-md-6 col-sm-8 col-xs-12 message inviewport animated delay1" data-effect="fadeInUp">
				<span class="">&copy; 2015 CALIBER theme | Made by THEMEPASSION</span>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-4 col-xs-12 social">
				<a href="#" class="inviewport animated delay1" data-effect="fadeInUp"><i class="mdi mdi-facebook text-on-primary"></i></a>
				<a href="#" class="inviewport animated delay2" data-effect="fadeInUp"><i class="mdi mdi-twitter text-on-primary"></i></a>
				<a href="#" class="inviewport animated delay3" data-effect="fadeInUp"><i class="mdi mdi-dribbble text-on-primary"></i></a>
				<a href="#" class="inviewport animated delay4" data-effect="fadeInUp"><i class="mdi mdi-google-plus text-on-primary"></i></a>
				<a href="#" class="inviewport animated delay5" data-effect="fadeInUp"><i class="mdi mdi-youtube-play text-on-primary"></i></a>
			</div>
			</div>
		</div>	
		</div>
	</div>
	<!-- Copyright Bar - End -->


</section>
	
<!-- Section End - Footer -->


</body>

<!-- Mirrored from jaybabani.com/caliber-html/products.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 28 Mar 2017 04:25:36 GMT -->
</html>