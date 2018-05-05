<!DOCTYPE html>
<html>
<head>
	<title>Welcome</title>
</head>
<body>
<form name='form' method='post' action="send.php">
Name: <input type="text" name="name" id="name" ><br/>
<input type="submit" name="submit" value="Submit">
<?php
if(isset($_COOKIE['thanosNumber'])) {
	echo "<script> location.href='user.php'; </script>";
	exit;
}else{
	
}
?>
</body>
</html>