
@extends('layouts.frame')

<div class="container">
  <form method="POST" action="{{ route('processo.store')}}">
    @csrf
        <div class="form-row">
          <div class="col-md-4 mb-3">
            <label for="validationDefault01">Nº Processo</label>
            <input type="number" class="form-control"  name="number" id="validationDefault01" placeholder="Nº Processo" value="00" {{old('number')}} required>
          </div>
          <div class="col-md-4 mb-3">
            <label for="validationDefault02">Favorecido</label>
            <input type="text" class="form-control" name="name" id="validationDefault02" placeholder="Favorecido" {{old('name')}} required>
          </div>
        </div>
        <div class="form-row">
          <div class="col-md-6 mb-3">
            <label for="validationDefault03">Cliente</label>
            <input type="text" class="form-control" name="client" id="validationDefault03" placeholder="Cliente" required>
          </div>
          <div class="col-md-3 mb-3">
            <label for="validationDefault04">Data</label>
            <input type="date" class="form-control" name="date" id="validationDefault04" placeholder="Data" required>
          </div>
        </div>


      <button class="btn btn-primary" type="submit">Enviar</button>
      <button type="button" class="btn btn-danger"><a href="{{ route('admin.processo')}}" style="color: white";>Cancel</a></button>
  </form>
</div>