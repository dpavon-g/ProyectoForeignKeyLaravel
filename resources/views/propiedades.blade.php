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
                        <h2>Agentes</h2>
                    </div>    
                    <form action="{{ 'crearPropiedad' }}" method="POST">
                        @csrf
                        @method('POST')
                        <div class="row">
                            <div class="col-4 text-center">
                                <input type="text" name="Ubicacion" class="form-control" placeholder="Ubicacion" required>
                            </div>
                            <div class="col-4 text-center">
                                <div class="row">
                                    <div class="col-6">
                                        <label for="Categoria">Categoría</label>
                                    </div>
                                    <div class="col-6">
                                        <select name="Category_id" id="Categoria" class="form-select">
                                            @foreach($categorias as $categoria)
                                                <option value="{{ $categoria->id }}">{{ $categoria->Nombre }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4 text-center">
                                <div class="row">
                                    <div class="col-6">
                                        <label for="Agentes">Agentes</label>
                                    </div>
                                    <div class="col-6">
                                        <select name="Agent_id" id="Agentes" class="form-select">
                                            @foreach($agentes as $agente)
                                                <option value="{{ $agente->id }}">{{ $agente->Nombre }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 mt-3 text-center">
                                <button type="submit" class="btn btn-primary">Crear propiedad</button>
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
                            <th>Ubicación</th>
                            <th>Agente</th>
                            <th>Categoría</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($propiedades as $propiedad)
                            <tr>
                                <td>{{ $propiedad->id }}</td>
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