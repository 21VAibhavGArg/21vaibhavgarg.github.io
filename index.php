<!DOCTYPE html>
<html>
<head>
	<title>Did you survive Thanos?</title>
</head>
<body>

<?php
if(!isset($_COOKIE['thanosNumber'])) {
	echo "<script> location.href='new.php'; </script>";
	exit;
}else{
	echo "<script> location.href='user.php'; </script>";
	exit;
}

?>
</body>
</html>