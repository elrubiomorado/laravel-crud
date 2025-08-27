<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
class Post extends Model
{
    use HasFactory;

    // protected $table = 'posts';

    protected function casts():array
    {
        return [
            'published_at' => 'datetime',
            'is_active' => 'boolean'
        ];
    }
    //validamos los datos entrados para que sean iguales y no los escriba con la cola el usuario
    protected function title():Attribute
    {
        return Attribute::make(
            //cuando almacenamos
            set: function($value){
                return strtolower($value);
            },
            //cuando recuperamos, solo lo muestra, no modifica
            get: function($value){
                return ucfirst($value);
            }
        );
        
    }

}
