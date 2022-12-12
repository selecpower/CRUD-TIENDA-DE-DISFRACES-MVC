<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Animador
 *
 * @property $id
 * @property $nombre
 * @property $email
 * @property $telefono
 * @property $disfraz
 * @property $address
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Animador extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'email' => 'required',
		'telefono' => 'required',
		'disfraz' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','email','telefono','disfraz','address'];



}
