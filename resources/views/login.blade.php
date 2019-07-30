<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
<div class= "container">
    <center>
    <br><br><br><br><br>
    <h2><b> Login </b></h2>
    <br><br><br>

    {!!Form::open(array('url'=>'exito', 'method'=>'POST', 'autocomplete'=>'off'))!!}

    {!!Form::label('Usuario')!!} <span style = "color:red"> * </span>
    {!!form::text('usuario', null, ['id'=> 'usuario', 'class' => 'form-control', 'placeholder' => 'Nombre de usuario'])!!}
    <br>
    <br>
    
    {!!Form::label('Contraseña')!!} <span style = "color:red"> * </span>
    {!!form::text('contra', null, ['id'=> 'contra', 'class' => 'form-control', 'placeholder' => 'Contraseña'])!!}
    <br>
    <br>
    <br>
    <br><br>

    {!!Form::submit('Ingresar',['name' => 'grabar', 'id' => 'grabar', 'content' => '<span> Registrar </span>', 'class' => 'btn btn-success'])!!}
    
    {!!Form::close()!!}
    </center>
</div>   
</body>
</html>