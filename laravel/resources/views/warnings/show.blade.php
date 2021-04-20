@extends('layouts.main')

@section('title', 'AVISO')
@section('content')
	<div class="container">
		<table>
			<tr>
				<th>Aviso</th>
				<td>{{$warning->title}}</td>
			</tr>
			<tr>
				<th>Descrição</th>
				<td>{{$warning->description}}</td>
			</tr>
			<tr>
				<th>Data</th>
				<td>{{ date('d/m/Y', strtotime($warning->date))}}</td>
			</tr>
			<tr>
				<th>Usuário</th>
				<td>{{$warningOwner['name']}}</td>
			</tr>
		</table>
	</div>
@endsection