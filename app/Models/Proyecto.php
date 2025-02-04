<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Proyecto
 *
 * @property $id
 * @property $titulo
 * @property $tipo
 * @property $estudiante
 * @property $director
 * @property $evaluador1
 * @property $evaluador2
 * @property $fechainicio
 * @property $fechafin
 * @property $estado
 * @property $observaciones
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Proyecto extends Model
{
    
    static $rules = [
		'titulo' => 'required',
		'tipo' => 'required',
		'estudiante' => 'required',
		'director' => 'required',
		'evaluador1' => 'required',
		'evaluador2' => 'required',
		'fechainicio' => 'required',
		'fechafin' => 'required',
		'estado' => 'required',
		'observaciones' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['titulo','tipo','estudiante','director','evaluador1','evaluador2','fechainicio','fechafin','estado','observaciones'];



}
