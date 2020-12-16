@include('admin.includes.alerts')
@csrf
<div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationDefault01">Nº Processo</label>
      <input type="number" class="form-control"  name="number" id="validationDefault01" placeholder="Nº Processo" value="{{ $processo->number ?? old('number')}}"  required>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationDefault02">Título Processo:</label>
      <input type="text" class="form-control" name="name" id="validationDefault02" placeholder="Favorecido" value="{{ $processo->name ?? old('name')}}" required>
    </div>
  </div>
  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="validationDefault03">Cliente</label>
      <input type="text" class="form-control" name="client" id="validationDefault03" placeholder="Cliente" value="{{ $processo->client ?? old('client')}}" required>
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationDefault04">Data</label>
      <input type="date" class="form-control" name="date" id="validationDefault04" placeholder="Data" value="{{ $processo->date ?? old('date')}}" required>
    </div>
  </div>
<button class="btn btn-primary" type="submit">Enviar</button>
<button type="button" class="btn btn-danger"><a href="{{ route('admin.home')}}" style="color: white";>Cancel</a></button>
