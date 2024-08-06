@extends('layouts.layout')

@section('content')
    <div class="content-header ">
        <div class="container-fluid mt-3">
            <div class="row mb-2 justify-content-between">
                <div class="col-sm-10 p-0">
                    <h1 class="m-0">Listado de Roles</h1>
                </div><!-- /.col -->
                <div class="col-sm-2 p-0 d-flex justify-content-end">
                    <a href="{{ url('roles/create') }}" title="Agregar usuario" class="btn btn-success rounded-circle"
                        data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa-solid fa-plus"></i></a>

                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

    {{-- Modal creacion de rol --}}

    <!-- Modal -->
    <div class="modal fade rounded-0" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Registrar un rol</h1>
                    {{-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                        style="color: #fff;"></button> --}}
                </div>
                <form action="{{ url('/roles') }}" method="POST">
                    <div class="modal-body">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Nombre del rol</label>
                            <input type="text" class="form-control" id="name" name="name" autofocus>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-success">Guardar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    {{-- MENSAJES --}}
    @if ($mensaje = Session::get('mensaje'))
        <script>
            Swal.fire({
                // position: "top-end",
                icon: "success",
                title: "Registro Exitoso",
                text: "{{ $mensaje }}",
                showConfirmButton: false,
                timer: 3000
            });
        </script>
    @elseif ($mensaje = Session::get('mensaje_update'))
        <script>
            Swal.fire({
                // position: "top-end",
                icon: "success",
                title: "Actualizacion Exitosa",
                text: "{{ $mensaje }}",
                showConfirmButton: false,
                timer: 3000
            });
        </script>
    @elseif ($mensaje = Session::get('mensaje_delete'))
        <script>
            Swal.fire({
                // position: "top-end",
                icon: "success",
                title: "Rol Eliminado",
                text: "{{ $mensaje }}",
                showConfirmButton: false,
                timer: 3000
            });
        </script>
    @endif

    <div class="card">


        <div class="card-body">
            <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">

                <div class="row">
                    <div class="col-sm-12">
                        <table id="example1"
                            class="table table-sm table-bordered table-striped dataTable dtr-inline collapsed"
                            aria-describedby="example1_info">
                            <thead>
                                <tr>
                                    <th class="">#</th>
                                    <th class="">Nombre del rol</th>
                                    <th class="">Estado</th>
                                    <th class="">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $contador = 0; ?>
                                @foreach ($roles as $role)
                                    <tr class="odd">
                                        <td class="text-center"> <?= $contador = $contador + 1 ?> </td>
                                        <td class="text-center"> {{ $role->name }} </td>
                                        <td class="text-center">
                                            @if ($role->is_active == '1')
                                                <span class="badge text-bg-success">Activo</span>
                                            @else
                                                <span class="badge text-bg-danger">Inactivo</span>
                                            @endif
                                        </td>

                                        <td class="text-center">
                                            {{-- <div class="btn-group" role="group" aria-label="Basic example">
                                                <a href="{{ route('roles.edit', $role->id) }}"
                                                    class="btn btn-warning btn-sm" title="Editar Informacion"><i
                                                        class="fa-regular fa-pen-to-square"></i></a>
                                                <form onclick="preguntar{{ $role->id }}(event)"
                                                    id="miFormulario{{ $role->id }}"
                                                    action="{{ route('roles.destroy', $role ->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"
                                                        title="Eliminar Usuario" style="border-radius: 0 3px 3px 0;"><i
                                                            class="fa-regular fa-trash-can"></i></button>
                                                </form>

                                                
                                            </div> --}}

                                            <div class="dropdown">
                                                <button class="btn btn-sm btn-light dropdown-toggle" type="button"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="fa-solid fa-ellipsis-vertical"></i>
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item disabled" href="#"><i
                                                                class="fa-regular fa-pen-to-square"></i>ver</a></li>
                                                    <li><a class="dropdown-item" href="{{route('roles.edit', $role->id)}}"><i
                                                                class="fa-regular fa-pen-to-square"></i> Editar</a></li>
                                                    <form onclick="preguntar{{ $role->id }}(event)"
                                                        id="miFormulario{{ $role->id }}"
                                                        action="{{ route('roles.destroy', $role->id) }}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <li><button type="submit" class="dropdown-item text-danger"
                                                                style="border: none; background-color: #fff;"
                                                                title="Eliminar Usuario"
                                                                style="border-radius: 0 3px 3px 0;"><i
                                                                    class="fa-regular fa-trash-can"></i> Eliminar</button>
                                                        </li>
                                                    </form>
                                                    <script>
                                                        function preguntar{{ $role->id }}(event) {
                                                            event.preventDefault();
                                                            Swal.fire({
                                                                title: "Eliminar Rol",
                                                                text: "¿Está seguro de eliminar este rol?",
                                                                icon: 'question',
                                                                showDenyButton: true,
                                                                confirmButtonText: "Eliminar",
                                                                confirmButtonColor: "#a5161d",
                                                                denyButtonColor: "#270a0a",
                                                                denyButtonText: 'Cancelar'
                                                            }).then((result) => {
                                                                if (result.isConfirmed) {
                                                                    var form = $('#miFormulario{{ $role->id }}');
                                                                    form.submit();
                                                                } else if (result.isDenied) {
                                                                    Swal.fire("Cancelado", "", "info");
                                                                }
                                                            });
                                                        }
                                                    </script>
                                                </ul>
                                            </div>
                                        </td>

                                    </tr>
                                @endforeach

                            </tbody>

                        </table>

                        <script>
                            $(function() {
                                $("#example1").DataTable({
                                    "pageLength": 5,
                                    "language": {
                                        "emptyTable": "No hay información",
                                        "info": "Mostrando _START_ a _END_ de _TOTAL_ Usuarios",
                                        "infoEmpty": "Mostrando 0 a 0 de 0 Usuarios",
                                        "infoFiltered": "(Filtrado de _MAX_ total Usuarios)",
                                        "infoPostFix": "",
                                        "thousands": ",",
                                        "lengthMenu": "Mostrar _MENU_ Usuarios",
                                        "loadingRecords": "Cargando...",
                                        "processing": "Procesando...",
                                        "search": "Buscador:",
                                        "zeroRecords": "Sin resultados encontrados",
                                        "paginate": {
                                            "first": "Primero",
                                            "last": "Ultimo",
                                            "next": "Siguiente",
                                            "previous": "Anterior"
                                        }
                                    },
                                    "responsive": true,
                                    "lengthChange": false,
                                    "autoWidth": false,
                                    buttons: [{
                                        extend: 'collection',
                                        text: 'Reportes',
                                        orientation: 'landscape',
                                        buttons: [{
                                            text: 'Copiar',
                                            extend: 'copy',
                                        }, {
                                            extend: 'pdf'
                                        }, {
                                            extend: 'csv'
                                        }, {
                                            extend: 'excel'
                                        }, {
                                            text: 'Imprimir',
                                            extend: 'print'
                                        }]
                                    }],
                                }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
                            });
                        </script>
                    </div>
                </div>

            </div>
        </div>

    </div>
@endsection
