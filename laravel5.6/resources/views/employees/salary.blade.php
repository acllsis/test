<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Lista de empleados</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="alert alert-info">
                        <p>Sobre la API:</p>
                        <ul>
                            <li>Para consultar la API se debe realizar una petición GET a /employee/salary.</li>
                            <li>Se debe usar un Content-Type adecuado, según ello responderá con XML o JSON.</li>
                            <li>Los parámetros GET para filtrar tienen como nombre "minimo" y "maximo".</li>
                        </ul>
                    </div>        
                </div>
            </div>
            
            <h1>Listado de empleados</h1>
            
            <form class="form-inline" action="/employees/search" method="REQUEST">
                <div class="form-group">
                    <label for="exampleInputEmail2">Búsqueda por e-mail</label>
                    &nbsp;<input type="text" class="form-control" name="email" placeholder="">&nbsp;
                </div>
                <button type="submit" class="btn btn-default">Buscar</button>
            </form>

            <table class="table">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>E-mail</th>
                        <th>Cargo</th>
                        <th>Salario</th>
                        <th>Opciones</th>
                    </tr>
                </thead>
                <tbody>
                     @foreach($employees as $value)                    
                        <tr>
                            <td>{{ $value->name }}</td>
                            <td>{{ $value->email }}</td>
                            <td>{{ $value->position }}</td>
                            <td>{{ $value->salary }}</td>
                            <td>
                                <a class="btn btn-primary" href="/employee/id/{{ $value->id }}">Ver más</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
        </div>
    </body>
</html>
