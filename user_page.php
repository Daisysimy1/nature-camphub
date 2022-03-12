<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['user_name'])){
    header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user page</title>

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="content">
                <h3>hi, <span>user</span></h3>
                <h1>welcome <span><?php echo $_SESSION['user_name'] ?></span></h1>
                <p>this is an user page</p>
                <a href="login_form.php" class="btn">login</a>
                <a href="register_form.php" class="btn">register</a>
                <a href="logout.php" class="btn">logout</a>

            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <a href="detailsform.php" target="_blank" style="text-transform: uppercase;background: crimson;padding: 10px 30px;display: inline-block;color: white;margin-top: 15px;border-radius: 15px;font-weight: bold;letter-spacing: 5px;text-decoration: none; font-size: 25px;">
                Book Now</a>
        </div>
    </div>




</div>

</body>
</html>