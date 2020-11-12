
@extends('layouts.frame')
<div class="container">
    <a class="btn btn-primary" href="{{ route('inserir.processo')}}" role="button">Novo</a>
</div>

<div class="class container">
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nº Processo</th>
            <th scope="col">Favorecido</th>
            <th scope="col">Cliente</th>
            <th scope="col">Data</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($processos as $processo)
                <tr>
                    <th scope="row">{{ $processo->number }}</th>
                    <td> {{ $processo->number }} </td>
                    <td> {{ $processo->name }} </td>
                    <td> {{ $processo->client }} </td>
                    <td> {{ $processo->date }} </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>



    
      
