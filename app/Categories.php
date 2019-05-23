<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
  public function voyage()
  {
    return $this->belongsToMany('App\Voyage');
  }
}
