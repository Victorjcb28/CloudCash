<?php

namespace Cash\Http\Controllers;

use Illuminate\Http\Request;

class CalculadoraController extends Controller
{
    public function index()
    {
        function getprice($url){
            $decode=file_get_contents($url);
            return json_decode($decode,true);
        }
        $btcusd=getprice('http://api.bitcoinvenezuela.com/?html=no&currency=BTC&amount=1&to=USD');
        $usd=$btcusd;

        $btcbsf=getprice('http://api.bitcoinvenezuela.com/?html=no&currency=BTC&amount=1&to=VEF');
        $bsf=$btcbsf;


        return view ("Calculadora.index",['bsf'=>$bsf,'usd'=>$usd]);
    }
}
