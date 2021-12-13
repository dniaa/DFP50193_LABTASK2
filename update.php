<?php
session_start();

#echo '<pre>', print_r($_SESSION); exit;
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
    <title>Document</title>
</head>

<body>

    <form  method="post" action="view.php">
        <h1> Personal Information Students </h1>
        <label>Name:</label>
        <input type="text" for="name" name="name" value="<?php echo $name; ?>"><br><br>

        <label>Age:</label>
        <input type="number" for="age" name="age" id="age" value="<?php echo $age; ?>"><br><br>

        <label>Gender:</label>
        <input type="radio" for="gender" name="gender" value="female" <?php if ($gender== 'female') echo "checked"; ?> id="female">
        <label>Female</label>
        <input type="radio" for="gender" name="gender" value="male" <?php if ($gender == 'male') echo "checked"; ?> id="male">
        <label>Male</label><br><br>

        <label>Address:</label>
        <textarea id="address" name="address" rows="4" cols="40"><?php echo $address; ?></textarea><br><br>

        <label>Poscode</label>
        <input type="number" minlength="5" maxlength="5" name="code" for="code" id="code" value="<?php echo $code; ?>"><br><br>

        <label>State:</label>
        <select id="state" name="state">
            <option value="johor" <?php if ($state == 'johor') echo "selected"; ?>>Johor</option>
            <option value="melaka" <?php if ($state == 'melaka') echo "selected"; ?>>Melaka</option>
            <option value="negerisembilan" <?php if ($state == 'negerisembilan') echo "selected"; ?>>Negeri Sembilan</option>
            <option value="selangor" <?php if ($state == 'selangor') echo "selected"; ?>>Selangor</option>
            <option value="kuala lumpur" <?php if ($state == 'kuala lumpur') echo "selected"; ?>>Kuala Lumpur</option>
            <option value="putrajaya" <?php if ($state == 'putrajaya') echo "selected"; ?>>Putrajaya</option>
            <option value="perak" <?php if ($state == 'perak') echo "selected"; ?>>Perak</option>
            <option value="kedah" <?php if ($state == 'kedah') echo "selected"; ?>>Kedah</option>
            <option value="pulaupinang" <?php if ($state == 'pulaupinang') echo "selected"; ?>>Pulau Pinang</option>
            <option value="perlis" <?php if ($state == 'perlis') echo "selected"; ?>>Perlis</option>
            <option value="kelantan" <?php if ($state == 'kelantan') echo "selected"; ?>>Kelantan</option>
            <option value="terengganu" <?php if ($state == 'terengganu') echo "selected"; ?>>Terengganu</option>
            <option value="pahang" <?php if ($state == 'pahang') echo "selected"; ?>>Pahang</option>
            <option value="sabah" <?php if ($state == 'sabah') echo "selected"; ?>>Sabah</option>
            <option value="sarawak" <?php if ($state == 'sarawak') echo "selected"; ?>>Sarawak</option>
        </select><br><br>

        <label>Email:</label>
        <input type="text" for="email" name="email" value="<?php echo $email; ?>" id="email"><br><br>

        <label>Number Phone:</label>
        <input type="text" for="phone" name="phone" id="phone" value="<?php echo $phone; ?>"><br><br>

        <label>Level:</label>
        <input type="checkbox" for="level" name="Diploma" value="Diploma"  <?php if ($Diploma == 'Diploma') echo "checked"; ?> id="Diploma">
        <label>DIPLOMA</label>

        <input type="checkbox" for="level" name="Degree" value="Degree"  <?php if ($Degree == 'Degree') echo "checked"; ?> id="Degree">
        <label>DEGREE</label>

        <input type="checkbox" for="level" name="Master" value="Master"  <?php if ($Master == 'Master') echo "checked"; ?> id="Master">
        <label>MASTER</label>

        <input type="checkbox" for="level" name="PHD" value="PHD"  <?php if ($PHD == 'PHD') echo "checked"; ?> id="PHD">
        <label>PHD</label><br><br>

        <input type="submit" name="Send" value="Submit" />
        <input type="reset" value="Reset">
    </form>
</body>

</html>