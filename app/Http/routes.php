<?php

/********************** GET запросы ****************************************************/
Route::get('/', 'IndexController@index');//Главная страница

Route::get('/activation/{hash}','RegistrationController@activation'); //Активация акканута
Route::get('/catalog', 'CollectionController@index');//Страница коллекций
Route::get('/profile','ProfileController@index');//Стартовая страница профиля
Route::get('/profile/login','ProfileController@get_login');//Страница авторизации пользователя
Route::get('/profile/logout','ProfileController@logout');//Выход пользователя
Route::get('/profile/change_password','ProfileController@get_change_password');//Изменение пароля
Route::get('/profile/new_collection','CollectionsController@get_new_collection');//Страница создания новой подборки
Route::get('/recovery_password','ProfileController@get_recovery_password');//Восстановление пароля
Route::get('/registration', 'RegistrationController@index');//Страница регистрации


/********************** POST запросы ****************************************************/
Route::post('/deploy','WHController@pull');//github Webhooks
Route::post('/recovery_password','ProfileController@post_recovery_password');//Восстановление пароля
Route::post('/registration', 'RegistrationController@registration_user');//Регистриция пользователя
Route::post('/profile/change_password','ProfileController@post_change_password');//Изменение пароля
Route::post('/profile/login','ProfileController@post_login');//Страница авторизации пользователя
Route::post('/profile/new_collection','CollectionsController@post_new_collection');//Создания новой подборки