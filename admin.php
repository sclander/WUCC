<head>
</head>
<body>
<?php

if (($_POST['username'] == 'wuclimbing') and ($_POST['password'] == 'goclimb512')){
echo' 
<form action="addnews.php" method="post" name="News Form">
 

</br>Event Title:<br/>
<input type="text" name="title" rows=35>


<br />Content:<br />
<textarea name="content" cols=35 rows=4>Type any extra info here</textarea>

<input type="hidden" name="username" value="climbing">
<input type="hidden" name="password" value="goclimb512">
<input type="hidden" name="submitcheck" value="true">
<input type="submit" value="Add News">
</form> 
	';}
?>

			
	
<?php echo "Please login"; ?>
<form action="admin.php" method="post" name="login">
username:
<input type="text" name="username">
<br />
password:
<input type="password" name="password">
<input type="submit" value="Submit">
</form>

 
</body>