@extends('layouts.layout')

@section('content')
    <div class="content-header">
        <div class="container-fluid mt-3">
            <div class="row mb-2 justify-content-between">
                <div class="col-sm-10 p-0">
                    <h1 class="m-0">Registrar un nuevo usuario</h1>
                </div><!-- /.col -->
                <div class="col-sm-2 p-0 d-flex justify-content-end">
                    {{-- <a href="{{ url('users/create') }}" title="Agregar usuario" class="btn btn-success rounded-circle"><i class="fa-solid fa-plus"></i></a> --}}
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

    <div class="container pb-4">

        <form method="POST" action="{{ url('/users') }}"
                            class="row col-12 col-md-12 col-lg-12 col-xl-12 border pe-0 p-4 rounded bg-white">
                            @csrf


                            <div class="col-12 row p-0">
                                <div class="col-md-4">
                                    <label for="document_type" class="form-label">Tipo de documento</label>
                                    <select id="document_type" class="form-select form-select-sm" name="document_type" required>
                                        <option value="" disabled>- Seleccione -</option>
                                        <option value="1">Cedula de ciudadania</option>
                                        <option value="2">Cedula de extranjeria</option>
                                        <option value="3">Pasaporte</option>
                                    </select>
                                    @error('document_type')
                                        <p> {{ $message }} </p>
                                    @enderror
                                </div>
                                <div class="col-md-4">
                                    <label for="document_number" class="form-label">Numero de documento</label>
                                    <input type="number" class="form-control form-control-sm" id="document_number" name="document_number"
                                        value="{{ old('document_number') }}" required>
                                    {{-- <small class="text-danger"> {{ $errors->get('document_number') }} </small> --}}
                                    @error('document_number')
                                        <p> {{ $message }} </p>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12 row mt-3 p-0">
                                <div class="col-md-4">
                                    <label for="name" class="form-label">Nombre</label>
                                    <input type="text" class="form-control form-control-sm" id="name" name="name"
                                        value="{{ old('name') }}" required>
                                    {{-- <small class="text-danger"> {{ $errors->get('name') }} </small> --}}
                                    @error('name')
                                        <p> {{ $message }} </p>
                                    @enderror
                                </div>
                                <div class="col-4">
                                    <label for="lastname" class="form-label">Apellido</label>
                                    <input type="text" class="form-control form-control-sm" id="lastname" name="lastname"
                                        value="{{ old('lastname') }}" required>
                                    {{-- <small class="text-danger"> {{ $errors->get('lastname') }} </small> --}}
                                    @error('lastname')
                                        <p> {{ $message }} </p>
                                    @enderror
                                </div>
                                <div class="col-4">
                                    <label for="birthdate" class="form-label">Fecha de nacimiento</label>
                                    <input type="date" class="form-control form-control-sm" id="birthdate" name="birthdate"
                                        value="{{ old('birthdate') }}" required>
                                    {{-- <small class="text-danger"> {{ $errors->get('birthdate') }} </small> --}}
                                    @error('birthdate')
                                        <p> {{ $message }} </p>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12 row mt-3 p-0">
                                <div class="col-md-4">
                                    <label for="cell" class="form-label">Celular</label>
                                    <input type="number" class="form-control form-control-sm" id="cell" name="cell"
                                        value="{{ old('cell') }}">
                                    {{-- <small class="text-danger"> {{ $errors->get('cell') }} </small> --}}
                                    @error('cell')
                                        <p> {{ $message }} </p>
                                    @enderror
                                </div>
                                <div class="col-4">
                                    <label for="email" class="form-label">Correo Electronico</label>
                                    <input type="email" class="form-control form-control-sm" id="email" name="email"
                                        value="{{ old('email') }}" required>
                                    {{-- <small class="text-danger"> {{ $errors->get('email') }} </small> --}}
                                    @error('email')
                                        <p> {{ $message }} </p>
                                    @enderror
                                </div>
                                <div class="col-4">
                                    <label for="address" class="form-label">Direccion</label>
                                    <input type="text" class="form-control form-control-sm" id="address" name="address"
                                        value="{{ old('address') }}">
                                    {{-- <small class="text-danger"> {{ $errors->get('address') }} </small> --}}
                                    @error('address')
                                        <p> {{ $message }} </p>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12 row mt-3 p-0">
                                <div class="col-md-4">
                                    <label for="password" class="form-label">Contraseña</label>
                                    <input type="password" class="form-control form-control-sm" id="password" name="password" required>
                                    {{-- <small class="text-danger"> {{ $errors->get('password') }} </small> --}}
                                    @error('password')
                                        <p> {{ $message }} </p>
                                    @enderror
                                </div>
                                <div class="col-4">
                                    <label for="password_confirmation" class="form-label">Repetir contraseña</label>
                                    <input type="password" class="form-control" id="password_confirmation"
                                        name="password_confirmation" required>
                                    @error('password_confirmation')
                                        <p> {{ $message }} </p>
                                    @enderror
                                </div>
                            </div>


                            <div class="col-12 mt-3 d-flex justify-content-end p-0 pe-4">
                                <button type="submit" class="btn btn-success"><i class="fa-regular fa-floppy-disk"></i> Registrar</button>
                            </div>
                        </form>

    </div>
@endsection
