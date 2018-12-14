@extends('adminlte::page')


@section('content_header')
    <h1>Gerenciamento de setor(es)</h1>
@stop

@section('content')
	<div class="box">
		<div class="box-header">
			<h3>Cadastrar Setor/Cargo</h3>			
		</div>
		<div class="box-body">
			<form method="POST" action="{{ route('ocupacao.salvar') }}">
				{!! csrf_field() !!}
				<div class="form-group">
					<input type="text" name="setor" placeholder="Setor" class="form-control">
					<input type="text" name="funcao" placeholder="Cargo" class="form-control">
				</div>
					<button type="submit" class="btn btn-success">Cadastrar</button>
			</form>
		</div>
	</div>
@stop