<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
  protected $fillable = ['firstname', 'lastname', 'email', 'number'];
}
