@extends('layout.site')

@section('titulo','Biblioteca')

@section('conteudo')
  <div class="container">
    <h3 class="center">Listar Livros</h3>
    <div class="row">
      <table>
        <thead>
          <tr>
            <th>Id</th>
            <th>Título</th>            
            <th>Imagem</th>        
            <th class="text-center">Disponível</th>
            <th>Ação</th>
          </tr>
        </thead>
        <tbody>      
          @foreach($registros as $registro)
            <tr>
              <td>{{ $registro->id }}</td>
              <td>{{ $registro->titulo }}</td>             
              <td><img height="60" src="{{asset($registro->imagem)}}" alt="{{ $registro->titulo }}" /></td>             
              <td class="text-center">{{ $registro->disponivel }}</td>
              <td>
                <a {{$registro->disponivel == 0 ? 'disabled': ''}} class="btn deep-orange lighten-2" href="{{ route('admin.reservas.salvar',$registro->id) }}">Reservar</a>              
              </td>              
            </tr>
          @endforeach         
        </tbody>
      </table>
    </div>
  </div>

@endsection
