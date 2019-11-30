<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class peliculas extends Model
{
    protected $primaryKey = 'id_pelicula';  
  	protected $fillable=['id_pelicula','nombre','genero','artista'];
 
}
