<?php
 session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>linenotify</title>
</head>
<body>
	<h1>Linenotify</h1>
    <hr>
    <div class="container">
			<form action="sendinfo.php" method="POST">
				<?php  if(isset($_SESSION['success']))	{?>
					<div class="alert alert-success" role="alert">
  						<?php 
  							echo $_SESSION['success'];
  							unset($_SESSION['success'])
  						?>
					</div>
				<?php } ?>
					<?php  if(isset($_SESSION['error']))	{?>
					<div class="alert alert-danger" role="alert">
  						<?php 
  							echo $_SESSION['error'];
  							unset($_SESSION['error'])
  						?>
					</div>
				<?php } ?>

			  	<div class="md-3">
				    <label for="email" class="form-lable">Email address</label>
				    <input type="email" class="form-control"  name="email" aria-describedby="email" placeholder="Enter email" >
			  </div>
			    	<div class="md-3">
				    <label for="name" class="form-lable">Fullname</label>
				    <input type="text" class="form-control"  name="fullname" aria-describedby="fullname" placeholder="Enter your name" >
			  </div>
			  		<button type="submit" name="submit" class="btn btn-primary">Submit</button>
			</form>
	</div>
</body>
</html>