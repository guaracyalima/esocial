<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});


Route::get('/', function () { // Index = Login
    if(!empty(session()->get('idUser'))){ // Controle de Acesso
        return redirect('funcionario');
    } else {
        return view('login');
    }
});

Route::resource('login', 'AuthController'); // Verificar e entrar

Route::resource('/funcionario', 'FuncionariosController'); // Buscar, Alterar

Route::get('/list_funcionario', 'FuncionariosController@showAll'); // Páginação por 45 funcionarios


Route::post('/dependentes', 'FuncionariosController@dependentes'); // Dependentes

Route::post('/fazer_logout', 'FuncionariosController@logoutFuncionario'); // Fazer Logout
