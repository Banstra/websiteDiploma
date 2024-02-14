<!-- Стандартная панель пользователя. Выводится для всех залогиненных пользователей. -->

  <link rel="stylesheet" type="text/css" href="{THEME}/assets/css/style.css">
[not-group=5]
<!-- Modal -->

<div class="modal fade" id="loginModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Меню игрока</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
	
		[admin-link]<a class="login-links" href="{admin-link}" target="_blank"><b>Админпанель</b></a>[/admin-link]
		<a class="login-links" href="/cabinet.html">Мой профиль</a>
		<a class="login-links" href="/servers.html">Сервера</a>
		<a class="login-links" href="{logout-link}"><b>Выход</b></a>
	
      </div>

    </div>
  </div>
</div>
<!--

-->
[/not-group]



<!-- Форма авторизации. Выведется для группы №5, т.е если пользователь не залогинен на сайте -->
[group=5]

<!-- Modal -->
<div class="modal fade" id="loginModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Авторизация</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        	<form method="post" action="#">
			<input class="inputs" type="text" name="login_name" id="login_name" placeholder="login" />
			<input class="inputs" type="password" name="login_password" id="login_password" placeholder="password" />
			<button onclick="submit();" type="submit" title="Войти" class="buttons-light w-100">Войти</button>

			<input class="inputs" name="login" type="hidden" id="login" value="submit" >

	</form>
      </div>

    </div>
  </div>
</div>

	<!-- Данные должны быть в form'е, для отправки скрипту -->
	<!--

	-->
[/group]