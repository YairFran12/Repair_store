@extends('layout')
@section('content')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>

<body>


    {{--  Empieza modelo Crear  --}}
   <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel"> Nueva venta </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
      <form action="{{ action('ventasController@store') }}" method="POST" >

          {{ csrf_field() }}
          <div class="modal-body">

               <div class="form-group">
                   <label> ID del Cliente </label>
                   <input type="text" name ="id_cliente" class="form-control"  placeholder="Ingresa el ID del cliente">
               </div>

              <div class="form-group">
                    <label> ID del Empleado </label>
                    <input type="text" name ="id_empleado" class="form-control" placeholder="Ingresa el ID del empleado">
              </div>

              <div class="form-group">
                <label> Producto </label>
                <input type="text" name ="nombre_producto" class="form-control" placeholder="Ingresa el nombre del producto">
             </div>

             <div class="form-group">
                <label> Marca </label>
                <input type="text" name ="marca" class="form-control" placeholder="Ingresa el nombre del producto">
             </div>

             <div class="form-group">
                <label> Modelo </label>
                <input type="text" name ="modelo" class="form-control" placeholder="Seleccione el modelo">
              </div>

              <div class="form-group">
                <label> Cantidad </label>
                <input type="text" name ="cantidad" class="form-control" placeholder="Ingresa la cantidad de productos">
              </div>

              <div class="form-group">
                <label> Precio </label>
                <input type="text" name ="precio" class="form-control" placeholder="Ingrese el precio" >
              </div>

              <div class="form-group">
                <label> Total </label>
                <input type="text" name ="total" class="form-control" placeholder="Ingrese el total" >
              </div>

              <div class="form-group">
                <label> Fecha </label>
                <input type="date" name ="fecha_v" class="form-control" placeholder="Ingrese fecha total" >
              </div>
              

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary"> Vender </button>
          </div>
      </form>
        </div>
      </div>
    </div>
    {{--  Termina Modelo Crear  --}}

  <div class = "container"> 
    
  <br>
  <center><h2><b> Ventas </b></h2></center>
  <br><br>

  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"> Nueva venta <i class="fas fa-user-plus"></i> </button>
  <br><br>

    <table id="datatable" class="table mt-4">
      <thead class="table table-primary">
        <tr>
          <th scope="col">ID</th>
          <th scope="col">ID Cliente</th>
          <th scope="col">ID Empleado</th>
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
          <td> {{$datosVi -> id_cliente}}</td>
          <td> {{$datosVi -> id_empleado}}</td>
          <td> {{$datosVi -> nombre_producto}}</td>
          <td> {{$datosVi -> marca}}</td>
          <td> {{$datosVi -> modelo}}</td>
          <td> {{$datosVi -> cantidad}}</td>
          <td> {{$datosVi -> precio}}</td>
          <td> {{$datosVi -> total}}</td>
          <td> {{$datosVi -> fecha_v}}</td>
        </tr>

      @endforeach
      </tbody>
    </table>
    <br><br>
</div>  
</body>

</html>
@endsection