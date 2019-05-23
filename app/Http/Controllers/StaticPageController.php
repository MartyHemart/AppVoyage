<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPageController extends Controller
{
  public function about()
  {
    if (rand(5, 10) == 10) {
      $gagner = 'Vous avez gagner un bon de réduction de 50% sur votre prochain voyage !!';
      return view('a_propos', ['gagner'=>$gagner]);
    }
      return view('a_propos');
  }
}
