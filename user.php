<!DOCTYPE html>
<html>
<head>
	<title>Welcome</title>
</head>
<body>
<?php
if(!isset($_COOKIE['thanosNumber'])) {
	echo "<script> location.href='new.php'; </script>";
	exit;
}else{
	$thanosNumber= $_COOKIE['thanosNumber'];
	$usrnm=$_COOKIE['usrnm'];
	echo "Hello ".$usrnm." ";
	if($thanosNumber<=0.5){
		echo "You survived Thanos";
	}else if ($thanosNumber>0.5){
		echo "You couldn't survive Thanos";
	}
}
?>
</body>
</html>