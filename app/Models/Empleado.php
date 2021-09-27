<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

/**
 * @property int $ci
 * @property int $id_farmacia
 * @property string $nombre
 * @property string $apellido
 * @property int $edad
 * @property string $cargo
 * @property string $telefono
 * @property Farmacia $farmacia
 * @property Pasantia $pasantia
 * @property Pedido[] $pedidos
 * @property Titulo $titulo
 */
class Empleado extends Model
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
	protected $fillable = ['ci','id_farmacia', 'nombre', 'apellido', 'edad', 'cargo', 'telefono'];

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
	 * @return \Illuminate\Database\Eloquent\Relations\HasOne
	 */
	public function pasantia()
	{
		return $this->hasOne('App\Models\Pasantia', 'ci', 'ci');
	}

	/**
	 * @return \Illuminate\Database\Eloquent\Relations\HasMany
	 */
	public function pedidos()
	{
		return $this->hasMany('App\Models\Pedido', 'id_empleado', 'ci');
	}

	/**
	 * @return \Illuminate\Database\Eloquent\Relations\HasOne
	 */
	public function titulo()
	{
		return $this->hasOne('App\Models\Titulo', 'ci', 'ci');
	}
}
