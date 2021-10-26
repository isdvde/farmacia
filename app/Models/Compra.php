<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $id_pedido
 * @property string $vencimiento
 * @property boolean $cancelado
 * @property Pedido $pedido
 * @property CompraMedicamento[] $compraMedicamentos
 */
class Compra extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['id_farmacia','id_pedido', 'vencimiento', 'cancelado'];

    /**
     * Indicates if the model should be timestamped.
     * 
     * @var bool
     */
    public $timestamps = false;

    public function farmacia()
    {
        return $this->belongsTo('App\Models\Farmacia', 'id_farmacia');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function pedido()
    {
        return $this->belongsTo('App\Models\Pedido', 'id_pedido');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function compraMedicamentos()
    {
        return $this->hasMany('App\Models\CompraMedicamento', 'id_compra');
    }
}
