<?php
session_start();

include('config/config.php');

$ids = $_GET['id'];

$show_query = "SELECT * FROM user WHERE id = {$ids}";

$show_data = mysqli_query($con, $show_query);

$arr_data = mysqli_fetch_array($show_data);


if(isset($_POST['submit'])){
	$update_id = $_GET['id'];

	$name = mysqli_real_escape_string($con, $_POST['name']);
	$email = mysqli_real_escape_string($con, $_POST['email']);
	$mobile = mysqli_real_escape_string($con, $_POST['mobile']);
	
	
	
	
	$update_query = " UPDATE user SET id=$ids, name = '$name', email = '$email', mobile= '$mobile'  WHERE id = $update_id ";

	$query = mysqli_query($con, $update_query);

	if($query){
		?>
		<script>
			location.replace("../index.php");
			alert("data updated successfully");
		</script>
		<?php
	}else{
		?>
		<script>
			alert("data not updated successfully");
		</script>
		<?php
	}
}

?>
<!DOCTYPE html>
<html lang="zxx">
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<head>
	<title>Kokan Crunchy - Top quality Dry-Fruits Products| Edit User Information</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="" />
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!--//tags -->
    <link rel="stylesheet" href="https://cdn.snipcart.com/themes/v3.0.23/default/snipcart.css" />
    
    
	<link href="../css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link href="../css/style.css" rel="stylesheet" type="text/css" media="all" />
	<link href="../css/font-awesome.css" rel="stylesheet">
	<!--pop-up-box-->
	<link href="../css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
	<!--//pop-up-box-->
	<!-- price range -->
	<link rel="stylesheet" type="text/css" href="../css/jquery-ui1.css">
	<!-- fonts -->
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
    	
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	
</head>

<body>
	
	
	<div class="header-bot">
		<div class="header-bot_inner_wthreeinfo_header_mid">
			<!-- header-bot-->
			<div class="col-md-4 logo_agile">
				<h1>
					<a href="../index.php">
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
						<a href="#" title="My Account" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
							My Account
							<span class="caret"></span>
						</a>
						<ul class="dropdown-menu dropdown-menu-right">
							<li><a href="../my-account.php">My Account</a></li>
							<li><a href="#">Order History</a></li>
							<li><a href="#">Transactions</a></li>
							<li><a href="./logout.php">Logout</a></li>
						</ul>
					</li>
					    <?php
					}else {
					    ?>
					<li class="dropdown">
						<a title="My Account" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
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
	<!-- banner-2 -->
	<div class="page-head_agile_info_w3l">

	</div>
	<!-- //banner-2 -->
	<!-- page -->
	<div class="services-breadcrumb">
		<div class="agile_inner_breadcrumb">
			<div class="container">
				<ul class="w3_short">
					<li>
						<a href="../index.php"><i class="fa fa-home"></i></a>
						<i>|</i>
					</li>
					<li>
						<a href="../my-account.php">Account</a>
						<i>|</i>
					</li>
					<li>Edit Information </li>
				</ul>
			</div>
		</div>
	</div>
	<!-- //page -->
	<!-- Terms of use-section -->
	<section class="terms-of-use">
		<!-- terms -->
		<div class="terms">
			<div class="container">
				<div class="account_sec1">
					<h3 class="tittle-w3c">My Account Information</h3>
					<h5>Your Personal Details</h5>
				</div>
				<div class="edit_user">
					<form action="" method="post">
						<div class="styled-input agile-styled-input-top">
							<input type="text" name="name" value="<?php echo($arr_data['name']);?>" name="name" required="">
						</div>
						<div class="styled-input agile-styled-input-top">
							<input type="text" name="email" value="<?php echo($arr_data['email']);?>" name="email" required="">
						</div>
						<div class="styled-input agile-styled-input-top">
							<input type="text" name="mobile" value="<?php echo($arr_data['mobile']);?>" name="mobile" required="">
						</div>
						<input type="submit" name="submit" value="Submit">
					</form>
				</div>
				
			</div>
		</div>
		<!-- /terms -->
	</section>
	<!-- //Terms of use-section -->

	<?php include('footer.php'); ?>

</body>

</html>