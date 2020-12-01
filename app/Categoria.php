<?php

namespace Bakery;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'categorias';

   	protected $primaryKey ='id';
   
    public $timestamps = false;
   
    protected $fillable = ['id','nombrec', 'descripcion'];

    public function productos()
    {
    	// hasMany(RelatedModel, foreignKeyOnRelatedModel = categoria_id, localKey = id)
    	$this->hasMany(Producto::class);
    }

}
