<?php

namespace Cash\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Validator;
use Cash\Http\Requests;
use Cash\Http\Controllers\Controller;
use Cash\User;
use Session;
use Redirect;

class UsuarioController extends Controller
{
    public function store(Request $request)
    {
        #User::create([
        #'name'=>$request['name'],
        #'password' => bcrypt($request['password']),
        #]);

        $v = \Validator::make($request->all(), [
            'email'    => 'required|email|unique:users',
        ]);

        if ($v->fails())
        {
            return redirect()->back()->withErrors($v->errors());
        }

        $user = new User;
        $user->name='victor';
        $user->email = $request->email;
        $user->password = $request->password;
        $user->save();
        Session::flash('message-success','Usuario Creado');
        return view ('login');

    }
}
