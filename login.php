<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial scale=1.0">
    <title>Nature CampHub Booking system</title>
    <link rel="icon" href="images/">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="css/indexstyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <script src="bootstrap/js/jquery-3.6.0.js"></script>
    <script src="bootstrap/js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
</head>
<body class="bg-primary">
<div class="container p-4">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-5">Image
                </div>
                <div class="col-md-7">
                    <div class="text-center">
                        <h4 class="grey">Karibu Tena!</h4>
                    </div>
                    <form action="handlelogin.php" method="post">

                        <div class="row mb-3">
                            <div class="col-md-12">
                                <input class="form-control rounded-pill" type="email" name="emailAddress" placeholder="Email Address" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-12">
                                <input class="form-control rounded-pill" type="password" name="password" placeholder="Password" required>
                            </div>

                        </div>
                        <div class="row mb-3">
                            <div class="col-md-12">
                                <input type="submit" class="rounded-pill btn btn-primary" style="width: 100%;" value="Login">
                            </div>
                        </div>
                        <hr>
                        <div class="row mb-3">
                            <div class="col-md-12">
                                <a href="#" class="rounded-pill btn btn-danger" style="width: 100%;"> <i class="fa fa-google"></i> Login with google</a>

                            </div>
                        </div>
                    </form>
                    <hr>
                    <div class="text-center">
                        <a href="">Forgot Password?</a>

                    </div>
                    <div class="text-center">
                        <a href="register.php">Create an account</a>

                    </div>

                </div>
            </div>
        </div>
    </div>
</div>



</body>
</html>
