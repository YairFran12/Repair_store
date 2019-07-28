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
            <h5 class="modal-title" id="exampleModalLabel"> Agregar Usuario </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
      <form action="{{ action('clientesController@store') }}" method="POST" >

          {{ csrf_field() }}
          <div class="modal-body">

               <div class="form-group">
                   <label> Nombre </label>
                   <input type="text" name ="nombre" class="form-control"  placeholder="Ingresa el nombre" >
               </div>

              <div class="form-group">
                    <label> Apellido Paterno </label>
                    <input type="text" name ="apellido_p" class="form-control" placeholder="Ingresa apellido paterno">
              </div>

              <div class="form-group">
                <label> Apellido Materno </label>
                <input type="text" name ="apellido_m" class="form-control" placeholder="Ingresa apellido materno">
             </div>

             <div class="form-group">
                <label> Dirección </label>
                <input type="text" name ="direccion" class="form-control" placeholder="Ingresa la dirección">
              </div>

              <div class="form-group">
                <label> Telefono </label>
                <input type="text" name ="telefono" class="form-control" placeholder="Ingresa numero telefonico">
              </div>


          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary"> Agregar Cliente </button>
          </div>
      </form>
        </div>
      </div>
    </div>

    {{--  Termina Modelo Crear  --}}

  

    {{--  Empieza modelo Editar  --}}

   <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel"> Editar Cliente </h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
        <form action="/clientes" method="POST" id="editForm">
  
            {{ csrf_field() }}
            {{ method_field('PUT') }}

            <div class="modal-body">
  
                 <div class="form-group">
                     <label> Nombre </label>
                     <input type="text"   name ="nombre" id="nombre" class="form-control"  placeholder="Ingresa el nombre" >

                 </div>
  
                 <div class="form-group">
                        <label> Apellido Paterno </label>
                        <input type="text" name ="apellido_p" id ="apellido_p" class="form-control"  placeholder="Ingresa Apellido Paterno" >
                </div>

                <div class="form-group">
                    <label> Apellido Materno </label>
                    <input type="text"  name ="apellido_m" id="apellido_m" class="form-control"  placeholder="Ingresa Appelido Materno" >

                </div>
 
                <div class="form-group">
                       <label> Direccion </label>
                       <input type="text" name ="direccion" id ="direccion" class="form-control"  placeholder="Ingresa la Direccion" >
               </div>

               <div class="form-group">
                <label> Numero de telefono </label>
                <input type="text"   name ="telefono" id="telefono" class="form-control"  placeholder="Ingresa Numero Telefonico" >

            </div>
  
                
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary"> Actualizar </button>
            </div>
        </form>
          </div>
        </div>
      </div>
  
      {{--  Termina Modelo Editar --}}

    {{--  Empieza modelo Eliminar --}}

   <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel"> Eliminar Juego </h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
        <form action="/clientes" method="POST" id="deleteForm">
  
            {{ csrf_field() }}
            {{ method_field('DELETE') }}

            <div class="modal-body">
                <input type="hidden" name="_method" value="DELETE">
                <p> ¿Estas seguro que quieres eliminar el clientes? </p>
  
            
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary"> Si! Eliminar</button>
            </div>
        </form>
          </div>
        </div>
      </div>
  
      {{--  Termina Modelo Eliminar --}}




        {{--  Inicio comprobar Errores --}}

    @if(count($errors) > 0)

    <div class="alert alert-danger">
      <ul>
        @foreach($errors ->all() as $error)
        <li> {{$error}} </li>
        @endforeach
        
     </ul> 
    </div>
   @endif

   @if (\Session::has('success'))
    <div class="alert alert-success">
      <p>{{ \Session::get('success') }}</p>
    </div>
   @endif

   {{--  termina comprobar Errores --}}

   <div class="container">
   

      <br>
      <center>
        <h2>  <b> Clientes </b>  </h2>
     </center>
 
   <br> <br>

      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
            Agregar <i class="fas fa-user-plus"></i> </button>

            <br> <br>

        <table id="datatable" class="table mt-4">
                <thead class="table table-primary">
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido Paterno</th>
                    <th scope="col">Apellido Materno</th>
                    <th scope="col">Dirección</th>
                    <th scope="col">Telefono</th>
                    <th scope="col">Acción</th>
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
                    <td>
                            <a href="#" class="btn btn-info edit" > <i class="fas fa-edit"> </i></a>
                            <a href="#" class="btn btn-danger delete" ><i class="fas fa-trash"></i></a>
                            <a href="ocultar_cliente/{{ $datosVi->id }}" class="btn btn-warning" ><i class="fas fa-eye-slash"></i></a>
                            
                            </td>
                  </tr>
                    @endforeach
                </tbody>
              </table>
              
              <br> <br>
            
              <a href="ver_ocultosC" class="btn btn-warning" > Clientes Ocultos  <i class="fas fa-eye-slash"></i></a>

   </div>

  

   <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>
    
    <!-- Button trigger modal -->
   
      
      <!-- Modal --> 
      <br>

    <script type="text/javascript">

    $(document).ready(function() {

    var table = $('#datatable').DataTable({
        language: {
            search: "Buscar:",
            sLengthMenu:     "Mostrar _MENU_ registros",
            sZeroRecords:    "No se encontraron resultados",
            sInfo:           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
            oPaginate: {
                             "sFirst":    "Primero",
                             "sLast":     "Último",
                             "sNext":     "Siguiente",
                             "sPrevious": "Anterior"
                        },
            sInfoFiltered:   "(filtrado de un total de _MAX_ registros)"    
             }
    });

    //Editar

    table.on('click', '.edit', function() {

    $tr = $(this).closest('tr');
    if ($($tr).hasClass('child')) {
        $tr = $tr.prev('.parent');
    }

    var data = table.row($tr).data();
    console.log(data);

    $('#nombre').val(data[1]);
    $('#apellido_p').val(data[2]);
    $('#apellido_m').val(data[3]);
    $('#direccion').val(data[4]);
    $('#telefono').val(data[5]);
    

    $('#editForm').attr('action', '/clientes/'+data[0]);
    $('#editModal').modal('show');

    });
    //eliminar

    table.on('click','.delete',function(){
        $tr = $(this).closest('tr');
        if ($($tr).hasClass('child')) {
        $tr = $tr.prev('.parent');
        }

        var data = table.row($tr).data();
        console.log(data);

        //$('#id').val(data[0]);

        $('#deleteForm').attr('action', '/clientes/'+data[0]);
        $('#deleteModal').modal('show');


    });


    });
     
</script>

</body>


</html>

@endsection


 
