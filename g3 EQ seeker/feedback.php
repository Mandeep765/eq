<!DOCTYPE html>

<html>

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>Feedback</title>

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
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="login.php">signup</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="products.php">Products</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="feedback.html">Feedback</a></li>
                    </ul>
                    <form class="form-inline form-search">
                        <?php include_once('./includes/searchForm.php') ?>
                </div>
            </div>
        </nav>
    </header>
    <main class="banner-image-login">
        <div class="container">
            <div class="row row_style">

                <div class="col-xs-5 col-lg-offset-4">
                    <div class="panel panel-success">
                        <div class="panel-heading">
                            <h2>Feedback</h2>
                        </div>
                        <div class="panel-body">
                            <form>
                                <div class="form-group">
                                    <input type="text" placeholder="Name" class="form-control" name="name">
                                </div>
                                <div class="form-group">
                                    <input type="text" placeholder="E-mail" class="form-control" name="E-mail">
                                </div>
                                <div class="form-group">
                                    <input type="number" placeholder="phone" class="form-control" name="phone">
                                </div>
                                <div class="form-group">
                                     <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Ask your queries?"></textarea>
                                </div>
                                <button type="submit" class="btn btn-danger">SEND</button>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
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