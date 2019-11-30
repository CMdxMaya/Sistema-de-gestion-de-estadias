<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class usuarios extends Model
{
	    use SoftDeletes;

    protected $primaryKey = 'id_usuario';
 protected $fillable=['id_usuario','nombre','correo','login','password','tipo_de_usuario'];

    protected $date=['deleted_at'];

}
