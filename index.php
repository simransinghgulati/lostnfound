<?php
	$con=mysqli_connect("localhost","root","") or die(mysql_error());				
	$db=mysqli_select_db($con,'my_db') or die(mysql_error());

	if(isset($_POST['button']))
	{
		$username=$_POST['username'];
		$password=$_POST['password'];
		$query = "select * from registration where username='$username' and password='$password' ";
		$query_run = mysqli_query($con,$query);
		if($query_run)
		{
			if(mysqli_num_rows($query_run)>0)
			{
				$row = mysqli_fetch_array($query_run,MYSQLI_ASSOC);
					
				$_SESSION['username'] = $username;
				$_SESSION['password'] = $password;
					
				header( "Location: found.php");
			}
			else
			{
				echo '<script type="text/javascript">alert("No such User exists. Invalid Credentials")</script>';
			}
		}
		else
		{
			echo '<script type="text/javascript">alert("Database Error")</script>';
		}
	}
	?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Lost & Found</title>
	<!-- responsiveness -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- cdn -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<!-- css -->
	<link rel="stylesheet" type="text/css" href="main.css">
	<!-- fonts -->
	<link rel="stylesheet" type="text/css" href="animate.css">
	<!--favicon -->
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>

</head>
<body>

	<!-- navbar -->
	<nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark">
	  <a class="navbar-brand" href="index.php">
	    <img src="images/logo.png" alt="Octopus with magnifying glass">
	  </a>
	  <!-- toggle button for small screens -->
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>

	  <div class="collapse navbar-collapse" id="navbarSupportedContent">
	    <ul class="navbar-nav mr-auto">
	      <li class="nav-item active">
	        <a class="nav-link" href="index.php">Home<span class="sr-only">(current)</span></a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="index.php#about">About</a>
	      </li>
	      <li class="nav-item dropdown">
	        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	          Report Item
	        </a>
	        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
	          <a class="dropdown-item" href="lost.php">Lost Something</a>
	          <a class="dropdown-item" href="index.php#report">Found Something</a>
	        </div>
	      </li>
	    </ul>
	    
	    <form class="form-inline my-2 my-lg-0">
	      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
	      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
	    </form>
	  </div>
	</nav>
		
	<!-- center align -->
	<div class="container">
		<br>
		<!-- carousel -->
		<div id="carouselExampleIndicators" class="carousel slide animated slideInUp" data-ride="carousel">

			<ol class="carousel-indicators">
				<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
			</ol>

			<div class="carousel-inner">
				<div class="carousel-item active">
				  <img class="d-block w-100" src="images/1.jpg" alt="First slide">
				</div>
				<div class="carousel-item">
				  <img class="d-block w-100" src="images/2.jpg" alt="Second slide">
				</div>
				<div class="carousel-item">
				  <img class="d-block w-100" src="images/3.jpg" alt="Third slide">
				</div>
			</div>

			<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>

			<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>

		</div> <!-- carousel -->

		<hr>
		<div id="about">
			<center>
			<div class="row">
			  <div class="col-sm-6 col-md-4">
			    <div class="thumbnail animated slideInUp">
			      <img src="images/bag.png" alt="school bag">
			      <div class="caption">
			        <h3>W H A T</h3>
			        <p>The website - Lost and Found,  aims at reuniting an owner with his or her lost item. A person who loses a product can easily put up the description of it on the website, and another person who happens to find the product, can update the information on the website, thus helping the owner lay his or her hands back on what was always there.</p>
			      </div>
			    </div>
			  </div>

			  <div class="col-sm-6 col-md-4">
			    <div class="thumbnail animated slideInUp">
			      <img src="images/student.png" alt="teacher">
			      <div class="caption">
			        <h3>W H O</h3>
			        <p>With advancements in technology, it has become important to let computers work for us at all stages of life. Rather than physically queuing up at the police station, the website will aid an individual to let the world know about his lost belongings from just a tap on his phone, which if found by somebody, can be retraced easily.</p>
			      </div>
			    </div>
			  </div>

			  <div class="col-sm-6 col-md-4">
			    <div class="thumbnail animated slideInUp">
			      <img src="images/gadgets.png" alt="...">
			      <div class="caption">
			        <h3>H O W</h3>
			        <p>The one who has lost an item will the website and share the description of the product. In return, a person who happens to find the product, will update the database of the website about the location and the details of the product, which will then be notified to the original owner, and can then be traced back to the rightful hands.</p>
			      </div>
			    </div>
			  </div>
			</div>
			</center>
		</div>

		<hr>

		<div id="report">
			<h2 class="animated bounce">Found something?</h2>
			<div class="row">
				<div class="col-sm-6 col-md-2">
				</div>
				<div class="col-sm-6 col-md-4">	
					<form class="form-container" method="post">
					  <div class="form-group">
					    <label for="exampleInputEmail1">Username</label>
					    <input type="text"  required name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter username">
					  </div>
					  <div class="form-group">
					    <label for="exampleInputPassword1">Password</label>
					    <input type="password" required name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
					  </div>
					  <button type="submit" name="button" class="btn btn-success" style="width: 100px;">Login</button>
					  <button class="btn btn-primary" style="width: 100px;"><a style="text-decoration: none; color: white" href="register.php">Signup</a></button>
					</form>
				</div>
				<div class="col-sm-6 col-md-4">	
					<div>
						<p>Its good karma to help somebody get back what belonged to him/her. If you wish to contribute by being a part of this noble deed, continue to login below and help a person get back what's meant to be in his/her hands. Dont worry, it is a simple and wont take much of your time.</p>
					</div>
				</div>
				<div class="col-sm-6 col-md-2">
				</div>
			</div> 
		</div>
	</div> <!-- conatiner -->

	<nav class="navbar bottom navbar-expand-lg navbar-dark bg-dark">
		<div class="navbar-brand">
		<small>
			  <span>Designed by </span><a href="https://simransinghgulati.github.io">Simran Singh Gulati</a>
		</small>
		</div>
	</nav>

		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

	</body>
</html>
