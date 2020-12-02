<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
//Publics

Route::group(['middleware'=>['web']], function ()
{
Route::get('/', 'IndexController@index');
Route::resource('contact','ContactController');
Route::resource('about','AboutController');
Route::resource('blog','BlogController');
Route::resource('carta','PortfolioController');	
});


Route::auth();

// Routes admin
Route::group(['middleware' => ['admin','auth']],function (){
	Route::get('admin','Admin\AdminController@index');
	Route::get('admin/cliente','Admin\AdminController@clientes');
	Route::resource('admin/producto','Producto\ProductoController');
	Route::resource('admin/categoria','Categoria\CategoriaController');
	Route::resource('admin/reportes','Reporte\ReporteController');

	Route::get('admin/producto/eliminar/{id}','Producto\ProductoController@delete')->name('admin.producto.delete');


    Route::get('admin/pedidos','Pedido\PedidoController@index')->name('admin.pedidos.index');
    Route::put('admin/pedidos/{id}','Pedido\PedidoController@update')->name('admin.pedidos.update');






});

Route::post('pedidos','Pedido\PedidoController@store')->name('pedidos.store');
Route::get('pedidos','Pedido\PedidoController@index')->name('pedidos.index');


//Routes carrito
Route::bind('product',function ($id)
{
	return Bakery\Producto::where('id',$id)->first();
});

Route::get('cart/show',[
	'as'=>'cart-show',
	'uses'=> 'CartController@show'
]);

Route::get('cart/add/{product}',[
	'as'=>'cart-add',
	'uses'=> 'CartController@add'
]);

Route::get('cart/delete/{product}',[
	'as'=>'cart-delete',
	'uses'=> 'CartController@delete'
]);

Route::get('cart/trash',[
	'as'=>'cart-trash',
	'uses'=> 'CartController@trash'
]);

Route::get('cart/update/{product}/{cantidad?}',[
	'as'=>'cart-update',
	'uses'=> 'CartController@update'
]);

Route::get('order-detail',[
	'as'=>'order-detail',
	'uses'=> 'CartController@orderDetail'
]);

//Routes cliente
Route::get('cliente','Cliente\ClienteController@index')->name('cliente.index');




