@extends('adminlte::page')


@section('content_header')
    <h1>Gerenciamento de Funcionario(s)</h1>
@stop

@section('content')
	<div class="box">
		<div class="box-header">
			<h3>Cadastrar Funcionario</h3>			
		</div>
		<div class="box-body">
			<form method="POST" action="{{ route('funcionario.salvar') }}">
				{!! csrf_field() !!}
				<div class="form-group">

					<input type="text" name="Nome" placeholder="Nome Completo" class="form-control">
					<input type="text" name="email" placeholder="Email" class="form-control">
					<input type="text" name="telefone" placeholder="Telefone" class="form-control">
					<input type="date" name="nascimento" placeholder="Nascimento" class="form-control">
					<input type="text" name="CPF" placeholder="CPF" class="form-control">
					<input type="text" name="CTPS" placeholder="CTPS" class="form-control">
					<select name="country" id="country" class="form-control input-lg dynamic" data-dependent="state">
					    <option value="">Setor</option>
					    @foreach($ocupacao_lista as $setor)
					    <option value="{{ $setor->setor}}">{{ $setor->setor }}</option>
					    @endforeach
					</select>
					<select name="setor" id="setor" class="form-control input-lg dynamic" data-dependent="funcao">
						<option value="">Função</option>
					</select>
					{{ csrf_field() }}
					<input type="date" name="admissao" placeholder="Admissão" class="form-control">		
	                <label for="exampleInputFile">Foto</label>
	                <input type="file" id="exampleInputFile">
                </div>
					<button type="submit" class="btn btn-success">Cadastrar</button>
			</form>
		</div>
	</div>
@stop

