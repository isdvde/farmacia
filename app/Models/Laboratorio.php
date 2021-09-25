<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $nombre
 * @property string $direccion
 * @property string $telefono
 * @property LaboratorioMedicamento[] $laboratorioMedicamentos
 * @property Pedido[] $pedidos
 */
class Laboratorio extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['nombre', 'direccion', 'telefono'];

    /**
     * Indicates if the model should be timestamped.
     * 
     * @var bool
     */
    public $timestamps = false;

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function laboratorioMedicamentos()
    {
        return $this->hasMany('App\Models\LaboratorioMedicamento', 'id_laboratorio');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function pedidos()
    {
        return $this->hasMany('App\Models\Pedido', 'id_laboratorio');
    }
}
