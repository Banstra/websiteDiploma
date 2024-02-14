[not-logged]
    <div class="row padding-form">
      <div class="col"><input type="text" name="name" id="name" class="form-control" placeholder="Ваше имя" aria-label="Ваше имя"></div>
      <div class="col"><input type="email" name="mail" id="mail" class="form-control" placeholder="Ваш e-mail (необязательно)" aria-label="Ваш e-mail (необязательно)"></div>
    </div>
  [/not-logged]
      <div class="form-floating">
        <textarea name="comments" id="comments floatingTextarea2" cols="70" rows="10" class="form-control" placeholder="Написать комментарий" style="height: 100px" ></textarea>
        <label for="floatingTextarea2">Написать комментарий</label>
      </div>
      [recaptcha]
              {recaptcha}
      [/recaptcha]
        			[sec_code]
				<div class="c-captcha">
					{sec_code}
					<input class="form-control form-control-lg" placeholder="Введите капчу" title="Введите код указанный на картинке" type="text" name="sec_code" id="sec_code" required>
				</div>
			[/sec_code]
      <div class="d-grid gap-2 d-md-block">
        <button type="submit" name="submit" class="btn btn-primary">Отправить</button>
    </div>