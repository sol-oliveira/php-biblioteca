@extends('layout.site')

@section('titulo','Biblioteca')

@section('conteudo')
  <div class="container">
    <h3 class="center">Entrar</h3>
    <div class="row">
      <form class="" action="{{route('site.login.entrar')}}" method="post">
        {{ csrf_field() }}

        <div class="input-field">
          <input type="email" name="email" required>
          <label>Email</label>
        </div>
        <div class="input-field">
          <input type="password" name="senha" required>
          <label>Senha</label>
        </div>

        <button class="btn deep-orange lighten-2">Entrar</button>
      </form>
    </div>
  </div>
  

@endsection
