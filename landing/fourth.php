<div class='landing_header fourth_page'>
	<img class="rocket" src="img/rocket.png">
	<div class="fp_block">
		<div class="text_block_3">
			<h1>Следи за своим прогрессом.</h1>
			<h2>Удобная статистика, все твои результаты на виду.
				Получай баллы и звания, стань лучшим агентом
			вместе с Agent English.</h2>
		</div>
		<form class="fp_form" action="" name="form" method="post">
			<div class="circle_form" ><img src="img/8.gif"></div>
			<label></label>
				<input id = 'reg_form_username' class="fp_email" width="30" type="text" name="name" value="<?=$_SESSION['name']?>" placeholder="     Пользователь">
				<span class="error emailErrFP"><p><?=$error_login?></p></span>
			<label></label>
				<input id = 'reg_form_pass' class="fp_pass" width="30" type="password" name="pass" value="" placeholder="     Пароль">
				<span class="error passErrFP"><p><?=$error_pass?></p></span>
			<input class = 'reg_form_button' name='fp_done' type = 'button' value='ЗАРЕГИСТРИРОВАТЬСЯ' style="display: none" />
			<noscript><input class = 'reg_form_button' name='fp_done' type = 'submit' value='ЗАРЕГИСТРИРОВАТЬСЯ' /></noscript>
			<input id = 'reg_form_vk' name='vk' type = 'button' value='ВКОНТАКТЕ' >

			<span id = "message" ></span>
			<div class="reg_battons" id="facebook_button"><img src="img/facebook.png"/></div>
			<div class="reg_battons" id="odnoklassniki_button"><img src="img/class.png"/></div>
			<div class="reg_battons" id="google_button"><img src="img/google.png"/> </div>
			<div class="pregist fp_licence">
				<p  id="plicense">Регистрируясь, вы принимаете</p>
				<p >Условия лицензионного соглашения.</p>
			</div>
		</form>
	</div>
</div>

<div class='second_footer' style="opacity: 1; background-color: rgba(0, 0, 0, .4);">
<ul class="footer_list">
	<li><a href="#">О нас</a></li>
	<li><a href="#">Поддержка</a></li>
	<li><a href="#">Материалы</a></li>
	<li><a href="#">Сотрудничество</a></li>
	<li><a href="#">Вакансии</a></li>
</ul>
	<a class='button_up' onclick="slowScroll ('0%')" href='#'>
		<img id='down_arrow_3' src='img/ArrowDown.png' style="transform: rotate(180deg)">
	</a>
<p class="">
</div>


