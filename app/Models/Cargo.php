<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Cargo
 * 
 * @property int $cargo_id
 * @property int $id_departamento
 * @property string $cargo_precedente
 * @property string $nombre
 * @property string $descripcion
 * @property string $localizacion_dpto
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Departamento $departamento
 *
 * @package App\Models
 */
class Cargo extends Model
{
	protected $table = 'cargos';
	protected $primaryKey = 'cargo_id';

	protected $casts = [
		'id_departamento' => 'int'
	];

	protected $fillable = [
		'id_departamento',
		'cargo_precedente',
		'nombre',
		'descripcion',
		'localizacion_dpto'
	];

	public function departamento()
	{
		return $this->belongsTo(Departamento::class, 'id_departamento');
	}
}
