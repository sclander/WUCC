<?php 

require 'database.php';

$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$username=$_POST['username'];
$password=$_POST['password'];
$password2=$_POST['password2'];

if($password != $password2){
	die("Passwords do not match");
}

$crypted_password=crypt($password);

$stmt = $mysqli-> prepare("SELECT username FROM users ");
if(!$stmt){
	printf("Query Prep Failed: %s\n", $mysqli->error);
	exit;
}

$stmt->execute();

$stmt->bind_result($existing_username);

while($stmt->fetch()){
	if($username == $existing_username){
		die('Username already exists');
	}
}

$stmt -> close();

$stmt = $mysqli->prepare("INSERT into users (name, email, phone, username, password) values (?, ?, ?, ?, ?)");
if(!$stmt){
	printf("Query Prep Failed: %s\n", $mysqli->error);
	exit;
}

$stmt->bind_param('sssss', $name, $email, $phone, $username, $crypted_password);

$stmt->execute();

$stmt->close();

header('Location:http://climbing.wustl.edu');

?>