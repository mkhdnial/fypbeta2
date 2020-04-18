<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Owner extends Model
{
    protected $table = 'rentalList';

    public $fillable =[ 'name' ,'duration'];
}
