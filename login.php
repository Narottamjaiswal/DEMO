<?php
session_start();

?>
<?php
include "db.php";
if(isset($_POST['Submit'])){
    $email=$_POST['email'];
    $password=$_POST['password'];

    $emailquery="select * from registration where email='$email'";
    $query=mysqli_query($conn,$emailquery);
    $email_count=mysqli_num_rows($query);
    if($email_count){
        $email_pass = mysqli_fetch_assoc($query);

        $db_pass = $email_pass['password'];

        $_SESSION['name']=$email_pass['name'];
          

        $pass_decode = password_verify($password,$db_pass);

        if($pass_decode)
        {
            ?>
            <script>
             alert("LOGIN SUCCESFULLY");
            location.replace("home.php");
            </script>
<?php
        }else {
            ?>
            <script>
             alert("Password Incorect");
            </script>
<?php        }}
        else{
            ?>
            <script>
             alert("Invali Email");
            </script>
<?php          }
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

<label for inputname>Email</label>
<input type="email" id="email" name="email" placeholder="Enter your email " required>
</div>



<div class="mb-3">

<label for inputname>Password</label>
<input type="password" id="password" name="password" placeholder="Enter your password"required>

</div>




<div class="mb-3">
<button type="submit" name="Submit" class="btn ntn-primary btn-block" style="background:blue; margin-left:50px;font-family:muli;color:white">Login</button>
</div>

<div style="color:white;font-family:amiri;">Didn't have a account <a href="regis.php">Signup Here</a></div>



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