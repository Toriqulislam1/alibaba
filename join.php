<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "alibaba";

$conn = new mysqli($hostname, $username,$password,$dbname );

if($conn->connect_error){
    die("connection filed".$conn->connect_error);
}


if (isset($_POST['country']) && isset($_POST['email'])   && isset($_POST['password'])
  && isset($_POST['Confirmation'])   && isset($_POST['Company']) && isset($_POST['name']) )  {

    $country= $_POST['country'];
    $email= $_POST['email'];
    $password= $_POST['password'];
    $confirmation= $_POST['Confirmation'];
    $company= $_POST['Company'];
    $name= $_POST['name'];


 $sql = "INSERT INTO join_free (country, email, password,Confirmation,Company,name)
 
 value (' $country',' $email','$password',' $confirmation',' $company','$name')";

  }            

  if(mysqli_query($conn, $sql)){

    echo "connected";
  }else{
      echo "not connected";
  }























?>















<form action="join.php" method="POST">

<label for="country">Country/Region:</label>
<input type="text" name="country"><br>

<label for="E-mail">E-mail:</label>
<input type="text" name="email"><br>

<label for="password">login password:</label>
<input type="text" name="password"><br>

<label for="password">password Confirmation:</label>
<input type="text" name="Confirmation"><br>

<label for="Company">Company Name:</label>
<input type="text" name="Company"><br>

<label for="English">English name:</label>
<input type="text" name="name"><br>

<input type="submit" value="agree and register">


</form>














</body>
</html>