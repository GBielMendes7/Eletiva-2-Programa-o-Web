<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Calculadora de IMC</title>
</head>
<body class="p-3">
    <div class="container rounded-pill p-3 shadow bg-warning">
        <div class="row">
            <h3 class="text-center">Seu IMC é</h3>
            <h4 class="text-center">{{$valor}}</h4>

        </div>
    </div>
    <div class="container mt-3">
        <a href="{{URL('/')}}" title="voltar"><button type="button" class="btn btn-primary p-3 rounded-pill">Voltar</button></a>
    </div>
    
</body>
</html>