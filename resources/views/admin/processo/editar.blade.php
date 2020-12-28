@extends('layouts.app')

@section('content')
    <div class="container">
        <p class="h4">Editar processo Nº {{ $processo->number}}</p>
        <form method="POST" action="{{ route('processo.update', $processo->id)}}">
            @method('PUT')
            @include('admin.processo._partials.form')
        </form>
    </div>
@endsection

