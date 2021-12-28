<?php
session_start();

include('registration/config/config.php');

$ids = $_SESSION['id'];


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
	<title>Kokan Crunchy - Top quality Dry-Fruits Products| My Account</title>
	<!--/tags -->
	
	<?php include('links.php'); ?>
	
</head>

<body>
	<?php include('header.php'); ?>
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
						<a href="index.php"><i class="fa fa-home"></i></a>
						<i>|</i>
					</li>
					<li>Account</li>
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
					<h3 class="tittle-w3c">My Account</h3>
					<ul class="list-unstyled">
						<li><a href="http://kokancrunchy.amitkduiuxdesigner.co.in/registration/edit.php?id=$ids">Edit your acount information</a></li>
						<li><a href="http://kokancrunchy.amitkduiuxdesigner.co.in/registration/change-password.id?token=$ids">Change password</a></li>
						<li><a href="">Modify address</a></li>
						<li><a href="">Modify wish list</a></li>
					</ul>
				</div>
				<div class="account_sec2">
					<h3 class="tittle-w3c">My Order</h3>
					<ul class="list-unstyled">
						<li><a href="#">Order History</a></li>
						<li><a href="#">Return Requests</a></li>
						<li><a href="">Transactions</a></li>
						<li><a href="">Recurring Payments</a></li>
					</ul>
				</div>
			</div>
		</div>
		<!-- /terms -->
	</section>
	<!-- //Terms of use-section -->

	<?php include('footer.php'); ?>

</body>

</html>