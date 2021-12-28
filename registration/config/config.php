<?php 
    $server = "localhost";
    $user = "root";
    $password = "";
    $dbname = "mydb";
    
    $con = mysqli_connect($server, $user, $password, $dbname);
    
    if($con){
       echo "Conncted!";
    }else{
        ?>
        <script>
            alert("Database not connected please connect");
        </script>
        <?php
    }
?>

<!--?php 
    $server = "localhost";
    $user = "amitkdu20_uideveloper";
    $password = "designer@Amit123";
    $dbname = "amitkdu20_uideveloper";
    
    $con = mysqli_connect($server, $user, $password, $dbname);
    
    if($con){
       echo "Conncted!";
    }else{
        ?>
        <script>
            alert("Database not connected please connect");
        </script-->
        <!--?php
    }
?-->