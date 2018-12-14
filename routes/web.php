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
$this->group(['middleware' => ['auth'], 'namespace' => 'Admin'], function(){
	$this->post('cadastroocupacao', 'OcupacaoController@salvar')->name('ocupacao.salvar');
	$this->get('novaocupacao', 'OcupacaoController@nova')->name('ocupacao.nova');
	$this->get('excluirocupacao', 'OcupacaoController@excluir')->name('ocupacao.excluir');
	$this->get('setores', 'OcupacaoController@index')->name('admin.ocupacao');

	$this->post('cadastrofuncionario', 'FuncionarioController@salvar')->name('funcionario.salvar');
	$this->get('novofuncionario', 'FuncionarioController@novo')->name('funcionario.novo');
	$this->get('funcionarios', 'FuncionarioController@index')->name('admin.funcionario');

	$this->get('admin', 'AdminController@index')->name('admin.home');
});


$this->get('/', 'Site\SiteController@index')->name('home');

Auth::routes();

