<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
    <form name="regform" method="post" action="set.php">
        <center> <h1>Student Form</h1> </center>
        <hr>
    
        <label for="name"><b>Name : </b></label>
        <input type="text" placeholder="Enter Name" name="name" id="name" required>

        <br><br>

        <label for="age"><b>Age : </b></label>
        <input type="number" placeholder="Enter Age" name="age" id="age" required>
        
        <br><br>

        <label for="address"><b>Address : </b></label>
        <textarea input type="text" placeholder="Enter Address" name="address" id="address" required></textarea>

        <br><br>

        <label for="Postcode"><b>Postcode : </b></label>
        <input type="number" placeholder="Enter Postcode" name="Postcode" id="Postcode" required>
        
        <br><br>

        <label for="name"><b>State : </b></label>
        <select name="state" id="state">
            <option value="default">(Please select a state)</option>
            <option value="state">Pahang</option>
            <option value="state">Perak</option>
            <option value="state">Terengganu</option>
            <option value="state">Perlis</option>
            <option value="state">Selangor</option>
            <option value="state">Wilayah Persekutuan Kuala Lumpur</option>
            <option value="state">Negeri Sembilan</option>
            <option value="state">Johor</option>
            <option value="state">Kelantan</option>
            <option value="state">Kedah</option>
            <option value="state">Pulau Pinang</option>
            <option value="state">Melaka</option>
            <option value="state">Sabah</option>
            <option value="state">Sarawak</option>
        </select>

        <br><br>

        <label for="phone"><b>Phone No. :</b></label>
        <input type="number" placeholder="Enter Phone" name="phone" id="phone" required>
        
        <br><br>


        <label for="Gender"><b>Gender : </b></label>
        <input type="radio" id="male" name="gender" value="male">
        <label for="male">Male</label>
        <input type="radio" id="female" name="gender" value="female">
        <label for="female">Female</label>

        <br><br>

        <label for="religion"><b>Religion : </b></label>
        <input type="radio" id="muslim" name="religion" value="muslim">
        <label for="muslim">Muslim</label>
        <input type="radio" id="non" name="religion" value="non">
        <label for="non">Non-Muslim</label>

        <br><br>

        <label for="status"><b>Status : </b></label>
        <input type="radio" id="single" name="status" value="single">
        <label for="male">Single</label>
        <input type="radio" id="married" name="status" value="married">
        <label for="married">Married</label>

        <br><br>
          
        <label for="Level"><b>Level : </b></label>

        <label> <input name="Level" type="checkbox"> Diploma </label>
        <label> <input name="Level" type="checkbox"> Degree </label> 
        <label> <input name="Level" type="checkbox"> Master </label>
        <label> <input name="Level" type="checkbox"> PHD </label>
		
        <br><br>
        
        <label for="email"><b>Email</b></label>
        <input type="text" placeholder="Enter Email" name="email" id="email" required>
    
      <br><br>

        <label for="address"><b>Username</b></label>
        <input type="text" placeholder="Enter Username" name="username" id="username" required>
		
        <br><br>

		<label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="password" id="password" required>
          
    <br>
    <br>

        <center>
        <input type="submit" name="submit" value="Submit">
        <input type="reset" value="Reset">
        </center></td>
        </tr>
        </div>
          
</body>
</html>