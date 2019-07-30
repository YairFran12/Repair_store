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
        <br><center><h2>  <b> Productos ocultos </b></h2></center>
            <table id="datatable" class="table mt-4">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Marca</th>
                    <th scope="col">Modelo</th>
                    <th scope="col">Precio compra</th>
                    <th scope="col">Precio venta</th>
                  </tr>
                </thead>
                
                <tbody>
                    @foreach ($emps as $datosVi)
                      
                  <tr>
                    <th> {{$datosVi -> id}} </th>
                    <td> {{$datosVi -> nombre}}</td>
                    <td> {{$datosVi -> marca}}</td>
                    <td> {{$datosVi -> modelo}}</td>
                    <td> {{$datosVi -> precio_c}}</td>
                    <td> {{$datosVi -> precio_v}}</td>
                  </tr>
                    @endforeach
                </tbody>
              </table>
           </div>
    
</body>
</html>

@endsection


 