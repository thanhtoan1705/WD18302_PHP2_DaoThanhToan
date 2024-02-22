<!DOCTYPE html>
<html lang="en">

<head>

	<!-- Meta -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="">
	<meta name="author" content="HugeBinary">
	<meta name="robots" content="">
	<meta name="description" content="MoonCart Shop & eCommerce HTML Template">
	<meta property="og:title" content="MoonCart Shop & eCommerce HTML Template">
	<meta property="og:description" content="MoonCart Shop & eCommerce HTML Template">
	<meta name="format-detection" content="telephone=no">

	<!-- FAVICONS ICON -->
	<link rel="icon" type="<?= APP_URL ?>public/assets/clients/image/x-icon" href="<?= APP_URL ?>public/assets/clients/images/favicon.png">

	<!-- PAGE TITLE HERE -->
	<title>MoonCart Shop & eCommerce HTML Template</title>

	<!-- MOBILE SPECIFIC -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- STYLESHEETS -->
	<link rel="stylesheet" type="text/css" href="<?= APP_URL ?>public/assets/clients/vendor/bootstrap-select/dist/css/bootstrap-select.min.css">
	<link rel="stylesheet" type="text/css" href="<?= APP_URL ?>public/assets/clients/icons/themify/themify-icons.css">
	<link rel="stylesheet" type="text/css" href="<?= APP_URL ?>public/assets/clients/icons/flaticon/flaticon_mooncart.css">
	<link rel="stylesheet" type="text/css" href="<?= APP_URL ?>public/assets/clients/vendor/magnific-popup/magnific-popup.min.css">
	<link rel="stylesheet" type="text/css" href="<?= APP_URL ?>public/assets/clients/icons/fontawesome/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="<?= APP_URL ?>public/assets/clients/vendor/swiper/swiper-bundle.min.css">
	<link rel="stylesheet" type="text/css" href="<?= APP_URL ?>public/assets/clients/vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="<?= APP_URL ?>public/assets/clients/vendor/lightgallery/dist/css/lightgallery.css">
	<link rel="stylesheet" type="text/css" href="<?= APP_URL ?>public/assets/clients/vendor/lightgallery/dist/css/lg-thumbnail.css">
	<link rel="stylesheet" type="text/css" href="<?= APP_URL ?>public/assets/clients/vendor/lightgallery/dist/css/lg-zoom.css">
	<link rel="stylesheet" type="text/css" href="<?= APP_URL ?>public/assets/clients/css/style.css">

	<!-- GOOGLE FONTS-->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
	<link href="../css2?family=DM+Sans:wght@400;500;700&family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.17.0/font/bootstrap-icons.css" rel="stylesheet">



</head>

