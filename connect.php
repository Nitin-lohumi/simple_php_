
<?php
$servername = "localhost";
$username = "username";
$password = "";
$database = "location";
$link = mysqli_connect($servername, $username, $password,$database);
if (mysqli_connect_errno()) {
  echo "Connection failed: " . $link->connect_error;
}
echo"";
?>
