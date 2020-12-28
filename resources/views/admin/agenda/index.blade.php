@extends('layouts.app')

@section('content')
  <div class="class container">
    @foreach ($agendas as $agenda)
      <div class="row justify-content-center my-3">
        <div class="col-sm-8">
          <div class="card shadow-sm p-3 mb-5 bg-white rounded">
            <div class="card-body">
              <h5 class="card-title">Pensão Alimentícia</h5>
              <p class="card-text"><strong>Data:</strong> {{ $agenda->data }} - Horário: 08:00 </p>
              <p class="card-text"><strong>local:</strong> {{ $agenda->local }} </p>
              <p class="card-text"><strong>Endereço:</strong> {{ $agenda->endereco }}</p>
              <p class="card-text"><strong>Complemento:</strong> {{ $agenda->complemento }} - Nº: {{ $agenda->numero }}</p>
              <p class="card-text"><strong>teste:</strong> {{ $agenda->processos->id }} - Nº: {{ $agenda->numero }}</p>
              
              <a href="{{ route('agenda.show', $agenda->id) }}" class="btn btn-primary">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.134 13.134 0 0 0 1.66 2.043C4.12 11.332 5.88 12.5 8 12.5c2.12 0 3.879-1.168 5.168-2.457A13.134 13.134 0 0 0 14.828 8a13.133 13.133 0 0 0-1.66-2.043C11.879 4.668 10.119 3.5 8 3.5c-2.12 0-3.879 1.168-5.168 2.457A13.133 13.133 0 0 0 1.172 8z"/>
                    <path fill-rule="evenodd" d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
                </svg>
                Visualizar
              </a>
            </div>
          </div>
        </div>
      </div>
    @endforeach
    
    @empty($agenda)
      <div class="alert alert-info" role="alert">
        Não há agendamentos! <a href="{{  route('agenda.create')  }}" class="alert-link">Clique aqui</a> para adicionar.
      </div>
    @endempty 
  </div> 
@endsection