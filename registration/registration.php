<?php
session_start();
ob_start();

include('config/config.php');

if (isset($_POST['submit'])) {
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $mobile = mysqli_real_escape_string($con, $_POST['mobile']);
    $psw = mysqli_real_escape_string($con, $_POST['psw']);
    $cnfpsw = mysqli_real_escape_string($con, $_POST['cnfpsw']);

   
    
    $pass = password_hash($psw, PASSWORD_BCRYPT);
    $cnfpass = password_hash($cnfpsw, PASSWORD_BCRYPT);

    $token = bin2hex(rand());
    
    $emailquery = " SELECT * FROM user WHERE email = '$email' ";
    
    $query = mysqli_query($con, $emailquery);
    
    $emailcount = mysqli_num_rows($query);
    
    if ($emailcount > 0) {
        ?>
        <script>
            alert("Email alredy exists");
        </script>
        <?php
    }else {
        if ($psw === $cnfpsw) {
            $insertquery = " INSERT INTO user(name, email, mobile, psw, cnfpsw, token, status) 
            VALUES('$name', '$email', '$mobile', '$pass', '$cnfpass', '$token', 'inactive' )";
            
            $iquery = mysqli_query($con, $insertquery);
            
            if ($iquery) {
                
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
                $mail->addReplyTo('kokancrunchy7@gmail.com', 'Kokan Crunchy');
                $mail->addAddress($email);   // Add a recipient

                $mail->isHTML(false);  // Set email format to HTML

                $bodyContent = "Hi $name. Click here to activate your account 
                http://kokancrunchy.amitkduiuxdesigner.co.in/registration/activate.php?token=$token";

                $mail->Subject = 'Email Activation';
                $mail->Body    = $bodyContent;

                if(!$mail->send()) {
                    echo 'Message could not be sent.';
                    echo 'Mailer Error: ' . $mail->ErrorInfo;
                } else {
                    $_SESSION['msg'] = "Check your mail to activate your account $email";
                    header('location:login.php');
                }

            }else {
                ?>
                <script>
                    location.replace('../index.php');
                    alert("You are not registered please registered with us to use our services..");
                </script>
                <?php
                /*header('Location: ../index.php');*/
            }
        }else {
            ?>
            <script>
                location.replace('../index.php');
                alert("password are not matching please confirm your password.");
            </script>
            <?php
                /*header('Location: ../index.php');*/
        }
    }
    
    
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Kokan Crunchy - Top quality Dry-Fruits Products| Registration</title>
	<?php include('links.php'); ?>
	
	
</head>
<body class="reg-bg">
<div>
		<div class="modal-dialog">
			
			<div class="modal-content">
				
				<div class="modal-body modal-body-sub_agile">
					<div class="main-mailposi">
						<a href="../index.php"><img src="../images/kokan-crunchy-logo.jpg" class="img-center"></a>
					</div>
					<div class="modal_body_left modal_body_left1">
						<h3 class="agileinfo_sign">Sign Up</h3>
						<p  style="color: white; padding: 10px; background-color: #17a2b8; "><?php 
						if(isset($_SESSION['reg_msg'])){
							echo $_SESSION['reg_msg'];
						}else{
							echo $_SESSION['reg_msg']= "";
						}
						?>
						</p>
						<p>
							Come join the Kokan Crunchy! Let's set up your Account. Already have an account?
							<a href="login.php">
								Login Now</a>
						</p>
						
						<form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
							<div class="styled-input agile-styled-input-top">
								<input type="text" placeholder="Name" name="name" required="">
							</div>
							<div class="styled-input">
								<input type="email" placeholder="E-mail" name="email" required="">
							</div>
                            <div class="styled-input">
								<input type="number" placeholder="Mobile No." name="mobile" required="">
							</div>
							<div class="styled-input" id="show_hide_password2">
								<input type="password" placeholder="Password" name="psw" id="psw" required="">
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
							<input type="submit" name="submit" value="Sign Up">
						</form>
						<p>
							<a href="#">By clicking register, I agree to your terms</a>
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>