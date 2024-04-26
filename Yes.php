<?php 
session_start();
if(isset($_SESSION['name'])){
     echo "";
    }
else{
    header("Location: index1.php");
    session_destroy();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yes</title>
    <link rel="stylesheet" href="yes.css">
    <link rel="icon" href="logo_front.png">
</head>
<body onload="open_page()">
    <div class="image">
    </div>
          <div class="box_1" id="box_1">
                  <h1 style="text-transform:capitalize">
                    “Congratulations!” <?php echo $_SESSION['name'];?>
                  </h1>
                 <h2 style="color:rgba(0, 255, 38, 0.619)"> you fall in love with me !</h2>
                 <h3 class="timer" id="timer"></h3>
                 <img class="img1" id="image1" src="img4.png" alt="image">
                 <h2 id="heading1"></h2>
              <i id="thanku"></i>
                </div>
          </div>
    </div>
</body>
<script src="script.js"></script>
</html>