@extends('layout.site')

@section('titulo','Biblioteca')

@section('conteudo')
  <div class="container">
    <h3 class="center">Livros</h3>
    <div class="row">
      <table>
        <thead>
          <tr>
            <th>Id</th>
            <th>Título</th>            
            <th>Imagem</th>
            <th>Quantidade</th>
            <th>Publicado</th>
            <th>Ação</th>
          </tr>
        </thead>
        <tbody>      
          @foreach($registros as $registro)
            <tr>
              <td>{{ $registro->id }}</td>
              <td>{{ $registro->titulo }}</td>             
              <td><img height="60" src="{{asset($registro->imagem)}}" alt="{{ $registro->titulo }}" /></td>
              <td>{{ $registro->quantidade }}</td> 
              <td>{{ $registro->publicado }}</td>
              <td>
                <a class="btn deep-orange lighten-2" href="{{ route('admin.livros.editar',$registro->id) }}">Editar</a>
                <a class="btn red" href="{{ route('admin.livros.deletar',$registro->id) }}">Deletar</a>
              </td>
            </tr>
          @endforeach         
        </tbody>
      </table>
    </div>
    <div class="row">
      <a class="btn deep-orange lighten-2" href="{{ route('admin.livros.adicionar') }}">Adicionar</a>

    </div>

  </div>




@endsection
