@extends('layouts.layout')

@section('content')
    <div class="content-header w-50">
        <div class="container-fluid mt-3">
            <div class="row mb-2 justify-content-between">
                <div class="col-sm-10 p-0">
                    <h1 class="m-0">
                        Editar Rol</h1>
                </div><!-- /.col -->

            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>


    <div class="card w-50 ">


        <div class="p-4">
            <div id="" class="">

                <div class="row">
                    <div class="col-sm-12">


                        <div class="w-100 p-1">
                            <div class="">

                                <form action="{{ route('roles.update', $role) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div class="modal-body">
                                        <div class="mb-3">
                                            <label for="name" class="form-label">Nombre del rol</label>
                                            <input type="text" class="form-control" id="name" name="name"
                                                value="{{ $role->name }}" autofocus>
                                        </div>
                                        <div class="mb-3">
                                            <label for="name" class="form-label">Estado</label>
                                            
                                            <select name="is_active" class="form-select">
                                                <option value="">Seleccione</option>
                                                <option value="1">Activo</option>
                                                <option value="0">Inactivo</option>
                                            </select>
                                        </div>
                                    </div>
                                    
                                    <div class="footer">
                                        <a href="{{ route('roles.index') }}" class="btn btn-secondary">Cancelar</a>
                                        <button type="submit" class="btn btn-warning ms-2">Actualizar</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>

    </div>
@endsection
