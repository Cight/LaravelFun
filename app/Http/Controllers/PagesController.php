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

    public function profile()
    {
        if (view::exists('pages.profile'))
            return view('pages.profile');
        else
            return ('View not found');
    }

    public function settings()
    {
        if (view::exists('pages.settings'))
            return view('pages.settings');
        else
            return ('View not found');
    }
}
