<!DOCTYPE html>
<html>
<head>
  <title>@yield('titulo')</title>
  <!--Import Google Icon Font-->
  <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/css/materialize.min.css">
  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
   <!-- javascript-->
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.5/angular.min.js"></script>
</head>
<body>
<header>
  <nav>
   <div class="nav-wrapper deep-orange lighten-2">
     <div class="container">
       <a href="#!" class="brand-logo">Biblioteca</a>
       <a href="#" data-activates="mobile" class="button-collapse"><i class="material-icons">menu</i></a>
       <ul class="right hide-on-med-and-down">
         <li><a href="/">Home</a></li>
         @if(Auth::guest())
           <li><a href="{{route('site.login')}}">Login</a></li>
         @else
          @if(Auth::user()->admin == "nao")
            <li><a href="{{route('admin.reservas')}}">Livros</a></li>
          @else
            <li><a href="{{route('admin.usuarios')}}">Usuários</a></li>
            <li><a href="{{route('admin.livros')}}">Livros</a></li>          
          @endif
            <li><a href="{{route('admin.reservas.listar')}}">Reservas</a></li>                     
            <li><a href="{{route('admin.usuarios.editar', Auth::user()->id)}}">{{Auth::user()->name}}</a></li>
            <li><a href="{{ route('site.login.sair') }}">Sair</a></li>
         @endif
       </ul>

       <ul class="side-nav" id="mobile">
         <li><a href="/">Home</a></li>
         @if(Auth::guest())
           <li><a href="{{route('site.login')}}">Login</a></li>
         @else
          @if(Auth::user()->admin == "nao")
            <li><a href="{{route('admin.reservas')}}">Livros</a></li>
          @else
            <li><a href="{{route('admin.usuarios')}}">Usuários</a></li>
            <li><a href="{{route('admin.livros')}}">Livros</a></li>           
          @endif
            <li><a href="{{route('admin.reservas.listar')}}">Listar Reservas</a></li>                     
            <li><a href="{{route('admin.usuarios.editar', Auth::user()->id)}}">{{Auth::user()->name}}</a></li>
            <li><a href="{{ route('site.login.sair') }}">Sair</a></li>
         @endif
       </ul>
     </div>
   </div>
 </nav>
</header>
