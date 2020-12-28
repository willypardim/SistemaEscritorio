@csrf
<div class="form-row">
    <div class="col">
        <label for="validationDefault04">Data</label>
        <input type="date" class="form-control" name="data" value="{{ $agenda->data ?? old('data')  }}">
    </div>
    <div class="col">
        <label for="validationDefault04">Horário</label>
        <input type="time" class="form-control" name="hora" value="{{ $agenda->hora ?? old('hora')  }}">
    </div>
    <div class="col-8">
        <label for="validationDefault04">Local</label>
        <input type="text" class="form-control" name="local" value="{{ $agenda->local ?? old('local')  }}" placeholder="Local">
    </div>
    <div class="col-12">
        <label for="validationDefault04">Endereço</label>
        <input type="text" class="form-control" name="endereco" value="{{ $agenda->endereco ?? old('endereco')  }}" id="validationDefault04" placeholder="Endereco" required>
    </div>
    <div class="col-8">
        <label for="validationDefault04">Complemento</label>
        <input type="text" class="form-control" name="complemento" value="{{ $agenda->complemento ?? old('complemento')  }}" id="validationDefault04" placeholder="Complemento" required>
    </div>
    <div class="col-2">
        <label for="validationDefault04">Numero</label>
        <input type="number" class="form-control" name="numero" value="{{ $agenda->numero ?? old('numero')  }}" id="validationDefault04" placeholder="Nº" required>
    </div>
    <div class="form-group col-2">
        <label for="input">Nº</label>
        <select id="input" class="form-control" name="processos_id" required>
          <option selected>Escolha o processo...</option>
              @foreach ($processos as $processo)
                <option value="{{$processo->id ?? old('processo->id')}}">
                    {{$processo->id}}
                </option>
            @endforeach
        </select>
    </div>
</div>
<button class="btn btn-primary">Cadastrar</button>
<button type="button" class="btn btn-danger"><a href="{{ route('admin.home')}}" style="color: white";>Cancelar</a></button>



