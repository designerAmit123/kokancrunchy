<?php
session_start();

include('config/config.php');

$ids = $_GET['id'];

$show_query = "SELECT * FROM user WHERE id = {$ids}";

$show_data = mysqli_query($con, $show_query);

$arr_data = mysqli_fetch_array($show_data);


if(isset($_POST['submit'])){
	$update_id = $_GET['id'];

	$psw = mysqli_real_escape_string($con, $_POST['psw']);
	$cnfpsw = mysqli_real_escape_string($con, $_POST['cnfpsw']);
	
	$pass = password_hash($psw, PASSWORD_BCRYPT);
    $cnfpass = password_hash($cnfpsw, PASSWORD_BCRYPT);
	
	if($psw === $cnfpsw){
		$update_query = " UPDATE user SET id=$ids, psw='$pass', cnfpsw='$cnfpass'  WHERE id = $update_id ";

		$query = mysqli_query($con, $update_query);

		if($query){
			session_destroy();
			?>
			<script>
				location.replace("./login.php");
				alert("password changed successfully.. please login with new password");
			</script>
			<?php
		}else{
			?>
			<script>
				alert("password not changed");
			</script>
			<?php
		}
	}else{
		?>
			<script>
				location.replace("../index.php");
				alert("password not matching");
			</script>
			<?php
	}
	
}
?>
<head>
	<title>Kokan Crunchy - Top quality Dry-Fruits Products| Change Password</title>
	<?php include('./links/links.php'); ?>
	
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
						<a href="../index.php">Home</a>
						<i>|</i>
					</li>
					<li>
						<a href="../my-account.php">Account</a>
						<i>|</i>
					</li>
					<li>Change Password </li>
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
					<h3 class="tittle-w3c">Change Password</h3>
					<h5>Your Password</h5>
				</div>
				<div class="edit_user">
					<form action="" method="post">
						<div class="styled-input" id="show_hide_password2">
							<input type="password" placeholder="Password" name="psw" id="psw" required="">
							<a href=""><i class="fa fa-eye-slash icon" aria-hidden="true"></i></a>
						</div>
						<script>
							$(document).ready(function() {
								$("#show_hide_password2 a").on('click', function(event) {
										event.preventDefault();
										if($('#show_hide_password2 input').attr("type") == "text")
										{
											$('#show_hide_password2 input').attr('type', 'password');
											$('#show_hide_password2 i').addClass( "fa-eye-slash" );
											$('#show_hide_password2 i').removeClass( "fa-eye" );
										}else if($('#show_hide_password2 input').attr("type") == "password")
										{
											$('#show_hide_password2 input').attr('type', 'text');
											$('#show_hide_password2 i').removeClass( "fa-eye-slash" );
											$('#show_hide_password2 i').addClass( "fa-eye" );
										}
									});
								});
						</script>
						<div class="styled-input" id="show_hide_password3">
							<input type="password" placeholder="Confirm Password" name="cnfpsw" id="cnfpsw" required="">
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