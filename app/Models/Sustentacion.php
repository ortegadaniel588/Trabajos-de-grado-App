<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Sustentacion
 *
 * @property $id
 * @property $trabajodegrado_id
 * @property $fecha
 * @property $hora
 * @property $lugar
 * @property $estado
 * @property $created_at
 * @property $updated_at
 *
 * @property Proyecto $proyecto
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Sustentacion extends Model
{
    
    static $rules = [
		'trabajodegrado_id' => 'required',
		'fecha' => 'required',
		'hora' => 'required',
		'lugar' => 'required',
		'estado' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['trabajodegrado_id','fecha','hora','lugar','estado'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function proyecto()
    {
        return $this->hasOne('App\Models\Proyecto', 'id', 'trabajodegrado_id');
    }
    

}
