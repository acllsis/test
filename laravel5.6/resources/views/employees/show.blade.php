<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Detalle de empleado</title>

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
            
            <h1>Detalle del empleado</h1>
            
            <form class="form-inline" action="" method="GET">
                <div class="form-group">
                    <label for="exampleInputEmail2">ID</label>
                    &nbsp;{{ $id }}&nbsp;
                </div>                
            </form>
            
            @foreach($employees as $value)
                @if($value->id == $id)                  
                <ul>
                    <li><strong>Nombre:</strong> {{ $value->name }}</li>
                    <li><strong>E-mail:</strong> {{ $value->email }}</li>
                    <li><strong>Teléfono:</strong> {{ $value->phone }}</li>
                    <li><strong>Dirección:</strong> {{ $value->address }}</li>
                    <li><strong>Cargo:</strong> {{ $value->position }}</li>
                    <li><strong>Salario:</strong> {{ $value->salary }}</li>
                    <li>
                        <strong>Skills:</strong> 
                        @foreach($value->skills as $skill)                        
                            {{ $skill->skill }} - 
                        @endforeach
                    </li>
                </ul>
                @endif
            @endforeach
                
        </div>
        </div>
    </body>
</html>
