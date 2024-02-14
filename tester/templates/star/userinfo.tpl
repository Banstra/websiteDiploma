<div class="page-content page-container" id="page-content">
  <div class="padding">
      <div class="row d-flex justify-content-center">
          <div class="col-md-12">
              <div class="card-profile user-card-full">
                  <div class="row m-l-0-x m-r-0-x">
                      <div class="col-sm-4 bg-c-lite-green user-profile">
                          <div class="card-block text-center text-white">
                              <div class="m-b-25"><img src='{foto}?cache={include file="/engine/modules/md/generator-key.php"}' class="max-avatar img-radius" alt="{usertitle}"></div>
                              <h3 class="f-w-600">{usertitle}</h3>
                              [info]<p style="font-size: 13px;">{info}</p><i class="mdi mdi-square-edit-outline feather icon-edit m-t-10 f-16"></i>[/info]
                          </div>
                      </div>
                      <div class="col-sm-8">
                          <div class="card-block">
                              <div class="row m-b-20 p-b-5 b-b-default f-w-600">
                                  <div class="col">
                                      <h6>Информация</h6>
                                  </div>
                                  <div class="col">
                                      [not-logged]<h6 style="text-align: right;"><a href="javascript:ShowOrHide('options')">Редактировать</a></h6>[/not-logged]
                                  </div>
                                </div>
                              <div class="row">
                                  <div id="options" style="display:none; margin-bottom: 30px"> 
                                      <div class="mb-3">
                                          <label class="form-label">Имя</label>
                                          <input class="form-control" type="text" name="fullname" value="{fullname}" placeholder="Ваше Имя">
                                        </div>
                                        <div class="mb-3">
                                          <label class="form-label">E-Mail</label>
                                          <input class="form-control" type="text" name="email" value="{editmail}" placeholder="Ваш E-Mail: {editmail}">
                                        </div>
                                        <div class="mb-3">
                                          {hidemail}
                                          <input class="form-check-input" type="checkbox" id="subscribe" name="subscribe" value="1" /> 
                                          <label class="form-check-label" for="subscribe">Отписаться от подписанных новостей</label>
                                      </div>
                                      <div class="mb-3">
                                          <label class="form-label">Страна</label>
                                          <input class="form-control" type="text" name="land" value="{land}" placeholder="Страна">
                                        </div>
                                        <div class="mb-3">
                                          <label class="form-label">Список игнорируемых пользователей</label>
                                          {ignore-list}
                                        </div>
                                        <div class="mb-3">
                                          <label class="form-label">Старый пароль</label>
                                          <input class="form-control" type="password" name="altpass" placeholder="Старый пароль" >
                                        </div>
                                        <div class="mb-3">
                                          <label class="form-label">Новый пароль</label>
                                          <input class="form-control" type="password" name="password1" placeholder="Новый пароль">
                                        </div>
                                        <div class="mb-3">
                                          <label class="form-label">Повторите новый пароль</label>
                                          <input class="form-control" type="password" name="password2" placeholder="Повторите новый пароль">
                                        </div>
                                        <div class="mb-3">
                                          <label for="formFileMultiple" class="form-label">Аватар</label>
                                          <div class="form-check">
                                              <input class="form-check-input" type="checkbox" name="del_foto" id="del_foto" value="yes">
                                              <label class="form-check-label" for="del_foto">
                                                Удалить аватар
                                              </label>
                                            </div>
                                          <input class="form-control" id="formFileMultiple" type="file" name="image" size="28" multiple>
                                        </div>
                                        <div class="mb-3">
                                          <label class="form-label">Часовой пояс</label>
                                          {timezones}
                                        </div>
                                        <div class="mb-3">
                                          <label class="form-label">О себе</label>
                                          <textarea class="form-control" name="info" rows="4">{editinfo}</textarea>
                                        </div>
                                        <div class="mb-3">
                                          {xfields}
                                        </div>
                                        <div class="mb-3">
                                          {twofactor-auth}
                                        </div>
                                        <div class="mb-3">
                                          {news-subscribe}
                                        </div>
                                        <div class="mb-3">
                                          {comments-reply-subscribe}
                                        </div>
                                        <div class="mb-3">
                                          {unsubscribe}
                                        </div>
                                        <button name="submit" type="submit" class="btn btn-primary">Сохранить</button>
                                        <input name="submit" type="hidden" id="submit" value="submit" />
                                  </div>                                    
                                  <div class="col-sm-6">
                                      <p class="m-b-10 f-w-600">Имя</p>
                                      <h6 class="text-muted f-w-400">{fullname}[not-fullname]Аноним[/not-fullname]</h6>
                                  </div>
                                  [land]<div class="col-sm-6">
                                      <p class="m-b-10 f-w-600">Место жительства</p>
                                      <h6 class="text-muted f-w-400">{land}</h6>
                                  </div>[/land]
                                  <div class="col-sm-6">
                                      <p class="m-b-10 f-w-600">Зарегистрирован</p>
                                      <h6 class="text-muted f-w-400">{registration}</h6>
                                  </div>
                                  <div class="col-sm-6">
                                      <p class="m-b-10 f-w-600">Последняя активность</p>
                                      <h6 class="text-muted f-w-400">{lastdate}</h6>
                                  </div>
                                  <div class="col-sm-6">
                                      <p class="m-b-10 f-w-600">Группа</p>
                                      <h6 class="text-muted f-w-400">{status}</h6>
                                  </div>
                                  <div class="col-sm-6">
                                      <p class="m-b-10 f-w-600">Рейтинг</p>
                                      <h6 class="text-muted f-w-400">Статей: {rate}<br>Комментариев: {commentsrate}</h6>
                                  </div>
                              </div>
                              <div class="m-b-20 m-t-40 p-b-5 b-b-default f-w-600"></div>
                              <div class="row">
                                  <div class="col-sm-6">
                                      <p class="m-b-10 f-w-600">Кол-во публикаций</p>
                                      <h6 class="text-muted f-w-400">{news-num} [{news}]</h6>
                                  </div>
                                  <div class="col-sm-6">
                                      <p class="m-b-10 f-w-600">Кол-во комментариев</p>
                                      <h6 class="text-muted f-w-400">{comm-num} [{comments}]</h6>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
                  <div class="row">{custom author="{usertitle}" template="shortstory" available="global" limit="20" order="date" navigation="yes"}</div>
            [not-news-num] 
             <div class="card py-4">
              <div class="d-flex justify-content-center"><svg xmlns="http://www.w3.org/2000/svg" width="70" height="70" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="2"/><path d="M3 9h18M9 21V9"/></svg></div>
             <div class="d-flex justify-content-center mt-3"> <h4 class="fw-bold">Постов нет</h4> </div>
                 <div class="d-flex justify-content-center mt-1">У пользователя {usertitle} нет опубликованных постов</div>
             </div>
             [/not-news-num] 
  </div>
</div>