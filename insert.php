<?php

$con=mysqli_connect("localhost","root","","naturecamphub");

require_once ("connection.php");

if(isset($_POST["submit"])){
    if(empty($_POST["name"]) || empty($_POST["email"]) || empty($_POST["age"]) || empty($_POST["quote"])){
        echo "Please fill in the Blanks";

    }else{
        $UserName=$_POST["name"];
        $UserEmail=$_POST["email"];
        $UserAge=$_POST["age"];
        $UserQuote=$_POST["quote"];

        $query = "INSERT INTO `records`(`User_Name`, `User_Email`, `User_Age`, `User_Quote`)  
                 VALUES ('$UserName','$UserEmail','$UserAge','$UserQuote')";

        $result=mysqli_query($con,$query);

        if($result){
            header("view.php");
        }else{
            echo "Please check your query";
        }
        echo "<b>Record or quote submitted successfully</b>";
    }

}else{
    echo "Record submitted successfully";
    header("contactus.php");
}


?>
