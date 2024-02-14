<article class="box story">
	<div class="box_in">
		<h1 class="title h1">Личные сообщения</h1>
		<div class="pm-box">
			<nav id="pm-menu">
				[inbox]<span>Входящие</span>[/inbox]
				[outbox]<span>Отправленные</span>[/outbox]
				[new_pm]<span>Написать новое сообщение</span>[/new_pm]
			</nav>
			<div class="pm_status">
				{pm-progress-bar}
				{proc-pm-limit} % / ({pm-limit} сообщений)
			</div>
		</div>
		[pmlist]
		<div class="pmlist">
			{pmlist}
		</div>
		[/pmlist]
		[newpm]
		<h4 class="heading">Создать сообщение</h4>
		<div class="addform addpm">
			<ul class="ui-form">
				<li class="form-group combo">
					<div class="combo_field">
						<input placeholder="Имя адресата" type="text" name="name" value="{author}" class="wide" required>
					</div>
					<div class="combo_field">
						<input placeholder="Тема сообщения" type="text" name="subj" value="{subj}" class="wide" required>
					</div>
				</li>
				<li id="comment-editor">{editor}</li>
				<li><input type="checkbox" id="outboxcopy" name="outboxcopy" value="1" /> <label for="outboxcopy">Сохранить сообщение в папке "Отправленные"</label></li>  
			[recaptcha]
				<li>{recaptcha}</li>
			[/recaptcha]
			[question]
				<li class="form-group">
					<label for="question_answer">Вопрос: {question}</label>
					<input placeholder="Ответ" type="text" name="question_answer" id="question_answer" class="wide" required>
				</li>
			[/question]
			</ul>
			<div class="form_submit">
				[sec_code]
					<div class="c-captcha">
						{sec_code}
						<input placeholder="Повторите код" title="Введите код указанный на картинке" type="text" name="sec_code" id="sec_code" required>
					</div>
				[/sec_code]
				<button class="btn btn-big" type="submit" name="add"><b>Отправить</b></button>
				<button class="btn-border btn-big" type="button" onclick="dlePMPreview()">Предпросмотр</button>
			</div>
		</div>
		[/newpm]
	</div>
	[readpm]
	<div class="comment" id="{comment-id}">
		<div class="com_info">
			<div class="com_user">
				<b class="name">{author}</b>
				<span class="grey">
					от {date}
				</span>
			</div>
		</div>
		<div class="com_content">
			<h4 class="title">{subj}</h4>
			<div class="text">{text}</div>
			[signature]<div class="signature">--------------------<br />{signature}</div>[/signature]
		</div>
        			<div class="meta">
				<span class="left">
					<span class="reply grey" title="Ответить">[reply]<span>Ответить</span>[/reply]</span>
					<span class="reply grey" title="Игнорировать">[ignore]<span>Игнорировать</span>[/ignore]</span>
					<span class="complaint" title="Жалоба">[complaint]<span class="title_hide">Жалоба</span>[/complaint]</span>
					<span class="del" title="Удалить">[del]<span class="title_hide">Удалить</span>[/del]</span>
				</span>
			</div>
	</div>
	[/readpm]
</article>