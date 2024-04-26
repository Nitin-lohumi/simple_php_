<?php
session_start();
$welcome= "";
if(isset($_SESSION['name'])){
     $welcome="heyy !! welcome "; 
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
    <title>to_copy</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" href="logo_front.png">
</head>  
<body>   
    <div class="image"> 
       <div class="box1">
         <h2 class="note"><i style="color:red">For You** - </i> Here <span style="color:red">'NO' </span>mean <span style="color:rgb(27, 254, 27) ">'YES' </span> and <span style="color:rgb(35, 255, 35)">'YES'</span>  mean also <span style="color:rgb(4, 255, 4)">'YES'</span>.</h2>
            <h1> <?php  echo $welcome;?> yes you 🫵 </h1>
             <div class="box2">
              <h2 id="like"> Do you like this ?
                <i class="fa-solid fa-heart" style="color:red" ></i>
            </h2>
            <h2> <?php echo $_SESSION['name'];?></h2>
                <div class="btn_class"> 
                    <a href="yes.php"><button name="submit" class="btn1">yes</button></a>
                    <!-- <a href="yes.php" name="submit" class="btn1" onclick="yes()">yes</a> -->
                    <a><button onclick="no()" name="submit"  class="btn2">NO</button></a>
                  </div>
                </div>
          </div>
     </div>
</body>
<script src="script.js"></script>

</html>