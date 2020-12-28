@include('admin.includes.alerts')
@csrf

  <div class="form-row">
    <div class="col">
      <label for="validationDefault04">Nº</label>
      <input type="number" class="form-control" name="number" value="{{ $processo->number ?? old('number')}}" placeholder="Nº Processo">
    </div>
    <div class="col-8">
      <label for="validationDefault04">Título</label>
      <input type="text" class="form-control" name="tituloprocesso" value="{{ $processo->tituloprocesso ?? old('tituloprocesso')}}" placeholder="Título da causa">
    </div>
    <div class="col">
      <label for="validationDefault04">Data Início</label>
      <input type="date" class="form-control" name="date" id="validationDefault04" placeholder="Data" value="{{ $processo->date ?? old('date')}}" required>
    </div>
  </div>

  <div class="form-row">
    <div class="col-6">
      <label for="validationDefault04">Cliente</label>
      <input type="text" class="form-control" name="parteinteressada" value="{{ $processo->parteinteressada ?? old('parteinteressada')}}"  placeholder="Parte interessada">
    </div>
    <div class="col-6">
      <label for="validationDefault04">Parte Processada</label>
      <input type="text" class="form-control" name="parteprocessada" value="{{ $processo->parteprocessada ?? old('parteprocessada')}}" placeholder="Parte Processada">
    </div>
  </div>

  <div class="form-row">
    <div class="col">
      <label for="validationDefault04">Descrição</label>
      <textarea class="form-control" id="validationTextarea" name="descricao" value="{{ $processo->descricao ?? old('descricao')}}" placeholder="Digite uma breve descrição" required></textarea> 
    </div>
  </div>

  <div class="form-row">
    <div class="col">
      <label for="validationDefault04">Relatório</label>
      <textarea class="form-control" id="validationTextarea" name="relatorio" value="{{ $processo->relatorio ?? old('relatorio')}}" placeholder="Digite um breve relatório" required></textarea> 
    </div>
  </div>

  <div class="form-row">
    <div class="col">
      <label for="validationDefault04">Comentário</label>
      <textarea class="form-control" id="validationTextarea" name="comentario" value="{{ $processo->comentario ?? old('comentario')}}" placeholder="Digite um breve comentário" required></textarea> 
    </div>
  </div>
  
  <!-- Botão para acionar modal -->
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalExemplo">
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


  
  <button type="button" class="btn btn-danger"><a href="{{ route('admin.home')}}" style="color: white";>Cancelar</a></button>




