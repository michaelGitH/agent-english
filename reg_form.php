<?php include_once "access_reg_form.php";?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<!-- <meta name="description" content="Для поисковика"/> -->
<!-- <meta name="keywords" content="Ключевые слова для поисковика"  /> -->
<!-- <meta name="author" content="Автор" /> -->
<meta name="viewport" content="width=device-width"/>
<link rel="stylesheet" href="style.css"  type='text/css'/>
<script src="js/jquery-3.2.0.min.js"></script>
<script src="js/script.js"></script>
<title>agent-english</title>
</head>
<body>
	<form class="regist_form" method="post" action="" name="regist_form">
		<p>
			<label for="lastname" id="reg_label_ln">Фамилия:</label>
			<input type="text" name="lastname" id="lastname" value="<?=$_SESSION['last']?>"/>
			<span class="error_span"></span>
		</p>
		<p>
			<label for="firstname" ><span class="red_star">* </span>Имя:</label>
			<input type="text" name="firstname" id="firstname" value="<?=$_SESSION['name']?>"/>
			<span class="error_span" ><?=$error_name?></span>
		</p>
		<p>
			<label for="email" ><span class="red_star">* </span>Email:</label>
			<input type="email" name="email" id="email" value="<?=$_SESSION['email']?>"/>
			<span class="error_span" ><?=$error_email?></span>
		</p>
		<p>
			<label for="password" ><span class="red_star">* </span>Пароль:</label>
			<input type="password" name="password" id="password" value="<?=$_SESSION['pass']?>" />
			<span class="error_span" ><?=$error_pass?></span>
		</p>
		<p>
			<label for="repassword" ><span class="red_star">* </span>Подтверждение:</label>
			<input type="password" name="repassword" id="repassword" />
			<span class="error_span" ><?=$error_repass?></span>
		</p>
		<input type="submit" name="done" id="regist_submit"/ value="Стать агентом">

	</form>
	<div class = "redir"><h3>Регистрация успешно выполнена<br/><br/>
		<a href="index.php"><input type="button" value="Перейти на страницу входа"/></a>
	</h3></div>
</body>

</html>