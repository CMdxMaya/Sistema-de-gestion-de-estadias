<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
    

    use Illuminate\Database\Eloquent\SoftDeletes;


class clientes extends Model{
	use SoftDeletes;
    protected $primaryKey = 'id_cliente';  
  	protected $fillable=['id_cliente','nombre','apellido1','apellido2','telefono','email','rfc','calle','numero','colonia','c_p','id_estado'];
  	protected $date=['deleted_at']; 
}
