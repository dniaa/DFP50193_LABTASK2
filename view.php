<?php
$name = $_POST['name'];
$age = $_POST['age'];
$address = nl2br($_POST['address']);
$code = $_POST['code'];
$state = $_POST['state'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$gender = $_POST['gender'];

if (isset($_POST['Diploma'])) {
    $Diploma = $_POST['Diploma'];
} else {
    $Diploma = '';
}
if (isset($_POST['Degree'])) {
    $Degree = $_POST['Degree'];
} else {
    $Degree = '';
}
if (isset($_POST['Master'])) {
    $Master = $_POST['Master'];
} else {
    $Master = '';
}
if (isset($_POST['PHD'])) {
    $PHD = $_POST['PHD'];
} else {
    $PHD = '';
}


if ($name == '') {
?>
    <script>
        alert('Please insert your name ');
        window.location = 'index.php';
    </script>

<?php
} elseif ($age == '') {
?>
    <script>
        alert('Please insert your age ');
        window.location = 'index.php';
    </script>

<?php
} elseif ($address == '') {
?>
    <script>
        alert('Please insert your address ');
        window.location = 'index.php';
    </script>

<?php
} elseif ($code == '') {
?>
    <script>
        alert('Please insert your poscode ');
        window.location = 'index.php';
    </script>

<?php
} elseif ($state == '') {
?>
    <script>
        alert('Please insert your state ');
        window.location = 'index.php';
    </script>

<?php
} elseif ($email == '') {
?>
    <script>
        alert('Please insert your email ');
        window.location = 'index.php';
    </script>

<?php
} elseif ($phone == '') {
?>
    <script>
        alert('Please insert your number phone ');
        window.location = 'index.php';
    </script>

<?php
} elseif ($gender == '') {
?>
    <script>
        alert('Please insert your gender ');
        window.location = 'index.php';
    </script>

<?php
} else {
    session_start();
    $_SESSION['name'] = $name;
    $_SESSION['age'] = $age;
    $_SESSION['gender'] = $gender;
    $_SESSION['address'] = $address;
    $_SESSION['code'] = $code;
    $_SESSION['state'] = $state;
    $_SESSION['email'] = $email;
    $_SESSION['phone'] = $phone;
    $_SESSION['Diploma'] = $Diploma;
    $_SESSION['Degree'] = $Degree;
    $_SESSION['Master'] = $Master;
    $_SESSION['PHD'] = $PHD;

    header('location: set.php');
}