<?php

/********************** GET запросы ****************************************************/
Route::get('/', 'IndexController@index');//Главная страница
Route::get('/activation/{hash}','RegistrationController@activation'); //Активация акканута
Route::get('/catalog', 'CollectionController@index');//Страница коллекций
Route::get('/profile/my_collection/{page?}','ProfileController@index');//Стартовая страница профиля
Route::get('/profile/change_password','ProfileController@get_change_password');//Изменение пароля
Route::get('/profile/collection/edit/{collection_id?}','CollectionsController@get_collection_edit');//Страница редактирования подборки
Route::get('/login','ProfileController@get_login');//Страница авторизации пользователя
Route::get('/logout','ProfileController@logout');//Выход пользователя
Route::get('/profile/new_collection','CollectionsController@get_new_collection');//Страница создания новой подборки
Route::get('/profile/new_video/{collection_id?}','CollectionsController@get_new_video');//Страница добавления видео
Route::get('/profile/video/edit/{video_id?}','CollectionsController@get_edit_video');//Страница редактирования видео
Route::get('/recovery_password','ProfileController@get_recovery_password');//Восстановление пароля
Route::get('/registration', 'RegistrationController@index');//Страница регистрации

/********************** POST запросы ****************************************************/
Route::post('/deploy','WHController@pull');//github Webhooks
Route::post('/recovery_password','ProfileController@post_recovery_password');//Восстановление пароля
Route::post('/registration', 'RegistrationController@registration_user');//Регистриция пользователя
Route::post('/profile/change_password','ProfileController@post_change_password');//Изменение пароля
Route::post('/profile/collection/edit/{collection_id?}','CollectionsController@post_collection_edit');//Сохранение подборки
Route::post('/profile/collection/delete/{collection_id?}','CollectionsController@delete_collection');//Удаление подборки
Route::post('/profile/login','ProfileController@post_login');//Страница авторизации пользователя
Route::post('/profile/new_collection','CollectionsController@post_new_collection');//Создания новой подборки
Route::post('/profile/new_video/{collection_id?}','CollectionsController@post_new_video');//Страница добавления видео
Route::post('/profile/video/edit/{video_id?}','CollectionsController@post_edit_video');//Страница редактирования видео
Route::post('/profile/video/delete/{video_id?}','CollectionsController@delete_video');//Удаление видео