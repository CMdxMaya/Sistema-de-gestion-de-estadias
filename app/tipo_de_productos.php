<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
 use Illuminate\Database\Eloquent\SoftDeletes;
class tipo_de_productos extends Model
{
		use SoftDeletes;

 protected $primaryKey = 'id_tipo_producto';
 protected $fillable=['id_tipo_producto','nombre','activo'];
   	protected $date=['deleted_at']; 

}
