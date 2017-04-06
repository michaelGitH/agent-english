<?session_start() ;?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<!-- <meta name="description" content="Для поисковика"/> -->
<!-- <meta name="keywords" content="Ключевые слова для поисковика"  /> -->
<!-- <meta name="author" content="Автор" /> -->
<meta name="viewport" content="width=device-width"/>
<link rel="stylesheet" href="style.css"  type='text/css'/>
<script src="js/jquery-3.2.0.js"></script>
<script type="text/javascript" src="js/jquery.mousewheel.min.js"></script>
<!-- <script src="js/behavior.js"></script> -->
<script src="js/script.js"></script>
<title>agent-english</title>
</head>
<body>
	<div class="wrapper">
		<div class="maincontainer">
			<a id='flag_0' name="first_page"></a> 
			<?include_once("landing/first.php");?>
			<a id='flag_1' name='second_page'></a>
			<?include_once("landing/second.php");?>
			<a id='flag_2' name="third_page"></a>
			<?include_once("landing/third.php");?>
			<?include_once("landing/fourth.php");?>
		</div>
	</div>
</body>
</html>
