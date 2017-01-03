<?php

namespace Cash\Http\Controllers;

use Illuminate\Http\Request;
use Cash\Http\Requests;
use Cash\Http\Requests\LoginRequest;
use Auth;
use Session;
use Redirect;
use Alert;

class LogController extends Controller
{
    public function index()
    {
        return view ('login');


    }
    public function store(loginrequest $request)
    {
        if (Auth::attempt(['email'=> $request['email'], 'password'=>$request['password']])){

            return Redirect::to('panel');

        }
        Alert::error('Datos Incorrectos', 'Oops!')->persistent("Close");

        return view ('login');
    }


}
