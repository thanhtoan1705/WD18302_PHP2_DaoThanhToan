<div class="page-content">
	<!--banner-->
	<div class="dz-bnr-inr" style="background-image:url(images/background/bg-shape.jpg);">
		<div class="container">
			<div class="dz-bnr-inr-entry">
				<h1>Cart</h1>
				<nav aria-label="breadcrumb" class="breadcrumb-row">
					<ul class="breadcrumb">
						<li class="breadcrumb-item"><a href="index.html"> Home</a></li>
						<li class="breadcrumb-item">Cart</li>
					</ul>
				</nav>
			</div>
		</div>
	</div>


	<!-- contact area -->
	<section class="content-inner shop-account">
		<!-- Product -->
		<div class="container">
			<div class="row">
				<div class="col-lg-8">
					<div class="table-responsive">
						<table class="table check-tbl">
							<thead>
								<tr>
									<th>Product</th>
									<th></th>
									<th>Price</th>
									<th>Quantity</th>
									<th>Subtotal</th>
									<th></th>
								</tr>
							</thead>
							<tbody>
								<?php foreach ($data['carts'] as $carts) : ?>
									<tr>
										<td class="product-item-img"><img src="<?= APP_URL ?>public/uploads/images/<?= $carts['img'] ?>" alt="/"></td>
										<td class="product-item-name"><?= $carts['name'] ?></td>
										<td class="product-item-price">$<?= $carts['price'] ?></td>
										<td class="product-item-quantity">
											<div class="quantity btn-quantity style-1 me-3">
												<input type="text" value="<?= $carts['quantity']?>" name="demo_vertical2">
											</div>
										</td>
										<td class="product-item-totle">$<?= $carts['total'] ?></td>
										<td class="product-item-close"><a href="javascript:void(0);"><i class="ti-close"></i></a></td>
									</tr>
								<?php endforeach; ?>
							</tbody>
						</table>
					</div>
					<div class="row shop-form m-t30">
						<div class="col-md-6">
							<div class="form-group">
								<div class="input-group mb-0">
									<input name="dzEmail" required="required" type="text" class="form-control" placeholder="Coupon Code">
									<div class="input-group-addon">
										<button name="submit" value="Submit" type="submit" class="btn coupon">
											Apply Coupon
										</button>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6 text-end">
							<a href="shop-cart.html" class="btn btn-grey">UPDATE CART</a>
						</div>
					</div>
				</div>
				<div class="col-lg-4">
					<h4 class="title mb15">Cart Total</h4>
					<div class="cart-detail">
						<a href="javascript:void(0);" class="btn btn-outline-primary w-100 m-b20">Bank Offer 5% Cashback</a>
						<div class="icon-bx-wraper style-4 m-b15">
							<div class="icon-bx">
								<i class="flaticon flaticon-ship"></i>
							</div>
							<div class="icon-content">
								<span class="text-primary font-14">FREE</span>
								<h6 class="dz-title">Enjoy The Product</h6>
							</div>
						</div>
						<div class="icon-bx-wraper style-4 m-b30">
							<div class="icon-bx">
								<img src=<?= APP_URL ?>public/assets/clients/images//shop/shop-cart/icon-box/pic2.png" alt="/">
							</div>
							<div class="icon-content">
								<h6 class="dz-title">Enjoy The Product</h6>
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
							</div>
						</div>
						<div class="save-text">
							<i class="icon feather icon-check-circle"></i>
							<span class="m-l10">You will save ₹504 on this order</span>
						</div>
						<table>
							<tbody>
								<tr class="total">
									<td>
										<h6 class="mb-0">Total</h6>
									</td>
									<td class="price">
										$125.75
									</td>
								</tr>
							</tbody>
						</table>
						<a href="<?= APP_URL ?>checkout" class="btn btn-secondary w-100">PLACE ORDER</a>
					</div>
				</div>
			</div>
		</div>
		<!-- Product END -->
	</section>
	<!-- contact area End-->

	<!-- Icon Box Start -->
	<section class="content-inner py-0">
		<div class="container-fluid px-0">
			<div class="row gx-0">
				<div class="col-xl-3 col-lg-3 col-sm-6">
					<div class="icon-bx-wraper style-2 bg-light">
						<div class="icon-bx">
							<img src=<?= APP_URL ?>public/assets/clients/images//svg/icon-bx/password-check.svg" alt="/">
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
							<img src=<?= APP_URL ?>public/assets/clients/images//svg/icon-bx/cart.svg" alt="/">
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
							<img src=<?= APP_URL ?>public/assets/clients/images//svg/icon-bx/discovery.svg" alt="/">
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
							<img src=<?= APP_URL ?>public/assets/clients/images//svg/icon-bx/box-tick.svg" alt="/">
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