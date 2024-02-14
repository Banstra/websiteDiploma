<div class="form-wrap">
<h2>Регистрация</h2>
<div class="full-text">		
    [registration]
        <b>Здравствуйте, уважаемый посетитель нашего сайта!</b><br />
        Регистрация на нашем сайте позволит Вам быть его полноценным участником.
        Вы сможете добавлять новости на сайт, оставлять свои комментарии, просматривать скрытый текст и многое другое.
        <br />В случае возникновения проблем с регистрацией, обратитесь к <a href="/index.php?do=feedback">администратору</a> сайта.
    [/registration]
    [validation]
        <b>Уважаемый посетитель,</b><br />
        Ваш аккаунт был зарегистрирован на нашем сайте,
        однако информация о Вас является неполной, поэтому заполните дополнительные поля в Вашем профиле.
    [/validation]
</div>
[registration]
<div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Логин</label>
    <input class="form-control" type="text" name="name" id="name" required>
    <input title="Проверить доступность логина для регистрации" onclick="CheckLogin(); return false;" type="button" value="Проверить имя" />
</div>
  <div id='result-registration'></div>
  <div class="mb-3">
    <label for="password1" class="form-label">Пароль</label>
    <input class="form-control" type="password" name="password1" id="password1" required>
  </div>
  <div class="mb-3">
    <label for="password2" class="form-label">Повторите пароль</label>
    <input class="form-control" type="password" name="password2" id="password2" required>
  </div>
  <div class="mb-3">
    <label for="email" class="form-label">Ваш E-Mail</label>
    <input class="form-control" type="text" name="email" id="email" required>
  </div>
  [recaptcha]
  <div class="form-item clearfix imp">
      <label>Поставьте галочку:</label>
      <div class="form-secur">
          {recaptcha}
      </div>
  </div>
  [/recaptcha]
[/registration]
[validation]
<div class="mb-3">
    <label for="fullname" class="form-label">Как тебя зовут?</label>
    <input class="form-control" type="text" id="fullname" name="fullname" />
  </div>
  <div class="mb-3">
    <label for="land" class="form-label">Из какой ты страны?</label>
    <input class="form-control" type="text" id="land" name="land" />
  </div>
  <div class="mb-3 form-item clearfix">
    <label class="form-label" for="image">Аватар</label>
    <input class="form-control" type="file" id="image" name="image">
  </div>
  <div class="mb-3">
    <label for="exampleFormControlTextarea1" class="form-label">О себе</label>
    <textarea class="form-control" id="info" name="info" rows="4"></textarea>
  </div>
  <div class="form-xfield">{xfields}</div>
[/validation]
<div class="form-submit jonia-top">
    <button name="submit" type="submit">Отправить</button>
</div>	
</div>