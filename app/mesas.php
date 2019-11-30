<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\SoftDeletes;


class mesas extends Model
{
		use SoftDeletes;

    protected $primaryKey = 'id_mesa';
    protected $fillable=['id_mesa','numero_de_personas','id_zona'];
      	protected $date=['deleted_at']; 

}
