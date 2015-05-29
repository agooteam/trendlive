<?php


/********************** GET запросы ****************************************************/
Route::get('/', 'IndexController@index');//Главная страница
Route::get('/registration', 'RegistrationController@index');//Страница регистрации
Route::get('/activation/{hash}','RegistrationController@activation'); //Активация акканута
Route::get('/profile/','ProfileController@index');//Стартовая страница профиля
Route::get('/profile/login','ProfileController@get_login');//Страница авторизации пользователя
Route::get('/recovery_password','ProfileController@get_recovery_password');//Восстановление пароля
/****************************************************************************************/

/********************** POST запросы ****************************************************/
Route::post('/registration', 'RegistrationController@registration_user');//Регистриция пользователя
Route::post('/recovery_password','ProfileController@post_recovery_password');//Восстановление пароля
Route::post('/deploy','WebhooksController@github_pull');//github Webhooks
/****************************************************************************************/
//Comment