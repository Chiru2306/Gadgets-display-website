<?php
$host="localhost";
$user="root";
$password="";
$db="user_db";
$connect=mysqli_connect($host,$user,$password,$db);
mysqli_select_db($connect,$db);
if(isset($_POST['username'])){
   $username=$_POST['username'];
   $password=$_POST['password'];
   $sql="select * from user_details where username='".$username."' AND password='".$password."' limit 1";
   $result=mysqli_query($connect,$sql);
   if(mysqli_num_rows($result)==1){
    header("Location:uploader.php");
    exit();
   }
   else{
    echo "you entered wrong details";
    exit();
   }
}
 ?>

<!DOCTYPE html>

<html lang="en">

<head>
    <link rel="stylesheet" href="dashboard1.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gadget Now
    </title>
    <link rel="stylesheet" href="login.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.15.4/css/all.css" />
    

</head>

<body>
    <section id="header">
        <a href="http://localhost/gadgetsnowweb/dashboard.php"><img src="images/logo2.png" class="logo"></a>
        <div>
            <ul id="navbar">
                <div id="gadgetsearch">
                <form action="search.php" method="GET">
                    <div class="input-group rounded">
                        <input type="search" name="search" value="<?php if(isset($_GET['search'])){echo $_GET['search'];} ?>" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
                        <button type="submit" class="btn btn-primary">Search</button>
                    </div>
                </form>
                </div>
                <li><a href="http://localhost/gadgetsnowweb/dashboard.php" target="_blank">HOME</a></li>
                <li><a href="http://localhost/gadgetsnowweb/products.php" target="_blank">PRODUCTS</a></li>
                <li><a href="about.php" target="_blank">ABOUT</a></li>
                <li><a href="contact.php" target="_blank">CONTACT</a></li>
                <li class="uploader"><a href="http://localhost/gadgetsnowweb/login.php" target="_blank" class="active">UPLOADER LOGIN/SIGNUP</a></li>
            </ul>
        </div>
    </section>
    <div class="login-box">
        <h2>Login</h2>
        <form  method="POST" >
            
            <div class="user-box">
                <input type ="text" name="username" required="">
                <label>Username</label>
            </div>
            <div class="user-box">
                <input type="password" name="password" required="">
                <label>password</label>
            </div>
            <div >
                 <button  >login</button>
            </div>
            <a href="signup.php">new user?</a>
            </div>   
        </form>
    </div>
</body>
</html>
