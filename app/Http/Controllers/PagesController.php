<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;

class PagesController extends Controller
{
    public function index()
    {
        if (view::exists('pages.index'))
            return view('pages.index');
        else
            return ('View not found');
    }
}
