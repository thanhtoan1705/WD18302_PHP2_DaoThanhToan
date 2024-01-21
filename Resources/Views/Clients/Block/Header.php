<!-- Header -->
<header class="site-header mo-left header style-2">
	<!-- Main Header -->
	<div class="header-info-bar">
		<div class="container clearfix">
			<!-- Website Logo -->
			<div class="logo-header logo-dark">
				<a href="<?= APP_URL ?>"><img src="<?= APP_URL ?>public/assets/clients/images/logo.svg" alt="logo"></a>
			</div>

			<!-- EXTRA NAV -->
			<div class="extra-nav d-md-flex d-none">
				<div class="extra-cell">
					<ul class="navbar-nav header-right">
						<li class="nav-item info-box pe-3 d-xl-flex d-none">
							<div class="nav-link">
								<div class="dz-icon">
									<i class="flaticon flaticon-ship"></i>
								</div>
								<div class="info-content">
									<span>FREE</span>
									<h6 class="title mb-0">Shipping</h6>
								</div>
							</div>
						</li>
						<li class="nav-item info-box ">
							<div class="nav-link">
								<div class="dz-icon">
									<i class="flaticon flaticon-call-center"></i>
								</div>
								<div class="info-content">
									<span>24/7 SUPPORT</span>
									<h6 class="title mb-0">+00 099 321 312</h6>
								</div>
							</div>
						</li>
					</ul>
				</div>
			</div>

			<!-- header search nav -->
			<div class="header-search-nav">
				<form class="header-item-search">
					<div class="input-group search-input">
						<select class="default-select">
							<option>All Categories</option>
							<option>Photography </option>
							<option>Arts</option>
							<option>Adventure</option>
							<option>Action</option>
							<option>Games</option>
							<option>Movies</option>
							<option>Comics</option>
							<option>Biographies</option>
							<option>Children’s Books</option>
							<option>Historical</option>
							<option>Contemporary</option>
							<option>Classics</option>
							<option>Education</option>
						</select>
						<input type="text" class="form-control" aria-label="Text input with dropdown button" placeholder="Search for products">
						<button class="btn" type="button">
							<svg width="21" height="21" viewbox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
								<circle cx="10.0535" cy="10.5399" r="7.49047" stroke="#0D775E" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></circle>
								<path d="M15.2632 16.1387L18.1999 19.0677" stroke="#0D775E" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
							</svg>
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- Main Header End -->

	<!-- Main Header -->
	<div class="sticky-header main-bar-wraper navbar-expand-lg">
		<div class="main-bar dark clearfix">
			<div class="container clearfix">
				<!-- Website Logo -->
				<div class="logo-header logo-dark">
					<a href="<?= APP_URL ?>"><img src="<?= APP_URL ?>public/assets/clients/images/logo.svg" alt="logo"></a>
				</div>

				<!-- Nav Toggle Button -->
				<button class="navbar-toggler collapsed navicon justify-content-end" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
					<span></span>
					<span></span>
					<span></span>
				</button>

				<!-- EXTRA NAV -->
				<div class="extra-nav">
					<div class="extra-cell">
						<ul class="header-right">
							<li class="nav-item login-link">
								<a class="nav-link" href="<?= APP_URL ?>login">
									LOGIN / REGISTER
								</a>
							</li>
							<li class="nav-item search-link">
								<a class="nav-link" href="javascript:void(0);" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop" aria-controls="offcanvasTop">
									<svg width="21" height="21" viewbox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
										<circle cx="10.0535" cy="10.55" r="7.49047" stroke="var(--white)" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></circle>
										<path d="M15.2632 16.1487L18.1999 19.0778" stroke="var(--white)" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
									</svg>
								</a>
							</li>
							<li class="nav-item wishlist-link">
								<a class="nav-link" href="<?= APP_URL?>account" >
									<svg width="21" height="21" viewbox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path fill-rule="evenodd" clip-rule="evenodd" d="M2.64119 10.4097C1.74702 7.61808 2.79202 4.42724 5.72285 3.48308C7.26452 2.98558 8.96619 3.27891 10.2479 4.24308C11.4604 3.30558 13.2245 2.98891 14.7645 3.48308C17.6954 4.42724 18.747 7.61808 17.8537 10.4097C16.462 14.8347 10.2479 18.2431 10.2479 18.2431C10.2479 18.2431 4.07952 14.8864 2.64119 10.4097Z" stroke="var(--white)" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
										<path d="M13.5813 6.32781C14.473 6.61614 15.103 7.41197 15.1788 8.34614" stroke="var(--white)" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
									</svg>
								</a>
							</li>
							<li class="nav-item cart-link">
								<a href="<?= APP_URL?>cart" class="nav-link cart-btn">
									<svg width="21" height="21" viewbox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path fill-rule="evenodd" clip-rule="evenodd" d="M1.08374 2.61947C1.08374 2.27429 1.36356 1.99447 1.70874 1.99447H3.29314C3.91727 1.99447 4.4722 2.39163 4.67352 2.98239L5.06379 4.1276H15.4584C17.6446 4.1276 19.4168 5.89981 19.4168 8.08593V11.5379C19.4168 13.7241 17.6446 15.4963 15.4584 15.4963H9.22182C7.30561 15.4963 5.66457 14.1237 5.32583 12.2377L4.00967 4.90953L3.49034 3.3856C3.46158 3.30121 3.3823 3.24447 3.29314 3.24447H1.70874C1.36356 3.24447 1.08374 2.96465 1.08374 2.61947ZM5.36374 5.3776L6.55614 12.0167C6.78791 13.3072 7.91073 14.2463 9.22182 14.2463H15.4584C16.9542 14.2463 18.1668 13.0337 18.1668 11.5379V8.08593C18.1668 6.59016 16.9542 5.3776 15.4584 5.3776H5.36374Z" fill="var(--white)"></path>
										<path fill-rule="evenodd" clip-rule="evenodd" d="M8.16479 17.8278C8.16479 17.1374 8.72444 16.5778 9.4148 16.5778H9.42313C10.1135 16.5778 10.6731 17.1374 10.6731 17.8278C10.6731 18.5182 10.1135 19.0778 9.42313 19.0778H9.4148C8.72444 19.0778 8.16479 18.5182 8.16479 17.8278Z" fill="var(--white)"></path>
										<path fill-rule="evenodd" clip-rule="evenodd" d="M14.8315 17.8278C14.8315 17.1374 15.3912 16.5778 16.0815 16.5778H16.0899C16.7802 16.5778 17.3399 17.1374 17.3399 17.8278C17.3399 18.5182 16.7802 19.0778 16.0899 19.0778H16.0815C15.3912 19.0778 14.8315 18.5182 14.8315 17.8278Z" fill="var(--white)"></path>
									</svg>
									<span class="badge badge-circle">5</span>
								</a>
							</li>
							<li class="nav-item cart-link">
								<a href="<?= APP_URL ?>account">
									<i class="bi bi-person-fill"></i>
								</a>
							</li>
						</ul>

					</div>
				</div>

				<!-- Main Nav -->
				<div class="header-nav navbar-collapse collapse justify-content-start" id="navbarNavDropdown">
					<div class="logo-header">
						<a href="index.html"><img src="<?= APP_URL ?>public/assets/clients/images/logo.svg" alt=""></a>
					</div>
					<ul class="nav navbar-nav dark-nav">
						<li class="has-mega-menu">
							<a href="<?= APP_URL ?>"><span>Home</span></a>
						</li>
						<li class="has-mega-menu">
							<a href="<?= APP_URL ?>product"><span>Shop</span></a>
						</li>
						<li class="has-mega-menu"><a href="javascript:void(0);"><span>Blog</span></a>
						</li>
						<li><a href="javascript:void(0);">Contact Us</a></li>
				</div>
			</div>
		</div>
	</div>
	</div>
	<!-- Main Header End -->

	<!-- SearchBar -->
	<div class="dz-search-area dz-offcanvas offcanvas offcanvas-top" tabindex="-1" id="offcanvasTop">
		<button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close">
			&times;
		</button>
		<div class="container">
			<form class="header-item-search">
				<div class="input-group search-input">
					<select class="default-select">
						<option>All Categories</option>
						<option>Wooden Bottles </option>
						<option>Wooden Furniture</option>
						<option>Metal Utensils</option>
						<option>Wooden Utensils</option>
						<option>Baby Products</option>
						<option>Yoga Mats</option>
						<option>Eco-Friendly</option>
						<option>Childern's Strollers</option>
						<option>Bamboo products</option>
						<option>Healthy Products</option>
						<option>Luxury Couch</option>
						<option>Video Instructors</option>
					</select>
					<input type="text" class="form-control" aria-label="Text input with dropdown button" placeholder="Search Product">
					<button class="btn" type="button">
						<svg width="21" height="21" viewbox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
							<circle cx="10.0535" cy="10.5399" r="7.49047" stroke="#0D775E" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></circle>
							<path d="M15.2632 16.1387L18.1999 19.0677" stroke="#0D775E" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
						</svg>
					</button>
				</div>
				<ul class="recent-tag">
					<li class="pe-0"><span>Quick Search :</span></li>
					<li><a href="shop-list.html">Wooden Products</a></li>
					<li><a href="shop-list.html">Metal Products</a></li>
					<li><a href="shop-list.html">Baby Products</a></li>
					<li><a href="shop-list.html">Yoga Mats</a></li>
				</ul>
			</form>
			<div class="row">
				<div class="col-xl-12">
					<h5 class="mb-3">You May Also Like</h5>
					<div class="swiper category-swiper2">
						<div class="swiper-wrapper">
							<div class="swiper-slide">
								<div class="shop-card">
									<div class="dz-media">
										<img src="<?= APP_URL ?>public/assets/clients/images/shop/product/1.png" alt="<?= APP_URL ?>public/assets/clients/image">
									</div>
									<div class="dz-content">
										<h6 class="title"><a href="<?= APP_URL ?>product/detail">Wooden Water Bottles</a></h6>
										<h6 class="price">$40.00</h6>
									</div>
								</div>
							</div>
							<div class="swiper-slide">
								<div class="shop-card">
									<div class="dz-media">
										<img src="<?= APP_URL ?>public/assets/clients/images/shop/product/3.png" alt="<?= APP_URL ?>public/assets/clients/image">
									</div>
									<div class="dz-content">
										<h6 class="title"><a href="<?= APP_URL ?>product/detail">Bamboo toothbrushes</a></h6>
										<h6 class="price">$30.00</h6>
									</div>
								</div>
							</div>
							<div class="swiper-slide">
								<div class="shop-card">
									<div class="dz-media">
										<img src="<?= APP_URL ?>public/assets/clients/images/shop/product/4.png" alt="<?= APP_URL ?>public/assets/clients/image">
									</div>
									<div class="dz-content">
										<h6 class="title"><a href="<?= APP_URL ?>product/detail">Eco friendly bags</a></h6>
										<h6 class="price">$35.00</h6>
									</div>
								</div>
							</div>
							<div class="swiper-slide">
								<div class="shop-card">
									<div class="dz-media">
										<img src="<?= APP_URL ?>public/assets/clients/images/shop/product/2.png" alt="<?= APP_URL ?>public/assets/clients/image">
									</div>
									<div class="dz-content">
										<h6 class="title"><a href="<?= APP_URL ?>product/detail">Wooden Cup</a></h6>
										<h6 class="price">$20.00</h6>
									</div>
								</div>
							</div>
							<div class="swiper-slide">
								<div class="shop-card">
									<div class="dz-media">
										<img src="<?= APP_URL ?>public/assets/clients/images/shop/product/5.png" alt="<?= APP_URL ?>public/assets/clients/image">
									</div>
									<div class="dz-content">
										<h6 class="title"><a href="<?= APP_URL ?>product/detail">Bamboo toothbrushes</a></h6>
										<h6 class="price">$70.00</h6>
									</div>
								</div>
							</div>
							<div class="swiper-slide">
								<div class="shop-card">
									<div class="dz-media">
										<img src="<?= APP_URL ?>public/assets/clients/images/shop/product/6.png" alt="<?= APP_URL ?>public/assets/clients/image">
									</div>
									<div class="dz-content">
										<h6 class="title"><a href="<?= APP_URL ?>product/detail">Eco friendly bags</a></h6>
										<h6 class="price">$45.00</h6>
									</div>
								</div>
							</div>
							<div class="swiper-slide">
								<div class="shop-card">
									<div class="dz-media">
										<img src="<?= APP_URL ?>public/assets/clients/images/shop/product/7.png" alt="<?= APP_URL ?>public/assets/clients/image">
									</div>
									<div class="dz-content">
										<h6 class="title"><a href="<?= APP_URL ?>product/detail">Wooden Bottles</a></h6>
										<h6 class="price">$40.00</h6>
									</div>
								</div>
							</div>
							<div class="swiper-slide">
								<div class="shop-card">
									<div class="dz-media">
										<img src="<?= APP_URL ?>public/assets/clients/images/shop/product/4.png" alt="<?= APP_URL ?>public/assets/clients/image">
									</div>
									<div class="dz-content">
										<h6 class="title"><a href="<?= APP_URL ?>product/detail">Paper Bags</a></h6>
										<h6 class="price">$60.00</h6>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- SearchBar -->
</header>
<!-- Header End -->