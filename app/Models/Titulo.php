<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * @property int $ci
 * @property string $universidad
 * @property string $fecha
 * @property int $n_registro
 * @property int $p_sanitario
 * @property int $n_colegiatura
 * @property Empleado $empleado
 */
class Titulo extends Model
{
    use HasFactory;
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
    protected $fillable = ['ci','universidad', 'fecha', 'n_registro', 'p_sanitario', 'n_colegiatura'];


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
}
