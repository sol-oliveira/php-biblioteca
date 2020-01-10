@extends('layout.site')

@section('titulo','Biblioteca')

@section('conteudo')
  <div class="container">
    <h3 class="center">Lista de livros</h3>
    <div class="row">
      @foreach($livros as $livro)
        <div class="col s12 m4">
          <div class="card">
            <div class="card-image" >
              <img  src="{{asset($livro->imagem)}}">
            </div>
            <div class="card-content">
              <h4>{{$livro->titulo}}</h4>
              <p>{{$livro->quantidade}}</p>
            </div>
            <div class="card-action">
              <a href="#">Ver mais...</a>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </div>


@endsection
