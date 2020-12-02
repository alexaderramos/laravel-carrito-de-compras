<?php

namespace Bakery;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    protected $fillable = [
      'estado','user_id','total'
    ];

    public function detallePedidos()
    {
        return $this->hasMany(DetallePedido::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
