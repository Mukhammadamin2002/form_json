<?php include "functions.php"; ?>


<!DOCTYPE html>
<html>
<head>
	<title>Appending Data to JSON file</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<style type="text/css">
	body {
		background-color: rgb(250, 245, 200);
	}
</style>
<body>

<div class="container justify-content-center" style="width: 500px; margin-top: 150px">
	<h3 class="text-center">Sign In</h3>
	<form method="post">
		<?php 
			if (isset($error)) {
				echo $error; 
			}
		?>
		<label>Name</label><br />
		<input type="text" name="name" class="form-control" />
		<label>Email</label><br />
		<input type="email" name="email" class="form-control" />
		<label>Password</label><br />
		<input type="password" name="password" class="form-control" />
		<input type="submit" name="submit" value="Sign In" class="btn btn-primary mt-4" ><br />
		<?php 
			if (isset($message)) {
				echo $message;
			}
		?>
	</form>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>