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
            <th>Disponível</th>
            <th>Ação</th>
          </tr>
        </thead>
        <tbody>      
          @foreach($registros as $registro)
            <tr>
              <td>{{ $registro->id }}</td>
              <td>{{ $registro->titulo }}</td>             
              <td><img height="60" src="{{asset($registro->imagem)}}" alt="{{ $registro->titulo }}" /></td>
              <td class="text-center">{{ $registro->quantidade }}</td> 
              <td class="text-center">{{ $registro->disponivel }}</td>
              <td>
                <a class="btn deep-orange lighten-2" href="{{ route('admin.livros.editar',$registro->id) }}">Editar</a>
                <a {{$registro->quantidade ==  $registro->disponivel ? 'disabled': ''}} class="btn deep-orange lighten-3" href="{{ route('admin.livros.disponibilizar',$registro->id) }}">Disponibilizar</a>
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
