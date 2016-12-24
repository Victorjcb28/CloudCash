<?php

namespace Cash\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        return view ('index');
    }

    public function panel()
    {
        return view ('panel.index');
    }
}
