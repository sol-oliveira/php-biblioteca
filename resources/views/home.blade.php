
@extends('layout.site')

@section('titulo','Biblioteca')

@section('conteudo')
  <div class="container">
    <h3 class="center"></h3>
    <div class="row  ">
        <div class="col s12 m4 ">
          <div style="margin-top:100px" class="card deep-orange lighten-4">
            <div class="card-image" >
              <img height="560" src="{{ asset('img/imagem_4.jpg') }}">
            </div>           
          </div>
        </div> 
        <div class="col s12 m4">
          <div style="margin-top:100px" class="card deep-orange lighten-4 ">
            <div class="card-image" >
              <img height="560" src="{{ asset('img/imagem_2.jpeg') }}">
            </div>          
          </div>
        </div> 
        <div class="col s12 m4">
          <div style="margin-top:100px" class="card deep-orange lighten-4">
            <div class="card-image" >
              <img  height="560"  src="{{ asset('img/imagem_3.jpeg') }}">
            </div>           
          </div>
        </div>    
    </div>
  </div>


@endsection
