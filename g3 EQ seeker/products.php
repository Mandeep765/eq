<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>Products</title>

    <link href="style.css" rel="stylesheet">
    <style type="text/css">
        p{
            font-weight: bold;
        }
    </style>
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
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="login.php">signup</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="products.php">Products</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="feedback.html">Feedback</a></li>
                    </ul>
                    <?php include_once('./includes/searchForm.php') ?>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <div class="container">
            <div class="jumbotron jumbotron_style">
                <h6 class="product-heading">Trending: Top electronic appliances and other equipments on sale</h6>
                <h1 class="text-center" style="font-family: Lucida Bright">Welcome to Equipment Seeker</h1>
            </div>
            <div class="product-menu">
                <ul>
                    <li><a href="products/f.html">Furniture & Outdoors</li>
                    <li><a href="products/c.html">Computer & Tablets </li>  
                    <li><a href="products/p.html">Phones & Accesories</li>
                    <li><a href="products/k.html">Kitchen & Appliances</li>
                    <li><a href="products/v.html">Vehicles & Travels</li>

                </ul>

            </div>
            <div class="padding-20"></div>
            <div class="row text-center">
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="img/products/fur-1.jpg" alt="fur1">
                        <div class="caption">
                            <h3>Alex's Furniture</h3>
                            <p>$88</p>
                            <p class="offer">10% off</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="img/products/fur-2.jpg" alt="fur2">
                        <div class="caption">
                            <h3>King Size Bed</h3>
                            <p>$250</p>
                            <p class="offer">10% off</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="img/products/fur-3.jpg" alt="fur3">
                        <div class="caption">
                            <h3>Sofa</h3>
                            <p>$250</p>
                            <p class="offer">5% off</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="img/products/fur-4.jpg" alt="fur-4">
                        <div class="caption">
                            <h3>Small Cupboard</h3>
                            <p style="margin-bottom: 50px;">$40</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="img/products/chair-1.jpg" alt="chair1">
                        <div class="caption">
                            <h3>Two chair</h3>
                            <p>$100</p>
                            <p class="offer">5% off</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="img/products/chair-2.jpg" alt="chair2">
                        <div class="caption">
                            <h3>Warm Chair</h3>
                            <p style="margin-bottom: 45px;">$50</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="img/products/chair-3.jpg" alt="chair3">
                        <div class="caption">
                            <h3>Small Chair</h3>
                            <p>$150</p>
                            <p class="offer">10% off</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="img/products/table-1.jpg" alt="table1">
                        <div class="caption">
                            <h3>For Two Table</h3>
                            <p>$400</p>
                            <p class="offer">5% off</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="img/products/table-2.jpg" alt="table-2">
                        <div class="caption">
                            <h3>Small Table</h3>
                            <p>$350</p>
                            <p class="offer">15% off</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="img/products/table-3.jpg" alt="table-3">
                        <div class="caption">
                            <h3>office Table</h3>
                            <p>$220</p>
                            <p class="offer">10% off</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="img/products/wine-1.jpg" alt="wine-1">
                        <div class="caption">
                            <h3>For Garden</h3>
                            <p>$550</p>
                            <p class="offer">5% off</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="img/products/wine-2.jpg" alt="wine-2">
                        <div class="caption">
                            <h3>Dog Barrel</h3>
                            <p>$400</p>
                            <p class="offer">10% off</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="img/products/wine-3.jpg" alt="wine-3">
                        <div class="caption">
                            <h3>Garden barrel</h3>
                            <p style="margin-bottom: 50px;">$450</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="img/products/carpet-1.jpg" alt="carpet-1">
                        <div class="caption">
                            <h3>Aldain Carpet</h3>
                            <p>$360</p>
                            <p class="offer">5% off</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="img/products/carpet-2.jpg" alt="carpet-2">
                        <div class="caption">
                            <h3>Light Carpet</h3>
                            <p>$200</p>
                            <p class="offer">10% off</p>
                        </div>
                    </div>
                </div>

                

            </div>
            <div class="padding-20"></div>
        </div>
    </main>
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