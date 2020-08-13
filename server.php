<?php
$username = "";
$email = "";
$errors = array();

$con = mysqli_connect('localhost', 'root', '', 'budget');

// if the sign up button is clicked

if (isset($_POST['submit'])) {
	$username = mysql_real_escape_string($_POST['name']);
	$email = mysql_real_escape_string($_POST['email']);
	$phone = ($_POST['phone']);
	$password = ($_POST['password']);

	// ensure that form fields are filled properly

	if (empty($username)) {
		array_push($errors, "Username is required");
	}
	if (empty($email)) {
		array_push($errors, "Email is required");
	}
	if (empty($password)) {
		array_push($errors, "Password is required");
	}
	// if  ($password_1 != $password_2){
	// 	array_push($errors,"The two passwords do not match");
	// }

	// if there are no errors , save users to fbsql_database

	if ($result > 0) {
		echo "This email  associated with another account";
	} else {
		$password = md5($password);
		$sql = "INSERT INTO users_table (FullName,Email,MobileNum,Password) VALUES ('$username','$email','$phone','$password')";

		if ($sql) {
			echo "You have successfully registered";
		} else {
			echo "Something Went Wrong. Please try again";
		}
	}
}

?>