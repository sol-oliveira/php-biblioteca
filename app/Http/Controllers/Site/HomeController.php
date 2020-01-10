<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Livro;

class HomeController extends Controller
{
    public function index()
    {
      $livros = Livro::all();
      return view('home',compact('livros'));
    }
}
