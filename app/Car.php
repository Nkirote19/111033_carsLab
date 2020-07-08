<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
     protected $table = 'cars';
    protected $primaryKey = 'id';
    protected $fillable = [
        'make',
        'model', 
        'produced_on'
        
    ];

      // public function relationsStuPay()
      //   {
      //       return $this->hasMany('App\Review', 'student_number', 'student_number');
      //   }
     public function relationsStuPay()
        {
            return $this->hasMany('App\Review');
        }
}
