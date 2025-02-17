<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Inmoviliaria Foreign Key</a>
                <span class="navbar-text">
                    Daniel Pavon
                </span>
            </div>
          </nav>
    </header>
    <div class="container">
        <div class="row">
            <div class="col-12 mt-4">
                <div class="row">
                    <div class="col-4 text-center">
                        <a href="#" class="btn btn-primary">Crear Agente</a>
                    </div>
                    <div class="col-4 text-center">
                        <a href="#" class="btn btn-primary">Crear Categoria</a>
                    </div>
                    <div class="col-4 text-center">
                        <a href="#" class="btn btn-primary">Crear Propiedad</a>
                    </div>
                </div>
            </div>
            <div class="col-12 mt-4">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Ubicación propiedad</th>
                            <th>Nombre del agente</th>
                            <th>Categoria</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($propiedades as $propiedad)
                            <tr>
                                <td>{{ $propiedad->Ubicacion }}</td>
                                <td>{{ $propiedad->agente }}</td>
                                <td>{{ $propiedad->categoria }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>