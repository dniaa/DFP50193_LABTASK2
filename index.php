<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab Task 2</title>
</head>

<body>
    <h1> Personal Information Students </h1>
    <hr>

    <form action="view.php" method="post">

        <label>Name:</label>
        <input type="text" for="name" name="name" id="name"><br><br>

        <label>Age:</label>
        <input type="number" for="age" name="age" id="age"><br><br>

        <label>Gender:</label>
        <input type="radio" for="gender" name="gender" value="female" id="female">
        <label>Female</label>
        <input type="radio" for="gender" name="gender" value="male" id="male">
        <label>Male</label><br><br>

        <label>Address:</label>
        <textarea id="address" name="address" rows="4" cols="40"></textarea><br><br>

        <label>Poscode</label>
        <input type="number" name="code" for="code" id="code"><br><br>

        <label>State:</label>
        <select id="state" name="state" >
            <option value="Johor">Johor</option>
            <option value="Melaka">Melaka</option>
            <option value="Negeri Sembilan">Negeri Sembilan</option>
            <option value="Selangor">Selangor</option>
            <option value="Kuala Lumpur">Kuala Lumpur</option>
            <option value="Putrajaya">Putrajaya</option>
            <option value="Perak">Perak</option>
            <option value="Kedah">Kedah</option>
            <option value="Pulau Pinang">Pulau Pinang</option>
            <option value="Perlis">Perlis</option>
            <option value="Kelantan">Kelantan</option>
            <option value="Terengganu">Terengganu</option>
            <option value="Pahang">Pahang</option>
            <option value="Sabah">Sabah</option>
            <option value="Sarawak">Sarawak</option>
        </select><br><br>

        <label>Email:</label>
        <input type="text" for="email" name="email" id="email"><br><br>

        <label>Number Phone:</label>
        <input type="text" for="phone" name="phone" id="phone"><br><br>

        <label>Level:</label>
        <input type="checkbox" for="level" name="Diploma" value="Diploma" id="Diploma">
        <label>DIPLOMA</label>

        <input type="checkbox" for="level" name="Degree" value="Degree" id="Degree">
        <label>DEGREE</label>

        <input type="checkbox" for="level" name="Master" value="Master" id="Master">
        <label>MASTER</label>

        <input type="checkbox" for="level" name="PHD" value="PHD" id="PHD">
        <label>PHD</label>

        <br><br>

        <button type="submit">SUBMIT</button>
    </form>
</body>
</html>