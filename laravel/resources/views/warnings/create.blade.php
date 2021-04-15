@extends('layouts.main')

@section('title', 'Criar Aviso')
@section('content')

	<div class="container text-center col-md-6 offset-md-3">
		<h4>Criar Aviso</h4>
		<form action="/warnings/create" method="POST" autocomplete="off">
		@csrf
			<label class="float-left">Título</label>
			<input type="text" name="title" class="form-control" placeholder="Título do aviso">
			<label class="float-left">Descrição</label>
			<textarea name="description" class="form-control" rows="3"></textarea>
			<label class="float-left">Data</label>
			<input type="date" name="date" class="form-control">
			<input type="submit" class="btn btn-info" value="Cadastrar">
			<a href="/" class="btn btn-outline-info">Voltar</a>
		</form>
	</div>


@endsection