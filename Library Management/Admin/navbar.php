<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>
		
	</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>
<body>

<nav class = "navbar navbar-inverse">
	<div class = "container-fluid">
		<div class="navbar-header">
			<a class = "navbar-brand active">ONLINE LIBRARY MANAGEMENT SYSTEM</a>
		</div>
		<?php
		if(isset($_SESSION['login_user']))
		{?>
		<nav>
			<ul class = "nav navbar-nav navbar-right">
				<li><a href="profile.php">
						<div style = "color:white; font-size: 30px; font-family: times;">
						<?php
							echo "<img class='img-circle profile_img' height = 40px; width = 40px; src='Images/".$_SESSION['pic']."'>";
							echo " ".$_SESSION['login_user'];
						?>
					</div>
				</a></li>
				<li><a href="index.php">HOME</a></li>
				<li><a href="books.php">BOOKS</a></li>
				<li><a href="student.php">STUDENT INFORMATION</a></li>
				<li><a href="profile.php">PROFILE</a></li>
				<li><a href="logout.php"><span class="glyphicon glyphicon-log-out"> LOGOUT</span></a></li>
				<li><a href="feedback.php">FEEDBACK</a></li>
			</ul>
		</nav>
		<?php
		}
		else
		{?>
		<nav>
			<ul class = "nav navbar-nav navbar-right">
				<li><a href="index.php">HOME</a></li>
				<li><a href="books.php">BOOKS</a></li>
				<li><a href="admin_login.php"><span class="glyphicon glyphicon-log-in"> LOGIN</span></a></li>
				<li><a href="registration.php"><span class="glyphicon glyphicon-user"> REGISTRATION</a></li>
				<li><a href="feedback.php">FEEDBACK</a></li>
			</ul>
		</nav>
		<?php
		}
		?>
	</div>
</nav>

</body>
</html>