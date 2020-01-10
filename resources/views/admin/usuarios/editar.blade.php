@extends('layout.site')

@section('titulo','Biblioteca')

@section('conteudo')
  <div class="container">
    <h3 class="center">Editando Usuários</h3>
    <div class="row">
      <form class="" action="{{route('admin.usuarios.atualizar',$registro->id)}}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <input type="hidden" name="_method" value="put">
        @include('admin.usuarios._form')
        <button class="btn deep-orange">Atualizar</button>
      </form>
    </div>
  </div>

@endsection
