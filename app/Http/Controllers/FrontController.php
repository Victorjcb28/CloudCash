<?php

namespace Cash\Http\Controllers;

use Illuminate\Http\Request;
use Alert;
class FrontController extends Controller
{
    public function index()
    {
        return view ('index');
    }

    public function panel()
    {
        return view ('panel.index');
        Alert::success('Good job!')->persistent("Close");
    }
}
