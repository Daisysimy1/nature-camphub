<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial scale=1.0">
    <title>Nature CampHub Booking system</title>
    <link rel="icon" href="images/logo1.jpg">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <script src="bootstrap/js/jquery-3.6.0.js"></script>
    <script src="bootstrap/js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
    <style>
        /*styling the details form*/
        body{
            padding: 0;
            margin: 0;
            /*background-color: aqua;*/
            /*background-image: url("/images/bg3.jpg");*/
            /*background-repeat: no-repeat;*/
        }
        h2{
            font-family: sans-serif;
            color: crimson;
            text-align: center;
        }
        hr{
            border: 5px solid crimson;
            width: 40%;
        }
        .hr1{
            border: 5px solid lightcoral;
            width: 40%;

        }
        .forms,.buttons{
            display: flex;
            text-align: center;
            justify-content: center;
            width: 100%;
        }
        form{
            width: 50%;
            background: lightcoral;
            border-radius: 15px;
            padding: 15px;
        }
        label{
            font-family: sans-serif;
            font-size: 16px;
            font-weight: bold;
        }
        input, textarea{
            width: 100%;
            padding: 14px 16px;
            margin: 8px 0;
            border-radius: 10px;
            border: 2px solid black;
            box-sizing: border-box;
        }
        button{
            background: crimson;
            color: white;
            font-family: sans-serif;
            width: 40%;
            font-size: 16px;
            padding: 14px 16px;
            border-radius: 10px;
            border: 2px solid black;
        }
        button:hover{
            background: darkorange;
            font-weight: bold;
            color: darkred;
        }
        input:hover,textarea:hover{
            background: lightblue;
        }
    </style>
</head>
<body>
<?php require_once 'process.php'; ?>


<h2 style="letter-spacing: 4px;">  Booking Confirmation details </h2>

<div class="forms">
    <form action="process.php" method="post" enctype="multipart/form-data">


        <label style="letter-spacing: 3px;font-size: 18px;" for="">First Name</label>
        <input type="text" name="firstName" placeholder="Your First Name" required>
        <label style="letter-spacing: 3px;font-size: 18px;" for="">Last Name</label>
        <input type="text" name="lastName" placeholder="Your Last Name" required>
        <br>
        <label style="letter-spacing: 3px;font-size: 18px;" for=""> <b> Marital status</b></label>
        &nbsp;
        <select style="width: 100%;padding: 14px 16px;margin: 8px 0;border-radius: 10px;border: 2px solid black;box-sizing: border-box;" name="mStatus" id="" required>
            <option value="Single">Single</option>
            <option value="married">married</option>
            <option value="Divorced">Divorced</option>
            <option value="Widowed ">Widowed</option>
            <option value="Separated">Separated</option>
        </select>
        <label style="letter-spacing: 3px;font-size: 18px;" for="">Number of Guests being accompanied with</label>
        <select style="width: 100%;padding: 14px 16px;margin: 8px 0;border-radius: 10px;border: 2px solid black;box-sizing: border-box;" name="noGuests" id="" required>
            <option value="zero">0</option>
            <option value="one">1</option>
            <option value="two">2</option>
            <option value="three">3</option>
        </select>
        <br>



        <label style="letter-spacing: 3px;font-size: 18px;" for="">Email Address</label>
        <input type="email" name="emailAddress" placeholder="Your email Address" required>
        <label style="letter-spacing: 3px;font-size: 18px;" for="">Telephone Number</label>
        <input type="tel" name="telNo" placeholder="Your telephone number" required>
        <label style="letter-spacing: 3px;font-size: 18px;" for="">Country of residence</label>
        <select style="width: 100%;padding: 14px 16px;margin: 8px 0;border-radius: 10px;border: 2px solid black;box-sizing: border-box;" name="country" id="" required>
            <option value="kenya">Kenya</option>
            <option value="uganda">Uganda</option>
            <option value="tanzania">Tanzania</option>
        </select>
        <br>
        <label style="letter-spacing: 3px;font-size: 18px;" for="">Checkin:</label>
        <input type="date" name="dobCheckin" required>
        <label style="letter-spacing: 3px;font-size: 18px;" for="">Checkout:</label>
        <input type="date" name="dobCheckout" required>


        <label style="letter-spacing: 3px;font-size: 18px;" for="">Notes</label>
        <textarea placeholder="Add any instructions or information" name="notes" id="" cols="30" rows="3"></textarea>


        <div class="buttons">

            <hr class="hr1">
            <button style="font-size: 20px;" type="submit" name="book">Book Now</button>

        </div>




    </form>
</div>


</body>
</html>
