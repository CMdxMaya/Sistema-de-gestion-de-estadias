<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pagos extends Model
{

    protected $primaryKey = 'id_pago';
 protected $fillable=['id_pago','id_cliente','id_mesero','id_mesa','tipodeorden','formapago','costo','fecha'];


}
