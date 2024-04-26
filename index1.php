
<?php
session_start();
include('connect.php');
$msg="";
if(isset($_POST['submit'])){
        $name=$_POST['user'];
        $_SESSION['name']=$name;
        if(empty($_SESSION['name'])){
            $_SESSION['name']="😍";
        }
        $lat= $_POST['lat'];
        $long= $_POST['long'];
        header("Location: index.php");
        $_SESSION['latitude']=$lat;
        $_SESSION['long']= $long;
        $sql  = mysqli_query($link,"INSERT INTO dataofusers (name,latitude,longitute) VALUES ('$name','$lat','$long');");
        if(mysqli_query($link, $sql)){  
            echo "Record inserted successfully";  
           }
           else{  
            echo "Could not insert record: ". mysqli_error($link);  
            }  
            mysqli_close($conn);  
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>www.nitin.com</title>
    <link rel="stylesheet" href="front.css">
    <link rel="icon" href="logo_front.png">
</head>
<body onload="geoLocation()">
    <form method="post">
        <div class="box">
        <h2> welcome </h2>
        <input type="text" placeholder="Enter your name" name="user" id=user class="user" autocomplete="off">
        <input type="hidden" name="lat" id= "lat">
        <input type="hidden" name="long" id= "long">
        <input type="submit" value="Enter" name="submit" class="btn">
    </div>

    </form>
</body>
<script src="script.js"></script>
</html>


