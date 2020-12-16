@extends('layouts.app')

@section('content')
<div class="container">
<h1>Editar processo {{ $processo->name}}</h1>
    <form method="POST" action="{{ route('processo.update', $processo->id)}}">
    @method('PUT')
    @include('admin.processo._partials.form')
    </form>
</div>
@endsection

