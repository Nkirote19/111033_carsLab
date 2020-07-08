<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
		protected $table = 'reviews';
 	protected $fillable = [
        'make',
        'review', 
       ];

       public function relationsPayStu()
	{
    return $this->belongsTo('App\Car');
    // return $this->belongsTo('App\Car','student_number');
	}
}
