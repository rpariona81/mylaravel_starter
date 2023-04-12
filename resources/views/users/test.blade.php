
{{-- @section('css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css" />
@endsection

@section('js')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
@endsection --}}


@extends('layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{ __('Users') }}</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            
            <div class="row">
                <div class="col-lg-12">
                    <!--<div class="alert alert-info">-->
                    <!--<div class="card-header">-->
                        <!--Datatable page-->
                    <!--</div>-->

                    <div class="card card-info">
                        <div class="card-header">
                            <h3 class="card-title">Datatable page</h3>
                        </div>
                        <div class="card-body">

                            <table id="example" class="table table-striped" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>F. creación</th>
                                        <th>F. creación</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>F. creación</th>
                                        <th>F. creación</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                        <!-- /.card-body -->

                        <!--<div class="card-footer clearfix">
                            { { $users->links() }}-->
                        <!--</div>-->
                    </div>

                </div>
            </div>
            <!--<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css" />-->

            <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css" />-->
            <!--<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap4.min.css" />-->
            
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css" />
            <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css" />
            <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.3.6/css/buttons.bootstrap5.min.css" />


            <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
            <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>

            <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
            <script src="https://cdn.datatables.net/buttons/2.3.6/js/dataTables.buttons.min.js"></script>
            <script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.bootstrap5.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
            <script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.html5.min.js"></script>
            <script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.print.min.js"></script>
            <script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.colVis.min.js"></script>
            
            <!--<script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap4.min.js"></script>
            <script src="https://cdn.datatables.net/buttons/2.3.6/js/dataTables.buttons.min.js"></script>
            <script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.bootstrap4.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
            <script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.html5.min.js"></script>
            <script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.print.min.js"></script>
            <script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.colVis.min.js"></script>-->

            <!--<script src="https://code.jquery.com/jquery-3.5.1.js"></script>-->
            <!--<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>-->
            <!--<script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap4.min.js"></script>-->
            <!--<script>
                $(document).ready(function () {
                    $('#exampleData').Datatable();
                });
            </script>-->
            <!--https://stackoverflow.com/questions/31227844/typeerror-datatable-is-not-a-function-->
            <!--https://es.stackoverflow.com/questions/87338/cambiar-idioma-de-datatables-->
            <!--https://datatables.net/plug-ins/i18n/Spanish-->
            <script>$(document).ready(function () {
                $.noConflict();
                var table = $('#example').DataTable({
                    //"processing": true,
                    //"serverSide": true,
                    "ajax": {
                        //"url": "https://api.ronaldpariona.com/api/equipamiento/",
                        "url": 'https://api.ronaldpariona.com/api/tablas/',
                        "dataSrc": 'data',
                        //"dataType": 'json',
                    },
                    //deferLoading: 57,
                    "columns": [
                        { "data": 'TABLE_SCHEMA' },
                        { "data": 'TABLE_NAME' },
                        { "data": 'COLUMN_NAME' },
                        { "data": 'DATA_TYPE' }
                        /*{ "data": 'ID Registro' },
                        { "data": 'Región' },
                        { "data": 'Instituto' },
                        { "data": 'Equipamiento' }*/
                    ],
                    "language":{
                        "search":       "Buscar",
                        //"lengthMenu":   "Mostrar _MENU_ registros por página",
                        "lengthMenu": "Mostrar _MENU_ Entradas",
                        //"info":         "Mostrando pág. _PAGE_ de _PAGES_ de un total de _TOTAL_ registros",
                        "info": "Mostrando _START_ a _END_ de _TOTAL_ Entradas",
                        "infoEmpty": "Mostrando 0 to 0 of 0 Entradas",
                        "infoFiltered": "(Filtrado de _MAX_ registros)",
                        "loadingRecords": "Cargando...",
                        "processing": "Procesando...",
                        "infoPostFix": "",
                        "thousands": ",",
                        "zeroRecords": "Sin resultados encontrados",
                        "paginate":{
                            "previous": "Anterior",
                            "next":     "Siguiente",
                            "first":    "Primero",
                            "last":     "Último"
                        },
                        "buttons": {
                            "copy": "Copiar",
                            "colvis": "Visibilidad",
                            "collection": "Colección",
                            "colvisRestore": "Restaurar visibilidad",
                            "copyKeys": "Presione ctrl o u2318 + C para copiar los datos de la tabla al portapapeles del sistema. <br \/> <br \/> Para cancelar, haga clic en este mensaje o presione escape.",
                            "copySuccess": {
                                "1": "Copiada 1 fila al portapapeles",
                                "_": "Copiadas %ds fila al portapapeles"
                            },
                            "copyTitle": "Copiar al portapapeles",
                            "csv": "CSV",
                            "excel": "Excel",
                            "pageLength": {
                                "-1": "Mostrar todas las filas",
                                "_": "Mostrar %d filas"
                            },
                            "pdf": "PDF",
                            "print": "Imprimir",
                            "renameState": "Cambiar nombre",
                            "updateState": "Actualizar",
                            "createState": "Crear Estado",
                            "removeAllStates": "Remover Estados",
                            "removeState": "Remover",
                            "savedStates": "Estados Guardados",
                            "stateRestore": "Estado %d"
                        },
                    },
                    "lengthChange": false,
                    "dom": 'Btipr',
                    "search": {
                            "return": true,
                        },
                    "dom": 'Blfrtip',
                    //"buttons": [ 'copy', 'excel', 'pdf', 'colvis', 'pageLength' ],
                    "buttons": [ 'excel', 'colvis', 'pageLength' ],
                    
                });
                table.buttons().container().appendTo( '#example_wrapper .col-md-6:eq(0)');
                //table.page.len( 10 ).draw();
            });</script>

            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
@endsection

