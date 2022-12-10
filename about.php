<!DOCTYPE html>

<html lang="en">

<head>
    <link rel="stylesheet" href="dashboard1.css">
    <link rel="stylesheet" href="about.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        About us
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
                <li><a href="http://localhost/gadgetsnowweb/dashboard.php" target="_blank">HOME</a></li>
                <li><a href="products.php" target="_blank">PRODUCTS</a></li>
                <li><a href="about.php" target="_blank" class="active">ABOUT</a></li>
                <li><a href="contact.php" target="_blank">CONTACT</a></li>
                <li class="uploader"><a href="login.php" target="_blank">UPLOADER LOGIN/SIGNUP</a></li>
            </ul>
        </div>
    </section>

    <section>
        <div class="about-section">
            <h1>About GadgetNow</h1><br>
            <p>This website gives you the specs about the best and latest items released recently!!!</p>
            <p>Note: This website doesn't intend to sell or buy any of the products</p>
        </div>

        <h2 style="text-align:center">Our Team</h2>
        <div class="row">
            <div class="column">
                <div class="card">
                    <div class="container">
                        <h2>Abhishek Reddy Nallabolu</h2>
                        <p class="title">202051005</p>
                        <p>Student at IIITV</p><br>
                        <p>contact at :</p>
                        <p><button class="button">202051005@iiitv.ac.in</button></p>
                    </div>
                </div>
            </div>

            <div class="column">
                <div class="card">
                    <div class="container">
                        <h2>Kayala Vishwaksen Reddy</h2>
                        <p class="title">202051101</p>
                        <p>Student at IIITV</p><br>
                        <p>contact at :</p>
                        <p><button class="button">202051101@iiitv.ac.in</button></p>
                    </div>
                </div>
            </div>

            <div class="column">
                <div class="card">
                    <div class="container">
                        <h2>Kommula Chiranjeevi Sagar</h2>
                        <p class="title">202051103</p>
                        <p>Student at IIITV</p><br>
                        <p>contact at :</p>
                        <p><button class="button">202051103@iiitv.ac.in</button></p>
                    </div>
                </div>
            </div>

            <div class="column">
                <div class="card">
                    <div class="container">
                        <h2>Kotini Swatej</h2>
                        <p class="title">202051106</p>
                        <p>Student at IIITV</p><br>
                        <p>contact at :</p>
                        <p><button class="button">202051106@iiitv.ac.in</button></p>
                    </div>
                </div>
            </div>

        </div>
    </section>


</body>