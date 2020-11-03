<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Noticias;
use DB;

class EntradaController extends Controller
{
	public function show($id)
    {
	     $noticia = Noticias::where('id',$id)->firstOrfail();
	     return view("entrada")->with("noticia",$noticia);
    }
}

/*cada controldador debe tener un modelo enlazado, el modelo se relaciona con la BD*/