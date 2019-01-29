<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TreeStructure extends Model
{
   protected $fillable = ['id', 'name','parent'];
}
