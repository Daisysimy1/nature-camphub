<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['admin_name'])){
    header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin page</title>
    <link rel="icon" href="images/">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&family=Ubuntu:wght@400;500;700&display=swap" rel="stylesheet">


    <script src="bootstrap/js/jquery-3.6.0.js"></script>
    <script src="bootstrap/js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>



</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-sm-6">
            <div class="content">
                <h3>hi, <span>admin</span></h3>
                <h1>welcome <span><?php echo $_SESSION['admin_name'] ?></span></h1>
                <p>this is an admin page</p>
                <a href="login_form.php" class="btn">login</a>
                <a href="register_form.php" class="btn">register</a>
                <hr>
                <a href="logout.php" class="btn">logout</a>
            </div>
        </div>
        <div class="col-sm-6">
            <?php require_once 'formprocess.php'?>
            <?php if(isset($_SESSION['message'])): ?>
            <div class="alert alert-<?=$_SESSION['msg_type']?>">

            <?php
            echo $_SESSION['message'];
            unset($_SESSION['message']);
            ?>
            </div>
            <?php endif ?>


            <?php $mysqli=new mysqli('localhost','root','','naturecamphub') or die(mysqli_error($mysqli));
            $result=$mysqli->query("SELECT * FROM data") or die($mysqli->error);
            ?>

            <div class="row justify-content-center">
                <p> <b> My team</p></b>
                <table class="table">

                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Number</th>
                        <th colspan="2">Action</th>

                    </tr>
                    </thead>
                    <hr>

                    <?php while($row=$result->fetch_assoc()):  ?>
                    <tr>
                        <td> <?php echo $row['name']; ?> </td>

                        <td> <?php echo $row['no']; ?> </td>


                        <td>
<!--                            <a href="admin_page.php?edit=--><?php //echo $row['id']; ?><!--" class="btn btn-info">Edit </a>-->
                            <a href="formprocess.php?delete=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a>
                        </td>
                        <hr>
                    </tr>
                    <?php endwhile;  ?>


                </table>

            </div>

            <?php
            function pre_r($array){
                echo '<pre>';
                print_r($array);
                    echo '<pre>';
            }

            ?>
            <form action="formprocess.php" method="post">
                <input type="hidden" name="id" value="<?php echo $id;?>">
                <div class="form-group">
                <label for="">Name</label>
                <input type="text" name="name" class="form-control" value="<?php echo $name; ?>"  placeholder="Enter your name">
                </div>
                <div class="form-group">
                <label for="">Number</label>
                <input type="tel" name="no" class="form-control" value="<?php echo $no; ?>" placeholder="Enter your phone number">
                </div>
                <div class="form-group">
                    <?php
                    if($update == true):
                        ?>
<!--                <button type="submit" class="btn btn-primary" name="save">Update</button>-->
                    <?php else: ?>
                <button type="submit" class="btn btn-primary" name="save">Save</button>
                    <?php endif; ?>
        </div>


            </form>
            <form action="" method="post">
                <div class="form-group">
                <input type="text" name="id" placeholder="id" class="form-control">
                </div>
                <div class="form-group">
                <input type="text" name="name" placeholder="enter your name" class="form-control">
                </div>
                <div class="form-group">
                <input type="tel" name="no" placeholder="enter your phone number" class="form-control">
                </div>
                <input type="submit" name="update" class="btn btn-danger" value="update">
            </form>

        </div>
    </div>


</div>



</body>
</html>
<?php
$mysqli=new mysqli('localhost','root','','naturecamphub') or die(mysqli_error($mysqli));

if (isset($_POST['update'])){
    $id=$_POST['id'];

    $mysqli->query("UPDATE data SET name='$name',no='$no' WHERE id=$id") or die($mysqli->error);

//    $query="UPDATE data SET name='$_POST[name]',no='$_POST[no]'  WHERE id='$_POST[id]'    ";
    $query_run=mysqli_query($mysqli,$query);
    if($query_run){
        echo '<script type="text/javascript"> alert("Data updated")</script>';
    }else{
        echo '<script type="text/javascript"> alert("Data not updated")</script>';
    }
}

?>