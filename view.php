<?php
session_start();

echo"Display Form Detail <br>";
echo "Name : ".$_SESSION['name']."<br>";
echo "Age : ".$_SESSION['age']."<br>";
echo "Address : ".$_SESSION['address']."<br>";
echo "Postcode : ".$_SESSION['code']."<br>";
echo "State : ".$_SESSION['state']."<br>";
echo "No Phone : ".$_SESSION['phone']."<br>";
echo "Gender : ".$_SESSION['gender']."<br>";
echo "Level : ".$_SESSION['Level']."<br>";
echo "status : ".$_SESSION['status']."<br>";
echo "Email : ".$_SESSION['email']."<br>";
echo "Username : ".$_SESSION['username']."<br>";
echo "Password : ".$_SESSION['password']."<br>";
?>
<br>

<a href="set.php">Edit Session</a>