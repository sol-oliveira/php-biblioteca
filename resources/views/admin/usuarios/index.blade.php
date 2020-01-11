@extends('layout.site')

@section('titulo','Biblioteca')

@section('conteudo')
  <div class="container">
    <h3 class="center">Listar Usuários</h3>
    <div class="row">
      <table>
        <thead>
          <tr>
            <th>Id</th>
            <th>Nome</th>   
            <th>E-mail</th> 
            <th>Admin</th>                       
            <th>Ação</th>
          </tr>
        </thead>
        <tbody>      
          @foreach($registros as $registro)
            <tr>
              <td>{{ $registro->id }}</td>
              <td>{{ $registro->name }}</td>
              <td>{{ $registro->email }}</td> 
              <td>{{ $registro->admin }}</td>                  
              <td>
                <a class="btn deep-orange lighten-2" href="{{ route('admin.usuarios.editar',$registro->id) }}">Editar</a>
                <a class="btn red" href="{{ route('admin.usuarios.deletar',$registro->id) }}">Deletar</a>
              </td>
            </tr>
          @endforeach         
        </tbody>
      </table>
    </div>
    <div class="row">
      <a class="btn deep-orange lighten-2" href="{{ route('admin.usuarios.adicionar') }}">Adicionar</a>
    </div>
  </div>

@endsection
