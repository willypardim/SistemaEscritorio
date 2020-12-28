

@extends('layouts.app')

@section('content')
<div class="container">
    <form action="{{  route('agenda.index')  }}" method="post">
        @include('admin.agenda._partials.form')
    </form>
</div>
@endsection
