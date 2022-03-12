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
<body class="bg-info">
<div class="container">
    <div class="row">
        <div class="col-lg-6 m-auto">
            <img src="images/tent1.jpg" alt="" width="100%" height="380">


        </div>



        <div class="col-lg-6 m-auto">
            <div class="card mt-5">
                <div class="card-title">
                    <h3 class="bg-success text-white text-center py-3">Contact Us Form</h3>

                </div>
                <div class="card-body">
                    <form action="insert.php" method="post">
                        <input type="text" class="form-control mb-2" placeholder="Enter user name" name="name">
                        <input type="email" class="form-control mb-2" placeholder="Enter email address" name="email">
                        <input type="text" class="form-control mb-2" placeholder="Enter age" name="age">
                        <input type="text" class="form-control mb-2" placeholder="Request a quote" name="quote">
                        <button class="btn btn-primary" name="submit">Submit</button>
                    </form>

                </div>
            </div>


    </div>
    </div>
</div>

</body>
</html>
