<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ventas extends Model
{

    protected $primaryKey = 'idv';
 protected $fillable=['idv','id_cliente','id_mesero','id_mesa','total','tipodeorden','formapago','fecha','pagado'];


}
