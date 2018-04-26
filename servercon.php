<?php
session_start();

$username="";
$email="";
$errors=array();

$db = mysqli_connect('localhost', 'root', '', 'students');

if (isset($_POST['sign_up_user'])){
	$username = mysqli_real_escape_string($db, $_POST['username']);
	$fullname = mysqli_real_escape_string($db, $_POST['fullname']);
	$password = mysqli_real_escape_string($db, $_POST['password']);
	$confirmedpassword =  mysqli_real_escape_string($db, $_POST['confirmedpassword']);
	$email =  mysqli_real_escape_string($db, $_POST['email']);


if (empty($fullname)) { array_push($errors, "Full Name is required"); }
if (empty($username)) { array_push($errors, "Username is required"); }
if (empty($password)) { array_push($errors, "Password is required"); }
if($password != $confirmedpassword){
	array_push($errors, "Passwords do not match");
if (empty($email)) { array_push($errors, "Email is required"); }

}

$user_check_query = "SELECT * FROM users WHERE username='$username' OR email ='$email'"
//$result = mysqli_query($db, $user_check_query);
//$user = mysqli_fetch_assoc($result);

if ($user){
	if ($user['username'] === $username){
		array_push($errors, "Username already exists");
	}

	if($user['email'] === $email){
		array_push($errors, "email already exists");
	}
}

if (count($errors) == 0){
	$password = md5($password_1)

}
}