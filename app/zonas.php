<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\SoftDeletes;

class zonas extends Model
{
	use SoftDeletes;

    protected $primaryKey = 'id_zona';
    protected $fillable=['id_zona','zona'];
      	protected $date=['deleted_at']; 

}
