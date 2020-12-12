@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="container">
                <div class="row">
                    <div class="col-sm">
                        <a href="{{ route('admin.processo')}}" style="text-decoration: none;">
                            <div class="card border-dark mb-3" style="max-width: 18rem;">
                                <div class="card-header text-white bg-dark">Consulte</div>
                                <div class="card-body text-dark">
                                  <h5 class="card-title">Consultar Processos</h5>
                                  <p class="card-text">Clique aqui para consultar os processos cadastrados por você.</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm">
                        <a href="{{ route('inserir.processo')}}" style="text-decoration: none;">
                            <div class="card border-dark mb-3" style="max-width: 18rem;">
                                <div class="card-header text-white bg-dark">Cadastre</div>
                                <div class="card-body text-dark">
                                  <h5 class="card-title">Cadastrar Processos</h5>
                                  <p class="card-text">Clique aqui para cadastrar um novo processo.</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-sm">
                        <a href="#" style="text-decoration: none;">
                            <div class="card border-dark mb-3" style="max-width: 18rem;">
                                <div class="card-header text-white bg-dark">Consulte</div>
                                <div class="card-body text-dark">
                                  <h5 class="card-title">Consultar Clientes</h5>
                                  <p class="card-text">Clique aqui para consultar os dados de um cliente.</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm">
                        <a href="#" style="text-decoration: none;">
                            <div class="card border-dark mb-3" style="max-width: 18rem;">
                                <div class="card-header text-white bg-dark">Cadastre</div>
                                <div class="card-body text-dark">
                                  <h5 class="card-title">Cadastrar clientes</h5>
                                  <p class="card-text">Clique aqui para cadastrar os dados de um novo cliente.</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>      
        </div>
    </div>
</div>
@endsection
