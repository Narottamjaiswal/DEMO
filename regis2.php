<?php
// create connection with database
include "db.php";
if (isset($_POST['Submit'])){
$name=$_POST['name'];
$email=$_POST['email'];
$contact=$_POST['contact'];
$password=$_POST['password'];
$cpassword=$_POST['cpassword'];

$pass=password_hash($password,PASSWORD_BCRYPT);

$cpass=password_hash($cpassword,PASSWORD_BCRYPT);
// check validations
$emailquery="select * from registration where email='$email'";
$query=mysqli_query($conn,$emailquery);
$email_count=mysqli_num_rows($query);
if($email_count>0){
?>
<script>
alert("email already exists");
</script>
<?php
}else {
    if($password===$cpassword){
//run insert query
$insertquery="INSERT into registration(name,email,contact,password,cpassword)VALUES('$name','$email','$contact','$pass','$cpass')";
$result=mysqli_query($conn,$insertquery);
if($result){
    ?>
    <script>
    alert("REGISTERD SUCCEFULLY");
    location.replace("login.php");
    </script>
    <?php
}else {
    ?>
    <script>
    alert("Registration unsucessfull");
    </script>
    <?php
}}else {
    ?>
    <script>
    alert("password not matched");
    </script>
    <?php
}


    }
}





?>





















<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>Hello, world!</title>
<style>
body{
background: lightgrey;
text-align:center;
}
.container{

  width:50%;
  background:black;
}
form{
  width:100%;
  padding:50px;
  margin-top: 10px;
  align-content:center;
}
label {
  font-family:muli;
  font-size:18px;
  display: inline-block;
  width: 140px;
  text-align:left;
  color:white;​
}



</style>

</head>
  <body>


<h1 style="text-align:center;color:blue;font-family:amiri;font-size:30px;margin-top:50px;">Enter your Details Here</h1>
<div class="container">
<form  method="POST" action="">

<div class="mb-3">

<label for inputname>Name</label>
<input type="text"id="fname" name="name" placeholder="Enter your name "required>

</div>

<div class="mb-3">

<label for inputname>Email</label>
<input type="email" id="email" name="email" placeholder="Enter your email " required>
</div>

<div class="mb-3">

<label for inputname>Contact</label>
<input type="tel" id="phone" name="contact" placeholder="Enter your phone no"required>

</div>

<div class="mb-3">

<label for inputname>Password</label>
<input type="password" id="password" name="password" placeholder="Enter your password"required>

</div>

<div class="mb-3">

<label for inputname>Confirm Password</label>
<input type="password" id="cpassword" name="cpassword" placeholder="Confirm password"required>

</div>



<div class="mb-3">
<button type="submit" name="Submit" class="btn ntn-primary btn-block" style="background:blue; margin-left:50px;font-family:muli;color:white">Submit</button>
</div>

<div><a href="login.php">Already have a account?</a></div>



</form>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
  </body>


</html>