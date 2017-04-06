<?php session_start();

	//print_r($_POST);

	sleep(1);

	$user = trim(htmlspecialchars($_POST["email"]));
	$pass = trim(htmlspecialchars($_POST["pass"]));
	$nof = $_POST["nof"];
	$_SESSION["email"] = $user;
	$error = false;

	//$login = $_SESSION["email"];

	if($user == ""){
		echo "Введите email" . $nof;
		$error = true;
	}
	elseif($pass == ""){
		echo "Введите пароль" . $nof;
		$error = true;
	}

	if(!$error){
		include_once "../bd.php";
		$_SESSION["pass"] = $pass;
		$pass = md5($pass);
		$success = $sqli->query("SELECT `email`, `password` FROM `users` WHERE `email` = '$user'" );
		if(!$success){
			echo $sqli->errno . " " . $sqli->error;
		}

		else {
			$arr = $success->fetch_assoc();
			$numb = $success->num_rows;
			if($numb == 0){
				echo '2';
				exit;
			}
			else if($arr["password"] != $pass) echo "Неверный пароль" . $nof;
			else {
				$_SESSION["check"] = true;
				echo '1';
				//echo '<meta http-equiv="refresh" content="0; url=PersonalAccount.php">';
			}  // 12345678
		}
	}
 ?>