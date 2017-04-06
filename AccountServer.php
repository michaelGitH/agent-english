<?
	include_once "bd.php";

	$login = $_SESSION["name"];

	$success = $sqli->query("SELECT * FROM `users` WHERE `email` = '$login'");

	if(!$success){
		echo $success->errno . " ";// . $success.error;
	}
	else $arr = $success->fetch_assoc();

	$level = $arr["progress"];
	$name = $arr["firstname"];
	

	$ProWidth = $level * 12.5;

	$sqli->close();

?>