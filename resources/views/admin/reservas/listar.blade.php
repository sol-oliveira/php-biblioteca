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
            <th>Data</th>
            @if(Auth::user()->admin == 'sim')
            <th>Nome</th> 
            <th>Email</th> 
            @endif
            <th>Status</th>       
            <th></th> 
            <th></th>          
            <th>Ação</th>
          </tr>
        </thead>
        <tbody>      
          @foreach($registros as $registro)
            <tr>
              <td>{{ $registro->idreserva }}</td>
              <td>{{ $registro->titulo }}</td>             
              <td><img height="60" src="{{asset($registro->imagem)}}" alt="{{ $registro->titulo }}" /></td>   
              <td>{{ $registro->created_at->format('d m Y ') }}</td>
              @if(Auth::user()->admin == 'sim')
              <td>{{$registro->name}}</td>
              <td>{{$registro->email}}</td>
              @endif
              <td>{{ $registro->status }}</td>
              <td></td>
              <td></td>
              <td>
              @if(Auth::user()->admin == 'sim')               
                <a {{$registro->status == 'finalizada' || $registro->status == 'cancelada' ? 'disabled': ''}} class="btn deep-orange lighten-2" href="{{ route('admin.reservas.finalizar',$registro->idreserva) }}">Finalizar</a>
               @endif
                <a {{$registro->status == 'finalizada' || $registro->status == 'cancelada'  ? 'disabled': ''}} class="btn red" href="{{ route('admin.reservas.cancelar',$registro->idreserva) }}">Cancelar</a>             
              </td>
              <td>
                            
              </td>
            </tr>
          @endforeach         
        </tbody>
      </table>
    </div>
  </div>

@endsection
