<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Livro;
use App\Reserva;
use Auth;

class ReservaController extends Controller
{
    
    public function index()
    {
      $registros = Livro::all();
      return view('admin.reservas.index',compact('registros'));
    }

    public function salvar($id)
    {
      $dados = [
        'usuario' => Auth::user()->id,
        'livro' => $id,
        'status' => 'em andamento',
      ]; 

      Reserva::create($dados);
     // fazer view minhas reservas
      return redirect()->route('admin.reservas');
     
    }

}
