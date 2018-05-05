<?php
if ( ! empty($_POST['name'])){
	$name = $_POST['name'];
	echo "Wait..";
	$thanosNumber=rand(0,100)/100;
	setcookie('thanosNumber',$thanosNumber);
	setcookie('usrnm',$name);
	header("Refresh:0;url=index.php");
}else{
	header("Refresh:0;url=index.php");
}
?>