
@extends('layouts.app')

@section('content')
<div class="container">
    <form action="{{ route('agenda.update', $agenda->id) }}" method="post">
        @method('PUT')
        @include('admin.agenda._partials.form')
    </form>
</div>
@endsection