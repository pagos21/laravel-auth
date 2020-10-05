<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $fillable = [
      'name',
      'city',
      'state'
    ];

    public function employees(){
      return $this -> belongsToMany(Employee::class);
    }
}
