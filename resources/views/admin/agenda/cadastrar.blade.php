

@extends('layouts.app')

@section('content')
<div class="container bg-white p-5">
    <p class="lead text-center">
        <strong>
          Cadastro de Horário na agenda
        </strong>
      </p>
    <form action="{{  route('agenda.index')  }}" method="post">
        @include('admin.agenda._partials.form')
    </form>
</div>
@endsection
