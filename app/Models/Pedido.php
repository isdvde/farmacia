<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $id_farmacia
 * @property int $id_laboratorio
 * @property int $id_empleado
 * @property string $forma_pago
 * @property Farmacia $farmacia
 * @property Laboratorio $laboratorio
 * @property Empleado $empleado
 * @property Compra[] $compras
 * @property PedidoMedicamento[] $pedidoMedicamentos
 */
class Pedido extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['id_farmacia', 'id_laboratorio', 'id_empleado', 'forma_pago'];

    /**
     * Indicates if the model should be timestamped.
     * 
     * @var bool
     */
    public $timestamps = false;

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function farmacia()
    {
        return $this->belongsTo('App\Models\Farmacia', 'id_farmacia');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function laboratorio()
    {
        return $this->belongsTo('App\Models\Laboratorio', 'id_laboratorio');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function empleado()
    {
        return $this->belongsTo('App\Models\Empleado', 'id_empleado', 'ci');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function compras()
    {
        return $this->hasMany('App\Models\Compra', 'id_pedido');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function pedidoMedicamentos()
    {
        return $this->hasMany('App\Models\PedidoMedicamento', 'id_pedido');
    }
}
