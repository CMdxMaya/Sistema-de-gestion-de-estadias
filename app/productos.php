<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\SoftDeletes;

class productos extends Model
{

			use SoftDeletes;

    protected $primaryKey = 'id_producto';
 protected $fillable=['id_producto','nombrepro','descripcion','cantidad','costo','id_tipodeproducto','archivo','id_tipo_producto'];
 		 protected $date=['deleted_at']; 

}
 