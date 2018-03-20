<?php

Route::get('/', function () {
    return redirect('login');
});

Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{id}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function() {
	Route::get('/', function(){
		return view('index');
	});
	Route::resource('pacientes', 'PacientesController');
	Route::resource('questionarios_nutricao', 'QuestionariosNutricaoController');
	Route::resource('responsaveis', 'ResponsaveisController');
	Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register')->middleware('can:create,App\User');
	Route::post('register', 'Auth\RegisterController@register')->middleware('can:create,App\User');
});