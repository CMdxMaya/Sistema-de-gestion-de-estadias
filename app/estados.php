<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class estados extends Model
{

    protected $primaryKey = 'id_estados';
    protected $fillable=['id_estados','estado'];

}
