
	<div class="header-bot">
		<div class="header-bot_inner_wthreeinfo_header_mid">
			<!-- header-bot-->
			<div class="col-md-4 logo_agile">
				<h1>
					<a href="index.html">
						<img src="../images/kokan-crunchy-logo.jpg" alt=" ">
					</a>
				</h1>
			</div>
			<!-- header-bot -->
			<div class="col-md-8 header">
				<!-- header lists -->
				<ul class="list-inline">
					<li>
						<span class="fa fa-phone" aria-hidden="true"></span> 98212 36048
					</li>
					<?php
					if (isset($_SESSION['name'])) {
					    ?>
					<li>
						<span class="fa fa-user" aria-hidden="true"></span> <?php
							echo ($_SESSION['name']);
							?>
					</li>
					<li class="dropdown">
						<a href="" title="My Account" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
							My Account
							<span class="caret"></span>
						</a>
						<ul class="dropdown-menu dropdown-menu-right">
							<li><a href="../my-account.php">My Account</a></li>
							<li><a href="#">Order History</a></li>
							<li><a href="#">Transactions</a></li>
							<li><a href="logout.php">Logout</a></li>
						</ul>
					</li>
					    <?php
					}else {
					    ?>
					<li class="dropdown">
						<a href="" title="My Account" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
							<span class="fa fa-user" aria-hidden="true"></span>
							My Account
							<span class="caret"></span>
						</a>
						<ul class="dropdown-menu dropdown-menu-right">
							<li><a href="registration.php">Register</a></li>
							<li><a href="login.php">Login</a></li>
						</ul>
					</li>
					    <?php
					}
					?>
				</ul>
				<!-- //header lists -->
				<!-- search -->
				<div class="agileits_search">
					<form action="#" method="post">
						<input name="Search" type="search" placeholder="How can we help you today?" required="">
						<button type="submit" class="btn btn-default" aria-label="Left Align">
							<span class="fa fa-search" aria-hidden="true"> </span>
						</button>
					</form>
				</div>
				<!-- //search -->
				<!-- cart details -->
				<div class="top_nav_right">
					<div class="wthreecartaits wthreecartaits2 cart cart box_1">
						
							<button class="snipcart-checkout" type="submit" name="submit" value="">
								<i class="fa fa-cart-arrow-down" aria-hidden="true"></i>
                                <span class="snipcart-items-count"></span>
                                <span class="snipcart-total-price"></span>
                            </button>
					</div>
				</div>
				<!-- //cart details -->
				<div class="clearfix"></div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>

	<div class="ban-top">
		<div class="container">
			<div class="top_nav_left">
				<nav class="navbar navbar-default">
					<div class="container-fluid">
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"
							    aria-expanded="false">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse menu--shylock" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav menu__list">
								<li class="active">
									<a class="nav-stylehead" href="../index.php">Home
										<span class="sr-only">(current)</span>
									</a>
								</li>
								<li class="">
									<a class="nav-stylehead" href="#">About Us</a>
								</li>
								<li class="dropdown">
									<a href="#" class="dropdown-toggle nav-stylehead" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Our Products
										<span class="caret"></span>
									</a>
									<ul class="dropdown-menu multi-column columns-3">
										<div class="agile_inner_drop_nav_info">
											<div class="col-sm-4 multi-gd-img">
												<ul class="multi-column-dropdown">
													<li>
														<a href="#">Kaju</a>
													</li>
													<li>
														<a href="#">Badam</a>
													</li>
													<li>
														<a href="#">Yellow Kishmish</a>
													</li>
													<li>
														<a href="#">Black Kishmish</a>
													</li>
													<li>
														<a href="#">Salted Pista</a>
													</li>
													<li>
														<a href="#">Plain Pista</a>
													</li>
													<li>
														<a href="#">Broken Walnut(Akrot)</a>
													</li>
													<li>
														<a href="#">Anjeer</a>
													</li>
													<li>
														<a href="#">Jardalu</a>
													</li>
													<li>
														<a href="#">Masala Kaju</a>
													</li>
												</ul>
											</div>
											<div class="col-sm-4 multi-gd-img">
												<ul class="multi-column-dropdown">
													<li>
														<a href="#">Pudina Kaju</a>
													</li>
													<li>
														<a href="#">Black Paper Kaju</a>
													</li>
													<li>
														<a href="#">Slated Kaju</a>
													</li>
													<li>
														<a href="#">Tukada Kaju(2 Pakali)</a>
													</li>
													<li>
														<a href="#">Dates (Khajur)</a>
													</li>
													<li>
														<a href="#">Mix Dry-Fruits</a>
													</li>
													<li>
														<a href="#">Konkani Kokum</a>
													</li>
													<li>
														<a href="#">Dates Ladu (Khajur Laddu)</a>
													</li>
													<li>
														<a href="#">White Kharik (Dry Khajur)</a>
													</li>
													<li>
														<a href="#">Black Kharik (Dry Khajur</a>
													</li>
												</ul>
											</div>
											<div class="col-sm-4 multi-gd-img">
												<img src="images/nav.png" alt="">
											</div>
											<div class="clearfix"></div>
										</div>
									</ul>
								</li>
								
								
								
								<li class="">
									<a class="nav-stylehead" href="#">Contact</a>
								</li>
							</ul>
						</div>
					</div>
				</nav>
			</div>
		</div>
	</div>
	<!-- //navigation -->