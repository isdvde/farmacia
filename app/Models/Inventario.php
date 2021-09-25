<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $id_farmacia
 * @property int $id_medicamento
 * @property int $cantidad
 * @property Farmacia $farmacia
 * @property Medicamento $medicamento
 */
class Inventario extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'inventario';

    /**
     * @var array
     */
    protected $fillable = ['id_farmacia', 'id_medicamento', 'cantidad'];

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
    public function medicamento()
    {
        return $this->belongsTo('App\Models\Medicamento', 'id_medicamento');
    }
}
