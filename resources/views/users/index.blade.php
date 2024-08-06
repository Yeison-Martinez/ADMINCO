@extends('layouts.layout')

@section('content')
    <div class="content-header">
        <div class="container-fluid mt-3">
            <div class="row mb-2 justify-content-between">
                <div class="col-sm-10 p-0">
                    <h1 class="m-0">Listado de Usuarios</h1>
                </div><!-- /.col -->
                <div class="col-sm-2 p-0 d-flex justify-content-end">
                    <a href="{{ url('users/create') }}" title="Agregar usuario" class="btn btn-success rounded-circle"><i
                            class="fa-solid fa-plus"></i></a>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
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
                timer: 1500
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
                timer: 1500
            });
        </script>
    @elseif ($mensaje = Session::get('mensaje_delete'))
        <script>
            Swal.fire({
                // position: "top-end",
                icon: "success",
                title: "Usuario Eliminado",
                text: "{{ $mensaje }}",
                showConfirmButton: false,
                timer: 1500
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
                                    <th class="">Nombre</th>
                                    <th class="">Apellido</th>
                                    <th class="">Documento</th>
                                    <th class="">Fecha de nacimiento</th>
                                    <th class="">Celular</th>
                                    <th class="">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $contador = 0; ?>
                                @foreach ($users as $user)
                                    <tr class="odd">
                                        <td class="text-center"> <?= $contador = $contador + 1 ?> </td>
                                        <td class=""> {{ $user->name }} </td>
                                        <td class=""> {{ $user->lastname }} </td>
                                        <td class="text-center"> {{ $user->document_type }} - {{ $user->document_number }}
                                        </td>
                                        <td class="text-center"> {{ $user->birthdate }} </td>
                                        <td class="text-center"> {{ $user->cell }} </td>
                                        <td class="text-center">
                                            {{-- <div class="btn-group" role="group" aria-label="Basic example">
                                                <a href="{{ url('users', $user->id) }}" class="btn btn-info btn-sm"
                                                    title="Ver Informacion"><i class="fa-regular fa-eye"></i></a>
                                                <a href="{{ route('users.edit', $user->id) }}"
                                                    class="btn btn-warning btn-sm" title="Editar Informacion"><i
                                                        class="fa-regular fa-pen-to-square"></i></a>
                                                <form onclick="preguntar{{ $user->id }}(event)"
                                                    id="miFormulario{{ $user->id }}"
                                                    action="{{ route('users.destroy', $user->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"
                                                        title="Eliminar Usuario" style="border-radius: 0 3px 3px 0;"><i
                                                            class="fa-regular fa-trash-can"></i></button>
                                                </form>

                                                <script>
                                                    function preguntar{{ $user->id }}(event) {
                                                        event.preventDefault();
                                                        Swal.fire({
                                                            title: "Eliminar Usuario",
                                                            text: "¿Está seguro de eliminar este usuario?",
                                                            icon: 'question',
                                                            showDenyButton: true,
                                                            confirmButtonText: "Eliminar",
                                                            confirmButtonColor: "#a5161d",
                                                            denyButtonColor: "#270a0a",
                                                            denyButtonText: 'Cancelar'
                                                        }).then((result) => {
                                                            if (result.isConfirmed) {
                                                                var form = $('#miFormulario{{ $user->id }}');
                                                                form.submit();
                                                            } else if (result.isDenied) {
                                                                Swal.fire("Cancelado", "", "info");
                                                            }
                                                        });
                                                    }
                                                </script>
                                            </div> --}}

                                            <div class="dropdown">
                                                <button class="btn btn-sm btn-light dropdown-toggle" type="button"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="fa-solid fa-ellipsis-vertical"></i>
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="{{route('users.show', $user->id)}}"><i class="fa-regular fa-eye"></i> ver</a></li>
                                                    <li><a class="dropdown-item" href="{{route('users.edit', $user->id)}}"><i
                                                                class="fa-regular fa-pen-to-square"></i> Editar</a></li>
                                                    <form onclick="preguntar{{ $user->id }}(event)"
                                                        id="miFormulario{{ $user->id }}"
                                                        action="{{ route('users.destroy', $user->id) }}" method="POST">
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
                                                        function preguntar{{ $user->id }}(event) {
                                                            event.preventDefault();
                                                            Swal.fire({
                                                                title: "Eliminar Usuario",
                                                                text: "¿Está seguro de eliminar este usuario?",
                                                                icon: 'question',
                                                                showDenyButton: true,
                                                                confirmButtonText: "Eliminar",
                                                                confirmButtonColor: "#a5161d",
                                                                denyButtonColor: "#270a0a",
                                                                denyButtonText: 'Cancelar'
                                                            }).then((result) => {
                                                                if (result.isConfirmed) {
                                                                    var form = $('#miFormulario{{ $user->id }}');
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
