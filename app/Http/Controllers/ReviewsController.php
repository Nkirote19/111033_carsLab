<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Review;
use App\Car;


class ReviewsController extends Controller
{
     public function getMake(){
        $make = Car::all();
        //var_dump($students);

        return view('cars.addreview')->with('data',$make);
    }

        public function saveReview(Request $request)
    {

         $review = new Review();

         $review->make = $request->input('make');
         $review->review = $request->input('review');
         
         $review->save();
         return back()->with('success','Review has been successfully recorded.');
    }
}
