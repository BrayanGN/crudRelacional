<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Programa
 *
 * @property $id
 * @property $area
 * @property $modalidad
 * @property $tipo_programa
 * @property $created_at
 * @property $updated_at
 *
 * @property Ficha[] $fichas
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Programa extends Model
{
    
    static $rules = [
		'area' => 'required',
		'modalidad' => 'required',
		'tipo_programa' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['area','modalidad','tipo_programa'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function fichas()
    {
        return $this->hasMany('App\Ficha', 'programa_id', 'id');
    }
    

}
