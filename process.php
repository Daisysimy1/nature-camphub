<?php
$mysqli=new mysqli('localhost','root','','naturecamphub') or die(mysqli_error($mysqli));

if(isset($_POST['book'])){
    $firstName=$_POST['firstName'];
    $lastName=$_POST['lastName'];
    $mStatus=$_POST['mStatus'];
    $noGuests=$_POST['noGuests'];
    $emailAddress=$_POST['emailAddress'];
    $telNo=$_POST['telNo'];
    $country=$_POST['country'];
    $dobCheckin=$_POST['dobCheckin'];
    $dobCheckout=$_POST['dobCheckout'];
    $notes=$_POST['notes'];

    $mysqli->query("INSERT INTO crudusersform(firstName,lastName,mStatus,noGuests,emailAddress,telNo,country,dobCheckin,dobcheckout,notes) VALUES('$firstName','$lastName','$mStatus','$noGuests','$emailAddress','$telNo','$country','$dobCheckin','$dobCheckout','$notes')") or
    die($mysqli->error);

    echo "<b>Booked successfully</b>";
}
