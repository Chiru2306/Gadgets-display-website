<!DOCTYPE html>

<html lang="en">

<head>
    <link rel="stylesheet" href="dashboard1.css">
    <link rel="stylesheet" href="contact.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Gadget Now
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
                <li><a href="http://localhost/gadgetsnowweb/dashboard.php"target="_blank">HOME</a></li>
                <li><a href="products.php" target="_blank">PRODUCTS</a></li>
                <li><a href="about.php" target="_blank">ABOUT</a></li>
                <li><a href="contact.php" target="_blank" class="active">CONTACT</a></li>
                <li class="uploader"><a href="login.php" target="_blank">UPLOADER LOGIN/SIGNUP</a></li>
            </ul>
        </div>
    </section>
    <section>
        <div class="container">
            <form action="action_page.php">

                <label for="fname">First Name</label>
                <input type="text" id="fname" name="firstname" placeholder="Your name..">

                <label for="lname">Last Name</label>
                <input type="text" id="lname" name="lastname" placeholder="Your last name..">

                <label for="country">Country</label>
                <select id="country" name="country">
                    <option value="India">India</option>
                    <option value="China">China</option>
                    <option value="Japan">Japan</option>
                </select>

                <label for="subject">Subject</label>
                <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

                <input type="submit" value="Submit">

            </form>
        </div>
    </section>

</body>