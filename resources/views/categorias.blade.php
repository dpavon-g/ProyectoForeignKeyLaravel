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
            <div class="col-12 mt-3">
                <a class="btn btn-primary"  href="{{ route('home') }}">Volver al home</a>
            </div>
            <div class="col-12 mt-4">
                <div class="row">
                    <div class="col-12 text-center mb-5">
                        <h2>Categorías</h2>
                    </div>
                    <form action="{{ 'crearCategoria' }}" method="POST">
                        @csrf
                        @method('POST')
                        <div class="row">
                            <div class="col-6 text-center">
                                <input type="text" name="Nombre" class="form-control" placeholder="Nombre" required>
                            </div>
                            <div class="col-6 text-center">
                                <input type="text" name="Descripcion" class="form-control" placeholder="Descripción" required>
                            </div>
                            <div class="col-12 mt-3 text-center">
                                <button type="submit" class="btn btn-primary">Crear categoría</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-12 mt-4">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nombre</th>
                            <th>Descripción</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($categorias as $categoria)
                            <tr>
                                <td>{{ $categoria->id }}</td>
                                <td>{{ $categoria->Nombre }}</td>
                                <td>{{ $categoria->Descripcion }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>