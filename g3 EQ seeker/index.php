<?php session_start(); ?>
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
                  	<?php if(isset($_SESSION['user_id'])){ ?>
                  	<ul class="nav navbar-nav navbar-right">
                        <li><a href="logout.php">Log Out</a></li>
                    </ul>
                  	<?php }else{ ?>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="signup.php">signup</a></li>
                    </ul>
                  <?php } ?>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="products.php">Products</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="feedback.php">Feedback</a></li>
                    </ul>
                  <ul class="nav navbar-nav navbar-right">
                        <li><a href="admin.php">Admin</a></li>
                    </ul>
                    <?php include_once('./includes/searchForm.php') ?>
                </div>
              <style>
.parallax {
  /* The image used */
  background-image: url("img_parallax.jpg");

  /* Set a specific height */
  min-height: 50px;

  /* Create the parallax scrolling effect */
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
</style>

<!-- Container element -->
<div class="parallax"></div>
            </div>
        </nav>
    </header>
    <main>
        <section class="banner-image">
            <div class="container">
                <div class="banner-content">
                    <h1 style="font-family: Lucida Bright">EQUIPMENT SEEKER</h1>
<p style="font-family:courier">Come have look at our Equipments.</p>
                    <p style="font-family:courier"> Our online store includes all the equipments you need including all the stuffs from
                    kitchen appliances, furnitures, vehicles and many more.</p>
                    <p style="font-family:courier"> Our products are available in different price ranges.</p>
                    <a href="login.php" class="btn btn-color btn-lg">Login</a>
                </div>
            </div>
        </section>
        <section>
            <div class="container">
                <div class="padding-20"></div>
                <div class="row">
                    <div class="col-xs-4 text-center">
                        <div class="thumbnail">
                            <a href="products/f.html"><img src="img/products/fur-1.jpg" alt="fur-1"></a>
                            <div class="caption">
                                <h2>Furnitures</h2>
                                <p>Starting from $88</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-4 text-center">
                        <div class="thumbnail">
                            <a href="products/c.html"><img src="img/products/laptop-1483974_1920.jpg" alt="aptop-1483974_1920.jpg"></a>
                            <div class="caption">
                                <h2>Computer and Tablets</h2>
                                <p>Starting from $250</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-4 text-center">
                        <div class="thumbnail">
                            <a href="products/k.html"><img src="img/products/kitchen-3564506_1920.jpg" alt="kitchen-3564506_1920.jpg"></a>
                            <div class="caption">
                                <h2>Kitchen Appliances</h2>
                                <p>Starting from $100</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="padding-20"></div>
            </div>
        </section>
    </main>

      <!-- Site footer -->
      <footer class="site-footer">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-md-6">
              <h6>About</h6>
              <p class="text-justify">Equipmentseeker.com <i>E-commerce website </i> is an online store where you can find all the equipments such as electronics appliances, vehicles, furnitures,etc on reasonable price.</p>
            </div>
            
              </ul>
            </div>
  
            <div class="col-xs-6 col-md-3">
              <h6>Quick Links</h6>
              <ul class="footer-links">
                <li><a href="Terms1.html">Terms and conditions</a></li>
                <li><a href="contact1.html">Contact Us</a></li>
                <li><a href="about.us1.html">About us</a></li>
                <li><a href="policy1.html">Privacy Policy</a></li>
            
              </ul>
            </div>
          </div>
          <hr>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-md-8 col-sm-6 col-xs-12">
              <p class="copyright-text">Copyright &copy; 2021 All Rights Reserved by 
           <a href="#">Equipment seeker</a>.
              </p>
            </div>
  
            
  </footer>
    
</body>

</html>