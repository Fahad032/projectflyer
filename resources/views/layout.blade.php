<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>ProjectFlyer</title>
	<link rel="stylesheet" href="{{ asset('css/app.css') }}" type="text/css" media="screen" title="no title" charset="utf-8"/>
	<link rel="stylesheet" href="{{ asset('lib/sweetalert.css') }}" type="text/css" media="screen" title="no title" charset="utf-8"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/dropzone.css" type="text/css" media="screen" title="no title" charset="utf-8"/>	
	<link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css" media="screen" title="no title" charset="utf-8"/>
	
	
	<script src="{{ asset('js/jquery.js') }}" type="text/javascript" charset="utf-8"></script>
	<script src="{{ asset('lib/sweetalert.min.js') }}" type="text/javascript" charset="utf-8"></script>	
	<script src="{{ asset('js/bootstrap.min.js') }}" type="text/javascript" charset="utf-8"></script>
</head>
<body>
	<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">ProjectFlyer</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="../flyers/create">Create A Flyer</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
          
          @if(\Auth::check())
	
	          <p class="navbar-text navbar-right">Hi, {{ \Auth::user()->name }}</p>

          @endif
        </div><!--/.nav-collapse -->
      </div>
    </nav>
    
    <section>
		@yield('layout')
    	
    </section>
    
    
    @yield('external_script')
	
	
	
</body>
</html>