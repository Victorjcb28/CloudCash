<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CloudCash- Keep your money always with you</title>
    <link rel="shortcut icon" href="/favicon1.ico" type="image/x-icon" />
    {!!Html::style('css/bootstrap.min.css')!!}

    {!!Html::style('css/panel/metisMenu.min.css')!!}
    {!!Html::style('css/panel/sb-admin-2.css')!!}
    {!!Html::style('css/panel/font-awesome.min.css')!!}



    {!! Html::script('https://code.jquery.com/jquery-3.1.0.min.js') !!}



</head>

<body id="app">

<div id="wrapper">


    <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html">CloudCash</a>
        </div>


        <ul class="nav navbar-top-links navbar-right">
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    {!!Auth::user()->name!!} <span class="glyphicon glyphicon-user"></span>


            </li>
        </ul>

        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">
                <ul class="nav" id="side-menu">

                    <li>
                        <a href="#"><span class="glyphicon glyphicon-usd"></span> Cotizar<span class="glyphicon glyphicon-chevron-down pull-right"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="{!!URL::to('/usuario/create')!!}"><i class='fa fa-plus fa-fw'></i> Agregar</a>
                            </li>
                            <li>
                                <a href="{!!URL::to('/usuario')!!}"><i class='fa fa-list-ol fa-fw'></i> Usuarios</a>
                            </li>

                        </ul>
                    </li>

                    <li>
                        <a href="#"><span class="glyphicon glyphicon-list-alt"></span> Transacciones<span class="glyphicon glyphicon-chevron-down pull-right"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="{!!URL::to('/atleta/create')!!}"><i class='fa fa-plus fa-fw'></i> Agregar</a>
                            </li>

                            <li>
                                <a href="{!!URL::to('/atleta')!!}"><span class="glyphicon glyphicon-search" ></span> Imprimir Lista</a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="{!!URL::to('/calculadora')!!}"><span class="glyphicon glyphicon-bitcoin"></span> Calculadora</a>

                    </li>

                </ul>
            </div>
        </div>

    </nav>

    <div id="page-wrapper" style="min-height: 1 000px;">
        @yield('content')
    </div>

</div>



{!!Html::script('js/bootstrap.min.js')!!}
{!!Html::script('js/panel/metisMenu.min.js')!!}
{!!Html::script('js/panel/sb-admin-2.js')!!}




</body>

</html>