<body>

	<div class="page-wraper">
		<!-- <div id="loading-area" class="preloader-wrapper-1">
			<div>
				<span class="loader-2"></span>
				<img src="<?= APP_URL ?>public/assets/clients/images/logo.png" alt="/">
				<span class="loader"></span>
			</div>
		</div> -->

		<?php
		include_once('./resources/views/clients/block/header.php'); ?>

		<div class="page-content bg-white">

			{{content}}

		</div>

		<?php
		include_once('./resources/views/clients/block/footer.php'); ?>

		<button class="scroltop" type="button"><i class="fas fa-arrow-up"></i></button>

		<!-- Quick Modal Start -->
		<div class="modal quick-view-modal fade" id="exampleModal" tabindex="-1" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
						<i class="icon feather icon-x"></i>
					</button>
					<div class="modal-body">
						<div class="row g-xl-4 g-3">
							<div class="col-xl-6 col-md-6">
								<div class="dz-product-detail mb-0">
									<div class="swiper-btn-center-lr">
										<div class="swiper quick-modal-swiper2">
											<div class="swiper-wrapper" id="lightgallery">
												<div class="swiper-slide">
													<div class="dz-media DZoomImage">
														<a class="mfp-link lg-item" href="<?= APP_URL ?>public/assets/clients/images/products/baby-seat.png" data-src="<?= APP_URL ?>public/assets/clients/images/products/baby-seat.png">
															<i class="feather icon-maximize dz-maximize top-right"></i>
														</a>
														<img src="<?= APP_URL ?>public/assets/clients/images/products/baby-seat.png" alt="<?= APP_URL ?>public/assets/clients/image">
													</div>
												</div>
												<div class="swiper-slide">
													<div class="dz-media DZoomImage">
														<a class="mfp-link lg-item" href="<?= APP_URL ?>public/assets/clients/images/products/baby-seat2.png" data-src="<?= APP_URL ?>public/assets/clients/images/products/baby-seat2.png">
															<i class="feather icon-maximize dz-maximize top-right"></i>
														</a>
														<img src="<?= APP_URL ?>public/assets/clients/images/products/baby-seat2.png" alt="<?= APP_URL ?>public/assets/clients/image">
													</div>
												</div>
												<div class="swiper-slide">
													<div class="dz-media DZoomImage">
														<a class="mfp-link lg-item" href="<?= APP_URL ?>public/assets/clients/images/products/baby-seat3.png" data-src="<?= APP_URL ?>public/assets/clients/images/products/baby-seat3.png">
															<i class="feather icon-maximize dz-maximize top-right"></i>
														</a>
														<img src="<?= APP_URL ?>public/assets/clients/images/products/baby-seat3.png" alt="<?= APP_URL ?>public/assets/clients/image">
													</div>
												</div>
												<div class="swiper-slide">
													<div class="dz-media DZoomImage">
														<a class="mfp-link lg-item" href="<?= APP_URL ?>public/assets/clients/images/products/baby-seat.png" data-src="<?= APP_URL ?>public/assets/clients/images/products/baby-seat.png">
															<i class="feather icon-maximize dz-maximize top-right"></i>
														</a>
														<img src="<?= APP_URL ?>public/assets/clients/images/products/baby-seat.png" alt="<?= APP_URL ?>public/assets/clients/image">
													</div>
												</div>
											</div>
										</div>
										<div class="swiper quick-modal-swiper thumb-swiper-lg thumb-sm swiper-vertical">
											<div class="swiper-wrapper">
												<div class="swiper-slide">
													<img src="<?= APP_URL ?>public/assets/clients/images/products/thumb-img/seat1.png" alt="<?= APP_URL ?>public/assets/clients/image">
												</div>
												<div class="swiper-slide">
													<img src="<?= APP_URL ?>public/assets/clients/images/products/thumb-img/seat2.png" alt="<?= APP_URL ?>public/assets/clients/image">
												</div>
												<div class="swiper-slide">
													<img src="<?= APP_URL ?>public/assets/clients/images/products/thumb-img/seat3.png" alt="<?= APP_URL ?>public/assets/clients/image">
												</div>
												<div class="swiper-slide">
													<img src="<?= APP_URL ?>public/assets/clients/images/products/thumb-img/seat1.png" alt="<?= APP_URL ?>public/assets/clients/image">
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-6 col-md-6">
								<div class="dz-product-detail style-2 ps-xl-3 ps-0 pt-2 mb-0">
									<div class="dz-content">
										<div class="dz-content-footer">
											<div class="dz-content-start">
												<span class="badge bg-purple mb-2">SALE 20% Off</span>
												<h4 class="title mb-1"><a href="shop-list.html">Baby Strollers</a></h4>
												<div class="review-num">
													<ul class="dz-rating me-2">
														<li>
															<svg width="14" height="13" viewbox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path d="M6.74805 0.234375L8.72301 4.51608L13.4054 5.07126L9.9436 8.27267L10.8625 12.8975L6.74805 10.5944L2.63355 12.8975L3.5525 8.27267L0.090651 5.07126L4.77309 4.51608L6.74805 0.234375Z" fill="#FF8A00"></path>
															</svg>
														</li>
														<li>
															<svg width="14" height="13" viewbox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path d="M6.74805 0.234375L8.72301 4.51608L13.4054 5.07126L9.9436 8.27267L10.8625 12.8975L6.74805 10.5944L2.63355 12.8975L3.5525 8.27267L0.090651 5.07126L4.77309 4.51608L6.74805 0.234375Z" fill="#FF8A00"></path>
															</svg>
														</li>
														<li>
															<svg width="14" height="13" viewbox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path d="M6.74805 0.234375L8.72301 4.51608L13.4054 5.07126L9.9436 8.27267L10.8625 12.8975L6.74805 10.5944L2.63355 12.8975L3.5525 8.27267L0.090651 5.07126L4.77309 4.51608L6.74805 0.234375Z" fill="#FF8A00"></path>
															</svg>
														</li>
														<li>
															<svg width="14" height="13" viewbox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path opacity="0.2" d="M6.74805 0.234375L8.72301 4.51608L13.4054 5.07126L9.9436 8.27267L10.8625 12.8975L6.74805 10.5944L2.63355 12.8975L3.5525 8.27267L0.090651 5.07126L4.77309 4.51608L6.74805 0.234375Z" fill="#5E626F"></path>
															</svg>

														</li>
														<li>
															<svg width="14" height="13" viewbox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path opacity="0.2" d="M6.74805 0.234375L8.72301 4.51608L13.4054 5.07126L9.9436 8.27267L10.8625 12.8975L6.74805 10.5944L2.63355 12.8975L3.5525 8.27267L0.090651 5.07126L4.77309 4.51608L6.74805 0.234375Z" fill="#5E626F"></path>
															</svg>
														</li>
													</ul>
													<span class="text-secondary me-2">4.7 Rating</span>
													<a href="javascript:void(0);">(5 customer reviews)</a>
												</div>
											</div>
										</div>
										<p class="para-text">
											Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has.
										</p>
										<div class="meta-content m-b20 d-flex align-items-end">
											<div class="me-3">
												<span class="form-label">Price</span>
												<span class="price-num">$125.75 <del>$132.17</del></span>
											</div>
											<div class="btn-quantity light me-0">
												<label class="form-label">Quantity</label>
												<input type="text" value="1" name="demo_vertical2">
											</div>
										</div>
										<div class="btn-group cart-btn">
											<a href="shop-cart.html" class="btn btn-md btn-secondary text-uppercase">Add To Cart</a>
											<a href="shop-wishlist.html" class="btn btn-md btn-light btn-icon">
												<svg width="19" height="17" viewbox="0 0 19 17" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M9.24805 16.9986C8.99179 16.9986 8.74474 16.9058 8.5522 16.7371C7.82504 16.1013 7.12398 15.5038 6.50545 14.9767L6.50229 14.974C4.68886 13.4286 3.12289 12.094 2.03333 10.7794C0.815353 9.30968 0.248047 7.9162 0.248047 6.39391C0.248047 4.91487 0.755203 3.55037 1.67599 2.55157C2.60777 1.54097 3.88631 0.984375 5.27649 0.984375C6.31552 0.984375 7.26707 1.31287 8.10464 1.96065C8.52734 2.28763 8.91049 2.68781 9.24805 3.15459C9.58574 2.68781 9.96875 2.28763 10.3916 1.96065C11.2292 1.31287 12.1807 0.984375 13.2197 0.984375C14.6098 0.984375 15.8885 1.54097 16.8202 2.55157C17.741 3.55037 18.248 4.91487 18.248 6.39391C18.248 7.9162 17.6809 9.30968 16.4629 10.7792C15.3733 12.094 13.8075 13.4285 11.9944 14.9737C11.3747 15.5016 10.6726 16.1001 9.94376 16.7374C9.75136 16.9058 9.50417 16.9986 9.24805 16.9986ZM5.27649 2.03879C4.18431 2.03879 3.18098 2.47467 2.45108 3.26624C1.71033 4.06975 1.30232 5.18047 1.30232 6.39391C1.30232 7.67422 1.77817 8.81927 2.84508 10.1066C3.87628 11.3509 5.41011 12.658 7.18605 14.1715L7.18935 14.1743C7.81021 14.7034 8.51402 15.3033 9.24654 15.9438C9.98344 15.302 10.6884 14.7012 11.3105 14.1713C13.0863 12.6578 14.6199 11.3509 15.6512 10.1066C16.7179 8.81927 17.1938 7.67422 17.1938 6.39391C17.1938 5.18047 16.7858 4.06975 16.045 3.26624C15.3152 2.47467 14.3118 2.03879 13.2197 2.03879C12.4197 2.03879 11.6851 2.29312 11.0365 2.79465C10.4585 3.24179 10.0558 3.80704 9.81975 4.20255C9.69835 4.40593 9.48466 4.52733 9.24805 4.52733C9.01143 4.52733 8.79774 4.40593 8.67635 4.20255C8.44041 3.80704 8.03777 3.24179 7.45961 2.79465C6.811 2.29312 6.07643 2.03879 5.27649 2.03879Z" fill="black"></path>
												</svg>
												Add To Wishlist
											</a>
										</div>
										<div class="dz-info mb-0">
											<ul>
												<li>
													<strong>SKU:</strong>
													<span>PRT584E63A</span>
												</li>
												<li>
													<strong>Category:</strong>
													<span>Bottles,</span>
													<span>Accessories,</span>
													<span>Mats,</span>
													<span>Bottles,</span>
													<span>Trackers</span>
												</li>
												<li>
													<strong>Tags:</strong>
													<span>Trackers,</span>
													<span>Bags,</span>
													<span>Cup,</span>
													<span>Toothbrushes</span>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Quick Modal End -->

	</div>
	<!-- JAVASCRIPT FILES ========================================= -->
	<script src="<?= APP_URL ?>public/assets/clients/js/jquery.min.js"></script><!-- JQUERY MIN JS -->
	<script src="<?= APP_URL ?>public/assets/clients/vendor/wow/wow.min.js"></script><!-- WOW JS -->
	<script src="<?= APP_URL ?>public/assets/clients/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script><!-- BOOTSTRAP MIN JS -->
	<script src="<?= APP_URL ?>public/assets/clients/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script><!-- BOOTSTRAP SELECT MIN JS -->
	<script src="<?= APP_URL ?>public/assets/clients/vendor/bootstrap-touchspin/bootstrap-touchspin.js"></script><!-- BOOTSTRAP TOUCHSPIN JS -->

	<script src="<?= APP_URL ?>public/assets/clients/vendor/magnific-popup/magnific-popup.js"></script><!-- MAGNIFIC POPUP JS -->
	<script src="<?= APP_URL ?>public/assets/clients/vendor/counter/waypoints-min.js"></script><!-- WAYPOINTS JS -->
	<script src="<?= APP_URL ?>public/assets/clients/vendor/counter/counterup.min.js"></script><!-- COUNTERUP JS -->
	<script src="<?= APP_URL ?>public/assets/clients/vendor/swiper/swiper-bundle.min.js"></script><!-- SWIPER JS -->
	<script src="<?= APP_URL ?>public/assets/clients/vendor/imagesloaded/imagesloaded.js"></script><!-- IMAGESLOADED-->
	<script src="<?= APP_URL ?>public/assets/clients/vendor/masonry/masonry-4.2.2.js"></script><!-- MASONRY -->
	<script src="<?= APP_URL ?>public/assets/clients/vendor/masonry/isotope.pkgd.min.js"></script><!-- ISOTOPE -->
	<script src="<?= APP_URL ?>public/assets/clients/vendor/countdown/jquery.countdown.js"></script><!-- COUNTDOWN FUCTIONS  -->
	<script src="<?= APP_URL ?>public/assets/clients/js/dz.carousel.js"></script><!-- DZ CAROUSEL JS -->
	<script src="<?= APP_URL ?>public/assets/clients/vendor/lightgallery/dist/lightgallery.min.js"></script>
	<script src="<?= APP_URL ?>public/assets/clients/vendor/lightgallery/dist/plugins/thumbnail/lg-thumbnail.min.js"></script>
	<script src="<?= APP_URL ?>public/assets/clients/vendor/lightgallery/dist/plugins/zoom/lg-zoom.min.js"></script>
	<script src="<?= APP_URL ?>public/assets/clients/js/dz.ajax.js"></script><!-- AJAX -->
	<script src="<?= APP_URL ?>public/assets/clients/js/custom.js"></script><!-- CUSTOM JS -->
</body>

</html>