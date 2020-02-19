<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employe extends Model
{
   protected $fillable =[
       'title','service_type','ser_data'
   ];
}
