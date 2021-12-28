<?php
session_start();

include('registration/config/config.php');

$ids = $_GET['id'];

$show_query = "SELECT * FROM user WHERE id = {$ids}";

$show_data = mysqli_query($con, $show_query);

$arr_data = mysqli_fetch_array($show_data);

$token = $arr_data['token'];

if(isset($_POST['submit'])){
    
	$update_id = $_GET['id'];

	$name = mysqli_real_escape_string($con, $_POST['name']);
	$email = mysqli_real_escape_string($con, $_POST['email']);
	$mobile = mysqli_real_escape_string($con, $_POST['mobile']);

	$update_query = " UPDATE user SET id=$ids, name = '$name', email = '$email', mobile= '$mobile' WHERE id = $update_id ";

	$query = mysqli_query($con, $update_query);

	if($query){
		?>
		<script>
			location.replace("./index.php");
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
	<title>Kokan Crunchy - Top quality Dry-Fruits Products| Home</title>
	<!--/tags -->
	
	<?php include('links/links.php'); ?>
	
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
						<a href="index.html">Home</a>
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