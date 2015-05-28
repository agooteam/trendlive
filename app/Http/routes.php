<?php


/********************** GET запросы ****************************************************/
Route::get('/', 'IndexController@index');//Главная страница
Route::get('/registration', 'RegistrationController@index');//Страница регистрации
Route::get('/activation/{hash}','RegistrationController@activation'); //Активация акканута
Route::get('/profile/','ProfileController@index');//Стартовая страница профиля
Route::get('/profile/login','ProfileController@get_login');//Страница авторизации пользователя
/****************************************************************************************/

/********************** POST запросы ****************************************************/
Route::post('/registration', 'RegistrationController@registration_user');//Регистриция пользователя
Route::post('/deploy','WebhooksController@github_pull');//github Webhooks
/****************************************************************************************/
