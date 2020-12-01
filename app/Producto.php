<?php

namespace Bakery;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use DB;


class Producto extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'productos';
    protected $primaryKey = 'id';

    public $timestamps = false;

    protected $fillable = [
        'nombre',
        'descripcion',
        'stock',
        'precio_es',
        'categoria_id',
        'foto'
    ];


    /**
     * Producto has many Categoria.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    /**
     * Producto belongs to Categoria.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function categoria()
    {
        // belongsTo(RelatedModel, foreignKey = categoria_id, keyOnRelatedModel = id)
        return $this->belongsTo(Categoria::class, 'categoria_id', 'id');
    }

    //mutador --> modificar el nombre de la foto antes de ser guardada 
    public function setfotoAttribute($foto)
    {
        $this->attributes['foto'] = Carbon::now()->second . '_' . $foto->getClientOriginalName();
        $name = Carbon::now()->second . '_' . $foto->getClientOriginalName();
        \Storage::disk('local')->put($name, \File::get($foto));
    }


    public static function ProductosAll()
    {
        //query builder
        return DB::table('productos')
            ->join('categorias', 'categorias.id', '=', 'productos.categoria_id')
            ->select('productos.*', 'categorias.nombrec')
            ->get();
    }


}
