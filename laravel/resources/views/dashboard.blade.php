@extends('layouts.main')

@section('title', 'DASHBOARD')
@section('content')
	
	<h1>DASHBOARD - Vendas</h1>
	@if(count($warnings) > 0)
		@foreach($warnings as $w)
		<table class="table">
			<tr>
				<th>Aviso</th>
				<th>Data</th>
				<th>
					<a href="/warnings">Novo</a>
				</th>
			</tr>
			<tr>
				<td>{{$w->title}}</td>
				<td>{{$w->date}}</td>
				<td>
					<form method="POST" action="warnings/{{$w->id}}">
						@csrf
						@method('DELETE')
						<input type="submit" type="submit" value="Apagar">
					</form>
				</td>
			</tr>
		</table>
		@endforeach
	@else
		<p>Você não postou um aviso</p>
		<a href="/warnings/create"> Criar Aviso</a>
	@endif



@endsection