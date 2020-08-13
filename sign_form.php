<?php

$con = mysqli_connect("localhost","root","","budget") or die (mysqli_error($con));
session_start();
$email= mysqli_real_escape_string($con,$_POST['email']);
$name= mysqli_real_escape_string($con,$_POST['name']);
$password= $_POST['password'];
$phone= $_POST['phone'];

$user_registration_query = "insert into users_table(FullName,Email,MobileNum,Password) values ( '$name','$email','$phone','$password')";

$user_registration_submit = mysqli_query($con,$user_registration_query)
or die(mysqli_error($con));
echo "User Inserted Successfully";

$_SESSION['email'] = $email;
$_SESSION['id'] = mysqli_insert_id($con);
?>