@extends('layout.panel')
@section('content')
    <script src="js/sweetalert.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/sweetalert.css">
    <script type="text/javascript"
            src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
    <script src="js/vue.js"></script>

     <style>
        .input{
            margin-bottom: 50px;
        }
        #calculadora{

            background-color: #9DD2EA;
            border-radius: 3px;
        }
        .nombres{
            background-color: #FFDAB9;
            width: 50px;
            margin-left: 20px;

        }
        #txtvalor{
            width: 100px;
        }
        .botonera {
            text-align: center;
           padding: 0;
        }

        .botonera>li {
            display: inline-block;
        }
    </style>
<div class="row">
    <div class="col-md-6">
        @include('sweet::alert')
            <img src="images/logo1.png" alt="" style="width: 50%; ">
</div>
    <div class="col-md-6" style="text-align: right">


        <button type="button" class="btn btn-default btn-lg" style="margin-top: 50px;" disabled>
            <span class="glyphicon glyphicon-usd" aria-hidden="true"></span>1= <input type="text" id="txtvalor" value="{{$bsd}}"> bsf
        </button>

    </div>
</div>


    <div class="row" id="show">
        <div class="col-md-6 col-md-offset-4 " style="padding-top: 20px;">
            <div class="panel panel-default" style="width: 300px;" id="calculadora">
                <div class="panel-heading">
                    <h3 class="panel-title">Calculadora Interactiva</h3>
                </div>
                <div class="panel-body">
                    <input type="text" id="txtbtc" name="txtbtc" value="1" class="input"> <button  disabled class="nombres">BTC</button>  <br>
                    <input type="text" id="txtdolares" name="txtdolares" value="{{$usd}}" class="input"> <button  disabled class="nombres">USD</button><br>
                    <input type="text" id="txtbolivares" name="txtbolivares" value="{{$bsf}}"> <button  disabled class="nombres">BSF</button>
                </div>

                <ul class="botonera">

                    <li>
                        <button id="enviar" class="btn btn-success">Enviar</button>

                    </li>


                </ul>
            </div>
        </div>
    </div>

    <script>



        var time = new Date().getTime();
        $(document.body).bind("mousemove keypress", function(e) {
            time = new Date().getTime();
        });

        function refresh() {
            if(new Date().getTime() - time >= 6000)
                window.location.reload(true);
            else
                setTimeout(refresh, 2000);
        }

        setTimeout(refresh, 2000);

        /* Calculadora*/
        (function () {
            var jq=$(document),

                txtbtc=jq.find('#txtbtc'),
                txtdolares=jq.find('#txtdolares'),
                txtbolivares=jq.find('#txtbolivares');

            $('#txtbtc').keyup(function () {
                var btc=$('#txtbtc').val();
                var dolares=$('#txtdolares').val();
                var bolivares=$('#txtbolivares').val();

                if ($('#txtbtc').val().length <= 0){
                    txtdolares.val(0);
                    txtbolivares.val(0);
                }
                else if ($('#txtbtc').val().length >0){
                    dolares={{$usd}};
                    bolivares={{$bsf}};

                    var btcdolares=parseFloat(btc)*parseFloat(dolares);
                    var btcbolivares=parseFloat(btc)* parseFloat(bolivares);
                    txtdolares.val(btcdolares);
                    txtbolivares.val(btcbolivares);
                }

            });

            $('#txtdolares').keyup(function () {
                var btc=$('#txtbtc').val();
                var dolares=$('#txtdolares').val();
                var bolivares=$('#txtbolivares').val();

                if ($('#txtdolares').val().length <= 0){
                    txtbtc.val(0);
                    txtbolivares.val(0);
                }
                else if ($('#txtdolares').val().length >0){
                    btc=1;
                    bolivares={{$bsf}};

                    var btc1=(parseFloat(dolares)*parseFloat(btc))/parseFloat({{$usd}});
                    var btcbolivares=(parseFloat(dolares)* parseFloat(bolivares))/parseFloat({{$usd}});
                    txtbtc.val(btc1);
                    txtbolivares.val(btcbolivares);
                }

            });

            $('#txtbolivares').keyup(function () {
                var btc=$('#txtbtc').val();
                var dolares=$('#txtdolares').val();
                var bolivares=$('#txtbolivares').val();

                if ($('#txtbolivares').val().length <= 0){
                    txtbtc.val(0);
                    txtdolares.val(0);
                }
                else if ($('#txtbolivares').val().length >0){
                    btc=1;
                    dolares={{$usd}};

                    var btc1=(parseFloat(bolivares)*parseFloat(btc))/parseFloat({{$bsf}});
                    var btcdolares=(parseFloat(bolivares)* parseFloat(dolares))/parseFloat({{$bsf}});
                    txtbtc.val(btc1);
                    txtdolares.val(btcdolares);
                }

            });



        }());




        $("#enviar").on( "click", function() {
            var btc=$('#txtbtc').val();
            var usd=$('#txtdolares').val();
            var bsf=$('#txtbolivares').val();

            /*alert('Cantidad Btc'+' '+ btc +
                '\nCantidad Usd'+ ' '+ usd+
                '\nCantidad Bsf'+' '+ bsf
                */
            swal("Here's a message!")
            );






        });

    </script>

    <script>
        $(document).on('click', '#enviar', function(e) {
            e.preventDefault();
            var link = $(this);
            swal({
                    title: "Are you sure?",
                    text: "Your will not be able to recover this imaginary file!",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonClass: "btn-danger",
                    confirmButtonText: "Yes, delete it!",
                    closeOnConfirm: false
                },
                function(){
                    swal("Deleted!", "Your imaginary file has been deleted.", "success");
                });
        });
    </script>

@endsection