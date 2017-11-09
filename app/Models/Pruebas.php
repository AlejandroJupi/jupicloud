<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pruebas extends Model{
   
   protected $table = 'pruebas';

   protected $fillable = ['nombre','edad'];

   protected $hidden = ['created_at','updated_at'];

}
