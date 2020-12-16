@extends('layouts.app')

@section('content')
<div class="container">
  <form method="POST" action="{{ route('processo.store')}}">
    @include('admin.processo._partials.form')
  </form>
</div>
@endsection

