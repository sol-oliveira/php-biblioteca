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
   
      return redirect()->route('admin.reservas.listar');     
    }

    public function listar()
    {
      $usuario =  Auth::user()->id;

      if(Auth::user()->admin  == 'sim')
      {        
        $registros = Reserva::select('livros.*', 'reservas.status', 'reservas.id as idreserva', 'users.*' )->join('livros', 'reservas.livro', '=', 'livros.id')
        ->join('users', 'users.id', '=', 'reservas.usuario')->get(); 

        return view('admin.reservas.listar',compact('registros'));
      }
      
      $registros = Reserva::select('livros.*', 'reservas.status', 'reservas.id as idreserva' )->join('livros', 'reservas.livro', '=', 'livros.id')
      ->where('reservas.status', '!=', 'cancelada')
      ->where('reservas.usuario', '=', $usuario)->get(); 
      
      return view('admin.reservas.listar',compact('registros'));
    }   

    public function cancelar($id)
    {                    
      $reserva = Reserva::find($id);     
      $reserva->status = 'cancelada';      
      $reserva->save(); 

      return redirect()->route('admin.reservas.listar');
    } 

    public function finalizar($id)
    {                    
      $reserva = Reserva::find($id);     
      $reserva->status = 'finalizada';      
      $reserva->save(); 

      return redirect()->route('admin.reservas.listar');
    } 

}
