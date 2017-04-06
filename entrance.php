<?session_start();
	if(isset($_POST["done"])){
		$user = trim(htmlspecialchars($_POST["name"]));
		$pass = md5(trim(htmlspecialchars($_POST["pass"])));
		$_SESSION["name"] = $user;
		$error_login = "";
		$error_pass = "";
		$error = false;

		$login = $_SESSION["name"];

		if($user == ""){
			$error_login = "Введите email";
			$error = true;
		}
		if($pass == ""){
			$error_pass = "Введите пароль";
			$error = true;
		}

		if(!$error){
			include_once "bd.php";
			$success = $sqli->query("SELECT `email`, `password` FROM `users` WHERE `email` = '$user' AND `password` = '$pass'" );
			if(!$success){
				echo $sqli->errno . " " . $sqli->error;
			}
			else {
				$arr = $success->fetch_assoc();
				if($arr["email"] != $user) $error_pass = "Неверный email или пароль";
				else if($arr["password"] != $pass) $error_pass = "Неверный пароль";
				else {
					$_SESSION["check"] = true;
					echo "<meta http-equiv='refresh' content='0;PersonalAccount.php'>";

					//echo '<meta http-equiv="refresh" content="0;URL=PersonalAccount.php">';
				}  // 12345678
			}
		}
	}
	//session_destroy();
?>