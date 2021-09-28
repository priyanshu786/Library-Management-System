<?php
	include "connection.php";
	include "navbar.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Books</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<style type="text/css">
		.search
		{
			padding-left: 1050px; 
		}
		body 
		{
  			font-family: "Lato", sans-serif;
  			background-color : #024629;
  			transition: background-color: .5s;
		}
		.sidenav 
		{
		  height: 100%;
		  width: 0;
		  margin-top: 50px;
		  position: fixed;
		  z-index: 1;
		  top: 0;
		  left: 0;
		  background-color: #222;
		  overflow-x: hidden;
		  transition: 0.5s;
		  padding-top: 60px;
		}

		.sidenav a 
		{
			padding: 8px 8px 8px 32px;
			text-decoration: none;
			font-size: 25px;
			color: #818181;
			display: block;
			transition: 0.3s;
		}

		.sidenav a:hover
		{
			color: #f1f1f1;
		}

		.sidenav .closebtn 
		{
			position: absolute;
			top: 0;
			right: 25px;
			font-size: 36px;
			margin-left: 50px;
		}

		#main 
		{
			transition: margin-left .5s;
			padding: 16px;
		}

		@media screen and (max-height: 450px) 
		{
			.sidenav {padding-top: 15px;}
			.sidenav a {font-size: 18px;}
		}
		.h:hover
		{
			color: white;
			width: 300px;
			height: 50px;
			background-color: #419ab9;
		}
		.book
		{
			width: 400px;
			margin: 0px auto;
		}
		.form-control
		{
			background-color: black;
			color: white;
		}
	</style>
</head>
<body>
	<!-------------------------sidenav-------------------------------------------------------------------------------------------->
	
	<div id="mySidenav" class="sidenav">
 	<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <div style = "color:white; margin-left: 60px; font-size: 30px; font-family: times;">
		<?php
		if(isset($_SESSION['login_user']))
		{
			echo "<img class='img-circle profile_img' height = 150px; width = 150px; src='Images/".$_SESSION['pic']."'>";
			echo "</br>";		
			echo "Welcome ".$_SESSION['login_user'];
		}
		?>
		<br><br>
	</div>
	<div class="h">  <a href="add.php" style="font-family: times;">Add Books</a></div>
	<div class="h">  <a href="delete.php" style="font-family: times;">Delete Books</a></div>
	<div class="h">  <a href="#" style="font-family: times;">Book Request</a></div>
	<div class="h">  <a href="#" style="font-family: times;">Issue Information</a></div>
	</div>

	<div id="main">
	  <span style="font-size:30px;cursor:pointer; color:white;" onclick="openNav()">&#9776; Info</span>
	</div>
	<div class="container" style = "text-align: center;">
		<h2 style="color:white; font-family: times; text-align: center; margin-top: -30px"><b>Add New Books</b></h2>
		<form class="book" action="" method="POST">
			<input type="text" name="bid" class="form-control" placeholder="Book ID" required=""><br>
			<input type="text" name="name" class="form-control" placeholder="Book Name" required=""><br>
			<input type="text" name="author" class="form-control" placeholder="Author Name" required=""><br>
			<input type="text" name="edition" class="form-control" placeholder="Edition" required=""><br>
			<input type="text" name="status" class="form-control" placeholder="Status" required=""><br>
			<input type="text" name="quantity" class="form-control" placeholder="Quantity" required=""><br>
			<input type="text" name="department" class="form-control" placeholder="Department" required=""><br>
			<input type="text" name="price" class="form-control" placeholder="Price" required=""><br>
			<input type="text" name="pages" class="form-control" placeholder="Pages" required=""><br>
			<button class = "btn btn-default" type="submit" name="submit"><b>ADD</b></button>
		</form>
	</div>
	<?php
		if(isset($_POST['submit']))
		{
			if(isset($_SESSION['login_user']))
			{
				mysqli_query($db,"INSERT INTO books VALUES ('$_POST[bid]','$_POST[name]','$_POST[author]','$_POST[edition]',
					'$_POST[status]','$_POST[quantity]','$_POST[department]','$_POST[price]','$_POST[pages]');");
				?>
					<script type="text/javascript">
						alert("Book Added Successfully !!!");
					</script>
				<?php
			}
			else
			{
				?>
					<script type="text/javascript">
						alert("You are not Logged In");
					</script>
				<?php
			}
		}
	?>
	<script>
	function openNav() 
	{
	  document.getElementById("mySidenav").style.width = "275px";
	  document.getElementById("main").style.marginLeft = "275px";
	  document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
	}

	function closeNav() 
	{
	  document.getElementById("mySidenav").style.width = "0";
	  document.getElementById("main").style.marginLeft= "0";
	  document.body.style.backgroundColor = "#024629";
	}
</script>
</body>
