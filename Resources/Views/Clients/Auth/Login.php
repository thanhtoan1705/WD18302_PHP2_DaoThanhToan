<div class="page-content">
	<section class="px-3">
		<div class="row">
			<div class="col-xxl-6 col-xl-6 col-lg-6 start-side-content">
				<div class="dz-bnr-inr-entry">
					<h1>My Account</h1>
					<nav aria-label="breadcrumb text-align-start" class="breadcrumb-row">
						<ul class="breadcrumb">
							<li class="breadcrumb-item"><a href="index.html"> Home</a></li>
							<li class="breadcrumb-item">My Account</li>
						</ul>
					</nav>
				</div>
				<div class="registration-media">
					<img src="<?= APP_URL ?>public/assets/clients/images/registration/pic3.jpg" alt="/">
				</div>
			</div>
			<style>
				.error-message {
					color: red;
				}
			</style>
			<div class="col-xxl-6 col-xl-6 col-lg-6 end-side-content">
				<div class="login-area">
					<h2 class="text-secondary text-center">Welcome Back</h2>
					<p class="text-center m-b25">welcome please login to your account, <a href="<?= APP_URL ?>register">register here </a></p>
					<form action="" method="post">
						<?php if (isset($_SESSION['LoginError'])) : ?>
							<div class="alert alert-danger" role="alert">
								<?= $_SESSION['LoginError'] ?>
							</div>
						<?php endif; ?>

						<div class="m-b30">
							<label class="label-title">Username</label>
							<input name="Username" class="form-control" placeholder="Username" type="Username">
							<?php if (isset($_SESSION['Username'])) : ?>
								<span class="error-message"><?= $_SESSION['Username'] ?></span>
							<?php endif; ?>
						</div>

						<div class="m-b15">
							<label class="label-title">Password</label>
							<input name="Password" class="form-control" placeholder="Password" type="password">
							<?php if (isset($_SESSION['Password'])) : ?>
								<span class="error-message"><?= $_SESSION['Password'] ?></span>
							<?php endif; ?>
						</div>
						<div class="form-row d-flex justify-content-between m-b30">
							<!-- <div class="form-group">
								<div class="custom-control custom-checkbox">
									<input type="checkbox" class="form-check-input" id="basic_checkbox_1">
									<label class="form-check-label" for="basic_checkbox_1">Remember Me</label>
								</div>
							</div> -->
							<div class="form-group">
								<a class="text-primary" href="javascript:void(0);">Forgot Password</a>
							</div>
						</div>
						<div class="text-center">
							<button type="submit" class="btn btn-secondary btnhover text-uppercase me-2">Login</button>
						</div>
					</form>
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