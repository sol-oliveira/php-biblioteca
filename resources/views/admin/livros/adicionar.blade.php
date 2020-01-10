@extends('layout.site')

@section('titulo','Biblioteca')

@section('conteudo')
  <div class="container">
    <h3 class="center">Adicionar Livros</h3>
    <div class="row">
      <form class="" action="{{route('admin.livros.salvar')}}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        @include('admin.livros._form')
        <button class="btn deep-orange">Salvar</button>
      </form>
    </div>
  </div>




@endsection
