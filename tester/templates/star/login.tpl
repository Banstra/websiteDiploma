<ul class="dropdown-menu dropdown-menu-end" aria-labelledby="offcanvasNavbarDropdown">
    [group=1,2,3,4]<li><a class="dropdown-item" href="{profile-link}">Мой профиль</a></li>
    <li><a class="dropdown-item" href="{addnews-link}">Добавить контент</a></li>
    <li><a class="dropdown-item" href="{pm-link}">Сообщения <span class="badge bg-secondary">{new-pm}</span></a></li>
    <li><a class="dropdown-item" href="{favorites-link}">Закладки <span class="badge bg-secondary">{favorite-count}</span></a></li>
    <li>
      <hr class="dropdown-divider">
    </li>
    [group=1]<li><a class="dropdown-item" href="{admin-link}" target="_blank">Админ панель</a></li>[/group]
    <li><a class="dropdown-item" href="{logout-link}">Выйти</a></li>
  </ul>[/group]</ul>
[not-group=1,2,3,4]
<button type="button" class="btn btn-primary butt-io" data-bs-toggle="modal" data-bs-target="#exampleModal">Вход</button>
[/not-group]
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Вход</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
<form method="post">
      <div class="modal-body">
        <div class="mb-3">
          <input class="form-control" type="text" name="login_name" id="login_name formGroupExampleInput" placeholder="Логин">
        </div>
        <div class="mb-3">
          <input class="form-control" type="password" name="login_password" id="login_password formGroupExampleInput2" placeholder="Пароль">
        </div>
            <div class="row">
          <div class="col">
            <div class="col-12">
              <div class="form-check">
                <label class="form-check-label" for="login_not_save gridCheck">
                 <input class="form-check-input" type="checkbox" name="login_not_save" id="gridCheck login_not_save" value="1" checked>
                  Запомнить меня
                </label>
              </div>
            </div>
          </div>
          <div class="col brany">
              <button class="btn btn-primary" onclick="submit();" type="submit" title="Вход">Войти</button>
              <input name="login" type="hidden" id="login" value="submit" />
          </div>
        </div>
        <div class="row jonia-top">
          <div class="col">
            <a href="/?do=register" class="log-register">Регистрация</a>
          </div>
          <div class="col brany">
            <a href="{lostpassword-link}">Восстановить пароль</a>
          </div>
        </div>
        <div class="row jonia-top">
          <div class="col-md-6 center">
            [vk]<a href="{vk_url}" target="_blank" class="btn btn-block btn-social btn-vk">
              <span class="fab fa-vk"></span>Войти через ВКонтакте
          </a>[/vk]
          [odnoklassniki]<a href="{odnoklassniki_url}" target="_blank" class="btn btn-block btn-social btn-odnoklassniki">
            <span class="fab fa-odnoklassniki"></span>Войти через Одноклассники
        </a>[/odnoklassniki]
          [facebook]<a href="{facebook_url}" target="_blank" class="btn btn-block btn-social btn-facebook">
            <span class="fab fa-facebook"></span>Войти через Facebook
        </a>[/facebook]
          </div>
          <div class="col-md-6 center">
            [mailru]<a href="{mailru_url}" target="_blank" class="btn btn-block btn-social btn-mailru">
              <span class="fas fa-at"></span>Войти через Mail.ru
          </a>[/mailru]
            [google]<a href="{google_url}" target="_blank" class="btn btn-block btn-social btn-google">
              <span class="fab fa-google"></span>Войти через Google
          </a>[/google]
            [yandex]<a href="{yandex_url}" target="_blank" class="btn btn-block btn-social btn-yandex">
              <span class="fab fa-yandex"></span>Войти через Яндекс
          </a>[/yandex]
          </div>
        </div>
    </div>
    </form>
    </div>
  </div>
</div>