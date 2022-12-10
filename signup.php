<?php

$host="localhost";
$user="root";
$password="";
$db="user_db";
$connect=mysqli_connect($host,$user,$password,$db);
mysqli_select_db($connect,$db);

if(isset($_POST['username'])){
$username=$_POST['username'];
$email=$_POST['email'];
$phonenumber=$_POST['phonenumber'];
$password=$_POST['password'];
$sql="select * from user_details where username='".$username."' AND password='".$password."' limit 1";
$result=mysqli_query($connect,$sql);
$num = mysqli_num_rows($result);

if($num == 1){
    echo"Username already taken";
}
else{
    $reg = " insert into user_details(username, email, phonenumber, password) values ('$username' , '$email' , '$phonenumber' , '$password')";
    mysqli_query($connect, $reg);
    echo"Signup Successful";
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <title>SignUp</title>
</head>
<body>
    <div class="login-box">
        <h2>SignUp</h2>
    <form action="signup.php" method="POST">
            <div class="user-box">
                <input type ="text" name="username" required="">
                <label>Username</label>
            </div>
            <div class="user-box">
                <input type ="text" name="email" required="">
                <label>Email</label>
            </div>
            <div class="user-box">
                <input type ="number" name="phonenumber" required="">
                <label>Phonenumber</label>
            </div>
            <div class="user-box">
                <input type="password" name="password" required="">
                <label>password</label>
            </div>
            
            <a>  
                 <button>Signup</button>   
            </a>
</form>
</div>
</body>
</html>