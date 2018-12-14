@extends('adminlte::page')


@section('content_header')
    <h1>Gerenciamento de setor(es)</h1>
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
			<a href="{{ route('ocupacao.nova') }}" class="btn btn-primary"><i class="fas fa-plus-square" aria-hidden="true"></i>Cadastrar Novo Setor/Função</a>
		</div>
		<div class="panel-body">
			<table class="table">
				<th>Setor</th>
				<th>Função</th>
				<th>Opções</th>
				<tbody>
					@foreach($ocupacaos as $ocupacao)
					<tr>
						<td>{{$ocupacao->setor}}</td>
						<td>{{$ocupacao->funcao}}</td>
						<td>
							<button type="submit "href="{{ route('ocupacao.nova') }}" class="btn btn-success">Editar</button>
							<a href="{{ route('ocupacao.excluir') }}" class="btn btn-danger">Excluir</a>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>		
		</div>
	</div>
@stop