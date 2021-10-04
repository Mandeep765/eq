<?php 
session_start();

	include_once("connection.php");
	include_once("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
      	$email = $_POST['email'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name) && !empty($email))
		{

			//save to database
			$user_id = random_num(20);
			$query = "INSERT INTO `useraccount`(`name`, `email`, `password`) VALUES ('$user_name','$email','$password')";
			if(mysqli_query($link, $query)){
				header("Location: login.php");
				die;
            }else{
              echo mysqli_error($link);
            }
          	
			
		}else
		{
			$alert = "Please enter some valid information!";
		}
	}
?>



<!DOCTYPE html>

<html>

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>Sign Up</title>

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
                    <a href="index.html" class="navbar-brand">EQUIPMENT SEEKER</a>
                </div>

                <div class="collapse navbar-collapse" id="mynavbar">

                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="login.php">Login</a></li>
                    </ul>
                    <form class="form-inline form-search">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-primary" type="submit">Search</button>
                        </form>
                </div>
            </div>
        </nav>
    </header>
    <main class="banner-image-login">
        <div class="container">
            <div class="row row_style">

                <div class="col-xs-5 col-lg-offset-2">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h2>SIGNUP</h2>
                        </div>
                        <div class="panel-body">
                            <p class="text-warning">signup to equipment seeker</p>
                          	<p class="" style="color: red"><?= $alert??'' ?><p> 
                            <form method="POST">
                                <div class="form-group">
                                    <input type="text" placeholder="Name" class="form-control" name="user_name">
                                </div>
                                <div class="form-group"> 
                                  <input type="email" placeholder="E-mail" class="form-control" name="email">
                                </div>
                                <div class="form-group">
                                    <input type="password" placeholder="Password" class="form-control" name="password">
                                </div>
                                <button class="btn btn-primary">SIGNUP</button>
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