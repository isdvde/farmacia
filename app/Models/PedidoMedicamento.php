<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $id_pedido
 * @property int $id_medicamento
 * @property Pedido $pedido
 * @property Medicamento $medicamento
 */
class PedidoMedicamento extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'pedido_medicamento';

    /**
     * @var array
     */
    protected $fillable = ['id_pedido', 'id_medicamento','cantidad'];


    /**
     * Indicates if the model should be timestamped.
     * 
     * @var bool
     */
    public $timestamps = false;

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function pedido()
    {
        return $this->belongsTo('App\Models\Pedido', 'id_pedido');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function medicamento()
    {
        return $this->belongsTo('App\Models\Medicamento', 'id_medicamento');
    }
}
w