<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $ci
 * @property string $institucion
 * @property string $especialidad
 * @property string $f_inicio
 * @property string $f_final
 * @property int $n_permiso
 * @property boolean $minoria_edad
 * @property boolean $activo
 * @property Empleado $empleado
 * @property Responsable $responsable
 */
class Pasantia extends Model
{
    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'ci';

    /**
     * Indicates if the IDs are auto-incrementing.
     * 
     * @var bool
     */
    public $incrementing = false;

    /**
     * @var array
     */
    protected $fillable = ['ci','institucion', 'especialidad', 'f_inicio', 'f_final', 'n_permiso', 'minoria_edad', 'activo'];

    /**
     * Indicates if the model should be timestamped.
     * 
     * @var bool
     */
    public $timestamps = false;

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function empleado()
    {
        return $this->belongsTo('App\Models\Empleado', 'ci', 'ci');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function responsable()
    {
        return $this->hasOne('App\Models\Responsable', 'ci', 'ci');
    }
}
