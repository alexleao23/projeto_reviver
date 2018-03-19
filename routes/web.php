<?php

Route::get('/', function () {
    return redirect('login');
});

Auth::routes();

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function() {
	Route::get('/', function(){
		return view('home');
	});
	Route::resource('pacientes', 'PacientesController');
	Route::resource('questionarios_nutricao', 'QuestionariosNutricaoController');
	Route::resource('responsaveis', 'ResponsaveisController');
});