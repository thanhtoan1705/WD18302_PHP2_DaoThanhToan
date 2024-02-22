<div class="page-content">
	<!--banner-->
	<div class="dz-bnr-inr style-1" style="background-image:url(images/background/bg-shape.jpg);">
		<div class="container">
			<div class="dz-bnr-inr-entry">
				<h1>Shop Style 1</h1>
				<nav aria-label="breadcrumb" class="breadcrumb-row">
					<ul class="breadcrumb">
						<li class="breadcrumb-item"><a href="index.html"> Home</a></li>
						<li class="breadcrumb-item">Shop Standard</li>
					</ul>
				</nav>
			</div>
		</div>
	</div>

	<section class="content-inner-1 z-index-unset">
		<div class="container">
			<div class="row m-auto gx-xl-4 g-3 mb-xl-0 mb-md-0 mb-3">
				<?php foreach ($data['products'] as $product) : ?>
					<div class="col-6 col-xl-4 col-lg-4 col-md-4 col-sm-6 m-md-b15 m-sm-b0 m-b30">
						<div class="shop-card">
							<div class="dz-media">
								<img src="<?= APP_URL ?>public/uploads/images/<?= $product['image'] ?>" alt="image">
								<div class="shop-meta">
									<a href="javascript:void(0);" class="btn btn-secondary btn-icon" data-bs-toggle="modal" data-bs-target="#exampleModal">
										<i class="fa-solid fa-eye d-md-none d-block"></i>
										<span class="d-md-block d-none">Quick View</span>
									</a>
									<div class="btn btn-primary meta-icon dz-wishicon">
										<svg class="dz-heart-fill" width="14" height="12" viewbox="0 0 14 12" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M13.6412 5.80113C13.0778 6.9649 12.0762 8.02624 11.1657 8.8827C10.5113 9.49731 9.19953 10.7322 7.77683 11.62C7.30164 11.9159 6.69842 11.9159 6.22323 11.62C4.80338 10.7322 3.4888 9.49731 2.83435 8.8827C1.92382 8.02624 0.92224 6.96205 0.358849 5.80113C-0.551681 3.91747 0.344622 1.44196 2.21121 0.557041C3.98674 -0.282354 5.54034 0.292418 7.00003 1.44765C8.45972 0.292418 10.0133 -0.282354 11.786 0.557041C13.6554 1.44196 14.5517 3.91747 13.6412 5.80113Z" fill="white"></path>
										</svg>
										<svg class="dz-heart feather feather-heart" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
											<path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
										</svg>

									</div>
									<div class="btn btn-primary meta-icon dz-carticon">
										<svg class="dz-cart-check" width="15" height="15" viewbox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M11.9144 3.73438L5.49772 10.151L2.58105 7.23438" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
										</svg>
										<svg class="dz-cart-out" width="14" height="14" viewbox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M10.6033 10.4092C9.70413 10.4083 8.97452 11.1365 8.97363 12.0357C8.97274 12.9348 9.70097 13.6644 10.6001 13.6653C11.4993 13.6662 12.2289 12.938 12.2298 12.0388C12.2298 12.0383 12.2298 12.0378 12.2298 12.0373C12.2289 11.1391 11.5014 10.4109 10.6033 10.4092Z" fill="white"></path>
											<path d="M13.4912 2.6132C13.4523 2.60565 13.4127 2.60182 13.373 2.60176H3.46022L3.30322 1.55144C3.20541 0.853911 2.60876 0.334931 1.90439 0.334717H0.627988C0.281154 0.334717 0 0.61587 0 0.962705C0 1.30954 0.281154 1.59069 0.627988 1.59069H1.90595C1.9858 1.59011 2.05338 1.64957 2.06295 1.72886L3.03004 8.35727C3.16263 9.19953 3.88712 9.8209 4.73975 9.82363H11.2724C12.0933 9.8247 12.8015 9.24777 12.9664 8.44362L13.9884 3.34906C14.0543 3.00854 13.8317 2.67909 13.4912 2.6132Z" fill="white"></path>
											<path d="M6.61539 11.9676C6.57716 11.0948 5.85687 10.4077 4.98324 10.4108C4.08483 10.4471 3.38595 11.2048 3.42225 12.1032C3.45708 12.9653 4.15833 13.6505 5.02092 13.6653H5.06017C5.95846 13.626 6.65474 12.8658 6.61539 11.9676Z" fill="white"></path>
											<clippath id="clip0_258_3906">
												<rect width="14" height="14" fill="white"></rect>
											</clippath>
										</svg>
									</div>
								</div>
							</div>
							<div class="dz-content">
								<h5 class="title"><a href="<?= APP_URL ?>product/<?= $product['id'] ?>"><?= $product['name'] ?></a></h5>
								<ul class="star-rating">
									<li>
										<svg width="14" height="14" viewbox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M7.24805 0.734375L9.22301 5.01608L13.9054 5.57126L10.4436 8.77267L11.3625 13.3975L7.24805 11.0944L3.13355 13.3975L4.0525 8.77267L0.590651 5.57126L5.27309 5.01608L7.24805 0.734375Z" fill="#FF8A00"></path>
										</svg>
									</li>
									<li>
										<svg width="14" height="14" viewbox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M7.24805 0.734375L9.22301 5.01608L13.9054 5.57126L10.4436 8.77267L11.3625 13.3975L7.24805 11.0944L3.13355 13.3975L4.0525 8.77267L0.590651 5.57126L5.27309 5.01608L7.24805 0.734375Z" fill="#FF8A00"></path>
										</svg>
									</li>
									<li>
										<svg width="14" height="14" viewbox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M7.24805 0.734375L9.22301 5.01608L13.9054 5.57126L10.4436 8.77267L11.3625 13.3975L7.24805 11.0944L3.13355 13.3975L4.0525 8.77267L0.590651 5.57126L5.27309 5.01608L7.24805 0.734375Z" fill="#FF8A00"></path>
										</svg>
									</li>
									<li>
										<svg width="14" height="14" viewbox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M7.24805 0.734375L9.22301 5.01608L13.9054 5.57126L10.4436 8.77267L11.3625 13.3975L7.24805 11.0944L3.13355 13.3975L4.0525 8.77267L0.590651 5.57126L5.27309 5.01608L7.24805 0.734375Z" fill="#E4E5E8"></path>
										</svg>
									</li>
									<li>
										<svg width="14" height="14" viewbox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M7.24805 0.734375L9.22301 5.01608L13.9054 5.57126L10.4436 8.77267L11.3625 13.3975L7.24805 11.0944L3.13355 13.3975L4.0525 8.77267L0.590651 5.57126L5.27309 5.01608L7.24805 0.734375Z" fill="#E4E5E8"></path>
										</svg>
									</li>
								</ul>
								<h6 class="price">
									$<?= $product['price'] ?>
								</h6>
							</div>
						</div>
					</div>
				<?php endforeach; ?>
				<div class="col-6 col-xl-4 col-lg-4 col-md-4 col-sm-6 m-md-b15 m-sm-b0 m-b30">
					<div class="shop-card">
						<div class="dz-media">
							<img src="<?= APP_URL ?>public/assets/clients/images/shop/product/dt3.png" alt="image">
							<div class="shop-meta">
								<a href="javascript:void(0);" class="btn btn-secondary btn-icon" data-bs-toggle="modal" data-bs-target="#exampleModal">
									<i class="fa-solid fa-eye d-md-none d-block"></i>
									<span class="d-md-block d-none">Quick View</span>
								</a>
								<div class="btn btn-primary meta-icon dz-wishicon">
									<svg class="dz-heart-fill" width="14" height="12" viewbox="0 0 14 12" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M13.6412 5.80113C13.0778 6.9649 12.0762 8.02624 11.1657 8.8827C10.5113 9.49731 9.19953 10.7322 7.77683 11.62C7.30164 11.9159 6.69842 11.9159 6.22323 11.62C4.80338 10.7322 3.4888 9.49731 2.83435 8.8827C1.92382 8.02624 0.92224 6.96205 0.358849 5.80113C-0.551681 3.91747 0.344622 1.44196 2.21121 0.557041C3.98674 -0.282354 5.54034 0.292418 7.00003 1.44765C8.45972 0.292418 10.0133 -0.282354 11.786 0.557041C13.6554 1.44196 14.5517 3.91747 13.6412 5.80113Z" fill="white"></path>
									</svg>
									<svg class="dz-heart feather feather-heart" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
										<path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
									</svg>

								</div>
								<div class="btn btn-primary meta-icon dz-carticon">
									<svg class="dz-cart-check" width="15" height="15" viewbox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M11.9144 3.73438L5.49772 10.151L2.58105 7.23438" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
									</svg>
									<svg class="dz-cart-out" width="14" height="14" viewbox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M10.6033 10.4092C9.70413 10.4083 8.97452 11.1365 8.97363 12.0357C8.97274 12.9348 9.70097 13.6644 10.6001 13.6653C11.4993 13.6662 12.2289 12.938 12.2298 12.0388C12.2298 12.0383 12.2298 12.0378 12.2298 12.0373C12.2289 11.1391 11.5014 10.4109 10.6033 10.4092Z" fill="white"></path>
										<path d="M13.4912 2.6132C13.4523 2.60565 13.4127 2.60182 13.373 2.60176H3.46022L3.30322 1.55144C3.20541 0.853911 2.60876 0.334931 1.90439 0.334717H0.627988C0.281154 0.334717 0 0.61587 0 0.962705C0 1.30954 0.281154 1.59069 0.627988 1.59069H1.90595C1.9858 1.59011 2.05338 1.64957 2.06295 1.72886L3.03004 8.35727C3.16263 9.19953 3.88712 9.8209 4.73975 9.82363H11.2724C12.0933 9.8247 12.8015 9.24777 12.9664 8.44362L13.9884 3.34906C14.0543 3.00854 13.8317 2.67909 13.4912 2.6132Z" fill="white"></path>
										<path d="M6.61539 11.9676C6.57716 11.0948 5.85687 10.4077 4.98324 10.4108C4.08483 10.4471 3.38595 11.2048 3.42225 12.1032C3.45708 12.9653 4.15833 13.6505 5.02092 13.6653H5.06017C5.95846 13.626 6.65474 12.8658 6.61539 11.9676Z" fill="white"></path>
									</svg>
								</div>
							</div>
						</div>
						<div class="dz-content">
							<h5 class="title"><a href="shop-list.html">Eco friendly bags</a></h5>
							<ul class="star-rating">
								<li>
									<svg width="14" height="14" viewbox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M7.24805 0.734375L9.22301 5.01608L13.9054 5.57126L10.4436 8.77267L11.3625 13.3975L7.24805 11.0944L3.13355 13.3975L4.0525 8.77267L0.590651 5.57126L5.27309 5.01608L7.24805 0.734375Z" fill="#FF8A00"></path>
									</svg>
								</li>
								<li>
									<svg width="14" height="14" viewbox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M7.24805 0.734375L9.22301 5.01608L13.9054 5.57126L10.4436 8.77267L11.3625 13.3975L7.24805 11.0944L3.13355 13.3975L4.0525 8.77267L0.590651 5.57126L5.27309 5.01608L7.24805 0.734375Z" fill="#FF8A00"></path>
									</svg>
								</li>
								<li>
									<svg width="14" height="14" viewbox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M7.24805 0.734375L9.22301 5.01608L13.9054 5.57126L10.4436 8.77267L11.3625 13.3975L7.24805 11.0944L3.13355 13.3975L4.0525 8.77267L0.590651 5.57126L5.27309 5.01608L7.24805 0.734375Z" fill="#FF8A00"></path>
									</svg>
								</li>
								<li>
									<svg width="14" height="14" viewbox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M7.24805 0.734375L9.22301 5.01608L13.9054 5.57126L10.4436 8.77267L11.3625 13.3975L7.24805 11.0944L3.13355 13.3975L4.0525 8.77267L0.590651 5.57126L5.27309 5.01608L7.24805 0.734375Z" fill="#E4E5E8"></path>
									</svg>
								</li>
								<li>
									<svg width="14" height="14" viewbox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M7.24805 0.734375L9.22301 5.01608L13.9054 5.57126L10.4436 8.77267L11.3625 13.3975L7.24805 11.0944L3.13355 13.3975L4.0525 8.77267L0.590651 5.57126L5.27309 5.01608L7.24805 0.734375Z" fill="#E4E5E8"></path>
									</svg>
								</li>
							</ul>
							<h6 class="price">
								<del>$58.00</del>
								$40.00
							</h6>
						</div>
						<div class="product-tag">
							<span class="badge badge-secondary">-45%</span>
							<span class="badge badge-primary">Featured</span>
						</div>
					</div>
				</div>
				<div class="col-6 col-xl-4 col-lg-4 col-md-4 col-sm-6 m-md-b15 m-sm-b0 m-b30">
					<div class="shop-card">
						<div class="dz-media">
							<img src="<?= APP_URL ?>public/assets/clients/images/shop/product/dt4.png" alt="image">
							<div class="shop-meta">
								<a href="javascript:void(0);" class="btn btn-secondary btn-icon" data-bs-toggle="modal" data-bs-target="#exampleModal">
									<i class="fa-solid fa-eye d-md-none d-block"></i>
									<span class="d-md-block d-none">Quick View</span>
								</a>
								<div class="btn btn-primary meta-icon dz-wishicon">
									<svg class="dz-heart-fill" width="14" height="12" viewbox="0 0 14 12" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M13.6412 5.80113C13.0778 6.9649 12.0762 8.02624 11.1657 8.8827C10.5113 9.49731 9.19953 10.7322 7.77683 11.62C7.30164 11.9159 6.69842 11.9159 6.22323 11.62C4.80338 10.7322 3.4888 9.49731 2.83435 8.8827C1.92382 8.02624 0.92224 6.96205 0.358849 5.80113C-0.551681 3.91747 0.344622 1.44196 2.21121 0.557041C3.98674 -0.282354 5.54034 0.292418 7.00003 1.44765C8.45972 0.292418 10.0133 -0.282354 11.786 0.557041C13.6554 1.44196 14.5517 3.91747 13.6412 5.80113Z" fill="white"></path>
									</svg>
									<svg class="dz-heart feather feather-heart" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
										<path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
									</svg>

								</div>
								<div class="btn btn-primary meta-icon dz-carticon">
									<svg class="dz-cart-check" width="15" height="15" viewbox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M11.9144 3.73438L5.49772 10.151L2.58105 7.23438" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
									</svg>
									<svg class="dz-cart-out" width="14" height="14" viewbox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M10.6033 10.4092C9.70413 10.4083 8.97452 11.1365 8.97363 12.0357C8.97274 12.9348 9.70097 13.6644 10.6001 13.6653C11.4993 13.6662 12.2289 12.938 12.2298 12.0388C12.2298 12.0383 12.2298 12.0378 12.2298 12.0373C12.2289 11.1391 11.5014 10.4109 10.6033 10.4092Z" fill="white"></path>
										<path d="M13.4912 2.6132C13.4523 2.60565 13.4127 2.60182 13.373 2.60176H3.46022L3.30322 1.55144C3.20541 0.853911 2.60876 0.334931 1.90439 0.334717H0.627988C0.281154 0.334717 0 0.61587 0 0.962705C0 1.30954 0.281154 1.59069 0.627988 1.59069H1.90595C1.9858 1.59011 2.05338 1.64957 2.06295 1.72886L3.03004 8.35727C3.16263 9.19953 3.88712 9.8209 4.73975 9.82363H11.2724C12.0933 9.8247 12.8015 9.24777 12.9664 8.44362L13.9884 3.34906C14.0543 3.00854 13.8317 2.67909 13.4912 2.6132Z" fill="white"></path>
										<path d="M6.61539 11.9676C6.57716 11.0948 5.85687 10.4077 4.98324 10.4108C4.08483 10.4471 3.38595 11.2048 3.42225 12.1032C3.45708 12.9653 4.15833 13.6505 5.02092 13.6653H5.06017C5.95846 13.626 6.65474 12.8658 6.61539 11.9676Z" fill="white"></path>
										<clippath id="clip_502_3906">
											<rect width="14" height="14" fill="white"></rect>
										</clippath>
									</svg>
								</div>
							</div>
						</div>
						<div class="dz-content">
							<h5 class="title"><a href="<?= APP_URL ?>product/detail">Wooden Water Bottles</a></h5>
							<ul class="star-rating">
								<li>
									<svg width="14" height="14" viewbox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M7.24805 0.734375L9.22301 5.01608L13.9054 5.57126L10.4436 8.77267L11.3625 13.3975L7.24805 11.0944L3.13355 13.3975L4.0525 8.77267L0.590651 5.57126L5.27309 5.01608L7.24805 0.734375Z" fill="#FF8A00"></path>
									</svg>
								</li>
								<li>
									<svg width="14" height="14" viewbox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M7.24805 0.734375L9.22301 5.01608L13.9054 5.57126L10.4436 8.77267L11.3625 13.3975L7.24805 11.0944L3.13355 13.3975L4.0525 8.77267L0.590651 5.57126L5.27309 5.01608L7.24805 0.734375Z" fill="#FF8A00"></path>
									</svg>
								</li>
								<li>
									<svg width="14" height="14" viewbox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M7.24805 0.734375L9.22301 5.01608L13.9054 5.57126L10.4436 8.77267L11.3625 13.3975L7.24805 11.0944L3.13355 13.3975L4.0525 8.77267L0.590651 5.57126L5.27309 5.01608L7.24805 0.734375Z" fill="#FF8A00"></path>
									</svg>
								</li>
								<li>
									<svg width="14" height="14" viewbox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M7.24805 0.734375L9.22301 5.01608L13.9054 5.57126L10.4436 8.77267L11.3625 13.3975L7.24805 11.0944L3.13355 13.3975L4.0525 8.77267L0.590651 5.57126L5.27309 5.01608L7.24805 0.734375Z" fill="#E4E5E8"></path>
									</svg>
								</li>
								<li>
									<svg width="14" height="14" viewbox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M7.24805 0.734375L9.22301 5.01608L13.9054 5.57126L10.4436 8.77267L11.3625 13.3975L7.24805 11.0944L3.13355 13.3975L4.0525 8.77267L0.590651 5.57126L5.27309 5.01608L7.24805 0.734375Z" fill="#E4E5E8"></path>
									</svg>
								</li>
							</ul>
							<h6 class="price">
								<del>$65.00</del>
								$40.00
							</h6>
						</div>
						<div class="product-tag">
							<span class="badge badge-secondary">Sale</span>
						</div>
					</div>
				</div>
				<div class="col-6 col-xl-4 col-lg-4 col-md-4 col-sm-6 m-md-b15 m-sm-b0 m-b30">
					<div class="shop-card">
						<div class="dz-media">
							<img src="<?= APP_URL ?>public/assets/clients/images/shop/product/dt5.png" alt="image">
							<div class="shop-meta">
								<a href="javascript:void(0);" class="btn btn-secondary btn-icon" data-bs-toggle="modal" data-bs-target="#exampleModal">
									<i class="fa-solid fa-eye d-md-none d-block"></i>
									<span class="d-md-block d-none">Quick View</span>
								</a>
								<div class="btn btn-primary meta-icon dz-wishicon">
									<svg class="dz-heart-fill" width="14" height="12" viewbox="0 0 14 12" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M13.6412 5.80113C13.0778 6.9649 12.0762 8.02624 11.1657 8.8827C10.5113 9.49731 9.19953 10.7322 7.77683 11.62C7.30164 11.9159 6.69842 11.9159 6.22323 11.62C4.80338 10.7322 3.4888 9.49731 2.83435 8.8827C1.92382 8.02624 0.92224 6.96205 0.358849 5.80113C-0.551681 3.91747 0.344622 1.44196 2.21121 0.557041C3.98674 -0.282354 5.54034 0.292418 7.00003 1.44765C8.45972 0.292418 10.0133 -0.282354 11.786 0.557041C13.6554 1.44196 14.5517 3.91747 13.6412 5.80113Z" fill="white"></path>
									</svg>
									<svg class="dz-heart feather feather-heart" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
										<path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
									</svg>

								</div>
								<div class="btn btn-primary meta-icon dz-carticon">
									<svg class="dz-cart-check" width="15" height="15" viewbox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M11.9144 3.73438L5.49772 10.151L2.58105 7.23438" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
									</svg>
									<svg class="dz-cart-out" width="14" height="14" viewbox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M10.6033 10.4092C9.70413 10.4083 8.97452 11.1365 8.97363 12.0357C8.97274 12.9348 9.70097 13.6644 10.6001 13.6653C11.4993 13.6662 12.2289 12.938 12.2298 12.0388C12.2298 12.0383 12.2298 12.0378 12.2298 12.0373C12.2289 11.1391 11.5014 10.4109 10.6033 10.4092Z" fill="white"></path>
										<path d="M13.4912 2.6132C13.4523 2.60565 13.4127 2.60182 13.373 2.60176H3.46022L3.30322 1.55144C3.20541 0.853911 2.60876 0.334931 1.90439 0.334717H0.627988C0.281154 0.334717 0 0.61587 0 0.962705C0 1.30954 0.281154 1.59069 0.627988 1.59069H1.90595C1.9858 1.59011 2.05338 1.64957 2.06295 1.72886L3.03004 8.35727C3.16263 9.19953 3.88712 9.8209 4.73975 9.82363H11.2724C12.0933 9.8247 12.8015 9.24777 12.9664 8.44362L13.9884 3.34906C14.0543 3.00854 13.8317 2.67909 13.4912 2.6132Z" fill="white"></path>
										<path d="M6.61539 11.9676C6.57716 11.0948 5.85687 10.4077 4.98324 10.4108C4.08483 10.4471 3.38595 11.2048 3.42225 12.1032C3.45708 12.9653 4.15833 13.6505 5.02092 13.6653H5.06017C5.95846 13.626 6.65474 12.8658 6.61539 11.9676Z" fill="white"></path>
										<clippath id="clip0_2_3906">
											<rect width="14" height="14" fill="white"></rect>
										</clippath>
									</svg>
								</div>
							</div>
						</div>
						<div class="dz-content">
							<h5 class="title"><a href="<?= APP_URL ?>product/detail">Wooden Cup</a></h5>
							<ul class="star-rating">
								<li>
									<svg width="14" height="14" viewbox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M7.24805 0.734375L9.22301 5.01608L13.9054 5.57126L10.4436 8.77267L11.3625 13.3975L7.24805 11.0944L3.13355 13.3975L4.0525 8.77267L0.590651 5.57126L5.27309 5.01608L7.24805 0.734375Z" fill="#FF8A00"></path>
									</svg>
								</li>
								<li>
									<svg width="14" height="14" viewbox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M7.24805 0.734375L9.22301 5.01608L13.9054 5.57126L10.4436 8.77267L11.3625 13.3975L7.24805 11.0944L3.13355 13.3975L4.0525 8.77267L0.590651 5.57126L5.27309 5.01608L7.24805 0.734375Z" fill="#FF8A00"></path>
									</svg>
								</li>
								<li>
									<svg width="14" height="14" viewbox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M7.24805 0.734375L9.22301 5.01608L13.9054 5.57126L10.4436 8.77267L11.3625 13.3975L7.24805 11.0944L3.13355 13.3975L4.0525 8.77267L0.590651 5.57126L5.27309 5.01608L7.24805 0.734375Z" fill="#FF8A00"></path>
									</svg>
								</li>
								<li>
									<svg width="14" height="14" viewbox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M7.24805 0.734375L9.22301 5.01608L13.9054 5.57126L10.4436 8.77267L11.3625 13.3975L7.24805 11.0944L3.13355 13.3975L4.0525 8.77267L0.590651 5.57126L5.27309 5.01608L7.24805 0.734375Z" fill="#E4E5E8"></path>
									</svg>
								</li>
								<li>
									<svg width="14" height="14" viewbox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M7.24805 0.734375L9.22301 5.01608L13.9054 5.57126L10.4436 8.77267L11.3625 13.3975L7.24805 11.0944L3.13355 13.3975L4.0525 8.77267L0.590651 5.57126L5.27309 5.01608L7.24805 0.734375Z" fill="#E4E5E8"></path>
									</svg>
								</li>
							</ul>
							<h6 class="price">
								<del>$92.00</del>
								$56.00
							</h6>
						</div>
						<div class="product-tag">
							<span class="badge badge-secondary">-35%</span>
							<span class="badge badge-primary">Featured</span>
						</div>
					</div>
				</div>
				<div class="col-6 col-xl-4 col-lg-4 col-md-4 col-sm-6 m-md-b15 m-sm-b0 m-b30">
					<div class="shop-card">
						<div class="dz-media">
							<img src="<?= APP_URL ?>public/assets/clients/images/shop/product/dt6.png" alt="image">
							<div class="shop-meta">
								<a href="javascript:void(0);" class="btn btn-secondary btn-icon" data-bs-toggle="modal" data-bs-target="#exampleModal">
									<i class="fa-solid fa-eye d-md-none d-block"></i>
									<span class="d-md-block d-none">Quick View</span>
								</a>
								<div class="btn btn-primary meta-icon dz-wishicon">
									<svg class="dz-heart-fill" width="14" height="12" viewbox="0 0 14 12" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M13.6412 5.80113C13.0778 6.9649 12.0762 8.02624 11.1657 8.8827C10.5113 9.49731 9.19953 10.7322 7.77683 11.62C7.30164 11.9159 6.69842 11.9159 6.22323 11.62C4.80338 10.7322 3.4888 9.49731 2.83435 8.8827C1.92382 8.02624 0.92224 6.96205 0.358849 5.80113C-0.551681 3.91747 0.344622 1.44196 2.21121 0.557041C3.98674 -0.282354 5.54034 0.292418 7.00003 1.44765C8.45972 0.292418 10.0133 -0.282354 11.786 0.557041C13.6554 1.44196 14.5517 3.91747 13.6412 5.80113Z" fill="white"></path>
									</svg>
									<svg class="dz-heart feather feather-heart" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
										<path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
									</svg>

								</div>
								<div class="btn btn-primary meta-icon dz-carticon">
									<svg class="dz-cart-check" width="15" height="15" viewbox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M11.9144 3.73438L5.49772 10.151L2.58105 7.23438" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
									</svg>
									<svg class="dz-cart-out" width="14" height="14" viewbox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M10.6033 10.4092C9.70413 10.4083 8.97452 11.1365 8.97363 12.0357C8.97274 12.9348 9.70097 13.6644 10.6001 13.6653C11.4993 13.6662 12.2289 12.938 12.2298 12.0388C12.2298 12.0383 12.2298 12.0378 12.2298 12.0373C12.2289 11.1391 11.5014 10.4109 10.6033 10.4092Z" fill="white"></path>
										<path d="M13.4912 2.6132C13.4523 2.60565 13.4127 2.60182 13.373 2.60176H3.46022L3.30322 1.55144C3.20541 0.853911 2.60876 0.334931 1.90439 0.334717H0.627988C0.281154 0.334717 0 0.61587 0 0.962705C0 1.30954 0.281154 1.59069 0.627988 1.59069H1.90595C1.9858 1.59011 2.05338 1.64957 2.06295 1.72886L3.03004 8.35727C3.16263 9.19953 3.88712 9.8209 4.73975 9.82363H11.2724C12.0933 9.8247 12.8015 9.24777 12.9664 8.44362L13.9884 3.34906C14.0543 3.00854 13.8317 2.67909 13.4912 2.6132Z" fill="white"></path>
										<path d="M6.61539 11.9676C6.57716 11.0948 5.85687 10.4077 4.98324 10.4108C4.08483 10.4471 3.38595 11.2048 3.42225 12.1032C3.45708 12.9653 4.15833 13.6505 5.02092 13.6653H5.06017C5.95846 13.626 6.65474 12.8658 6.61539 11.9676Z" fill="white"></path>
										<clippath id="clip0_59_36">
											<rect width="14" height="14" fill="white"></rect>
										</clippath>
									</svg>
								</div>
							</div>
						</div>
						<div class="dz-content">
							<h5 class="title"><a href="shop-list.html">Wooden Water Bottles</a></h5>
							<ul class="star-rating">
								<li>
									<svg width="14" height="14" viewbox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M7.24805 0.734375L9.22301 5.01608L13.9054 5.57126L10.4436 8.77267L11.3625 13.3975L7.24805 11.0944L3.13355 13.3975L4.0525 8.77267L0.590651 5.57126L5.27309 5.01608L7.24805 0.734375Z" fill="#FF8A00"></path>
									</svg>
								</li>
								<li>
									<svg width="14" height="14" viewbox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M7.24805 0.734375L9.22301 5.01608L13.9054 5.57126L10.4436 8.77267L11.3625 13.3975L7.24805 11.0944L3.13355 13.3975L4.0525 8.77267L0.590651 5.57126L5.27309 5.01608L7.24805 0.734375Z" fill="#FF8A00"></path>
									</svg>
								</li>
								<li>
									<svg width="14" height="14" viewbox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M7.24805 0.734375L9.22301 5.01608L13.9054 5.57126L10.4436 8.77267L11.3625 13.3975L7.24805 11.0944L3.13355 13.3975L4.0525 8.77267L0.590651 5.57126L5.27309 5.01608L7.24805 0.734375Z" fill="#FF8A00"></path>
									</svg>
								</li>
								<li>
									<svg width="14" height="14" viewbox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M7.24805 0.734375L9.22301 5.01608L13.9054 5.57126L10.4436 8.77267L11.3625 13.3975L7.24805 11.0944L3.13355 13.3975L4.0525 8.77267L0.590651 5.57126L5.27309 5.01608L7.24805 0.734375Z" fill="#E4E5E8"></path>
									</svg>
								</li>
								<li>
									<svg width="14" height="14" viewbox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M7.24805 0.734375L9.22301 5.01608L13.9054 5.57126L10.4436 8.77267L11.3625 13.3975L7.24805 11.0944L3.13355 13.3975L4.0525 8.77267L0.590651 5.57126L5.27309 5.01608L7.24805 0.734375Z" fill="#E4E5E8"></path>
									</svg>
								</li>
							</ul>
							<h6 class="price">
								<del>$52.00</del>
								$40.00
							</h6>
						</div>
						<div class="product-tag">
							<span class="badge badge-secondary">Sale</span>
						</div>
					</div>
				</div>
				<div class="col-6 col-xl-4 col-lg-4 col-md-4 col-sm-6 m-md-b15 m-sm-b0 m-b30">
					<div class="shop-card">
						<div class="dz-media">
							<img src="<?= APP_URL ?>public/assets/clients/images/shop/product/dt7.png" alt="image">
							<div class="shop-meta">
								<a href="javascript:void(0);" class="btn btn-secondary btn-icon" data-bs-toggle="modal" data-bs-target="#exampleModal">
									<i class="fa-solid fa-eye d-md-none d-block"></i>
									<span class="d-md-block d-none">Quick View</span>
								</a>
								<div class="btn btn-primary meta-icon dz-wishicon">
									<svg class="dz-heart-fill" width="14" height="12" viewbox="0 0 14 12" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M13.6412 5.80113C13.0778 6.9649 12.0762 8.02624 11.1657 8.8827C10.5113 9.49731 9.19953 10.7322 7.77683 11.62C7.30164 11.9159 6.69842 11.9159 6.22323 11.62C4.80338 10.7322 3.4888 9.49731 2.83435 8.8827C1.92382 8.02624 0.92224 6.96205 0.358849 5.80113C-0.551681 3.91747 0.344622 1.44196 2.21121 0.557041C3.98674 -0.282354 5.54034 0.292418 7.00003 1.44765C8.45972 0.292418 10.0133 -0.282354 11.786 0.557041C13.6554 1.44196 14.5517 3.91747 13.6412 5.80113Z" fill="white"></path>
									</svg>
									<svg class="dz-heart feather feather-heart" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
										<path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
									</svg>

								</div>
								<div class="btn btn-primary meta-icon dz-carticon">
									<svg class="dz-cart-check" width="15" height="15" viewbox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M11.9144 3.73438L5.49772 10.151L2.58105 7.23438" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
									</svg>
									<svg class="dz-cart-out" width="14" height="14" viewbox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M10.6033 10.4092C9.70413 10.4083 8.97452 11.1365 8.97363 12.0357C8.97274 12.9348 9.70097 13.6644 10.6001 13.6653C11.4993 13.6662 12.2289 12.938 12.2298 12.0388C12.2298 12.0383 12.2298 12.0378 12.2298 12.0373C12.2289 11.1391 11.5014 10.4109 10.6033 10.4092Z" fill="white"></path>
										<path d="M13.4912 2.6132C13.4523 2.60565 13.4127 2.60182 13.373 2.60176H3.46022L3.30322 1.55144C3.20541 0.853911 2.60876 0.334931 1.90439 0.334717H0.627988C0.281154 0.334717 0 0.61587 0 0.962705C0 1.30954 0.281154 1.59069 0.627988 1.59069H1.90595C1.9858 1.59011 2.05338 1.64957 2.06295 1.72886L3.03004 8.35727C3.16263 9.19953 3.88712 9.8209 4.73975 9.82363H11.2724C12.0933 9.8247 12.8015 9.24777 12.9664 8.44362L13.9884 3.34906C14.0543 3.00854 13.8317 2.67909 13.4912 2.6132Z" fill="white"></path>
										<path d="M6.61539 11.9676C6.57716 11.0948 5.85687 10.4077 4.98324 10.4108C4.08483 10.4471 3.38595 11.2048 3.42225 12.1032C3.45708 12.9653 4.15833 13.6505 5.02092 13.6653H5.06017C5.95846 13.626 6.65474 12.8658 6.61539 11.9676Z" fill="white"></path>
										<clippath id="clip01_502_3906">
											<rect width="14" height="14" fill="white"></rect>
										</clippath>
									</svg>
								</div>
							</div>
						</div>
						<div class="dz-content">
							<h5 class="title"><a href="<?= APP_URL ?>product/detail">Wooden Cup</a></h5>
							<ul class="star-rating">
								<li>
									<svg width="14" height="14" viewbox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M7.24805 0.734375L9.22301 5.01608L13.9054 5.57126L10.4436 8.77267L11.3625 13.3975L7.24805 11.0944L3.13355 13.3975L4.0525 8.77267L0.590651 5.57126L5.27309 5.01608L7.24805 0.734375Z" fill="#FF8A00"></path>
									</svg>
								</li>
								<li>
									<svg width="14" height="14" viewbox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M7.24805 0.734375L9.22301 5.01608L13.9054 5.57126L10.4436 8.77267L11.3625 13.3975L7.24805 11.0944L3.13355 13.3975L4.0525 8.77267L0.590651 5.57126L5.27309 5.01608L7.24805 0.734375Z" fill="#FF8A00"></path>
									</svg>
								</li>
								<li>
									<svg width="14" height="14" viewbox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M7.24805 0.734375L9.22301 5.01608L13.9054 5.57126L10.4436 8.77267L11.3625 13.3975L7.24805 11.0944L3.13355 13.3975L4.0525 8.77267L0.590651 5.57126L5.27309 5.01608L7.24805 0.734375Z" fill="#FF8A00"></path>
									</svg>
								</li>
								<li>
									<svg width="14" height="14" viewbox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M7.24805 0.734375L9.22301 5.01608L13.9054 5.57126L10.4436 8.77267L11.3625 13.3975L7.24805 11.0944L3.13355 13.3975L4.0525 8.77267L0.590651 5.57126L5.27309 5.01608L7.24805 0.734375Z" fill="#E4E5E8"></path>
									</svg>
								</li>
								<li>
									<svg width="14" height="14" viewbox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M7.24805 0.734375L9.22301 5.01608L13.9054 5.57126L10.4436 8.77267L11.3625 13.3975L7.24805 11.0944L3.13355 13.3975L4.0525 8.77267L0.590651 5.57126L5.27309 5.01608L7.24805 0.734375Z" fill="#E4E5E8"></path>
									</svg>
								</li>
							</ul>
							<h6 class="price">
								<del>$78.00</del>
								$40.00
							</h6>
						</div>
						<div class="product-tag">
							<span class="badge badge-secondary">-21%</span>
							<span class="badge badge-primary">Featured</span>
						</div>
					</div>
				</div>
				<div class="col-6 col-xl-4 col-lg-4 col-md-4 col-sm-6 m-md-b15 m-sm-b0 m-b30">
					<div class="shop-card">
						<div class="dz-media">
							<img src="<?= APP_URL ?>public/assets/clients/images/shop/product/dt8.png" alt="image">
							<div class="shop-meta">
								<a href="javascript:void(0);" class="btn btn-secondary btn-icon" data-bs-toggle="modal" data-bs-target="#exampleModal">
									<i class="fa-solid fa-eye d-md-none d-block"></i>
									<span class="d-md-block d-none">Quick View</span>
								</a>
								<div class="btn btn-primary meta-icon dz-wishicon">
									<svg class="dz-heart-fill" width="14" height="12" viewbox="0 0 14 12" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M13.6412 5.80113C13.0778 6.9649 12.0762 8.02624 11.1657 8.8827C10.5113 9.49731 9.19953 10.7322 7.77683 11.62C7.30164 11.9159 6.69842 11.9159 6.22323 11.62C4.80338 10.7322 3.4888 9.49731 2.83435 8.8827C1.92382 8.02624 0.92224 6.96205 0.358849 5.80113C-0.551681 3.91747 0.344622 1.44196 2.21121 0.557041C3.98674 -0.282354 5.54034 0.292418 7.00003 1.44765C8.45972 0.292418 10.0133 -0.282354 11.786 0.557041C13.6554 1.44196 14.5517 3.91747 13.6412 5.80113Z" fill="white"></path>
									</svg>
									<svg class="dz-heart feather feather-heart" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
										<path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
									</svg>

								</div>
								<div class="btn btn-primary meta-icon dz-carticon">
									<svg class="dz-cart-check" width="15" height="15" viewbox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M11.9144 3.73438L5.49772 10.151L2.58105 7.23438" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
									</svg>
									<svg class="dz-cart-out" width="14" height="14" viewbox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M10.6033 10.4092C9.70413 10.4083 8.97452 11.1365 8.97363 12.0357C8.97274 12.9348 9.70097 13.6644 10.6001 13.6653C11.4993 13.6662 12.2289 12.938 12.2298 12.0388C12.2298 12.0383 12.2298 12.0378 12.2298 12.0373C12.2289 11.1391 11.5014 10.4109 10.6033 10.4092Z" fill="white"></path>
										<path d="M13.4912 2.6132C13.4523 2.60565 13.4127 2.60182 13.373 2.60176H3.46022L3.30322 1.55144C3.20541 0.853911 2.60876 0.334931 1.90439 0.334717H0.627988C0.281154 0.334717 0 0.61587 0 0.962705C0 1.30954 0.281154 1.59069 0.627988 1.59069H1.90595C1.9858 1.59011 2.05338 1.64957 2.06295 1.72886L3.03004 8.35727C3.16263 9.19953 3.88712 9.8209 4.73975 9.82363H11.2724C12.0933 9.8247 12.8015 9.24777 12.9664 8.44362L13.9884 3.34906C14.0543 3.00854 13.8317 2.67909 13.4912 2.6132Z" fill="white"></path>
										<path d="M6.61539 11.9676C6.57716 11.0948 5.85687 10.4077 4.98324 10.4108C4.08483 10.4471 3.38595 11.2048 3.42225 12.1032C3.45708 12.9653 4.15833 13.6505 5.02092 13.6653H5.06017C5.95846 13.626 6.65474 12.8658 6.61539 11.9676Z" fill="white"></path>
										<clippath id="clip02_502_3906">
											<rect width="14" height="14" fill="white"></rect>
										</clippath>
									</svg>
								</div>
							</div>
						</div>
						<div class="dz-content">
							<h5 class="title"><a href="<?= APP_URL ?>product/detail">Bamboo toothbrushes</a></h5>
							<ul class="star-rating">
								<li>
									<svg width="14" height="14" viewbox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M7.24805 0.734375L9.22301 5.01608L13.9054 5.57126L10.4436 8.77267L11.3625 13.3975L7.24805 11.0944L3.13355 13.3975L4.0525 8.77267L0.590651 5.57126L5.27309 5.01608L7.24805 0.734375Z" fill="#FF8A00"></path>
									</svg>
								</li>
								<li>
									<svg width="14" height="14" viewbox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M7.24805 0.734375L9.22301 5.01608L13.9054 5.57126L10.4436 8.77267L11.3625 13.3975L7.24805 11.0944L3.13355 13.3975L4.0525 8.77267L0.590651 5.57126L5.27309 5.01608L7.24805 0.734375Z" fill="#FF8A00"></path>
									</svg>
								</li>
								<li>
									<svg width="14" height="14" viewbox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M7.24805 0.734375L9.22301 5.01608L13.9054 5.57126L10.4436 8.77267L11.3625 13.3975L7.24805 11.0944L3.13355 13.3975L4.0525 8.77267L0.590651 5.57126L5.27309 5.01608L7.24805 0.734375Z" fill="#FF8A00"></path>
									</svg>
								</li>
								<li>
									<svg width="14" height="14" viewbox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M7.24805 0.734375L9.22301 5.01608L13.9054 5.57126L10.4436 8.77267L11.3625 13.3975L7.24805 11.0944L3.13355 13.3975L4.0525 8.77267L0.590651 5.57126L5.27309 5.01608L7.24805 0.734375Z" fill="#E4E5E8"></path>
									</svg>
								</li>
								<li>
									<svg width="14" height="14" viewbox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M7.24805 0.734375L9.22301 5.01608L13.9054 5.57126L10.4436 8.77267L11.3625 13.3975L7.24805 11.0944L3.13355 13.3975L4.0525 8.77267L0.590651 5.57126L5.27309 5.01608L7.24805 0.734375Z" fill="#E4E5E8"></path>
									</svg>
								</li>
							</ul>
							<h6 class="price">
								<del>$40.00</del>
								$20.00
							</h6>
						</div>
						<div class="product-tag">
							<span class="badge badge-secondary">-50%</span>
						</div>
					</div>
				</div>
				<div class="col-6 col-xl-4 col-lg-4 col-md-4 col-sm-6 m-md-b15 m-sm-b0 m-b30">
					<div class="shop-card">
						<div class="dz-media">
							<img src="<?= APP_URL ?>public/assets/clients/images/shop/product/dt5.png" alt="image">
							<div class="shop-meta">
								<a href="javascript:void(0);" class="btn btn-secondary btn-icon" data-bs-toggle="modal" data-bs-target="#exampleModal">
									<i class="fa-solid fa-eye d-md-none d-block"></i>
									<span class="d-md-block d-none">Quick View</span>
								</a>
								<div class="btn btn-primary meta-icon dz-wishicon">
									<svg class="dz-heart-fill" width="14" height="12" viewbox="0 0 14 12" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M13.6412 5.80113C13.0778 6.9649 12.0762 8.02624 11.1657 8.8827C10.5113 9.49731 9.19953 10.7322 7.77683 11.62C7.30164 11.9159 6.69842 11.9159 6.22323 11.62C4.80338 10.7322 3.4888 9.49731 2.83435 8.8827C1.92382 8.02624 0.92224 6.96205 0.358849 5.80113C-0.551681 3.91747 0.344622 1.44196 2.21121 0.557041C3.98674 -0.282354 5.54034 0.292418 7.00003 1.44765C8.45972 0.292418 10.0133 -0.282354 11.786 0.557041C13.6554 1.44196 14.5517 3.91747 13.6412 5.80113Z" fill="white"></path>
									</svg>
									<svg class="dz-heart feather feather-heart" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
										<path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
									</svg>

								</div>
								<div class="btn btn-primary meta-icon dz-carticon">
									<svg class="dz-cart-check" width="15" height="15" viewbox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M11.9144 3.73438L5.49772 10.151L2.58105 7.23438" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
									</svg>
									<svg class="dz-cart-out" width="14" height="14" viewbox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M10.6033 10.4092C9.70413 10.4083 8.97452 11.1365 8.97363 12.0357C8.97274 12.9348 9.70097 13.6644 10.6001 13.6653C11.4993 13.6662 12.2289 12.938 12.2298 12.0388C12.2298 12.0383 12.2298 12.0378 12.2298 12.0373C12.2289 11.1391 11.5014 10.4109 10.6033 10.4092Z" fill="white"></path>
										<path d="M13.4912 2.6132C13.4523 2.60565 13.4127 2.60182 13.373 2.60176H3.46022L3.30322 1.55144C3.20541 0.853911 2.60876 0.334931 1.90439 0.334717H0.627988C0.281154 0.334717 0 0.61587 0 0.962705C0 1.30954 0.281154 1.59069 0.627988 1.59069H1.90595C1.9858 1.59011 2.05338 1.64957 2.06295 1.72886L3.03004 8.35727C3.16263 9.19953 3.88712 9.8209 4.73975 9.82363H11.2724C12.0933 9.8247 12.8015 9.24777 12.9664 8.44362L13.9884 3.34906C14.0543 3.00854 13.8317 2.67909 13.4912 2.6132Z" fill="white"></path>
										<path d="M6.61539 11.9676C6.57716 11.0948 5.85687 10.4077 4.98324 10.4108C4.08483 10.4471 3.38595 11.2048 3.42225 12.1032C3.45708 12.9653 4.15833 13.6505 5.02092 13.6653H5.06017C5.95846 13.626 6.65474 12.8658 6.61539 11.9676Z" fill="white"></path>
										<clippath id="clip03_502_3906">
											<rect width="14" height="14" fill="white"></rect>
										</clippath>
									</svg>
								</div>
							</div>
						</div>
						<div class="dz-content">
							<h5 class="title"><a href="<?= APP_URL ?>product/detail">Eco friendly bags</a></h5>
							<ul class="star-rating">
								<li>
									<svg width="14" height="14" viewbox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M7.24805 0.734375L9.22301 5.01608L13.9054 5.57126L10.4436 8.77267L11.3625 13.3975L7.24805 11.0944L3.13355 13.3975L4.0525 8.77267L0.590651 5.57126L5.27309 5.01608L7.24805 0.734375Z" fill="#FF8A00"></path>
									</svg>
								</li>
								<li>
									<svg width="14" height="14" viewbox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M7.24805 0.734375L9.22301 5.01608L13.9054 5.57126L10.4436 8.77267L11.3625 13.3975L7.24805 11.0944L3.13355 13.3975L4.0525 8.77267L0.590651 5.57126L5.27309 5.01608L7.24805 0.734375Z" fill="#FF8A00"></path>
									</svg>
								</li>
								<li>
									<svg width="14" height="14" viewbox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M7.24805 0.734375L9.22301 5.01608L13.9054 5.57126L10.4436 8.77267L11.3625 13.3975L7.24805 11.0944L3.13355 13.3975L4.0525 8.77267L0.590651 5.57126L5.27309 5.01608L7.24805 0.734375Z" fill="#FF8A00"></path>
									</svg>
								</li>
								<li>
									<svg width="14" height="14" viewbox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M7.24805 0.734375L9.22301 5.01608L13.9054 5.57126L10.4436 8.77267L11.3625 13.3975L7.24805 11.0944L3.13355 13.3975L4.0525 8.77267L0.590651 5.57126L5.27309 5.01608L7.24805 0.734375Z" fill="#E4E5E8"></path>
									</svg>
								</li>
								<li>
									<svg width="14" height="14" viewbox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M7.24805 0.734375L9.22301 5.01608L13.9054 5.57126L10.4436 8.77267L11.3625 13.3975L7.24805 11.0944L3.13355 13.3975L4.0525 8.77267L0.590651 5.57126L5.27309 5.01608L7.24805 0.734375Z" fill="#E4E5E8"></path>
									</svg>
								</li>
							</ul>
							<h6 class="price">
								<del>$23.00</del>
								$10.00
							</h6>
						</div>
						<div class="product-tag">
							<span class="badge badge-secondary">-10%</span>
							<span class="badge badge-primary">Featured</span>
						</div>
					</div>
				</div>

			</div>
			<div class="row page mt-0">
				<div class="col-md-6">
					<p class="page-text">Showing 1–5 Of 50 Results</p>
				</div>
				<div class="col-md-6">
					<nav aria-label="Blog Pagination">
						<ul class="pagination style-1">
							<li class="page-item"><a class="page-link prev" href="javascript:void(0);">Prev</a></li>
							<li class="page-item"><a class="page-link active" href="javascript:void(0);">1</a></li>
							<li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
							<li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
							<li class="page-item"><a class="page-link next" href="javascript:void(0);">Next</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</section>

	<!-- Icon Box Start -->
	<section class="content-inner py-0">
		<div class="container-fluid px-0">
			<div class="row gx-0">
				<div class="col-xl-3 col-lg-3 col-sm-6">
					<div class="icon-bx-wraper style-2 bg-light">
						<div class="icon-bx">
							<img src="<?= APP_URL ?>public/assets/clients/images/svg/icon-bx/password-check.svg" alt="/">
						</div>
						<div class="icon-content">
							<h5 class="dz-title">Filter & Discover</h5>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
						</div>
						<div class="data-text">01</div>
					</div>
				</div>
				<div class="col-xl-3 col-lg-3 col-sm-6">
					<div class="icon-bx-wraper style-2">
						<div class="icon-bx">
							<img src="<?= APP_URL ?>public/assets/clients/images/svg/icon-bx/cart.svg" alt="/">
						</div>
						<div class="icon-content">
							<h5 class="dz-title">Add to cart</h5>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
						</div>
						<div class="data-text">02</div>
					</div>
				</div>
				<div class="col-xl-3 col-lg-3 col-sm-6">
					<div class="icon-bx-wraper style-2 bg-light">
						<div class="icon-bx">
							<img src="<?= APP_URL ?>public/assets/clients/images/svg/icon-bx/discovery.svg" alt="/">
						</div>
						<div class="icon-content">
							<h5 class="dz-title">Fast Shipping</h5>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
						</div>
						<div class="data-text">03</div>
					</div>
				</div>
				<div class="col-xl-3 col-lg-3 col-sm-6">
					<div class="icon-bx-wraper style-2">
						<div class="icon-bx">
							<img src="<?= APP_URL ?>public/assets/clients/images/svg/icon-bx/box-tick.svg" alt="/">
						</div>
						<div class="icon-content">
							<h5 class="dz-title">Enjoy The Product</h5>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
						</div>
						<div class="data-text">04</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Icon Box End -->
</div>