<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //
    public function posts() 
    {
        return $this->belongsTo('App\Models\Posts');
    }
}
