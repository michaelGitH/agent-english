<? include_once "entrance.php" ?>
<div class='header'>
	<a class='logo' href='index.php'><h1>Agent English</h1></a>
	<a class='button_input_top_in' href=''><p>ВХОД</p></a>
	<a class='button_input_top_reg' href='reg_form.php'><p>РЕГИСТРАЦИЯ</p></a>
</div>
<div class="section">
	<span><?=$text?></span>
	<!-- <img class="secret_agent_img" src="img/agent.png" /> -->
	<img class="AgentFace" src="img/AgentFace.png" width="52" height="43">
	<div class="selection_message">
		<h1>Agent English. Изучай язык быстро и увлекательно!</h1>
		<h2>Один из самых эффективных способов изучить Английский язык.</h2>
		<div class="PageList">
			<ul>
				<li><h2>Интересно</h2><p>Изучай Английский язык по специальным заданиям, соревнуйся с друзьями.</p></li>
				<li><h2>Индивидуально</h2><p>Задай себе цель, изучай как угодно и сколько угодно. </p></li>
				<li><h2>Эффективно</h2><p>Следи за прогрессом, изучай свои слабые стороны и делай акцент на этих темах.</p></li>
			</ul>
		</div>
	</div>
	<img class="finger" src="img/finger.png" width="56" height="66">
	<form class="reg_form" action="" name="form" method="post">
		<div class="circle_form" ><img src="img/8.gif"></div>
		<label></label>
			<input id = 'reg_form_username' width="30" type="text" name="name" value="<?=$_SESSION['name']?>" placeholder="     Пользователь">
			<span class="error emailErr"><p><?=$error_login?></p></span>
		<label></label>
			<input id = 'reg_form_pass' width="30" type="password" name="pass" value="" placeholder="     Пароль">
			<span class="error passErr"><p><?=$error_pass?></p></span>
		<input class = 'reg_form_button' name='done' type = 'button' value='ЗАРЕГИСТРИРОВАТЬСЯ' style="display: none" />
		<noscript><input class = 'reg_form_button' name='done' type = 'submit' value='ЗАРЕГИСТРИРОВАТЬСЯ' /></noscript>
		
		<input id = 'reg_form_vk' name='vk' type = 'button' value='ВКОНТАКТЕ' >
		<span id = "message" ></span>
		<div class="reg_battons" id="facebook_button"><img src="img/facebook.png"/></div>
		<div class="reg_battons" id="odnoklassniki_button"><img src="img/class.png"/></div>
		<div class="reg_battons" id="google_button"><img src="img/google.png"/> </div>
		<div class="pregist">
			<p  id="plicense">Регистрируясь, вы принимаете</p>
			<p >Условия лицензионного соглашения.</p>
		</div>
	</form>
</div>
<div class='footer'>
	<a class='button_more' onclick="slowScroll ('-101%')" href='#' >
		<img id='down_arrow' src='img/ArrowDown.png'>
	</a>
</div>
<script>
	form_size($(".reg_form"), 0.65, 0.62698413);
</script>
<noscript><style type="text/css">
	.reg_form{
		width: 255px;
		height: 400px;
	}
</style></noscript>

<script>  

</script>

<!-- <? echo "<a class='logo' href='index.php'><img src='#'></a>"
?> -->
