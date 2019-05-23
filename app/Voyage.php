<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Voyage extends Model
{
  protected $table='voyages';
  protected $fillable = ['destination', 'description', 'prix', 'image', 'titre'];

  public function bilan(){
    return $this->hasOne('App\Bilan');
  }

  public function Commentaire()
  {
    return $this->hasMany('App\Commentaire');
  }

  public function Categorie()
  {
    return $this->belongsToMany('App\Categories');
  }

}
