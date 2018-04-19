<?php
	$con=mysqli_connect("localhost","root","") or die(mysql_error());				
	$db=mysqli_select_db($con,'my_db') or die(mysql_error());
	if(isset($_POST['submit']))	
	{
		
		$item=$_POST['item'];
		$location=$_POST['location'];
		$color=$_POST['color'];
		$date=$_POST['date'];
		
		
		$query = "select * from found where item='$item' and location='$location' and color='$color' and date='$date' ";
		$query_run = mysqli_query($con,$query);
		if($query_run)
		{
			if(mysqli_num_rows($query_run)>0)
			{
				$row = mysqli_fetch_array($query_run,MYSQLI_ASSOC);
					
				$_SESSION['item'] = $item;
				$_SESSION['location'] = $location;
				$_SESSION['color']= $color;
				$_SESSION['date']= $date;
					
				header( "Location: index.php");
			}
			else
			{
				$query="insert into lost(item,location,color,date) values('$item','$location','$color','$date') ";
				$query_run = mysqli_query($con,$query);
				echo '<script type="text/javascript">alert("Sorry No matching item Found , but the information is stored with us. Will let you know if somebody finds it.")</script>';
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
	      <li class="nav-item">
	        <a class="nav-link" href="index.php">Home</a>
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

<div class="container">
		<div class="row">
			
			<div class="col-sm-6 col-md-3">
			</div>
			<div class="col-sm-6 col-md-6">

					<form class="form-container" method="post" action="found.php">
						<h4>Don't worry, you will find it.</h4>
						<br>
						<div class="form-group">
						    <label>Item</label>
						    <input type="text" name="item" required class="form-control"   placeholder="Enter the item lost">
						    <small id="itemHelp" class="form-text text-muted">Ex: Phone, wallet, earphone, laptop</small>
						 </div>
						<div class="form-group">
							<label>Location</label>
							<input type="text" name="location" required class="form-control"   placeholder="Enter the location of the lost item">
						    <small id="locationHelp" class="form-text text-muted">Ex: UB, TechPark, Java</small>
						</div>


						<div class="form-group">
							<label>Color</label>
							<input type="text" name="color" required class="form-control"   placeholder="Enter the color of the lost item">
						</div>

						<div class="form-group">
							<label>Date:&emsp;</label>
							
							<input id="datepicker" name="date" type="text" size="8">
						</div>

						 <button type="submit" value="submit" name="submit" class="btn btn-success btn-block">Submit</button>
						 
					</form>
				</div>
							<div class="col-sm-6 col-md-3">
			</div>
		</div>
	</div>
</body>



		


	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
		<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
		  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
		  <script>
		  $( function() {
		    $( "#datepicker" ).datepicker();
		  } );
		  </script>
</body>
</html>

		
	