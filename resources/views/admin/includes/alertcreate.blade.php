@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="alert alert-danger" role="alert">
            Ops! O número do processo indicado não existe, <a href="{{ route('agenda.create') }}" class="alert-link">Clique aqui</a> e adicione um numero de processo existente!
          </div>
    </div>
@endsection