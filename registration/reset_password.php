<?php
session_start();
ob_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Kokan Crunchy - Top quality Dry-Fruits Products| Reset Password</title>
	<?php include('links.php'); ?>
	
</head>
<body>
	<?php

include('config/config.php');

if (isset($_POST['submit'])) {
	
	if(isset($_GET['token'])){
		
		$token = $_GET['token'];
		
		$newpsw = mysqli_real_escape_string($con, $_POST['psw']);
		$cnfpsw = mysqli_real_escape_string($con, $_POST['cnfpsw']);
		
		$newpass = password_hash($newpsw, PASSWORD_BCRYPT);
		$cnfpass = password_hash($cnfpsw, PASSWORD_BCRYPT);
		
		if($newpsw === $cnfpsw){
			$updatQuery = " UPDATE user SET psw = '$newpass', cnfpsw = '$cnfpass' WHERE token = '$token' ";
			
			$uquery = mysqli_query($con, $updatQuery);
			
			if($uquery){
				$_SESSION['msg'] = "Password changed";
				header('location:login.php');
			}else{
				$_SESSION['pass_msg'] = "Password not changed";
				header('location:reset_password.php');
			}
		}
	}else{
		$_SESSION['pass_msg'] = "token not found";
		header('location:reset_password.php');
	}
}
?>
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
						<a href="../index.php"><i class="fa fa-home"></i></a>
						<i>|</i>
					</li>
					<li>
						<a href="../my-account.php">Account</a>
						<i>|</i>
					</li>
					<li>Forgotten Password </li>
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
					<h3 class="tittle-w3c">Reset your password</h3>
					<p>Enter the new password you wish to use.</p>
					<p><?php 
						if(isset($_SESSION['pass_msg'])){
						echo $_SESSION['pass_msg'];
						}else{
							echo $_SESSION['pass_msg']= "";
						} 
						?>
						</p>
					
				</div>
				<div class="edit_user">
					<form action="" method="post">
						<div class="styled-input" id="show_hide_password2">
							<input type="password" placeholder="New Password" name="psw" id="psw" required="">
							<a href=""><i class="fa fa-eye-slash icon" aria-hidden="true"></i></a>
							
						</div>
							<script>
								$(document).ready(function() {
									$("#show_hide_password2 a").on('click', function(event) {
										event.preventDefault();
										if($('#show_hide_password2 input').attr("type") == "text"){
											$('#show_hide_password2 input').attr('type', 'password');
											$('#show_hide_password2 i').addClass( "fa-eye-slash" );
											$('#show_hide_password2 i').removeClass( "fa-eye" );
										}else if($('#show_hide_password2 input').attr("type") == "password"){
											$('#show_hide_password2 input').attr('type', 'text');
											$('#show_hide_password2 i').removeClass( "fa-eye-slash" );
											$('#show_hide_password2 i').addClass( "fa-eye" );
										}
									});
								});
							</script>
						<div class="styled-input" id="show_hide_password3">
							<input type="password" placeholder="Confirm New Password" name="cnfpsw" id="cnfpsw" required="">
							<a href=""><i class="fa fa-eye-slash icon" aria-hidden="true"></i></a>
						</div>
							<script>
								$(document).ready(function() {
									$("#show_hide_password3 a").on('click', function(event) {
										event.preventDefault();
										if($('#show_hide_password3 input').attr("type") == "text"){
											$('#show_hide_password3 input').attr('type', 'password');
											$('#show_hide_password3 i').addClass( "fa-eye-slash" );
											$('#show_hide_password3 i').removeClass( "fa-eye" );
										}else if($('#show_hide_password3 input').attr("type") == "password"){
											$('#show_hide_password3 input').attr('type', 'text');
											$('#show_hide_password3 i').removeClass( "fa-eye-slash" );
											$('#show_hide_password3 i').addClass( "fa-eye" );
										}
									});
								});
							</script>
						<input type="submit" name="submit" value="Update Password">
					</form>
				</div>
				
			</div>
		</div>
		<!-- /terms -->
	</section>
	<!-- //Terms of use-section -->
	
	<?php include('footer.php'); ?>
</body>