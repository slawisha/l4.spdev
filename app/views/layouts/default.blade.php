<!DOCTYPE html>
<html>
  <head>
    <title>Spdev</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/bootswatch/3.0.0/readable/bootstrap.min.css" rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}" >    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="../../assets/js/html5shiv.js"></script>
      <script src="../../assets/js/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="container">
    <header>
        <nav class="navbar navbar-default navbar-static-top" role="navigation">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Slaviša Petrović</a>
          </div>
          <ul class="menu pull-left">
                    <li>{{ HTML::decode(HTML::link('/', '<i class="icon-home icon-large"></i> Home')) }}</li>
                    <li>{{ HTML::decode(HTML::linkRoute('contact', '<i class="icon-envelope icon-large"></i> Contact')) }}</li>

          </ul>
          
          <ul class="menu pull-right menu-right">
           <li>{{ HTML::decode(HTML::link('http://twitter.com/slawisha75', '<i class="icon-twitter icon-large"></i> Follow Me')) }}</li>
            @if(Auth::check())
            <li>{{ HTML::decode(HTML::linkRoute('projects.index', '<i class="icon-book icon-large"></i> Projects')) }}</li> 
            <li>{{ HTML::decode(HTML::linkRoute('logout', '<i class="icon-off icon-large"></i> Logout')) }}</li> 
            @endif
          </ul>
            
        </nav>
        @yield('jumbotron')
    </header>   
      <div class="row">
        <div class="col-md-9 content">
          @if (Session::has('flash_message') )     
            <div class="alert alert-success col-md-3 col-md-offset-2">
                {{ Session::get('flash_message')}}
            </div>   
          @endif
          @yield('content')
        </div><!-- col-md-9 -->
        <aside class="col-md-3">
          @yield('aside')
        </aside><!-- col-md-3 -->
      </div><!-- end .row -->
     <footer class="navbar">
      <div class="col-md-12">
          <p>Slaviša Petrović &copy;{{ date('Y') }}</p>
        </div><!-- col-md-12 -->
     </footer> 
    </div><!-- end .container --> 
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script src="{{ URL::asset('js/script.js') }}"></script>
  </body>
</html>