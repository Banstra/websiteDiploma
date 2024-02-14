<?php

	/*
		==================================================
		Автор: Артём Малков
		URL модуля: https://www.pandoge.com/post/411
		Версия: 1.0
		==================================================
		Файл: clean-sign-up.php
		--------------------------------------------------
		Назначение: Вывод формы регистрации
		==================================================
	*/

	if(!defined('DATALIFEENGINE')) {
	
		die('Hacking attempt!');
	
	}

	echo <<<HTML

		<form method="post" name="registration" id="registration" action="?do=register">

			<div class="clean_form_block">

				<div class="overlay_clean">

					<div class="clean_form" style="visibility: hidden;opacity: 0;">

						<div class="border_top_clean_form">

							<div></div>
							<div></div>
							<div></div>
							<div></div>
							<div></div>

						</div>

						<div class="clean_forms"></div>

						<div class="body_clean_form">

							<div class="close_clean_form"></div>
							<div class="title_clean_form">Регистрация</div>
							<div class="description_clean_form">Всего пару полей, и Вы - участник нашего проекта!</div>
							<div class="border_clean_form_1"></div>

							<div class="form_block_clean_form">
								<div class="input_name_clean_form">Никнейм</div>
								<input name="name" id="name" class="f_input f_input_clean_form" type="text" required onblur="CheckLogin(); return false;"/>
								<div id="result-registration"></div>

								<div class="input_name_clean_form">Пароль (не менее 6 символов)</div>
								<input name="password1" id="password1" class="f_input f_input_clean_form" type="password" required />

								<div class="input_name_clean_form">E-mail</div>
								<input name="email" id="email" class="f_input f_input_clean_form" type="text" required />

								<div class="politik">Нажимая кнопку «Зарегистрироваться» Вы даете согласие на <a href="/rules.html" target="_blank" title="Политика конфиденциальности">обработку своих персональных данных</a>.</div>

								<button name="submit" class="fbutton fbutton_clean_form" type="submit" style="cursor: not-allowed;" title="Не заполнены обязательные поля" disabled><span>Зарегистрироваться</span></button>
							</div>

						</div>

						<div class="footer_clean_form">

							<span>
								<div></div>
								<div></div>
								<div></div>
							</span>

							<div></div>

						</div>

					</div>

				</div>

			</div>

			<input name="submit_reg" id="submit_reg" value="submit_reg" type="hidden">
			<input name="password2" id="password2" value="" type="hidden">
			<input name="do" id="do" value="register" type="hidden">
		
		</form>

		<link rel="stylesheet" type="text/css" href="/engine/skins/clean-sign-up/css/style.css" />
		<script src="/engine/skins/clean-sign-up/js/main.js"></script>

HTML;

?>

