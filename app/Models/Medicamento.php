<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * @property int $id
 * @property string $monodroga
 * @property string $presentacion
 * @property string $accion
 * @property int $precio
 * @property CompraMedicamento[] $compraMedicamentos
 * @property Inventario[] $inventarios
 * @property LaboratorioMedicamento[] $laboratorioMedicamentos
 * @property PedidoMedicamento[] $pedidoMedicamentos
 */
class Medicamento extends Model
{
    use HasFactory;
    /**
     * @var array
     */
    protected $fillable = ['monodroga', 'presentacion', 'accion', 'precio'];

    /**
     * Indicates if the model should be timestamped.
     * 
     * @var bool
     */
    public $timestamps = false;

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function compraMedicamentos()
    {
        return $this->hasMany('App\Models\CompraMedicamento', 'id_medicamento');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function inventarios()
    {
        return $this->hasMany('App\Models\Inventario', 'id_medicamento');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function laboratorioMedicamentos()
    {
        return $this->hasMany('App\Models\LaboratorioMedicamento', 'id_medicamento');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function pedidoMedicamentos()
    {
        return $this->hasMany('App\Models\PedidoMedicamento', 'id_medicamento');
    }
}
