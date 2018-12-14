@extends('adminlte::page')


@section('content_header')
    <h1>Bem vindo </h1>
    
@stop

@section('content')
	<?php
		$nome = auth()->user()->name;
		echo "<h1>Você está logado como $nome</h1>";
	?>
    <h3>Cadastro de setor e função - ok</h3>
    <h3>Exibir setore e função de acordo com o usuário logado - ok</h3>
    <h3>Editar e excluir setor - parte da lógica feita</h3>
    <h3>Cadastrar funcinário - Corrigir a lógica do drop down para seleção de função</h3>
    <h3>Exibir funcionários e cargos - Parcialmente, falta o controle do usuário</h3>
    <h3>Editar e excluir funcionário e funções da folha de pagamento - parte da lógica feita/depende finalizar funções anteriores</h3>

@stop