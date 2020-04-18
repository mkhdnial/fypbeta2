<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
     protected $table = 'item';

    public $fillable = ['user_id','itemName', 'description', 'urgency', 'status'];
}
