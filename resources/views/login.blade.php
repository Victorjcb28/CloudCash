<!DOCTYPE html>
<html lang="es">
<head>

    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <meta http-equiv="content-script-type" content="text/javascript" />
    <meta http-equiv="content-style-type" content="text/css" />


    <meta name="viewport" content="width=device-width, initial-scale=1.0" />



    <title>CloudCash- Keep your money always with you</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilos.css">
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="js/sweetalert.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/sweetalert.css">

    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
    <link rel="icon" href="images/logo.ico" type="image/x-icon" />


    <!-- Begin Inspectlet Embed Code -->
    <script type="text/javascript" id="inspectletjs">
        window.__insp = window.__insp || [];
        __insp.push(['wid', 92785244]);
        (function() {
            function __ldinsp(){var insp = document.createElement('script'); insp.type = 'text/javascript'; insp.async = true; insp.id = "inspsync"; insp.src = ('https:' == document.location.protocol ? 'https' : 'http') + '://www.inspectlet.com/inspectlet.js'; var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(insp, x); }
            if (window.attachEvent){
                window.attachEvent('onload', __ldinsp);
            }else{
                window.addEventListener('load', __ldinsp, false);
            }
        })();
    </script>
    <!-- End Inspectlet Embed Code -->
</head>
<body data-spy="scroll" data-target="#navbar-example">

<!-- Inicio jumbotrom-->
<div id="top" class="jumbotron" data-src="/view/images/metro_animation.gif" data-position="center right">

    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="card card-container">
                    @include('alerts.errors')
                    @include('alerts.success')
                    @include('alerts.repetido')
                    @include('sweet::alert')
                    <img src="images/logo1.png" alt="" style="width: 40%;">

                    {!!Form::open(['route'=>'log.store','method'=>'POST','class'=>'login','id'=>'login'])!!}


                    <div class="form-group">
                        {!! Form::label('Email:') !!}
                        {!! Form::email('email',null,['class'=>'form-control','placeholder'=>'Ingresa tu Email']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('Password:') !!}
                        {!! Form::password('password',['class'=>'form-control','placeholder'=>'Ingresa tu Clave']) !!}
                    </div>
                    <div id="remember" class="checkbox">
                        <label>
                            <input type="checkbox" value="remember-me"> Remember me
                        </label>
                    </div>


                {!! Form::submit('Log In',['class'=>'btn btn-primary','id'=>'prueba']) !!}
                {!! Form::button('Registrarse',['class'=>'btn btn-primary', 'id'=>'ocultar']) !!}
                {!! Form::close() !!}

                    {!!Form::open(['route'=>'usuario.store','method'=>'POST','class'=>'crear','style'=>'display:none;','id'=>'create'])!!}
                    <div class="form-group">
                        {!! Form::label('Nombre Completo:') !!}
                        {!! Form::email('name',null,['class'=>'form-control','placeholder'=>'Ingresa tu Email']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('Email:') !!}
                        {!! Form::email('email',null,['class'=>'form-control','placeholder'=>'Ingresa tu Email']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('Password:') !!}
                        {!! Form::password('password',['class'=>'form-control','placeholder'=>'Ingresa tu Clave']) !!}
                    </div>
                    <div id="remember" class="checkbox">
                        <label>
                            <input type="checkbox" value="remember-me"> Remember me
                        </label>
                    </div>

                {!! Form::button('Registrarse',['class'=>'btn btn-primary','id'=>'createb']) !!}
                {!! Form::button('Log In',['class'=>'btn btn-primary', 'id'=>'ocultar1']) !!}
                {!! Form::close() !!}






                <!-- <a href="#" class="forgot-password">
                Forgot the password?
            </a>-->
                </div><!-- /card-container -->
            </div>
        </div>

    </div><!-- /container -->

    <div class="overlay"></div>

</div>
<!-- fin jumbotrom-->



<div class="modal fade" id="upgrade-dialog" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Your browser is out of date</h4>
            </div>
            <div class="modal-body">
                <p>To get the best possible experience using our site we recommend that you upgrade to a modern web browser. To download a newer web browser click on the Upgrade button.</p>
            </div>
            <div class="modal-footer">
                <a href="http://browsehappy.com/" target="_blank" class="btn btn-primary">Upgrade</a>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- Bootstrap core JavaScript -->

<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript" src="js/boot.min.js"></script>

<script>
    $(document).ready(function(){
        $("#ocultar").on( "click", function() {

            $('.login').hide(); //muestro mediante clase
            $('.crear').show(); //muestro mediante clase

        });

        $("#ocultar1").on( "click", function() {

            $('.login').show(); //muestro mediante clase
            $('.crear').hide(); //muestro mediante clase
        });

    });

    $('button#createb').on('click', function(){
        swal({
                title: "Registro",
                text: "Seguro Quiere Registrar?",         type: "info",
                showCancelButton: true,
                confirmButtonClass: "btn-success",
                confirmButtonText: "Yes",
                closeOnConfirm: false
            },
            function(){
                $("#create").submit();
            });
    })
</script>
</body>
</html>