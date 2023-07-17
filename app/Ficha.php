<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Ficha
 *
 * @property $id
 * @property $ficha_numero
 * @property $duracion
 * @property $modalidad
 * @property $fecha_inicio
 * @property $fecha_fin
 * @property $programa_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Aprendice[] $aprendices
 * @property Programa $programa
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Ficha extends Model
{
    
    static $rules = [
		'ficha_numero' => 'required',
		'duracion' => 'required',
		'modalidad' => 'required',
		'fecha_inicio' => 'required',
		'fecha_fin' => 'required',
		'programa_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['ficha_numero','duracion','modalidad','fecha_inicio','fecha_fin','programa_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function aprendices()
    {
        return $this->hasMany('App\Aprendice', 'f_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function programa()
    {
        return $this->hasOne('App\Programa', 'id', 'programa_id');
    }
    

}
