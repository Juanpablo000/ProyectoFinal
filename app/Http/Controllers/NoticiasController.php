<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Noticias;

class NoticiasController extends Controller
{

    function show()
    {	
    	//mapeo para hacer un select
    	$noticias = Noticias::all();
    	//dd($noticias);
    	return view("home")->with("noticias",$noticias);
    	//vista se llama home, with es para que en la vista este disponible la variable noticias
    }
}
