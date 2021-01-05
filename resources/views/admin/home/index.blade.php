<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ url('assets/lawyer/css/app.css') }}" rel="stylesheet">
    <link href="{{ url('assets/lawyer/images/backgrond001.jpg') }}" rel="stylesheet">
    
     <!-- Styles -->
     @extends('layouts.frame')
    @stack('styles')
</head>
<body>
    <div class="ctn" style="background-image: url({{url('assets/lawyer/canva/montain.jpg')}}); background-repeat: no-repeat; background-size: 100% 100%;">
        <div class="sub-ctn">
          <div>
              <nav class="navbar navbar-expand-md navbar-light bg-white">
                  <div class="container">
                      <a class="navbar-brand text-dark" href="{{ url('/') }}">
                          LAWYER
                      </a>
                      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                          <span class="navbar-toggler-icon"></span>
                      </button>
      
                      <div class="collapse navbar-collapse" id="navbarSupportedContent">
                          <!-- Left Side Of Navbar -->
                          <ul class="navbar-nav mr-auto">
      
                          </ul>
      
                          <!-- Right Side Of Navbar -->
                          <ul class="navbar-nav ml-auto">
                              <!-- Authentication Links -->
                              @guest
                                  <li class="nav-item">
                                      <a class="nav-link text-muted" href="{{ route('login') }}">{{ __('Login') }}</a>
                                  </li>
                                  @if (Route::has('register'))
                                      <li class="nav-item">
                                          <a class="nav-link text-muted" href="{{ route('register') }}">{{ __('Register') }}</a>
                                      </li>
                                  @endif
                              @else             
      
                              <li class="nav-item dropdown">
                                  <a id="navbarDropdown" class="nav-link  text-muted" href="{{ route('admin.home')}}" aria-haspopup="true" aria-expanded="false" v-pre>
                                      Home
                                  </a>          
                              </li>
                                  <li class="nav-item dropdown">
                                      <a id="navbarDropdown" class="nav-link dropdown-toggle text-muted" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                          Cadastrar
                                      </a>
                                      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                          <a class="dropdown-item" href="{{ route('inserir.processo') }}">
                                              Processo
                                          </a>
                                          <a class="dropdown-item" href="{{  route('agenda.create')  }}">
                                              Agendamentos
                                          </a>
                                      </div>
                                  </li>
      
                                  <li class="nav-item dropdown">
                                      <a id="navbarDropdown" class="nav-link dropdown-toggle text-muted" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                          Consultar
                                      </a>
      
                                      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                      <a class="dropdown-item" href="{{ route('admin.processo') }}">
                                              Processos
                                          </a>
                                          <a class="dropdown-item" href="{{  route('agenda.index')  }}">
                                              Agenda
                                          </a>
                                      </div>
                                  </li>
      
                                  <li class="nav-item dropdown">
                                      <a id="navbarDropdown" class="nav-link dropdown-toggle text-muted" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                          {{ Auth::user()->name }}
                                      </a>
      
                                      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                          <a class="dropdown-item" href="{{ route('logout') }}"
                                             onclick="event.preventDefault();
                                                           document.getElementById('logout-form').submit();">
                                              {{ __('Logout') }}
                                          </a>
      
                                          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                              @csrf
                                          </form>
                                      </div>
                                  </li>
                              @endguest
                          </ul>
                      </div>
                  </div>
              </nav>
              <main class="py-4">
                  @yield('content')
              </main>
          </div>
          <div class="container">
              <div class="container text-center lead d-none d-lg-block d-print-block mt-2 mb-5 pb-3 border-bottom">O que deseja fazer?</div>    
          </div>
          <div class="container mt-4">
              <div class="row">
                <div class="col-sm">
                        <div class="container text-center lead d-none d-lg-block d-print-block mb-3 text-center text-dark">
                          <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-inbox" viewBox="0 0 16 16">
                              <path d="M4.98 4a.5.5 0 0 0-.39.188L1.54 8H6a.5.5 0 0 1 .5.5 1.5 1.5 0 1 0 3 0A.5.5 0 0 1 10 8h4.46l-3.05-3.812A.5.5 0 0 0 11.02 4H4.98zm9.954 5H10.45a2.5 2.5 0 0 1-4.9 0H1.066l.32 2.562a.5.5 0 0 0 .497.438h12.234a.5.5 0 0 0 .496-.438L14.933 9zM3.809 3.563A1.5 1.5 0 0 1 4.981 3h6.038a1.5 1.5 0 0 1 1.172.563l3.7 4.625a.5.5 0 0 1 .105.374l-.39 3.124A1.5 1.5 0 0 1 14.117 13H1.883a1.5 1.5 0 0 1-1.489-1.314l-.39-3.124a.5.5 0 0 1 .106-.374l3.7-4.625z"/>
                          </svg>
                      </div>
                      <div class="container text-center lead  d-print-none mb-3 text-center text-dark">
                          <a href="{{ route('inserir.processo')}}" class="text-secondary">Processo</a>
                      </div>
                      <div class="d-none d-print-block"></div>
                      <div class="d-print-none text-center text-dark">Adicione os resumos de seus processos e consulte a qualquer hora.</div>
                </div>
                <div class="col-sm">
                  <div class="container text-center lead d-none d-lg-block d-print-block mb-3 text-center text-dark">
                      <svg xmlns="http://www.w3.org/2000/svg" width="25" height="26" fill="currentColor" class="bi bi-calendar-date" viewBox="0 0 16 16">
                          <path d="M6.445 11.688V6.354h-.633A12.6 12.6 0 0 0 4.5 7.16v.695c.375-.257.969-.62 1.258-.777h.012v4.61h.675zm1.188-1.305c.047.64.594 1.406 1.703 1.406 1.258 0 2-1.066 2-2.871 0-1.934-.781-2.668-1.953-2.668-.926 0-1.797.672-1.797 1.809 0 1.16.824 1.77 1.676 1.77.746 0 1.23-.376 1.383-.79h.027c-.004 1.316-.461 2.164-1.305 2.164-.664 0-1.008-.45-1.05-.82h-.684zm2.953-2.317c0 .696-.559 1.18-1.184 1.18-.601 0-1.144-.383-1.144-1.2 0-.823.582-1.21 1.168-1.21.633 0 1.16.398 1.16 1.23z"/>
                          <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"/>
                      </svg>
                  </div>
                  <div class="container text-center lead  d-print-none mb-3 text-center text-dark">
                      <a href="{{  route('agenda.create')   }}" class="text-secondary">Horário</a>
                  </div>
                  <div class="d-none d-print-block"></div>
                  <div class="d-print-none text-center text-dark">Marque na agenda o horário de suas audiências.</div>
      
                </div>
              </div>
          </div>
          <div class="container mt-4">
              <div class="row">
                <div class="col-sm">
                        <div class="container text-center lead d-none d-lg-block d-print-block mb-3 text-center text-dark">
                          <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                              <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                          </svg>
                      </div>
                      <div class="container text-center lead  d-print-none mb-3 text-center text-dark">
                          <a href="{{ route('admin.processo')}}" class="text-secondary">Processos</a>
                      </div>
                      <div class="d-none d-print-block"></div>
                      <div class="d-print-none text-center text-dark">Leia o resumo de seus processos para relembrar determinado assunto.</div>
                </div>
                <div class="col-sm">
                  <div class="container text-center lead d-none d-lg-block d-print-block mb-3 text-center text-dark">
                      <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-journal-text" viewBox="0 0 16 16">
                          <path d="M5 10.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z"/>
                          <path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z"/>
                          <path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z"/>
                        </svg>
                  </div>
                  <div class="container text-center lead  d-print-none mb-3 text-center text-dark">
                      <a href="{{ route('agenda.index') }}" class="text-secondary">Agenda</a>
                  </div>
                  <div class="d-none d-print-block"></div>
                  <div class="d-print-none text-center text-dark">Consulte data, local e horário de suas audiências agendadas.</div>
                </div>
              </div>
          </div>
        </div>
    </div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>


