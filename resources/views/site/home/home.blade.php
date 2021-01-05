<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title>Lawyer - Início</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="{{ url('assets/materialize/css/materialize.css') }}" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="{{ url('assets/materialize/css/style.css') }}" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
  <nav class="white" role="navigation">
    <div class="nav-wrapper container">
      <a id="logo-container" href="#" class="brand-logo">Lawyer</a>
      <ul class="right hide-on-med-and-down">
		<li><a href="{{ route('login') }}">{{ __('Login') }}</a></li>
		<li><a href="{{ route('register') }}">{{ __('Register') }}</a></li>
      </ul>

      <ul id="nav-mobile" class="sidenav">
		<li><a href="{{ route('login') }}">{{ __('Login') }}</a></li>
		<li><a href="{{ route('register') }}">{{ __('Register') }}</a></li>
      </ul>
      <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    </div>
  </nav>

  <div id="index-banner" class="parallax-container">
    <div class="section no-pad-bot">
      <div class="container">
        <br><br>
        <h1 class="header center brown-text text-lighten-2">Lawyer</h1>
        <div class="row center">
          <h5 class="header col s12 light">A modern platform for lawyers</h5>
        </div>
        <div class="row center">
          <a href="{{ route('login') }}" id="download-button" class="btn-large waves-effect waves-light brown lighten-1">Get Started</a>
        </div>
        <br><br>

      </div>
    </div>
    <div class="parallax"><img src="{{ url ('assets/materialize/images/background1.jpg') }}" alt="Unsplashed background img 1"></div>
  </div>


  <div class="container">
    <div class="section">

      <!--   Icon Section   -->
      <div class="row">
        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center brown-text"><i class="material-icons">work</i></h2>
            <h5 class="center">Speeds up work</h5>

            <p class="light">You will have access to the summary of your processes, making it easier to remember a certain topic without having to read the whole process again.</p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center brown-text"><i class="material-icons">group</i></h2>
            <h5 class="center">User Experience Focused</h5>

            <p class="light">The platform has a modern and agile design, being able to be accessed from several devices without losing its beautiful layout.</p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center brown-text"><i class="material-icons">settings</i></h2>
            <h5 class="center">Easy to work with</h5>

            <p class="light">We offer an easy-to-use system to streamline the busy life of lawyers and make everything a little easier.</p>
          </div>
        </div>
      </div>

    </div>
  </div>


  <div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      <div class="container">
        <div class="row center">
          <h5 class="header col s12 light">Consult the summary of your processes anytime and on any device.</h5>
        </div>
      </div>
    </div>
    <div class="parallax"><img src="{{ url ('assets/materialize/images/background2.jpg') }}" alt="Unsplashed background img 2"></div>
  </div>

  <div class="container">
    <div class="section">

      <div class="row">
        <div class="col s12 center">
          <h3><i class="mdi-content-send brown-text"></i></h3>
          <h4>Platform objective</h4>
          <p class="left-align light">Lawyers need to read the entire process again to find a specific topic and clear that doubt. With the Lawyer platform, we simplify all this, because through it you can have summaries of your cases, in addition to having the option to register your agenda to access the times and locations of the hearings. Come and be a Lawyer!</p>
        </div>
      </div>

    </div>
  </div>


  <div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      <div class="container">
        <div class="row center">
          <h5 class="header col s12 light">Simplify your hard work</h5>
        </div>
      </div>
    </div>
    <div class="parallax"><img src="{{ url ('assets/materialize/images/background3.jpg') }}" alt="Unsplashed background img 3"></div>
  </div>

  <footer class="page-footer grey darken-3">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">Developer platform Lawyer Bio</h5>
          <p class="grey-text text-lighten-4">Willy Pardim, Graduated in Analysis and Systems Development.</p>
		  <p class="grey-text text-lighten-4">Web developer.</p>


        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Contatos</h5>
          <ul>
            <li><a class="white-text" href="https://github.com/willypardim">Github</a></li>
            <li><a class="white-text" href="https://www.linkedin.com/in/willy-pardim-684868195/">Linkedin</a></li>
          </ul>
        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Thank you!</h5>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
		Layout of this page made by <a class="brown-text text-lighten-3" href="http://materializecss.com">Materialize</a>
      </div>
    </div>
  </footer>


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="{{ url('assets/materialize/js/materialize.js') }}"></script>
  <script src="{{ url('assets/materialize/js/init.js') }}"></script>

  </body>
</html>
