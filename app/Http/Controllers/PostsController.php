<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    //
    public function category() 
    {
        return $this->hasOne('App\Models\Category');
    }
}
