<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
    protected $dates = ['fecha'];
    //relacion de libro a categoria
    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }    
    //relacion con la tabla pivote con la tabla etiqueta-libro
    //relacion muchos a muchos 
    public function etiquetas()
    {
    	return $this->belongsToMany(Etiqueta::class);
	}
}
