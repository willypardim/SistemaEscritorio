

@include('admin.includes.alerts')
@csrf

<div class="form-row">
  <div class="col-sm mt-3">
    <div class="label-float">
      <input type="number" name="number" value="{{ $processo->number ?? old('number')}}" placeholder=" "/>
      <label>Nº</label>
    </div>
  </div>
  <div class="col-sm mt-3">
    <div class="label-float">
      <input type="text" name="tituloprocesso" value="{{ $processo->tituloprocesso ?? old('tituloprocesso')}}" placeholder=" "/>
      <label>Titulo da causa</label>
    </div>
  </div>
  <div class="col-sm mt-3">
    <div class="label-float">
      <input type="date" name="date"  value="{{ $processo->date ?? old('date')}}" placeholder=" "/>
      <label>Data início</label>
    </div>
  </div>
</div>


<div class="form-row">
  <div class="col-sm mt-3">
    <div class="label-float">
      <input type="text" name="parteinteressada" value="{{ $processo->parteinteressada ?? old('parteinteressada')}}" placeholder=" "/>
      <label>Cliente</label>
    </div>
  </div>
  <div class="col-sm mt-3">
    <div class="label-float">
      <input type="text" name="parteprocessada" value="{{ $processo->parteprocessada ?? old('parteprocessada')}}" placeholder=" "/>
      <label>Parte processada</label>
    </div>
  </div>
</div>

<div class="form-row">
  <div class="col-sm mt-3">
    <div class="label-float">
      <input type="text" name="descricao" value="{{ $processo->descricao ?? old('descricao')}}" placeholder=" "/>
      <label>Descrição</label>
    </div>
  </div>
</div>

<div class="form-row">
  <div class="col-sm mt-3">
    <div class="label-float">
      <input type="text" name="relatorio" value="{{ $processo->relatorio ?? old('relatorio')}}" placeholder=" "/>
      <label>Relatório</label>
    </div>
  </div>
</div>

<div class="form-row">
  <div class="col-sm mt-3">
    <div class="label-float">
      <input type="text" name="comentario" value="{{ $processo->comentario ?? old('comentario')}}" placeholder=" "/>
      <label>Comentário</label>
    </div>
  </div>
</div>
  
  <!-- Botão para acionar modal -->
  <button type="button" class="btn btn-primary mt-5" data-toggle="modal" data-target="#modalExemplo">
    Cadastrar
  </button>

  <!-- Modal -->
  <div class="modal fade" id="modalExemplo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Salvar Alterações?</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          Ao salvar as alterações as informações serão salvas e você será redirecionado ao início.
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Voltar</button>
          <button type="submit" class="btn btn-primary">Salvar mudanças</button>
        </div>
      </div>
    </div>
  </div>


  
  <button type="button" class="btn btn-danger mt-5"><a href="{{ route('admin.home')}}" style="color: white";>Cancelar</a></button>




