<?php
session_start();

$name = $_SESSION['name'];
$age = $_SESSION['age'];
$gender = $_SESSION['gender'];
$address = $_SESSION['address'];
$code = $_SESSION['code'];
$state = $_SESSION['state'];
$email = $_SESSION['email'];
$phone = $_SESSION['phone'];
$Diploma = $_SESSION['Diploma'];
$Degree = $_SESSION['Degree'];
$Master = $_SESSION['Master'];
$PHD = $_SESSION['PHD'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Papar Data</title>
</head>

<body>

    <h1>Personal Information Students </h1>

    <table>
        <tr>
            <td>Name:</td>
            <td><?php echo $name; ?></td>
        </tr>

        <tr>
            <td>Age:</td>
            <td><?php echo $age; ?></td>
        </tr>

        <tr>
            <td>Gender:</td>
            <td><?php echo $gender; ?></td>
        </tr>

        <tr>
            <td>Address:</td>
            <td><?php echo $address; ?></td>
        </tr>

        <tr>
            <td>Poscode:</td>
            <td><?php echo $code; ?></td>
        </tr>

        <tr>
            <td>State:</td>
            <td><?php echo $state; ?></td>
        </tr>

        <tr>
            <td>Email:</td>
            <td><?php echo $email; ?></td>
        </tr>

        <tr>
            <td>Number Phone:</td>
            <td><?php echo $phone; ?></td>
        </tr>

        <tr>
            <td>Level:</td>
            <td><?php echo $Diploma, $Degree ,$Master, $PHD; ?></td>
        </tr>

    </table>

    <a href="update.php">Edit Session</a>
</body>

</html>