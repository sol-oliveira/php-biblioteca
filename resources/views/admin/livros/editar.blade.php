@extends('layout.site')

@section('titulo','Livros')

@section('conteudo')
  <div class="container">
    <h3 class="center">Editar Livros</h3>
    <div class="row">
      <form class="" action="{{route('admin.livros.atualizar',$registro->id)}}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <input type="hidden" name="_method" value="put">
        @include('admin.livros._form')
        <button class="btn deep-orange">Atualizar</button>
      </form>
    </div>
  </div>




@endsection
