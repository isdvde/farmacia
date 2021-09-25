<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $id_laboratorio
 * @property int $id_medicamento
 * @property Laboratorio $laboratorio
 * @property Medicamento $medicamento
 */
class LaboratorioMedicamento extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'laboratorio_medicamento';

    /**
     * @var array
     */
    protected $fillable = ['id_laboratorio', 'id_medicamento'];

    /**
     * Indicates if the model should be timestamped.
     * 
     * @var bool
     */
    public $timestamps = false;

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
    public function medicamento()
    {
        return $this->belongsTo('App\Models\Medicamento', 'id_medicamento');
    }
}
