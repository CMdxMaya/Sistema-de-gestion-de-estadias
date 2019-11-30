<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


    use Illuminate\Database\Eloquent\SoftDeletes;

class tipodeproductos extends Model
{

		use SoftDeletes;

    protected $primaryKey = 'id_tipodeproducto';  
  	protected $fillable=['id_tipodeproducto','nombre'];
   	protected $date=['deleted_at']; 

}
