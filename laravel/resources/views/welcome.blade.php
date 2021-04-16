@extends('layouts.main')

@section('title', 'Página Inicial')
@section('content')
    
    <div class="container text-center" style="background-color:#f5f5f5;">
        <h1>Bem-vindo!</h1>
        <p>Sistema feito por diversão e para estudar</p>
        <p style="color:dimgray;">Laravel 7x</p>
        <button href="" class="btn btn-outline-info">Novo Cliente</button>
        <button href="" class="btn btn-outline-dark">Novo Produto</button>
        <a href="/warnings" class="btn btn-outline-warning">Novo Aviso</a>

        <br><br>
        <h1>QUADRO DE AVISOS</h1>
        <br><br>
        <div class="row">
        @foreach($warnings as $w)
        <div class="card" style="width: 18rem;">
          <div class="card-body">
            <h5 class="card-title"> {{$w->title}} </h5>
            <h6 class="card-subtitle"> {{date('d/m/Y'), strtotime($w->date)}} </h6>
            <p class="card-text"> {{$w->description}} </p>
            <a href="#" class="card-link">Ver Aviso</a>
         </div>
    </div>
        @endforeach
    </div>
</div>

@endsection