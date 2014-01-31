<?php
//addcarpool.php -- adds a new news story to the climbing_news database

 
$mysqli = new mysqli('localhost', 'climbing_admin', 'goclimb512', 'climbing_news');
 
if($mysqli->connect_errno) {
	printf("Connection Failed: %s\n", $mysqli->connect_error);
	exit;
}

$title = $_POST['title'];
$content = $_POST['content'];
$datevalue = date("m/d/Y");


 
$stmt = $mysqli->prepare("insert into news (title, content, date) values (?,?,?)");
if(!$stmt){
	printf("Query Prep Failed: %s\n", $mysqli->error);
	exit;
}
 
$stmt->bind_param('sss', $title, $content, $datevalue );
 
$stmt->execute();
 
$stmt->close();

header("Location: admin.php");
 
?>