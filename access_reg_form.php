<?php session_start();
if(isset($_POST["done"])){
	$name = trim(htmlspecialchars($_POST["firstname"]));
	$last = trim(htmlspecialchars($_POST["lastname"]));
	$email = trim(htmlspecialchars($_POST["email"]));
	$pass = trim(htmlspecialchars($_POST["password"]));
	$repass = trim(htmlspecialchars($_POST["repassword"]));
	//echo $last . " " . $name . " " . $email . " " . $pass . " " . $repass;
	$_SESSION["name"] = $name;
	$_SESSION["last"] = $last;
	$_SESSION["email"] = $email;
	$error = false;
	$error_name = "";
	$error_email = "";
	$error_pass = "";
	$error_repass = "";
	if($name == ""){
		$error_name = "Введите имя";
		$error = true;
	}
	if($email == ""){
		$error_email = "Введите email";
		$error = true;
	}
	if(strlen(trim($pass)) < 8){
		$error_pass = "Введите пароль (не менее 8 символов)";
		$error = true;
		$_SESSION["pass"] = "";
	}
	if($repass != $pass){
		$error_repass = "Пароли не совпадают";
		$error = true;
		$_SESSION["pass"] = "";
	}
	if(!$error){
		include_once "bd.php";
		$success = $sqli->query("INSERT INTO `users` (`id`, `email`, `password`, `reg_date`, `firstname`, `lastname`, `progress`)
			 VALUES (NULL, '".$email."', MD5('".$pass."'), '".time()."', '".$name."', '".$last."', '0')");
		if($success){ 
			echo "<style type='text/css'> .redir{display:block !important;} </style>";
			//header ("Location: index.php");
		} 
		else{
			if($sqli->errno == 1062){
				$error_email = "Пользователь с таким email уже существует";
			}
			else { echo "<b style='color:red'>Сервер временно не доступен. Попробуйте позже.</b>";
				echo $sqli->errno . " " . $sqli->error;
			}
		}
		$sqli->close(); //12345678
	}
	session_destroy();
}
?>