<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Leavelog extends Model
{
    //
    protected $table ='leavelog';
    protected $primaryKey ='id';
    public $timestamps = true;
}
