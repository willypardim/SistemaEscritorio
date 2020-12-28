@extends('layouts.app')

@section('content')
  <div class="class container">
      <div class="row justify-content-center my-3">
        <div class="col-sm-10">
          <div class="card shadow-sm p-3 mb-5 bg-white rounded">
            <div class="card-body">
              <h5 class="card-title text-center">Agendamento</h5>
              <p class="card-text"><strong>Data:</strong> {{ $agenda->data }}</p>
              <p class="card-text"><strong>Horário:</strong> {{ $agenda->hora }}</p>
              <p class="card-text"><strong>local:</strong> {{ $agenda->local }} </p>
              <p class="card-text"><strong>Endereço:</strong> {{ $agenda->endereco }}</p>
              <p class="card-text"><strong>Complemento:</strong> {{ $agenda->complemento }} - <strong>Nº:</strong> {{ $agenda->numero }}</p>
              <h5 class="card-title text-center">Referente ao processo</h5>
              <p class="card-text"><strong>Nº:</strong> {{ $agenda->processos->id }}</p>
              <p class="card-text"><strong>Título:</strong> {{ $agenda->processos->tituloprocesso }}</p>
              <p class="card-text"><strong>Cliente:</strong> {{ $agenda->processos->parteinteressada }}</p>
              <p class="card-text"><strong>Processado:</strong> {{ $agenda->processos->parteprocessada }}</p>
              <p class="card-text"><strong>Descrição:</strong> {{ $agenda->processos->descricao }}</p>
              <p class="card-text"><strong>Relatório:</strong> {{ $agenda->processos->relatorio }}</p>
              <p class="card-text"><strong>Comentário <br> Advogado:</strong> {{ $agenda->processos->comentario }}</p>
              @include('admin.agenda._partials.botoesmodif')
            </div>
          </div>
        </div>
      </div>
  </div> 
@endsection