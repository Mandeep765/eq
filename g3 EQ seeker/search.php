<?php
session_start();
include_once("connection.php");
?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title></title>
    <link href="style.css" rel="stylesheet">

</head>

<body>
    <header>
        <nav class="navbar  navbar-inverse navbar-fixed-top nav-color">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mynavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="index.php" class="navbar-brand">EQUIPMENT SEEKER</a>
                </div>

                <div class="collapse navbar-collapse" id="mynavbar">
                    <?php if (isset($_SESSION['user_id'])) { ?>
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="logout.php">Log Out</a></li>
                        </ul>
                    <?php } else { ?>
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="signup.php">signup</a></li>
                        </ul>
                    <?php } ?>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="products.php">Products</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="feedback.html">Feedback</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="admin.php">Admin</a></li>
                    </ul>
                    <?php include_once('./includes/searchForm.php') ?>
                </div>
            </div>
        </nav>
    </header>
    <div class="container">
        <div class="row search">
            <div class="col-12">
                <?php
                if (isset($_GET['search'])) {
                    $search = $_GET['search'];
                } else {
                    header('lcoation:index.php');
                }
                $query = "SELECT * FROM `search` WHERE `title` LIKE '%$search%'";
                $query = mysqli_query($link, $query);
                if (mysqli_num_rows($query) > 0) {
                    while ($row = mysqli_fetch_assoc($query)) {
                        $title = $row['title'];
                      	$page_url = $row['page_name'];
                ?>
                        <p><a href="./products/<?= $page_url ?>"><?= $title ?></a></p>
                    <?php
                    }
                } else {
                    ?>
                    <p>No data found with your search</p>
                <?php
                }
                ?>
            </div>
        </div>
    </div>
    <footer>
        <div class="container">
            <p id="left">We are available in all platforms such as twitter,IG,FB.</p>
            <p id="left">Location:545 Kent St, Haymarket NSW 2000.</p>
            <p id="left">Phone: 023456****.</p>
            <p id="left">Email:info@eqseeker.com</p>

            <center>
                Copyright 2021© EQUIPMENT SEEKER
            </center>
        </div>
    </footer>

</body>

</html>