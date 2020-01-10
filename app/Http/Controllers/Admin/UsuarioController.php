<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;

class UsuarioController extends Controller
{
    public function index()
    {
      $registros = User::all();

      return view('admin.usuarios.index',compact('registros'));
    }

    public function adicionar()
    {
      return view('admin.usuarios.adicionar');
    }

    public function salvar(Request $req)
    {
      $dados = $req->all(); 

      $user = [
        'name' => $dados['name'],
        'email' => $dados['email'],
        'password' => bcrypt($dados['password']),
      ];  
       
      User::create($user);

      return redirect()->route('admin.usuarios');
    }

    public function editar($id)
    {
      $registro = User::find($id);

      return view('admin.usuarios.editar',compact('registro'));
    }

    public function atualizar(Request $req, $id)
    {
      $dados = $req->all();

      $user = User::where('id', $id)->first();   
      $user->name      = $dados['name'];
      $user->email     = $dados['email'];
      
      if($dados['password'] != ''){
        $user->password  = bcrypt($dados['password']); 
      } 

      $user->save();

      return redirect()->route('admin.usuarios');
    }

    public function deletar($id)
    {
      User::find($id)->delete();

      return redirect()->route('admin.usuarios');
    }

}
