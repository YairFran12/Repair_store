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
<body>
        <div class="container">
        <br>
        <center><h2><b> Compras realizadas </b></h2></center>
        <br>
            
    <table id="datatable" class="table mt-4">
      <thead class="table table-primary">
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Producto</th>
          <th scope="col">Marca</th>
          <th scope="col">Modelo</th>
          <th scope="col">Cantidad</th>
          <th scope="col">Precio</th>
          <th scope="col">Total</th>
          <th scope="col">Fecha</th>
        </tr>
      </thead>
                
      <tbody>
      @foreach ($emps as $datosVi)
      
        <tr>
          <th> {{$datosVi -> id}} </th>
          <td> {{$datosVi -> nombre}}</td>
          <td> {{$datosVi -> marca}}</td>
          <td> {{$datosVi -> modelo}}</td>
          <td> {{$datosVi -> cantidad}}</td>
          <td> {{$datosVi -> precio_c}}</td>
          <td> {{$datosVi -> total}}</td>
          <td> {{$datosVi -> fecha}}</td>
        </tr>

      @endforeach
      </tbody>
    </table>
           </div>
    
</body>
</html>

@endsection