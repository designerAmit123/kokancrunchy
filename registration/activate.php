<?php

session_start();

include 'config/config.php';

if(isset($_GET['token'])){

    $token = $_GET['token'];

    $update_query = " UPDATE user SET status = 'active' WHERE token = '$token' ";

    $query = mysqli_query($con, $update_query);

    if($query){
        if(isset($_SESSION['msg'])){
            $_SESSION['msg'] = "Account updated successfully";
            header('location:login.php');
        }else{
            $_SESSION['msg'] = "You are logged out.";
            header('location:../index.php');
        }
    }else{
        $_SESSION['msg'] = "Account not updated";
        header('location:registration.php');
    }
}

?>