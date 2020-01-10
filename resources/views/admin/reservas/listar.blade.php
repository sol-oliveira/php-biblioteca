@extends('layout.site')

@section('titulo','Biblioteca')

@section('conteudo')
  <div class="container">
    <h3 class="center">Reservas</h3>
    <div class="row">
      <table>
        <thead>
          <tr>
            <th>Id</th>
            <th>Título</th>            
            <th>Imagem</th> 
            <th>Status</th> 
            <th>Data</th>    
            <th>Ação</th>
          </tr>
        </thead>
        <tbody>      
          @foreach($registros as $registro)
            <tr>
              <td>{{ $registro->idreserva }}</td>
              <td>{{ $registro->titulo }}</td>             
              <td><img height="60" src="{{asset($registro->imagem)}}" alt="{{ $registro->titulo }}" /></td>             
              <td>{{ $registro->status }}</td>
              <td>{{ $registro->created_at->format('d m Y ') }}</td>
              <td>
                <a class="btn deep-orange lighten-2" href="{{ route('admin.reservas.deletar',$registro->idreserva) }}">Cancelar</a>              
              </td>
            </tr>
          @endforeach         
        </tbody>
      </table>
    </div>
  </div>

@endsection
