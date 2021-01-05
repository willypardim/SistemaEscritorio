@csrf


<div class="form-row">
    <div class="col-sm mt-3">
      <div class="label-float">
        <input type="date" name="data" value="{{ $agenda->data ?? old('data')  }}" placeholder=" "/>
        <label>Data</label>
      </div>
    </div>
    <div class="col-sm mt-3">
      <div class="label-float">
        <input type="time" name="hora" value="{{ $agenda->hora ?? old('hora')  }}" placeholder=" "/>
        <label>Horário</label>
      </div>
    </div>
    <div class="col-sm mt-3">
      <div class="label-float">
        <input type="text" name="local" value="{{ $agenda->local ?? old('local')  }}" placeholder=" "/>
        <label>Local</label>
      </div>
    </div>
  </div>
  
  
  <div class="form-row">
    <div class="col-sm mt-3">
      <div class="label-float">
        <input type="text" name="endereco" value="{{ $agenda->endereco ?? old('endereco')  }}" placeholder=" "/>
        <label>Endereço</label>
      </div>
    </div>
    <div class="col-sm mt-3">
      <div class="label-float">
        <input type="text" name="complemento" value="{{ $agenda->complemento ?? old('complemento')  }}" placeholder=" "/>
        <label>Complemento</label>
      </div>
    </div>
  </div>
  
  <div class="form-row">
    <div class="col-sm mt-3">
      <div class="label-float">
        <input type="number" name="numero" value="{{ $agenda->numero ?? old('numero')  }}" placeholder=" "/>
        <label>Numero Imóvel</label>
      </div>
    </div>
    <div class="col-sm mt-3">
        <div class="label-float">
          <select name="processos_id" class="border-0 border-bottom " required>
              <option selected>Escolha o processo...</option>
                  @foreach ($processos as $processo)
                    <option value="{{$processo->id ?? old('processo->id')}}">
                        {{$processo->id}}
                    </option>
                @endforeach
            </select>
        </div>
      </div>
  </div>
  
  
  
  
  

<button class="btn btn-primary mt-5">Cadastrar</button>
<button type="button" class="btn btn-danger mt-5"><a href="{{ route('admin.home')}}" style="color: white";>Cancelar</a></button>



