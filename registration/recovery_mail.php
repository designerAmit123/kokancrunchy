<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Kokan Crunchy - Top quality Dry-Fruits Products| Account Recovery</title>
	<?php include('links.php'); ?>
	<script src="https://smtpjs.com/v3/smtp.js"></script>
	
</head>
<body>
	<?php

include('config/config.php');

if (isset($_POST['submit'])) {
    $email = mysqli_real_escape_string($con, $_POST['email']);
    
    $emailquery = " SELECT * FROM user WHERE email = '$email' ";
    
    $query = mysqli_query($con, $emailquery);
    
    $emailcount = mysqli_num_rows($query);
    
    if ($emailcount) {
		
		$user_data = mysqli_fetch_array($query);
		
		$name = $user_data['name'];
		$token = $user_data['token'];
		
		
		
		require 'PHPMailer/PHPMailerAutoload.php';

        $mail = new PHPMailer;

        $mail->isSMTP();                            // Set mailer to use SMTP
        $mail->Host = 'smtp.gmail.com';             // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                     // Enable SMTP authentication
        $mail->Username = 'kokancrunchy7@gmail.com';          // SMTP username
        $mail->Password = 'kokan@Crunchy123'; // SMTP password
        $mail->SMTPSecure = 'tls';                  // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 587;                          // TCP port to connect to

        $mail->setFrom('kokancrunchy7@gmail.com', 'Kokan Crunchy');
        $mail->addReplyTo('kokancrunchy7@gmail.com', 'Amit Kadu');
        $mail->addAddress($email);   // Add a recipient

        $mail->isHTML(false);  // Set email format to HTML

        $bodyContent = "Hi $name. Click here to reset your password 
        http://kokancrunchy.amitkduiuxdesigner.co.in/registration/reset_password.php?token=$token";

        $mail->Subject = 'Reset Password';
        $mail->Body    = $bodyContent;

        if(!$mail->send()) {
			echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        } else {
			$_SESSION['msg'] = "Check your mail to reset your account";
			header('location:login.php');
        }
    }else{
		$_SESSION['msg'] = "Mail not found";
		header('location:login.php');
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
					<h3 class="tittle-w3c">Forgot Your Password?</h3>
					<?php echo $token; ?>
					<p>Enter the e-mail address associated with your account. Click submit to have a password reset link e-mailed to you.</p>
					<h5>Your E-Mail Address</h5>
				</div>
				<div class="edit_user">
					<form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
						<div class="styled-input agile-styled-input-top">
							<input type="text" name="email" id="email" placeholder="Email Address" required="">
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