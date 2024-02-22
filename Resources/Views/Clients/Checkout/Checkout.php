<div class="page-content">
	<!--banner-->
	<div class="dz-bnr-inr" style="background-image:url(images/background/bg-shape.jpg);">
		<div class="container">
			<div class="dz-bnr-inr-entry">
				<h1>Checkout</h1>
				<nav aria-label="breadcrumb" class="breadcrumb-row">
					<ul class="breadcrumb">
						<li class="breadcrumb-item"><a href="index.html"> Home</a></li>
						<li class="breadcrumb-item">Checkout</li>
					</ul>
				</nav>
			</div>
		</div>
	</div>
	<!-- inner page banner End-->
	<div class="content-inner-1">
		<div class="container">
			<div class="row shop-checkout">
				<div class="col-xl-8">
					<h4 class="title m-b15">Billing details</h4>
					<?php
					// Kiểm tra xem session 'user' có tồn tại hay không
					if (isset($_SESSION['user'])) {
						// Hiển thị thông tin người dùng nếu đã đăng nhập
					?>
						<form class="row" action="" method="post">
							<div class="col-md-12">
								<div class="form-group m-b25">
									<label class="label-title">Username *</label>
									<input name="username" required="" class="form-control" value="<?= $_SESSION['user']['name'] ?>">
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group m-b25">
									<label class="label-title">Email address *</label>
									<input name="email" required="" class="form-control" value="<?= $_SESSION['user']['email'] ?>">
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group m-b25">
									<label class="label-title">Phone *</label>
									<input name="phone" required="" class="form-control" value="<?= $_SESSION['user']['phone'] ?>">
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group m-b25">
									<label class="label-title">Address *</label>
									<input name="address" required="" class="form-control" value="<?= $_SESSION['user']['address'] ?>">
								</div>
							</div>
							<div class="col-md-12 m-b25">
								<div class="form-group">
									<label class="label-title">Order notes (optional)</label>
									<textarea id="comments" placeholder="Notes about your order, e.g. special notes for delivery." class="form-control" name="comment" cols="90" rows="5" required="required"></textarea>
								</div>
							</div>

						<?php
					} else {
						?>
							<div class="accordion dz-accordion accordion-sm" id="accordionFaq">
								<div class="accordion-item">
									<h2 class="accordion-header" id="headingOne">
										<a href="#" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
											Returning customer? &nbsp; <span class="text-primary">Click here to login</span>
											<span class="toggle-close"></span>
										</a>
									</h2>
									<div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionFaq">
										<div class="accordion-body">
											<p class="m-b0">If your order has not yet shipped, you can contact us to change your shipping address</p>
										</div>
									</div>
								</div>
								<div class="accordion-item">
									<h2 class="accordion-header" id="headingTwo">
										<a href="#" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseOne">
											Have a coupon? &nbsp; <span class="text-primary">Click here to enter your code</span>
											<span class="toggle-close"></span>
										</a>
									</h2>
									<div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionFaq">
										<div class="accordion-body">
											<p class="m-b0">If your order has not yet shipped, you can contact us to change your shipping address</p>
										</div>
									</div>
								</div>
							</div>
						<?php
					}
						?>

				</div>
				<div class="col-xl-4 side-bar">
					<h4 class="title m-b15">Your Order</h4>
					<div class="order-detail sticky-top">
						<?php
						$subtotal = 0;
						foreach ($data['cartItems'] as $cartItem) : $subtotal += $cartItem['price'] * $cartItem['quantity']; ?>
							<div class="cart-item style-1">
								<div class="dz-media">
									<img src="<?= APP_URL ?>public/uploads/images/<?= $cartItem['img'] ?>" alt="<?= $cartItem['name'] ?>">
								</div>
								<div class="dz-content">
									<h6 class="title mb-0"><?= $cartItem['name'] ?></h6>
									<span class="quantity">x<?= $cartItem['quantity'] ?></span>
									<span class="price">$<?= $cartItem['price'] ?></span>
								</div>
							</div>
							<table>
							<?php endforeach; ?>
							<tbody>
								<tr class="subtotal">
									<td>Subtotal</td>
									<td class="price">$<?= $subtotal ?></td>
								</tr>
								<tr class="total">
									<td>Total</td>
									<td class="price">$<?= $subtotal ?></td>

								</tr>
							</tbody>
							</table>


							<div class="accordion dz-accordion accordion-sm" id="accordionFaq1">
								<div class="accordion-item">
									<div id="collapse1" class="accordion-collapse collapse show" aria-labelledby="heading1" data-bs-parent="#accordionFaq1">
										<div class="accordion-body">
											<p class="m-b0">Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order will not be shipped until the funds have cleared in our account.</p>
										</div>
									</div>
								</div>
								<!-- <div class="accordion-item">
									<div class="accordion-header" id="heading2">
										<div class="accordion-button collapsed custom-control custom-checkbox" data-bs-toggle="collapse" data-bs-target="#collapse2" role="navigation" aria-expanded="true" aria-controls="collapse2">
											<input class="form-check-input radio" type="radio" name="flexRadioDefault" id="flexRadioDefault5">
											<label class="form-check-label" for="flexRadioDefault5">
												Cash on delivery
											</label>
										</div>
									</div>
									<div id="collapse2" class="accordion-collapse collapse" aria-labelledby="collapse2" data-bs-parent="#accordionFaq1">
										<div class="accordion-body">
											<p class="m-b0">Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order will not be shipped until the funds have cleared in our account.</p>
										</div>
									</div>
								</div> -->
								<!-- ... your form fields ... -->
								<div class="accordion-item">
									<div class="accordion-header" id="headingPayment">
										<div class="accordion-button collapsed custom-control custom-checkbox" data-bs-toggle="collapse" data-bs-target="#collapsePayment" role="navigation" aria-expanded="true" aria-controls="collapsePayment">
											<input class="form-check-input radio" type="radio" name="payment_method" id="flexRadioDefault5" value="0" checked>
											<label class="form-check-label" for="flexRadioDefault5">
												Cash on delivery
											</label>
										</div>
									</div>
									<div id="collapsePayment" class="accordion-collapse collapse" aria-labelledby="headingPayment" data-bs-parent="#accordionFaq1">
										<div class="accordion-body">
											<p class="m-b0">Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order will not be shipped until the funds have cleared in our account.</p>
										</div>
									</div>
								</div>
								<div class="accordion-item">
									<div class="accordion-header" id="headingMomo">
										<div class="accordion-button collapsed custom-control custom-checkbox" data-bs-toggle="collapse" data-bs-target="#collapseMomo" role="navigation" aria-expanded="true" aria-controls="collapseMomo">
											<input class="form-check-input radio" type="radio" name="payment_method" id="flexRadioDefault6" value="1">
											<label class="form-check-label" for="flexRadioDefault6">
												Momo
											</label>
										</div>
									</div>
									<div id="collapseMomo" class="accordion-collapse collapse" aria-labelledby="headingMomo" data-bs-parent="#accordionFaq1">
										<div class="accordion-body">
											<p class="m-b0">Make your payment using Momo. Please complete the payment within the specified time.</p>
										</div>
									</div>
								</div>
								<!-- ... rest of your form ... -->

								<!-- <div class="accordion-item">
									<div class="accordion-header" id="heading3">
										<div class="accordion-button collapsed custom-control custom-checkbox" data-bs-toggle="collapse" data-bs-target="#collapse3" role="navigation" aria-expanded="true" aria-controls="collapse3">
											<input class="form-check-input radio" type="radio" name="flexRadioDefault" id="flexRadioDefault4">
											<label class="form-check-label" for="flexRadioDefault4">
												Paypal
											</label>
											<img src="<?= APP_URL ?>public/assets/clients/images/shop/payment.jpg" alt="/">
											<a href="javascript:void(0);">What is PayPal?</a>
										</div>
									</div>
									<div id="collapse3" class="accordion-collapse collapse" aria-labelledby="heading3" data-bs-parent="#accordionFaq1">
										<div class="accordion-body">
											<p class="m-b0">Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order will not be shipped until the funds have cleared in our account.</p>
										</div>
									</div>
								</div> -->
							</div>
							<p class="text">Your personal data will be used to process your order, support your experience throughout this website, and for other purposes described in our <a href="javascript:void(0);">privacy policy.</a></p>
							<!-- <div class="form-group">
								<div class="custom-control custom-checkbox d-flex m-b15">
									<input type="checkbox" class="form-check-input" id="basic_checkbox_3">
									<label class="form-check-label" for="basic_checkbox_3">I have read and agree to the website terms and conditions </label>
								</div>
							</div> -->
							<button type="submit" class="btn btn-secondary w-100">PLACE ORDER</button>
					</div>
				</div>
				</form>
			</div>
		</div>
	</div>
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