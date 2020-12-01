<?php

namespace Bakery\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Bakery\Producto;
use Bakery\Http\Requests;

class CartController extends Controller
{
    public function __construct()
    {
    	if (!\Session::has('cart')) {
    		\Session::put('cart', array());
    	}
    }

    //show cart

    public function show()
    {	
    	$cart= \Session::get('cart');
    	$total=$this->total();
   		return view('cliente.cart',compact('cart', 'total'));
    }


    //add item
    public function add(Producto $product){
    	$cart =\Session::get('cart');
    	$product->cantidad=1;
    	$cart[$product->id]=$product;
    	\Session::put('cart', $cart);

    	return redirect()->route('cart-show');
    }

    //delete item

    public  function delete(Producto $product)
    {
    	$cart =\Session::get('cart');
    	unset($cart[$product->id]);
    	\Session::put('cart', $cart);

    	return redirect()->route('cart-show');
    }

    //update item
    public  function update(Producto $product, $cantidad)
    {
    	$cart =\Session::get('cart');
    	$cart[$product->id]->cantidad=$cantidad;
    	\Session::put('cart', $cart);

    	return redirect()->route('cart-show');
    }


    //tash cart
    public  function trash()
    {
    	\Session::forget('cart');
    	
    	return redirect()->route('cart-show');
    }


    //total

    private function total()
    {
    	$cart =\Session::get('cart');
    	$total=0;
    	foreach ($cart as $item ) {
    		$total+=$item->precio_es * $item->cantidad;
    	}

    	return $total;
    }

    //detaller de orden

    public function orderDetail()
    {
    	if (count(\Session::get('cart')) <= 0) {
    		return redirect()->route('cliente');
    	}
    	$cart = \Session::get('cart');
    	$total = $this->total();
    	return view('cliente.order-detail',compact('cart','total'));
    }
}
	