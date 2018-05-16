<?php
Route::get('/', function () {
    return view('registrohome');
});
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');
Route::get('register', function(){
	return redirect('login')->withErrors(['msg'=>'Você tentou acessar uma página restrita!']);
});

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function() {
	Route::get('/', function(){
		$users = App\User::all();
		$pacientes = App\Models\Paciente::all();
		$responsaveis = App\Models\Responsavel::all();
		return view('index', compact('users', 'pacientes', 'responsaveis'));
	})->name('homepage');
	Route::resource('responsaveis', 'ResponsaveisController');
	Route::resource('pacientes', 'PacientesController');
	Route::get('pacientes/{id}/questionarios_nutricao/create', 'PacientesController@questionarioNutricaoCreate')->name('questionarios_nutricao');
	Route::post('pacientes/questionarios_nutricao', 'PacientesController@questionarioNutricaoStore');
	// Route::resource('questionarios_nutricao', 'QuestionariosNutricaoController');
	Route::get('users/register', 'Auth\RegisterController@showRegistrationForm')->name('register')->middleware('can:create,App\User');
	Route::post('users/register', 'Auth\RegisterController@register')->middleware('can:create,App\User');
	Route::get('users', 'UsersController@index')->name('users_index');
	Route::get('users/{id}', 'UsersController@show')->name('user_show');
	Route::delete('users/{id}', 'UsersController@destroy')->middleware('can:delete,App\User');
});