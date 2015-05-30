<?php

/********************** GET запросы ****************************************************/
Route::get('/', 'IndexController@index');//Главная страница

Route::get('/activation/{hash}','RegistrationController@activation'); //Активация акканута
Route::get('/catalog', 'CollectionController@index');//Страница коллекций
Route::get('/profile/','ProfileController@index');//Стартовая страница профиля
Route::get('/profile/change_password','ProfileController@get_change_password');//Изменение пароля
Route::get('/profile/login','ProfileController@get_login');//Страница авторизации пользователя
Route::get('/recovery_password','ProfileController@get_recovery_password');//Восстановление пароля
Route::get('/registration', 'RegistrationController@index');//Страница регистрации

/********************** POST запросы ****************************************************/
Route::post('/deploy','WHController@pull');//github Webhooks
Route::post('/recovery_password','ProfileController@post_recovery_password');//Восстановление пароля
Route::post('/registration', 'RegistrationController@registration_user');//Регистриция пользователя
Route::post('/profile/change_password','ProfileController@post_change_password');//Изменение пароля