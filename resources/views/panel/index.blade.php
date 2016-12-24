@extends('layout.panel')
@section('content')
    <link rel="stylesheet" href="http://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.2.2/css/buttons.dataTables.min.css">
    <!-- inicio datos-->
    <div class="row" style="padding-top: 30px; padding-bottom: 30px" >
        <div class="col-md-4 col-xs-6 col-md-offset-1" >
            <div class="thumbnail">
                <img src="images/logo.png" alt="foto">
                <div class="caption" >
                    <h3>Puntuacion: 4.5</h3>


                </div>
            </div>
        </div>
        <div class="col-md-4 col-xs-6 col-md-offset-1" style="padding-top: 50px;">
            <div class="panel panel-default ">
                <div class="panel-heading">
                    <h3 class="panel-title">Datos</h3>
                </div>
                <div class="panel-body">
                    <p>Nombre: Victor</p>
                    <p>Fecha de Ingreso: 28/11/89</p>
                    <p>Ultima vez en linea: 31/02/2021</p>
                </div>
            </div>
        </div>
    </div>
    <!--Fin datos-->
    <div class="row">

        <div class="col-md-6 col-xs-12">
            <h3>Ultimas Transacciones</h3>
            <hr>
            <div class="table-responsive">
                <table id="example" class="display" cellspacing="0" width="100%">
                    <thead>
                    <tr>
                        <th>Usuario</th>
                        <th>Metodo</th>
                        <th>Monto</th>
                        <th>Fecha</th>

                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>Usuario</th>
                        <th>Metodo</th>
                        <th>Monto</th>
                        <th>Fecha</th>
                    </tr>
                    </tfoot>
                    <tbody>
                    <tr>
                        <td>Tiger Nixon</td>
                        <td>System Architect</td>
                        <td>Edinburgh</td>
                        <td>61</td>

                    </tr>
                    <tr>
                        <td>Garrett Winters</td>
                        <td>Accountant</td>
                        <td>Tokyo</td>
                        <td>63</td>

                    </tr>
                    <tr>
                        <td>Ashton Cox</td>
                        <td>Junior Technical </td>
                        <td>San Francisco</td>
                        <td>66</td>

                    </tr>
                    <tr>
                        <td>Cedric Kelly</td>
                        <td>Senior Javascript </td>
                        <td>Edinburgh</td>
                        <td>22</td>

                    </tr>
                    <tr>
                        <td>Airi Satou</td>
                        <td>Accountant</td>
                        <td>Tokyo</td>
                        <td>33</td>

                    </tr>

                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-md-5 col-md-offset-1">
            <h3>Informacion</h3>
            <hr>
            <div class="panel with-nav-tabs panel-default">
                <div class="panel-heading">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#tab1default" data-toggle="tab">Usuario</a></li>
                        <li><a href="#tab2default" data-toggle="tab">Terminos del Comercio</a></li>


                    </ul>
                </div>
                <div class="panel-body">
                    <div class="tab-content">
                        <div class="tab-pane fade in active" id="tab1default">
                            <p>
                                Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto.
                                Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500,
                                cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una
                                galería de textos y los mezcló de tal manera que logró hacer un libro de textos
                                especimen. No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno
                                en documentos electrónicos, quedando esencialmente igual al original. Fue popularizado
                                en los 60s con la creación de las hojas "Letraset", las cuales contenian pasajes
                                de Lorem Ipsum, y más recientemente con software de autoedición, como por ejemplo Aldus
                                PageMaker, el cual incluye versiones de Lorem Ipsum.
                            </p>

                        </div>
                        <div class="tab-pane fade" id="tab2default">
                            <p>
                                Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto.
                                Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500,
                                cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una
                                galería de textos y los mezcló de tal manera que logró hacer un libro de textos
                                especimen. No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno
                                en documentos electrónicos, quedando esencialmente igual al original. Fue popularizado
                                en los 60s con la creación de las hojas "Letraset", las cuales contenian pasajes
                                de Lorem Ipsum, y más recientemente con software de autoedición, como por ejemplo Aldus
                                PageMaker, el cual incluye versiones de Lorem Ipsum.
                            </p>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="http://code.jquery.com/jquery-1.12.3.js"></script>

    <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>

    <script>


        $(document).ready(function() {
            $('#example').DataTable();
        } );

    </script>


@endsection