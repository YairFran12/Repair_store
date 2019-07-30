@extends('layout')
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>    
</head>
    <script src="js/jquery.min.js"></script>
    <script src="js/ventas.js"></script>

<body>
<div class="container">
    
  <br>
  <center><h2><b> Realizar venta </b></h2></center>
  <a href="ver_ventas" class="btn btn-success" > Ventas realizadas  <i class="fas fa-eye-slash"></i></a>
  <br><br>

  {!!Form::open(array('url'=>'insertar_venta', 'method'=>'POST', 'autocomplete'=>'off'))!!}

  {!!Form::label('ID de Cliente')!!} <span style = "color:red"> * </span>
  {!!form::text('idcliente', null, ['id'=> 'idcliente', 'class' => 'form-control', 'placeholder' => 'Ingrese ID'])!!}
  <br>

  {!!Form::label('ID de Empleado')!!} <span style = "color:red"> * </span>
  {!!form::text('idempleado', null, ['id'=> 'idempleado', 'class' => 'form-control', 'placeholder' => 'Ingrese ID'])!!}
  <br>

    <table>
      <tr>
        <td> Producto </td>
        <td>{{Form::select('elproducto', $variable, null, ['id' => 'select-producto', 'placeholder' => 'Seleccione el modelo','class' => 'form-control'])}}</td>
      </tr>

      <tr>
        <td> Marca </td>
        <td>
          <select name="lamarca" id="select-producto2" class="form-control">
          </select>
        </td>
      </tr>

      <tr>
        <td> Modelo </td>
        <td>
          <select name="elmodelo" id="select-producto3" class="form-control">
          </select>
        </td>
      </tr>
    </table>

  <br>

  {!!Form::label('Cantidad')!!} <span style = "color:red"> * </span>
  {!!form::text('cantidad', null, ['id'=> 'cantidad', 'class' => 'form-control', 'placeholder' => 'Ingrese cantidad'])!!}
  <br>

  {!!Form::label('Precio')!!} <span style = "color:red"> * </span>
  {!!form::text('precio', null, ['id'=> 'precio', 'class' => 'form-control', 'placeholder' => 'Ingrese precio'])!!}
  <br>

  {!!Form::label('Fecha')!!} <span style = "color:red"> * </span>
  {!!form::date('fecha', null, ['id'=> 'fecha', 'class' => 'form-control', 'placeholder' => 'Ingrese fecha'])!!}
  <br>  

  {!!Form::submit('Vender',['name' => 'grabar', 'id' => 'grabar', 'content' => '<span> Registrar </span>', 'class' => 'btn btn-primary'])!!}
  {!!Form::close()!!}
    
</div>
</body>
</html>
@endsection