<?php
//Site
$this->get('/', 'StaticPageController@getHome');

//Task
$this->group(['middleware' => 'auth'],function(){
  $this->get('/task', 'HomeController@index')->name('task'); 
});

//Auth
Route::get('list', 'StaticPageController@getList');
Auth::routes();


