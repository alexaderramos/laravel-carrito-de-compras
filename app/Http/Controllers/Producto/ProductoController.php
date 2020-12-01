<?php

namespace Bakery\Http\Controllers\Producto;

use Illuminate\Http\Request;
use Bakery\Categoria;
use Bakery\Producto;
use Bakery\Http\Requests;
use Bakery\Http\Controllers\Controller;

class ProductoController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productos=Producto::ProductosAll();
        return view('producto.index',compact('productos'));
    }

 
    /**
     
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias=Categoria::lists('nombrec','id');
        return view('producto.create',compact('categorias'));
    }

    // public function destroy($id)
    // {
        // $productos = Producto::find($id);
        // $productos->delete();
        // return redirect('/admin/producto');
    // }


    public function eliminar($id)
    {
        $productos = Producto::find($id);
        $productos->delete();
        return view('producto.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Producto::create($request->all());
        return redirect('/admin/producto');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function show($id)
    {
         // $productos=Producto::find($id);
         // return view('producto.show',compact('productos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
}
