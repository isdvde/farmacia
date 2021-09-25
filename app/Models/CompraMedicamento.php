<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $id_compra
 * @property int $id_medicamento
 * @property Compra $compra
 * @property Medicamento $medicamento
 */
class CompraMedicamento extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'compra_medicamento';

    /**
     * @var array
     */
    protected $fillable = ['id_compra', 'id_medicamento'];

    /**
     * Indicates if the model should be timestamped.
     * 
     * @var bool
     */
    public $timestamps = false;

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function compra()
    {
        return $this->belongsTo('App\Models\Compra', 'id_compra');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function medicamento()
    {
        return $this->belongsTo('App\Models\Medicamento', 'id_medicamento');
    }
}
