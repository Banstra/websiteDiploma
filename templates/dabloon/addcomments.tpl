<div class="ignore-select">
	<h2>{title}</h2>

		[not-logged]
		
			<p>Имя:</p>
			<input type="text" name="name" id="name" />

		
			<p>E-Mail:</p>
			<input type="text" name="mail" id="mail" />
		[/not-logged]

		
			<p>Комментарий:</p>
			{editor}

		[sec_code]
		
			<p>Введите код:</p>
			<div>{sec_code}</div>
			<input type="text" name="sec_code" id="sec_code" />
		[/sec_code]

		[recaptcha]
		
			<p>Введите два слова, показанных на изображении:</p>
			<div>{recaptcha}</div>
		[/recaptcha]

		[question]
		
			<p>Вопрос:</p>
			{question}
			<p>Ответ:</p>
			<input type="text" name="question_answer" id="question_answer" />
		[/question]


	<div>
		<button type="submit" class="buttons-light mt-3" name="submit">[not-aviable=comments]Добавить[/not-aviable][aviable=comments]Изменить[/aviable]</button>
	</div>
</div>