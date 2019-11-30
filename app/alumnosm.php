<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class alumnosm extends Model{
    protected $table = 'alumnos';
    protected $primaryKey='ida';
    protected $fillable=['ida','nombre','cal1','cal2','updated_at'];
}