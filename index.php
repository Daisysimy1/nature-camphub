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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&family=Ubuntu:wght@400;500;700&display=swap" rel="stylesheet">


    <script src="bootstrap/js/jquery-3.6.0.js"></script>
    <script src="bootstrap/js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>

</head>
<body>

<nav class="navbar navbar-expand-md navbar-light fixed-top">
    <a style="font-size: 20px;font-weight: bold;letter-spacing: 3px;" class="navbar-brand" href="#"> <i class="fa fa-fort-awesome d-inline-block align-top text-white">Nature CampHub</i>
    </a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav text-center ml-auto mb-2 mb-lg-0" style="font-size: 20px;font-weight: bold;letter-spacing:5px;">
            <li class="nav-item active">
                <a class="nav-link text-white" href="index.php" style="font-size: 18px;text-transform: uppercase;font-weight: 700;">Home <span class="sr-only">(current)</span></a>
            </li>
            &nbsp;

            &nbsp;
            <li class="nav-item">
                <a class="nav-link text-white" href="activities.php" style="font-size: 18px;text-transform: uppercase;font-weight: 700;">Activities</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="contactus.php" style="font-size: 18px;text-transform: uppercase;font-weight: 700;">CONTACT US</a>
            </li>
            &nbsp;

        </ul>
        <ul class="navbar-nav text-center ml-auto mb-2 mb-lg-0" style="font-size: 17px;font-weight: bold">
            <li class="nav-item active">
                <a class="nav-link text-white" href="register_form.php" style="font-size: 18px;text-transform: uppercase;font-weight: 700;letter-spacing: 4px;">CREATE AN ACCOUNT

                     </a>
            </li>
        </ul>
    </div>
</nav>



    <div id="demo" class="carousel slide" data-ride="carousel">

        <!-- The slideshow -->
        <div class="carousel-inner">
            <div class="carousel-item active" style="height: 100vh;min-height: 300px;">
                <video class="video-fluid" autoplay loop muted>
                <source src="images/video1.mp4" alt="First Slide">
                </video>
                <div class="carousel-caption" style="bottom: 220px;">
                    <h3 style="font-size: 60px;text-transform: uppercase;letter-spacing: 2px;margin-top: 25px;font-weight: 500;">Welcome To Nature campHub Booking</h3>
                    <hr>
                    <p style="font-size: 18px;margin: auto;width: 60%;line-height: 1.9;" class="text-justify">


                    </p>
                    <a href="campsites.php" target="_blank" style="text-transform: uppercase;background: crimson;padding: 10px 30px;display: inline-block;color: white;margin-top: 15px;border-radius: 15px;font-weight: bold;letter-spacing: 5px;text-decoration: none; font-size: 25px;">
                        Available Campsites</a>

                </div>
            </div>
    </div>






</body>
</html>