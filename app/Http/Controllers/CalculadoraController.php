<?php

namespace Cash\Http\Controllers;

use Illuminate\Http\Request;

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
        $uid='{!!Auth::user()->email!!}';


        return view ("Calculadora.index",['bsf'=>$bsf,'usd'=>$usd,'bsd'=>$bsd]);
    }

    public function store(Request $request)
    {
        $exchange = new Exchange;
        $exchange->cantidad=122132;
        $exchange->id_vendedor=122132;
        $exchange->id_comprador=122132;
        $exchange->user_id===Auth::user()->id;
        $exchange->metodo='neteller';

        $exchange->save();

        Session::flash('message-success','Usuario Creado, Proceda a loguearse');
        return view ('panel.index');
    }
}
