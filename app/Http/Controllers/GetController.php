<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GetController extends Controller
{
    public function gatos()
    {
        return view('posts.gatos');
    }
}
