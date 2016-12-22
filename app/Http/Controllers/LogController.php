<?php

namespace Cash\Http\Controllers;

use Illuminate\Http\Request;
use Cash\Http\Requests;
use Cash\Http\Requests\LoginRequest;
use Auth;
use Session;
use Redirect;

class LogController extends Controller
{
    public function index()
    {
        return view ('login');
    }
    public function store(loginrequest $request)
    {
        if (Auth::attempt(['email'=> $request['email'], 'password'=>$request['password']])){
            return "Listo";
        }
        Session::flash('message-error','Datos Incorrectos');
        return view ('login');
    }


}
