<?php
	$tab_carousel_args = array(
		'infinite'          => false,
		'slidesToShow'		=> 6,
		'slidesToScroll'	=> 6,
		'dots'				=> true,
		'arrows'			=> false,
		'responsive'		=> array(
			array(
				'breakpoint'	=> 992,
				'settings'		=> array(
					'slidesToShow'		=> 2,
					'slidesToScroll'	=> 2
				)
			),
			array(
				'breakpoint'	=> 1200,
				'settings'		=> array(
					'slidesToShow'		=> 3,
					'slidesToScroll'	=> 3
				)
			),
			array(
				'breakpoint'	=> 1400,
				'settings'		=> array(
					'slidesToShow'		=> 3,
					'slidesToScroll'	=> 3
				)
			),
			array(
				'breakpoint'	=> 1600,
				'settings'		=> array(
					'slidesToShow'		=> 4,
					'slidesToScroll'	=> 4
				)
			),
			array(
				'breakpoint'	=> 1700,
				'settings'		=> array(
					'slidesToShow'		=> 5,
					'slidesToScroll'	=> 5
				)
			)
		)
		
	);
?>
<section class="product-carousel-with-banners stretch-full-width">

	<div class="col-full">
		<div class="row">
			<div class="products-carousel-tabs-block">

				<section class="section-hot-new-arrivals section-products-carousel-tabs 6-column-tabs" >
					<div class="section-products-carousel-tabs-wrap">
						<header class="section-header">
							<h2 class="section-title">ورودی CES 2017</h2>
							<ul class="nav justify-content-end" role="tablist">
								<li class="nav-item">
									<a data-toggle="tab" href="#tab-1-1" class="nav-link active">20 های برتر</a>
								</li>
								<li class="nav-item">
									<a data-toggle="tab" href="#tab-1-2" class="nav-link ">صدا  و  تصویر</a>
								</li>
								<li class="nav-item">
									<a data-toggle="tab" href="#tab-1-3" class="nav-link ">کامپیوتر و لب تاپ</a>
								</li>
								<li class="nav-item">
									<a data-toggle="tab" href="#tab-1-4" class="nav-link ">دوربین های فیلمبرداری</a>
								</li>
							</ul>
						</header><!-- /.section-header -->

						<div class="tab-content">
							<div class="tab-pane active" id="tab-1-1" role="tabpanel">
								<div class="products-carousel" data-ride="tm-slick-carousel" data-wrap=".products" data-slick="<?php echo htmlspecialchars( json_encode( $tab_carousel_args ), ENT_QUOTES, 'UTF-8' ); ?>">
									<div class="container-fluid">
										<div class="woocommerce columns-6">
											<?php require 'inc/components/product-item.php'; ?>
										</div>
									</div>
								</div>
							</div>

							<div class="tab-pane" id="tab-1-2" role="tabpanel">
								<div class="products-carousel" data-ride="tm-slick-carousel" data-wrap=".products" data-slick="<?php echo htmlspecialchars( json_encode( $tab_carousel_args ), ENT_QUOTES, 'UTF-8' ); ?>">
									<div class="container-fluid">
										<div class="woocommerce columns-6">
											<?php require 'inc/components/product-item.php'; ?>
										</div>
									</div>
								</div>
							</div>

							<div class="tab-pane" id="tab-1-3" role="tabpanel">
								<div class="products-carousel" data-ride="tm-slick-carousel" data-wrap=".products" data-slick="<?php echo htmlspecialchars( json_encode( $tab_carousel_args ), ENT_QUOTES, 'UTF-8' ); ?>">
									<div class="container-fluid">
										<div class="woocommerce columns-6">
											<?php require 'inc/components/product-item.php'; ?>
										</div>
									</div>
								</div>
							</div>

							<div class="tab-pane" id="tab-1-4" role="tabpanel">
								<div class="products-carousel" data-ride="tm-slick-carousel" data-wrap=".products" data-slick="<?php echo htmlspecialchars( json_encode( $tab_carousel_args ), ENT_QUOTES, 'UTF-8' ); ?>">
									
									<div class="container-fluid">
										<div class="woocommerce columns-6">
											<?php require 'inc/components/product-item.php'; ?>
										</div>
									</div>
								</div>
							</div>

						</div><!-- /.tab-content -->
					</div><!-- /.section-products-carousel-tabs-wrap -->

				</section><!-- /.section-hot-new-arrivals -->

				<section class="section-hot-new-arrivals section-products-carousel-tabs 6-column-tabs" >
					<div class="section-products-carousel-tabs-wrap">
						<header class="section-header">
							<h2 class="section-title">هدست واقعیت مجازی</h2>
							<ul class="nav justify-content-end" role="tablist">
								<li class="nav-item">
									<a data-toggle="tab" href="#tab-1" class="nav-link active">بهترین انتخاب</a>
								</li>
								<li class="nav-item">
									<a data-toggle="tab" href="#tab-2" class="nav-link ">مقوا</a>
								</li>
								<li class="nav-item">
									<a data-toggle="tab" href="#tab-3" class="nav-link ">برای آندروید</a>
								</li>
								<li class="nav-item">
									<a data-toggle="tab" href="#tab-4" class="nav-link ">برای ios</a>
								</li>
							</ul><!-- .nav -->
						</header><!-- .section-header -->

						<div class="tab-content">
							<div class="tab-pane active" id="tab-1" role="tabpanel">
								<div class="products-carousel" data-ride="tm-slick-carousel" data-wrap=".products" data-slick="<?php echo htmlspecialchars( json_encode( $tab_carousel_args ), ENT_QUOTES, 'UTF-8' ); ?>">
									<div class="container-fluid">
										<div class="woocommerce columns-6">
											<?php require 'inc/components/product-item.php'; ?>
										</div>
									</div>
								</div>
							</div>

							<div class="tab-pane" id="tab-2" role="tabpanel">
								<div class="products-carousel" data-ride="tm-slick-carousel" data-wrap=".products" data-slick="<?php echo htmlspecialchars( json_encode( $tab_carousel_args ), ENT_QUOTES, 'UTF-8' ); ?>">
									<div class="container-fluid">
										<div class="woocommerce columns-6">
											<?php require 'inc/components/product-item.php'; ?>
										</div>
									</div>
								</div>
							</div>

							<div class="tab-pane" id="tab-3" role="tabpanel">
								<div class="products-carousel" data-ride="tm-slick-carousel" data-wrap=".products" data-slick="<?php echo htmlspecialchars( json_encode( $tab_carousel_args ), ENT_QUOTES, 'UTF-8' ); ?>">
									<div class="container-fluid">
										<div class="woocommerce columns-6">
											<?php require 'inc/components/product-item.php'; ?>
										</div>
									</div>
								</div>
							</div>

							<div class="tab-pane" id="tab-4" role="tabpanel">
								<div class="products-carousel" data-ride="tm-slick-carousel" data-wrap=".products" data-slick="<?php echo htmlspecialchars( json_encode( $tab_carousel_args ), ENT_QUOTES, 'UTF-8' ); ?>">
									<div class="container-fluid">
										<div class="woocommerce columns-6">
											<?php require 'inc/components/product-item.php'; ?>
										</div>
									</div>
								</div>
							</div>
						</div><!-- .tab-content -->
					</div><!-- .section-products-carousel-tabs-wrap -->
				</section><!-- .section-products-carousel-tabs -->
			</div><!-- .products-carousel-tabs-block -->

			<div class="banners-block">
				<div class="side-banners">
					<div class="banner text-in-left" >
						<a href="index.php?page=shop">
							<div class="banner-bg" style="background-size: cover; background-position: center center; background-image: url( assets/images/banner/1-1.jpg ); height: 245px;">
								<div class="caption">
									<div class="banner-info">
										<h4 class="pretitle">بهترین ایده هدیه</h4>
										<h3 class="title"><strong>مینی دو چرخ</strong> <br>تعادل خود <br>اسکوتر</h3>
									</div>
									<span class="price">
										<ins><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>339.99</span></ins>
										<del><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>689</span></del>
									</span>
								</div>
							</div>
						</a>
					</div><!-- /.banner -->

					<div class="banner text-in-left">
						<a href="index.php?page=shop">
							<div class="banner-bg" style="background-size: cover; background-position: center center; background-image: url( assets/images/banner/1-2.jpg ); height: 245px;">
								<div class="caption">
									<div class="banner-info">
										<h3 class="title"><strong>20٪ تخفیف Tech</strong> <br>در Ultrabooks، <br>لپ تاپ ها , تبلت<br>نوت بوک و<br>بیشتر</h3>
									</div>
								</div>
							</div>
						</a>
					</div><!-- /.banner -->


					<div class="banner small-banner text-in-left">
						<a href="index.php?page=shop">
							<div class="banner-bg" style="background-size: cover; background-position: center center; background-image: url( assets/images/banner/1-3.jpg ); height: 245px;">
								<div class="caption">
									<div class="banner-info">
										<h3 class="title">تازه رسیده ها<br> در <strong>اکسسوری</strong> <br> با بهترین قیمت ها</h3>
									</div>
									<span class="banner-action button">نمایش همه</span>
								</div>
							</div>
						</a>
					</div><!-- /.banner -->
				</div><!-- /.side-banners -->
			</div><!-- /.banners-block -->
		</div><!-- /.row -->
	</div><!-- /.col-full -->
</section><!-- /.product-carousel-with-banners -->
