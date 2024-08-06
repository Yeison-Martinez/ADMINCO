

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ingresar</title>

    {{-- Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body class="bg-light">
    <div class="vh-100">
        <div class="row d-flex justify-content-center align-items-center h-100 m-0">
            {{-- <h1>Iniciar sesion</h1> --}}
            <form method="POST" autocomplete="off" action="{{ route('login') }}" class="col-4 col-md-3 col-lg-3 col-xl-3 border p-4 rounded bg-white">
                @csrf
                <div class="mb-3">
                    <label for="email" class="form-label">Correo Electronico</label>
                    <input type="email" class="form-control" name="email" id="email" value="{{old('email')}}" autofocus>
                    @error('email')
                            <p> {{ $message }} </p>
                        @enderror
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Contraseña</label>
                    <input type="password" class="form-control" name="password" id="password">
                    @error('password')
                            <p> {{ $message }} </p>
                        @enderror
                </div>
                <button type="submit" class="btn btn-primary">Ingresar</button>
                <a href="{{ route('register') }}" class="btn">Registrase</a>
            </form>
        </div>
    </div>
</body>

</html>