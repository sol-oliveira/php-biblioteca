<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Livro;
use App\Reserva;
use Auth;

class LivroController extends Controller
{
    public function index()
    {
      $registros = Livro::all();
      return view('admin.livros.index',compact('registros'));
    }
    public function adicionar()
    {
      return view('admin.livros.adicionar');
    }
    public function salvar(Request $req)
    {
      $dados = $req->all();

      if(isset($dados['publicado'])){
        $dados['publicado'] = 'sim';
      }else{
        $dados['publicado'] = 'nao';
      }

      if($req->hasFile('imagem')){
        $imagem = $req->file('imagem');
        $num = rand(1111,9999);
        $dir = "img/cursos/";
        $ex = $imagem->guessClientExtension();
        $nomeImagem = "imagem_".$num.".".$ex;
        $imagem->move($dir,$nomeImagem);
        $dados['imagem'] = $dir."/".$nomeImagem;
      }

      Livro::create($dados);

      return redirect()->route('admin.livros');

    }

    public function editar($id)
    {
      $registro = Livro::find($id);
      return view('admin.livros.editar',compact('registro'));
    }
    public function atualizar(Request $req, $id)
    {
      $dados = $req->all();

      if(isset($dados['publicado'])){
        $dados['publicado'] = 'sim';
      }else{
        $dados['publicado'] = 'nao';
      }

      if($req->hasFile('imagem')){
        $imagem = $req->file('imagem');
        $num = rand(1111,9999);
        $dir = "img/cursos/";
        $ex = $imagem->guessClientExtension();
        $nomeImagem = "imagem_".$num.".".$ex;
        $imagem->move($dir,$nomeImagem);
        $dados['imagem'] = $dir."/".$nomeImagem;
      }

      Livro::find($id)->update($dados);

      return redirect()->route('admin.livros');

    }

    public function deletar($id)
    {
      Livro::find($id)->delete();
      return redirect()->route('admin.livros');
    }  

}
