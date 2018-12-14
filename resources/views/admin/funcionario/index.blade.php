@extends('adminlte::page')


@section('content_header')
    <h1>Gerenciamento de Funcionario(s)</h1>
@stop

@section('content')
	<div class="box">
		@if (session('message'))
        <div class="alert alert-success alert-dismissible">
            <a href="#" class="close" 
               data-dismiss="alert"
               aria-label="close">&times;</a>
            {{ session('message') }}
        </div>
        @endif
		<div class="box-header">
			<a href="{{ route('funcionario.novo') }}" class="btn btn-primary">Cadastrar Novo Funcionario</a>
		</div>
		<div class="panel-body">
			<table class="table">
				<th>Nome</th>
				<th>Setor</th>
				<th>Função</th>
				<th>Opções</th>
				<tbody>
					@foreach($funcionarios as $funcionario)
					<tr>
						<td>{{$funcionario->nome}}</td>
						<td>{{$funcionario->setor}}</td>
						<td>{{$funcionario->funcao}}</td>
						<td>
							<button class="btn btn-success">Exibir</button>
							<button class="btn btn-success">Editar</button>
							<button class="btn btn-danger">Excluir</button>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>		
		</div>
	</div>
@stop