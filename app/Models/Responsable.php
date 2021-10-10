<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * @property int $ci
 * @property int $ci_representante
 * @property string $nombre
 * @property string $apellido
 * @property string $telefono
 * @property Pasantia $pasantia
 */
class Responsable extends Model
{
    use HasFactory;
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'responsable';

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
    protected $fillable = ['ci','ci_representante', 'nombre', 'apellido', 'telefono'];


    /**
     * Indicates if the model should be timestamped.
     * 
     * @var bool
     */
    public $timestamps = false;

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function pasantia()
    {
        return $this->belongsTo('App\Models\Pasantia', 'ci', 'ci');
    }
}
