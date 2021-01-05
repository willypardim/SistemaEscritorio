
@extends('layouts.app')

@section('content')
<div class="container bg-white p-5">
  <p class="lead text-center">
    <strong>
      Cadastro de processo
    </strong>
  </p>
  <form method="POST" action="{{ route('processo.store')}}">
    @include('admin.processo._partials.form')
  </form>
</div>
@endsection