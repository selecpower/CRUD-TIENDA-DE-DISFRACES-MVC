<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Atuendo
 *
 * @property $id
 * @property $modelo
 * @property $nombre
 * @property $talla
 * @property $precio
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Atuendo extends Model
{
    
    static $rules = [
		'modelo' => 'required',
		'nombre' => 'required',
		'talla' => 'required',
		'precio' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['modelo','nombre','talla','precio'];



}
