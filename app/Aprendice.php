<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Aprendice
 *
 * @property $id
 * @property $identificacion
 * @property $nombres
 * @property $apellidos
 * @property $email
 * @property $telefono
 * @property $f_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Ficha $ficha
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Aprendice extends Model
{
    
    static $rules = [
		'identificacion' => 'required',
		'nombres' => 'required',
		'apellidos' => 'required',
		'email' => 'required',
		'f_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['identificacion','nombres','apellidos','email','telefono','f_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function ficha()
    {
        return $this->hasOne('App\Ficha', 'id', 'f_id');
    }
    

}
