@extends('layouts.app')

@section('content')
  <div class="container py-3 px-md-5 border bg-light shadow-sm p-3 mb-5 rounded " style="margin-top: 30px;">
    <h4 class="text-center" style="margin-bottom: 30px;">{{ $processo->tituloprocesso }}</h4>

    <dl class="row">
        
      <dt class="col-sm-3">Processo Nº</dt>
      <dd class="col-sm-9">
        <p>{{ $processo->number }}</p>
      </dd>

      <dt class="col-sm-3">Interessado</dt>
      <dd class="col-sm-9"> {{ $processo->parteinteressada }}</dd>

      <dt class="col-sm-3">Processado</dt>
      <dd class="col-sm-9"> {{ $processo->parteprocessada }}</dd>

      <dt class="col-sm-3">Data Início</dt>
      <dd class="col-sm-9">
        <p>{{ $processo->date }}</p>
      </dd>

      <dt class="col-sm-3">Descrição</dt>
      <dd class="col-sm-9">{{ $processo->descricao }}</dd>

      <dt class="col-sm-3">Relatório</dt>
      <dd class="col-sm-9">{{ $processo->relatorio }}</dd>

      <dt class="col-sm-3 text-truncate">Comentários</dt>
      <dd class="col-sm-9">
        <p><em>{{ $processo->comentario }}</em></p>
      </dd>

    </dl>
    @include('admin.processo._partials.botoesmodif') 
  </div> 
@endsection
