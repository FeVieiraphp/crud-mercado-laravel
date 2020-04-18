<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

//GET -> Buscar alguma coisa (retornar uma view, etc) OBS: o que é digitado no navegador
//POST -> Enviar dados (formulários, etc) OBS: não pode ser acessado digitando no navegador
//PUT -> Atualizar dados (formulários, etc) OBS: não pode ser acessado digitando no navegador
//DELETE -> Deletar dados OBS: não pode ser acessado digitando no navegador

//Exemplo de soma com parâmetros
// Route::get('/soma/{num1}/{num2}', function($num1, $num2) {
// 	return $num1 + $num2;
// });

Route::get('users', 'UserController@index'); //Rota para exibir a página inicial de usuários

Route::get('users/create', 'UserController@create'); //Rota para exibir a página de cadastro de usuários

Route::post('users', 'UserController@store'); //Rota para cadastrar o usuário

Route::get('users/{id}/edit', 'UserController@edit'); //Rota para exibir a página de edição de usuários com os dados do usuário que tem o ID passado por parâmetro

Route::put('users/{id}', 'UserController@update'); // Rota para atualizar o usuário que tem o ID passado por parâmetro

Route::delete('users/{id}', 'UserController@destroy'); //Rota para deletar o usuário que tem o ID passado por parâmetro