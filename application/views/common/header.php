		 <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
       <div class="preloader"></div>
		
        <!-- ============================================================== -->
        <!-- Main wrapper - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <div id="main-wrapper">			
			<div class="headd-sty header">
				<div class="container">
					<div class="row">
						<div class="col-xl-12 col-lg-12 col-md-12">
							<div class="headd-sty-wrap d-flex align-items-center justify-content-between py-3">
								<div class="headd-sty-left d-flex align-items-center">
									<div class="headd-sty-01">
										<a class="nav-brand py-0" href="#">
											<img src="<?= $base_url ?>assets/img/logo.png" class="logo" alt="" />
										</a>
									</div>
									<div class="headd-sty-02 ml-3">
										<form class="bg-white rounded-md border-bold">
											<div class="input-group">
												<input type="text" class="form-control custom-height b-0" placeholder="Search for products..." />
												<div class="input-group-append">
													<div class="input-group-text"><button class="btn bg-white text-danger custom-height rounded px-3" type="button"><i class="fas fa-search"></i></button></div>
												</div>
											</div>
										</form>
									</div>
								</div>
								<div class="headd-sty-last">
									<ul class="nav-menu nav-menu-social align-to-right align-items-center d-flex">
										<li>
											<div class="call d-flex align-items-center text-left">
												<i class="lni lni-phone fs-xl"></i>
												<span class="text-muted small ml-3">Call Us Now:<strong class="d-block text-dark fs-md">0(800) 123-456</strong></span>
											</div>
										</li>
										<li>
											<a href="#" onclick="openWishlist()">
												<i class="far fa-heart fs-lg"></i><span class="dn-counter bg-success">2</span>
											</a>
										</li>
										<li>
											<a href="#" onclick="openCart()">
												<div class="d-flex align-items-center justify-content-between">
													<i class="fas fa-shopping-basket fs-lg"></i><span class="dn-counter theme-bg">3</span>
													<div class="text-left ml-1">
														<div class="text-muted small lh-1">Total</div>	
														<div class="primary-text cart-subtotal"><span class="fs-md ft-medium"><span class="prc-currency">$</span>0.00</span></div>
													</div>
												</div>
											</a>
										</li>
									</ul>	
								</div>
								<div class="mobile_nav">
									<ul>
										<li>
										<a href="#" onclick="openSearch()">
											<i class="lni lni-search-alt"></i>
										</a>
									</li>
									<li>
										<a href="#" data-toggle="modal" data-target="#login">
											<i class="lni lni-user"></i>
										</a>
									</li>
									<li>
										<a href="#" onclick="openWishlist()">
											<i class="lni lni-heart"></i><span class="dn-counter">2</span>
										</a>
									</li>
									<li>
										<a href="#" onclick="openCart()">
											<i class="lni lni-shopping-basket"></i><span class="dn-counter">0</span>
										</a>
									</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
            <!-- Start Navigation -->
			<div class="headerd header-dark head-style-2">
				<div class="container">
					<nav id="navigation" class="navigation navigation-landscape">
						<div class="nav-header">
							<div class="nav-toggle"></div>
							<div class="nav-menus-wrapper">
								<ul class="nav-menu">
								
									<li><a href="#" class="pl-0">Home</a>
										<ul class="nav-dropdown nav-submenu">
											<li><a href="index.html">Home 1</a></li>
											<li><a href="home-2.html">Home 2</a></li>
											<li><a href="home-3.html">Home 3</a></li>
											<li><a href="home-4.html">Home 4</a></li>
											<li><a href="home-5.html">Home 5</a></li>
											<li><a href="home-6.html">Home 6</a></li>
											<li><a href="home-7.html">Home 7</a></li>
											<li><a href="home-8.html">Home 8</a></li>
											<li><a href="home-9.html">Home 9</a></li>
											<li><a href="home-10.html">Home 10</a></li>
										</ul>
									</li>
									
									<li><a href="javascript:void(0);">Shop</a>
										<ul class="nav-dropdown nav-submenu">
											<li><a href="javascript:void(0);">Account Dashboard</a>
												<ul class="nav-dropdown nav-submenu">
													<li><a href="my-orders.html">My Order</a></li>
													<li><a href="wishlist.html">Wishlist</a></li>
													<li><a href="profile-info.html">Profile Info</a></li>
													<li><a href="addresses.html">Addresses</a></li>
													<li><a href="payment-methode.html">Payment Methode</a></li>
												</ul>
											</li>
											<li><a href="javascript:void(0);">Support</a>
												<ul class="nav-dropdown nav-submenu">
													<li><a href="shoping-cart.html">Shopping Cart</a></li>
													<li><a href="checkout.html">Checkout</a></li>
													<li><a href="complete-order.html">Order Complete</a></li>
												</ul>
											</li>
											<li><a href="shop-style-1.html">Shop Style 01</a></li>
											<li><a href="shop-style-2.html">Shop Style 02</a></li>
											<li><a href="shop-style-3.html">Shop Style 03</a></li>
											<li><a href="shop-style-4.html">Shop Style 04</a></li>
											<li><a href="shop-style-5.html">Shop Style 05</a></li>
											<li><a href="shop-list-view.html">Shop List Style</a></li>
										</ul>
									</li>
									
									<li><a href="javascript:void(0);">Product</a>
										<ul class="nav-dropdown nav-submenu">
											<li><a href="shop-single-v1.html">Product Detail v01</a></li>
											<li><a href="shop-single-v2.html">Product Detail v02</a></li>
											<li><a href="shop-single-v3.html">Product Detail v03</a></li>
											<li><a href="shop-single-v4.html">Product Detail v04</a></li>
										</ul>
									</li>
									
									<li><a href="javascript:void(0);">Pages</a>
										<ul class="nav-dropdown nav-submenu">
											<li><a href="blog.html">Blog Style</a></li>
											<li><a href="about-us.html">About Us</a></li>
											<li><a href="contact.html">Contact</a></li>
											<li><a href="404.html">404 Page</a></li>
											<li><a href="privacy.html">Privacy Policy</a></li>
											<li><a href="faq.html">FAQs</a></li>
										</ul>
									</li>
									
									<li><a href="docs.html">Docs</a></li>
									
								</ul>
							</div>
						</div>
					</nav>
				</div>
			</div>
			<!-- End Navigation -->
			<div class="clearfix"></div>