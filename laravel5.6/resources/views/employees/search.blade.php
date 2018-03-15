<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Resultado de la busqueda por email</title>

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
                        <p>Regresar al Inicio:</p>
                        <a href="/employees">Inicio</a>
                    </div>        
                </div>
            </div>
            
            <h1>Empleados por email</h1>
            
            <form class="form-inline" action="" method="GET">
                <div class="form-group">
                    <label for="exampleInputEmail2">Resultado de e-mail</label>
                    &nbsp;{{ $email }}&nbsp;
                </div>                
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
                        @if(strpos($value->email, $email) !== false)                  
                        <tr>
                            <td>{{ $value->name }}</td>
                            <td>{{ $value->email }}</td>
                            <td>{{ $value->position }}</td>
                            <td>{{ $value->salary }}</td>
                            <td>
                                <a class="btn btn-primary" href="/employee/id/{{ $value->id }}">Ver más</a>
                            </td>
                        </tr>
                        @endif
                    @endforeach
                </tbody>
            </table>

        </div>
        </div>
    </body>
</html>
