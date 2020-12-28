@extends('layouts.app')

@section('content')
  <div class="class container">
    @foreach ($processos as $processo)
      <div class="card shadow p-3 mb-5 bg-white rounded" style="margin-top: 20px";>
        <div class="card-header text-dark border-white">
            Processo Nº: {{ $processo->number }}
        </div>
        <div class="card-body">
            <h5 class="card-title">{{ $processo->tituloprocesso }}</h5>
            <p class="card-text">{{ $processo->parteinteressada }} - {{ $processo->date }}</p>
            @include('admin.processo._partials.botoesmodif') 
        </div>
      </div> 
    @endforeach
    
    @empty($processo)
      <div class="alert alert-primary" role="alert">
        Não há processos cadastrados! <a href={{  route('inserir.processo')  }} class="alert-link">Clique aqui</a> para adicionar.
      </div>
    @endempty 

  </div> 
@endsection





    
      
