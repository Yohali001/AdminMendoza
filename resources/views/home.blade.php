@extends('adminlte::page')

@section('title', 'Admin-Categorias')

@section('css')
    <!-- <link rel="stylesheet" href="/css/admin_custom.css"> -->
@stop

@section('content_header')
    <h1>
        Categorías
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-create-category">
            Crear
        </button>
    </h1>
@stop

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Listado de categorías</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="categories" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Tipo de arma</th>
                                    <th>Nombre</th>
                                    <th>Aprobo 1ra vez</th>
                                    <th>Aprobo 2da vez</th>
                                    <th>Defecto</th>
                                </tr>
                            </thead>
                            <tbody>

                                <tr>
                                    <td>Pistola</td>
                                    <td>DERRINGER
                                    </td>
                                    <td>RECHAZADO</td>
                                    <td>RECHAZADO</td>
                                    <td>CERROJO FORZADO
                                    </td>
                                </tr>
                                <tr>
                                    <td>Armas de fuego</td>
                                    <td>AZTK 9MM</td>
                                    <td>APROBADO</td>
                                    <td>NO APLICA</td>
                                    <td>NINGUNO</td>
                                </tr>
                                <tr>
                                    <td>Pistola</td>
                                    <td>SALVA WESTERN C. LARGO</td>
                                    <td>APROBADO</td>
                                    <td>NO APLICA</td>
                                    <td>NINGUNO</td>
                                </tr>
                                <tr>
                                    <td>Tiro Deportivo</td>
                                    <td>Rifle Safari</td>
                                    <td>RECHAZADO</td>
                                    <td>RECHAZADO</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Pistola</td>
                                    <td>CAÑON CORTO SAFARI</td>
                                    <td>APROBADO</td>
                                    <td></td>
                                    <td>NINGUNO</td>
                                </tr>
                                <tr>
                                    <td>Armas De Fuego</td>
                                    <td>PUMA</td>
                                    <td>RECHAZADO</td>
                                    <td>RECHAZADO</td>
                                    <td>ATRAPA CASCO</td>
                                </tr>
                                <tr>
                                    <td>Tiro Deportivo</td>
                                    <td>M-990 SQUAD</td>
                                    <td>RECHAZADO</td>
                                    <td>APROBADO</td>
                                    <td>NO EXTRAE</td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Tipo de arma</th>
                                    <th>Nombre</th>
                                    <th>Aprobo 1 vez</th>
                                    <th>Aprobo 2da vez</th>
                                    <th>Defectos</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>

    <!-- modal -->
    <div class="modal fade" id="modal-create-category">
        <div class="modal-dialog">
            <div class="modal-content bg-default">
                <div class="modal-header">
                    <h4 class="modal-title">Crear Categoría</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                </div>


                <form action="{{'admin.categories.store'}}" method="POST">
                    {{csrf_field()}}
                    <div class="modal-body">
                        <div class="form-group"></div>
                        <label for="name">Categoria</label>
                        <input type="text" name="name" class="form-control"id=category>
                    </div>

                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-outline-light" data-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-outline-primary">Guardar</button>
                    </div>
                </form>

            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
@stop

@section('js')
    <script>
        $(document).ready(function() {
            $('#categories').DataTable({
                "order": [
                    [3, "desc"]
                ]
            });
        });
    </script>
@stop
