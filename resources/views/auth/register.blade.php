<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>


    {{-- Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>

<body>

    <div class="vh-100 bg-light">
        <div class="row d-flex justify-content-center align-items-center h-100 m-0">


            <form method="POST" action="{{ route('register') }}"
                class="row  col-6 col-md-6 col-lg-6 col-xl-8 border pe-0 p-4 rounded bg-white">
                @csrf

                
                <div class="col-12 row p-0">
                    <div class="col-4">
                        <label for="document_type" class="form-label">Tipo de documento</label>
                        <select id="document_type" class="form-select" name="document_type" required>
                            <option value="" disabled>- Seleccione -</option>
                            <option value="1">Cedula de ciudadania</option>
                            <option value="2">Cedula de extranjeria</option>
                            <option value="3">Pasaporte</option>
                        </select>
                        {{-- <small class="text-danger"> {{ $errors->get('document_type') }} </small> --}}
                        {{-- <x-input-error :messages="" class="mt-2" /> --}}
                        @error('document_type')
                            <p> {{ $message }} </p>
                        @enderror
                    </div>
                    <div class="col-md-4">
                        <label for="document_number" class="form-label">Numero de documento</label>
                        <input type="number" class="form-control" id="document_number" name="document_number"
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
                        <input type="text" class="form-control" id="name" name="name"
                            value="{{ old('name') }}" required>
                        {{-- <small class="text-danger"> {{ $errors->get('name') }} </small> --}}
                        @error('name')
                            <p> {{ $message }} </p>
                        @enderror
                    </div>
                    <div class="col-4">
                        <label for="lastname" class="form-label">Apellido</label>
                        <input type="text" class="form-control" id="lastname" name="lastname"
                            value="{{ old('lastname') }}" required>
                        {{-- <small class="text-danger"> {{ $errors->get('lastname') }} </small> --}}
                        @error('lastname')
                            <p> {{ $message }} </p>
                        @enderror
                    </div>
                    <div class="col-4">
                        <label for="birthdate" class="form-label">Fecha de nacimiento</label>
                        <input type="date" class="form-control" id="birthdate" name="birthdate"
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
                        <input type="number" class="form-control" id="cell" name="cell"
                            value="{{ old('cell') }}">
                        {{-- <small class="text-danger"> {{ $errors->get('cell') }} </small> --}}
                        @error('cell')
                            <p> {{ $message }} </p>
                        @enderror
                    </div>
                    <div class="col-4">
                        <label for="email" class="form-label">Correo Electronico</label>
                        <input type="email" class="form-control" id="email" name="email"
                            value="{{ old('email') }}" required>
                        {{-- <small class="text-danger"> {{ $errors->get('email') }} </small> --}}
                        @error('email')
                            <p> {{ $message }} </p>
                        @enderror
                    </div>
                    <div class="col-4">
                        <label for="address" class="form-label">Direccion</label>
                        <input type="text" class="form-control" id="address" name="address"
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
                        <input type="password" class="form-control" id="password" name="password" required>
                        {{-- <small class="text-danger"> {{ $errors->get('password') }} </small> --}}
                        @error('password')
                            <p> {{ $message }} </p>
                        @enderror
                    </div>
                    <div class="col-4">
                        <label for="password_confirmation" class="form-label">Repetir contraseña</label>
                        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation"
                            required>
                        @error('password_confirmation')
                            <p> {{ $message }} </p>
                        @enderror
                    </div>
                </div>


                {{-- <div class="col-12">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="gridCheck">
                        <label class="form-check-label" for="gridCheck">
                            Check me out
                        </label>
                    </div>
                </div> --}}
                <div class="col-12 mt-5">
                    <button type="submit" class="btn btn-primary me-4">Registrar</button>
                    <span>Ya tengo una cuenta <a href="{{ route('login') }}">iniciar sesion</a></span>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
