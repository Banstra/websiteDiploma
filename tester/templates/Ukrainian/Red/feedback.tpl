<div class="block story shadow">
	<div class="wrp clrfix">
		<div class="head">
			<h1 class="title h2 ultrabold">Зворотній зв'язок</h1>
		</div>
		<div class="feedback clrfix">
			<div class="grid_1_4 right grid_last">
				<b>Адреса</b><br>
				Ваша адреса<br>
				<br>
				<b>Телефони</b><br>
				8 (999) <b>999-99-99</b><br>
				<br>
				<b>Години роботи</b><br>
				ПН-ПТ: 10 до 18<br>
				СБ-НД: Вихідний</b>
			</div>
			<div class="grid_3_4">
				<ul class="ui-form">
					[not-logged]
					<li class="form-group combo">
						<div class="combo_field"><input placeholder="Ваше ім'я" type="text" maxlength="35" name="name" id="name" class="wide" required></div>
						<div class="combo_field"><input placeholder="Ваш E-mail" type="email" maxlength="35" name="email" id="email" class="wide" required></div>
					</li>
					[/not-logged]
					<li class="form-group">
						<label>Одержувач</label>
						{recipient}
					</li>
					<li class="form-group">
						<input placeholder="Тема повідомлення" type="text" maxlength="45" name="subject" id="subject" class="wide" required>
					</li>
					<li class="form-group">
						<textarea placeholder="Повідомлення" name="message" id="message" rows="8"[not-logged] style="height: 140px;"[/not-logged] class="wide" required></textarea>
					</li>
					[attachments]
						<li class="form-group">
							<label for="question_answer">Прикріпити файли:</label>
							<input name="attachments[]" type="file" multiple>
						</li>
					[/attachments]
					[recaptcha]
					<li class="form-group">{recaptcha}</li>
					[/recaptcha]
					[question]
					<li class="form-group">
						<label for="question_answer">Запитання: {question}</label>
						<input placeholder="Відповідь" type="text" name="question_answer" id="question_answer" class="wide" required>
					</li>
					[/question]
				</ul>
				<div class="form_submit">
					[sec_code]
						<div class="c-capcha">
							{code}
							<input placeholder="Повторіть код" title="Введіть код, вказаний на зображенні" type="text" name="sec_code" id="sec_code" required>
						</div>
					[/sec_code]
					<button class="btn" type="submit" name="send_btn"><b class="ultrabold">Надіслати</b></button>
				</div>
			</div>
		</div>
	</div>
</div>