@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="container">
                <div class="row">
                    <div class="col-sm">
                        <a href="{{ route('admin.processo')}}" style="text-decoration: none;">
                            <div class="card border-muted mb-3 shadow-sm p-3 mb-5 bg-white rounded" style="max-width: 18rem;">
                                <div class="card-header text-body bg-white">Consulte</div>
                                <div class="card-body text-dark">
                                  <h5 class="card-title">Consultar Processos</h5>
                                  <p class="card-text">Clique aqui para consultar os processos cadastrados.</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm">
                        <a href="{{ route('inserir.processo')}}" style="text-decoration: none;">
                            <div class="card border-muted mb-3 shadow-sm p-3 mb-5 bg-white rounded" style="max-width: 18rem;">
                                <div class="card-header text-body bg-white">Cadastre</div>
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
                            <div class="card border-muted mb-3 shadow-sm p-3 mb-5 bg-white rounded" style="max-width: 18rem;">
                                <div class="card-header text-body bg-white">Consulte</div>
                                <div class="card-body text-dark">
                                  <h5 class="card-title">Consultar Clientes</h5>
                                  <p class="card-text">Clique aqui para consultar os dados de um cliente.</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm">
                        <a href="#" style="text-decoration: none;">
                            <div class="card border-muted mb-3 shadow-sm p-3 mb-5 bg-white rounded" style="max-width: 18rem;">
                                <div class="card-header text-body bg-white">Cadastre</div>
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
