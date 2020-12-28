<?php
$message = '';
$error = '';
if(isset($_POST["submit"])) {
	if (empty($_POST["name"])) {
		$error = "<label class='text-danger'>Enter Name</label>";
	}
	else if (empty($_POST["email"])) {
		$error = "<label class='text-danger'>Enter Email</label>";
	}
	else if (empty($_POST["password"])) {
		$error = "<label class='text-danger'>Enter Password</label>";
	} else {
		if(file_exists('db.json')) {
			$current_data = file_get_contents('db.json');
			$array_data = json_decode($current_data, true);
			$extra = array (
				'name'     => $_POST['name'],
				'email'    => $_POST["email"],
				'password' => $_POST["password"]
			);

			$array_data = $extra;
			$final_data = json_encode($array_data, JSON_PRETTY_PRINT);
			if (file_put_contents('db.json', $final_data )) {
				$message = "<label class='text-success'>File Appanded Successfully</label>";
			}
 
		} else {
			$error = 'JSON filenot exist';
		}
	}
}