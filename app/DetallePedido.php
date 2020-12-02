<?php

namespace Bakery;

use Illuminate\Database\Eloquent\Model;

class DetallePedido extends Model
{
    protected $fillable=[
        'producto_id',
        'pedido_id',
        'cantidad',
    ];

    public function pedido()
    {
        return $this->belongsTo(Pedido::class);
    }

    public function producto()
    {
        return $this->belongsTo(Producto::class);
    }
}
