<?php

namespace Cash\Http\Controllers;

use Illuminate\Http\Request;
use Cash\Http\Requests;

use Alert;
use Cash\Exchange;
use Auth;
use Session;


class CalculadoraController extends Controller
{
    public function index()
    {
            function getprice($url){
                $decode=file_get_contents($url);
                return json_decode($decode,true);
            }
            $btcusd=getprice('http://api.bitcoinvenezuela.com/?html=no&currency=BTC&amount=1&to=USD');
            $usd=round($btcusd,2);

            $btcbsf=getprice('http://api.bitcoinvenezuela.com/?html=no&currency=BTC&amount=1&to=VEF');
            $bsf=round($btcbsf,2);

            $bsd=round(((1*$bsf)/$usd),2);



        return view ("Calculadora.index",['bsf'=>$bsf,'usd'=>$usd,'bsd'=>$bsd]);
    }

    public function  show($id)
    {
        $exchanges = \DB::table('users')
            ->join('Exchange', 'users.id', '=', 'Exchange.user_id')

            ->select('users.*', 'Exchange.cantidad','Exchange.metodo','Exchange.created_at')
            ->get();

        return view('Calculadora.transacciones',['exchanges'=>$exchanges]);



    }

    public function store(Request $request)
    {
        $exchange = new Exchange;
        $exchange->cantidad=122132;
        $exchange->id_vendedor=Auth::user()->id;
        $exchange->id_comprador=122132;
        $exchange->user_id=Auth::user()->id;
        $exchange->metodo='neteller';

        $exchange->save();

        Session::flash('message-success','Usuario Creado, Proceda a loguearse');
        return view ('panel.index');
    }
}
