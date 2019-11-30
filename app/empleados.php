<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
    

    use Illuminate\Database\Eloquent\SoftDeletes;


class empleados extends Model{
	use SoftDeletes;
	
    protected $primaryKey = 'id_empleado';  
  	protected $fillable=['id_empleado','nombree','apellido1','apellido2','puesto','telefono','email','calle','numero','numero','colonia','estado','cp','activo','rfc','id_estado'];
  	protected $date=['deleted_at'];

}
