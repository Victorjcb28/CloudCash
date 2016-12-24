@extends('layout.panel')
@section('content')
    <script type="text/javascript"
            src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
    <script src="js/vue.js"></script>

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

    </script>

    <style>
        .input{
            margin-bottom: 50px;
        }
    </style>



    <div class="row" id="show">
        <div class="col-md-6 col-md-offset-3 " style="padding-top: 50px;">
            <div class="panel panel-default" style="width: 300px;">
                <div class="panel-heading">
                    <h3 class="panel-title">Calculadora Interactiva</h3>
                </div>
                <div class="panel-body">
                    <input type="text" id="txtbtc" name="txtbtc" value="1" class="input"> <button  disabled>BTC</button>  <br>
                    <input type="text" id="txtdolares" name="txtdolares" value="{{$usd}}" class="input"> <button  disabled>USD</button><br>
                    <input type="text" id="txtbolivares" name="txtbolivares" value="{{$bsf}}"> <button  disabled>BSF</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        (function () {
            var jq=$(document),
                btnEjecutar=jq.find('#btnEjecutar'),
                txtbtc=jq.find('#txtbtc'),
                txtdolares=jq.find('#txtdolares'),
                txtbolivares=jq.find('#txtbolivares');

            $('#txtbtc').keyup(function (tecla) {
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

        }());
    </script>

@endsection