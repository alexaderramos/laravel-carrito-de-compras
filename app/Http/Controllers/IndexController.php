<?php

namespace Bakery\Http\Controllers;

use Illuminate\Http\Request;
use Bakery\Producto;
use Bakery\Categoria;
use Bakery\Http\Requests;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $productos=Producto::paginate(8);
         $categorias=Categoria::paginate(0);
        return view('index',compact('productos','categorias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function contact()
    {
        return view('contact');
    }

    
}
