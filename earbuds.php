<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.15.4/css/all.css" />
    <link rel="stylesheet" href="dashboard1.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
<section id="header">
        <a href="dashboard.php"><img src="images/logo2.png" class="logo"></a>
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
                <li><a href="dashboard.php"target="_blank">HOME</a></li>
                <li><a href="http://localhost/gadgetsnowweb/products.php" target="_blank">PRODUCTS</a></li>
                <li><a href="about.php" target="_blank">ABOUT</a></li>
                <li><a href="contact.php" target="_blank">CONTACT</a></li>
                <li class="uploader"><a href="http://localhost/gadgetsnowweb/login.php" target="_blank">UPLOADER LOGIN/SIGNUP</a></li>
            </ul>
        </div>
    </section>

    <div class='tot'>

<?php
$host="localhost";
$user="root";
$password="";
$db="user_db";
$connect=mysqli_connect($host,$user,$password,$db);
mysqli_select_db($connect,$db);

$select_query="Select * from products WHERE (type= 'Earbuds')";
$result_query=mysqli_query($connect,$select_query);
while($row=mysqli_fetch_assoc($result_query)){
    $name=$row['name'];
    $price=$row['price'];
    $type=$row['type'];
    $description=$row['description'];
    $image=$row['image'];
    echo "
    <div class='full'>
    <div class='card' style='width: 18rem;'>
        <img class='card-img-top' src='./uploaded_img/$image'>
        <div class='card-body'>
            <h5 class='card-title'>$name</h5>
            <p class='card-text'>$price</p>
            <p class='card-text'>$type</p>
            <p class='card-text'>$description</p>
        </div>
    </div>
    </div>";
}
?>

</div>
    
</body>
</html>