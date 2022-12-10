<!DOCTYPE html>

<html lang="en">

<head>
    <link rel="stylesheet" href="dashboard1.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gadget Now
    </title>
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
                <li><a href="http://localhost/gadgetsnowweb/dashboard.php" class="active" target="_blank">HOME</a></li>
                <li><a href="http://localhost/gadgetsnowweb/products.php" target="_blank">PRODUCTS</a></li>
                <li><a href="about.php" target="_blank">ABOUT</a></li>
                <li><a href="contact.php" target="_blank">CONTACT</a></li>
                <li class="uploader"><a href="http://localhost/gadgetsnowweb/login.php" target="_blank">UPLOADER LOGIN/SIGNUP</a></li>
            </ul>
        </div>
    </section>
    
    <section id="body">
        <a href="http://localhost/gadgetsnowweb/products.php" target="_blank">
            <h1 id="middletext">
                First stop for new gadgets!
            </h1>
            <button id="button">
                Explore Now &#8594;
            </button>
        </a>
        
    </section>
    <section id="product1">
        <h2 class="title">Featured Gadgets</h2>
    </section>
<section id="types">
    <div >
        <a class="gad Mobiles" href="http://localhost/gadgetsnowweb/phones.php" target="__blank">
        <img src="images/mobilebg.jpg">
        </a>
    </div>
    <div >
        <a class="gad Laptops" href="http://localhost/gadgetsnowweb/laptops.php" target="__blank">
        <img src="images/laptopbg.jpg">
        </a> 
    </div>
    <div >
        <a class="gad Earphones" href="http://localhost/gadgetsnowweb/earbuds.php" target="__blank">
        <img src="images/earpodsbg.webp">
        </a>
    </div>
    <div >
        <a class="gad Speakers" href="http://localhost/gadgetsnowweb/speakers.php" target="__blank">
        <img src="images/speakersbg.jpg">
        </a>
    </div>
</section>
    <script src="script.js"></script>
</body>

</html>
 