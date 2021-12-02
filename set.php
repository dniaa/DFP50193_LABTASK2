<?php 
session_start();

if(isset($_POST['submit']))
{
	//declare session variable 
	$_SESSION['name']=$_POST['name'];
    $_SESSION['age']=$_POST['age'];
    $_SESSION['address']=$_POST['address'];
    $_SESSION['code']=$_POST['code'];
    $_SESSION['state']=$_POST['state'];
    $_SESSION['phone']=$_POST['phone'];
    $_SESSION['gender']=$_POST['gender'];
    $_SESSION['religion']=$_POST['religion'];
    $_SESSION['status']=$_POST['status'];
    $_SESSION['Level']=$_POST['Level'];
    $_SESSION['email']=$_POST['email'];
    $_SESSION['username']=$_POST['username'];
    $_SESSION['password']=$_POST['password'];
	
	echo"Two session have been set in this page<br>";
	?>
	<a href="view.php">View Detail</a>
<?php
}
?>