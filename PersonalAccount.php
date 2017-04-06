<?session_start();
 if(!isset($_SESSION["check"]) || $_SESSION["check"] != true) {
 	echo '<meta http-equiv="refresh" content="0;URL=index.php">';
 	exit;
 }

if(isset($_POST["exit"])){
	unset($_SESSION["name"]);
	unset($_SESSION["check"]);
	unset($_SESSION["pass"]);
	session_destroy();
	echo "<meta http-equiv='refresh' content='0;index.php'";
}
 include_once "AccountServer.php" ?>
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
<body style="background: #e6e6e6">
	<header>
		<a href="PersonalAccount.php"><h1 >Agent English</h1></a>
		<form method="post">
			<input type="submit"  class="Leve_lk" value="Выйти" name="exit" />
		</form>
		<h1 id="secret_room">Секретный кабинет</h1>
		<div id="Progress">
			<div id="LevelPro" style="width: <?=$ProWidth?>%;"></div>
			<div id="CircPro" ><p><?=$level?></p></div>
			<div class="inform_panel">
				<div class="inform_triangle"></div>
				<div class="inform_rect">
					<h1><?=$name?></h1>
					<ul>
						<li>Знаю слов:</li>
						<li>Изучаю:</li>
						<li>Звание:</li>
						<li>Место:</li>
					</ul>
					<ul>
						<li></li>
						<li></li>
						<li></li>
						<li></li>
					</ul>	
					<div class="alt_img"><p>Фото</p></div>	
					<h2>Награды</h2>			
				</div>
			</div>
		</div>
		<img src="img/bell.png" id="img-bell">
		<div class="lkCircle"></div>
	</header>
	<aside>
		<ul>
			<li><p class="p_lk_list">Задания на каждый день</p></li>
			<li><p>Спец. задания</p></li>
			<li><p>Грамматика</p></li>
			<li><p>Тренировки</p></li>
			<li><p>Материалы</p></li>
			<li><p>Курсы</p></li>
			<li class="aims_lk_list"><p>Моя цель</p></li>
			<li class="aims_lk_list list-1"><p>№ Цели</p></li>
		</ul>
	</aside>
<!-- 	<section>
	<div class="Pro_button b-2"><span>+</span></div>
	<div class="Pro_button b-1"><span>-</span></div>
</section> -->
</body>
</html>