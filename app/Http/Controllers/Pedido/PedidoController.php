<?php

namespace Bakery\Http\Controllers\Pedido;

use Bakery\DetallePedido;
use Bakery\Pedido;
use Illuminate\Http\Request;

use Bakery\Http\Requests;
use Bakery\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class PedidoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function index()
    {
        if (Auth::user()->is_admin){
            $pedidos = Pedido::with('user','detallePedidos.producto')->get();
            return view('pedidos.admin-pedido',compact('pedidos'));
        }

        $pedidos= Pedido::with('detallePedidos.producto')->where('user_id',Auth::user()->id)->get();

        return view('pedidos.cliente-pedido',compact('pedidos'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        if ($request->ajax()) {
            if (\Session::has('cart')) {
                $pedido = Pedido::create([
                    'user_id' => Auth::user()->id,
                    'total' => $request->get('total')
                ]);

                $total = 0;
                $cart = \Session::get('cart');
                foreach ($cart as $item) {
                    $total += $item->precio_es * $item->cantidad;
                    DetallePedido::create([
                        'producto_id' => $item->id,
                        'pedido_id' => $pedido->id,
                        'cantidad' => $item->cantidad,
                    ]);
                }
                \Session::forget('cart');
                return response()->json($pedido, 201);
            }
            return response()->json('No permitido', 403);
        }
//        abort(403);


    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $pedido = Pedido::findOrFail($id);
        if ($pedido->estado == 'entregado'){
            $pedido->estado = 'espera';
        }else{
            $pedido->estado = 'entregado';
        }
        $pedido->save();
        return  redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        dd($id);
    }
}
