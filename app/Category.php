<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{//definir modelo
    protected $table = "categories";	//se crea el atributo
    protected $fillable = ['name'];				//filabol: campo filabol son los campos permitidos para mostrar los objetos json (que cmpos pueden ser mostrados)

    /*Uso de relaciones*/
    public function articles()
    {
    	return $this->hasMany('App\Article');
    }
}
