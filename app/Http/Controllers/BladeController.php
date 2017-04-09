<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;

class BladeController extends Controller
{
    public function blade()
    {
        $gender = 'Male';
        $text = 'Hello Person!';

        if (view::exists('blade.blade'))
            return view('blade.blade', compact('gender', 'text'));
        else
            return ('View not found');
    }
}
