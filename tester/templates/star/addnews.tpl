<div class="form-wrap">
	<h2>Добавить контент</h2>
	<div class="mb-3">
		<label for="title" class="form-label">Заголовок</label>
		<input class="form-control" type="text" id="title" name="title" value="{title}" maxlength="150" placeholder="Введите заголовок" required />
	  </div>
	  <div class="mb-3">
		<label>Выбор категории:</label>
		{category}
	</div>
	<div class="mb-3">
		<label for="exampleFormControlTextarea1" class="form-label">Краткое описание</label>
		[not-wysywyg]
		{bbcode}
		<textarea class="form-control" name="short_story" id="short_story" onfocus="setFieldName(this.name)" rows="5">{short-story}</textarea>
		[/not-wysywyg] 
		{shortarea}
	  </div>
	  <div class="mb-3">
		<label for="exampleFormControlTextarea1" class="form-label">Полное описание</label>
		[not-wysywyg]
		{bbcode}
		<textarea class="form-control" name="full_story" id="full_story" onfocus="setFieldName(this.name)" rows="15">{full-story}</textarea>
	[/not-wysywyg] 
	{fullarea}
	  </div>
	  <div class="mb-3">
		<div class="form-xfield"><table class="tableform">{xfields}</table></div>
	  </div>
	  [recaptcha]
	  <div class="mb-3">
		  <label>Поставьте галочку:</label>
		  <div>
			  {recaptcha}
		  </div>
	  </div>
	  [/recaptcha]
	  <div class="form-submit">
		<button name="add" type="submit">Отправить</button>
		  <button name="nview" onclick="preview()" type="submit">Предварительный просмотр</button>
	  </div>
</div>