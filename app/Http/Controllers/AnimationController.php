<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnimationController extends Controller
{
    /**
     * Undocumented function
     *
     * @return void
     */
    public function animateTheBox()
    {
        return view('animation');
    }
}
