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
            <table class="table mt-4">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido Paterno</th>
                    <th scope="col">Apellido Materno</th>
                    <th scope="col">Dirección</th>
                    <th scope="col">Telefono</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($emps as $datosVi)
                      
                  <tr>
                    <th> {{$datosVi -> id}} </th>
                    <td> {{$datosVi -> nombre}}</td>
                    <td> {{$datosVi -> apellido_p}}</td>
                    <td> {{$datosVi -> apellido_m}}</td>
                    <td> {{$datosVi -> direccion}}</td>
                    <td> {{$datosVi -> telefono}}</td>
                  </tr>
                    @endforeach
                </tbody>
              </table>
           </div>
    
</body>
</html>

@endsection


 