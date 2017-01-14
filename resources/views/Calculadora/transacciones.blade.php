@extends('layout.panel')
@section('content')
    <link rel="stylesheet" href="http://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.2.2/css/buttons.dataTables.min.css">


    <div class="page-header">
        <h2>Transacciones</h2>

    </div>

    <table id="example" class="display" width="100%" cellspacing="0">
        <thead>
        <tr>
            <th>Nombre</th>
            <th>Metodo</th>
            <th>Cantidad</th>
            <th>Creado</th>

            <th>Operacion</th>
        </tr>
        </thead>
        <tfoot>

        <tr>
            <th>Nombre</th>
            <th>Metodo</th>
            <th>Cantidad</th>
            <th>Creado</th>

            <th>Operacion</th>
        </tr>

        </tfoot>
        <tbody>
        @foreach($exchanges as $exchange)
            <tr >
                <td>{{$exchange->name}}</td>
                <td> {{$exchange->metodo}}</td>
                <td> {{$exchange->cantidad}}</td>
                <td> {{$exchange->created_at}}</td>
                <td>{!! link_to_route('usuario.index',$title='Aceptar', $parameters=$exchange->id, $attributes=['class'=>'btn btn-primary'] ) !!}</td>



            </tr>
        @endforeach
        </tbody>
    </table>



    <script src="http://code.jquery.com/jquery-1.12.3.js"></script>

    <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>

    <script>


        $(document).ready(function() {

            $('.btn btn-primary').click(function () {
                var row= $(this).parents('tr');
                var id= row.data('id');
                var form= $('#form-buscar');
                var url=form.attr('action').replace(':USER_ID',id);
                var data= form.serialize();
                alert(id);

            } );
            $('#example').DataTable( {
                dom: 'Bfrtip',
                buttons: [
                    'print'
                ]
            } );
        } );

    </script>

@endsection