<?php
session_start();

if (isset($_SESSION['name'])) {
    header("Location:../index.php");
}
include('config/config.php');



if (isset($_POST['submit'])) {
    $email = mysqli_real_escape_string($con, $_POST['email']);
   	$pass = mysqli_real_escape_string($con, $_POST['pass']);
    
    $email_search = " SELECT * FROM user WHERE email = '$email' and status = 'active' ";
            
    $query = mysqli_query($con, $email_search);
            
    $email_count = mysqli_num_rows($query);
            
    if ($email_count)
	{
                
        $email_pass = mysqli_fetch_assoc($query);
		
		$db_pass = $email_pass['psw'];
                
        $pass_decode = password_verify($pass, $db_pass);
		
			
		
		if($pass_decode)
		{
			
			
			
			$_SESSION['msg']= "Logged in successfully";
			header('location:../index.php');
			
			$_SESSION['name'] = $email_pass['name'];
			$_SESSION['id'] = $email_pass['id'];
			$_SESSION['email'] = $email_pass['email'];
			$_SESSION['mobile'] = $email_pass['mobile'];
			
		}else
		{
			$_SESSION['msg']= "Incorrect password please check your password";
			header('location:login.php');
		}
     }
	else
	{
		$_SESSION['msg']= "Incorrect email please check your email";
		header('location:login.php');
	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Kokan Crunchy - Top quality Dry-Fruits Products| Login</title>
	<?php include('links.php'); ?>
	
</head>
<body class="reg-bg">
<div class="">
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-body modal-body-sub_agile">
					<div class="main-mailposi">
					<img src="../images/kokan-crunchy-logo.jpg" class="img-center">
					</div>
					<div class="modal_body_left modal_body_left1">
						<h3 class="agileinfo_sign">Log In </h3>
						<p>
							Log In now, Let's start your Kokan Crunchy. Don't have an account?
							<a href="registration.php">
								Sign Up Now</a>
						</p>
						<div class="bg-success">
                            <p class="">
                                <?php

                                    if(isset($_SESSION['msg'])){
                                        echo( $_SESSION['msg']);
                                    }else{
                                        echo( $_SESSION['msg'] = "");
                                    }
                                    ?>
                                </p>
						</div>
						<form action="" method="post">
							<div class="styled-input agile-styled-input-top">
								<input type="text" placeholder="Enter email" name="email" required="">
							</div>
							<div class="styled-input" id="show_hide_password">
								<input type="password" class="" placeholder="Password" name="pass" required="">
								<a href=""><i class="fa fa-eye-slash icon" aria-hidden="true"></i></a>
							</div>
							<script>
								$(document).ready(function() {
									$("#show_hide_password a").on('click', function(event) {
										event.preventDefault();
										if($('#show_hide_password input').attr("type") == "text"){
											$('#show_hide_password input').attr('type', 'password');
											$('#show_hide_password i').addClass( "fa-eye-slash" );
											$('#show_hide_password i').removeClass( "fa-eye" );
										}else if($('#show_hide_password input').attr("type") == "password"){
											$('#show_hide_password input').attr('type', 'text');
											$('#show_hide_password i').removeClass( "fa-eye-slash" );
											$('#show_hide_password i').addClass( "fa-eye" );
										}
									});
								});
							</script>
							<input type="submit" name="submit" value="Sign In">
							<p class="text-right">
							<a href="recovery_mail.php" title="click here">
								Forgot Password ?</a>
						</p>
						</form>
						<div class="clearfix"></div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
			<!-- //Modal content-->
		</div>
	</div>
</body>