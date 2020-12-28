@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="alert alert-danger" role="alert">
            Ops! Você não pode excluir um processo que possui agendamentos, <a href="{{ route('agenda.index') }}" class="alert-link">Clique aqui</a> e finalize o agendamento antes de excluir o processo.
          </div>
    </div>
@endsection