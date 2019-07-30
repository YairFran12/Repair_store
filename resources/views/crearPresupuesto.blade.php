@extends('layout')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
       <!-- fonts icons -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
</head>
<body>

   <!--Agregar Modal -->
   <div class="modal fade" id="addPreModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
     <div class="modal-dialog" role="document">
       <div class="modal-content">
         <div class="modal-header">
           <h5 class="modal-title" id="exampleModalLabel"> Agregar Producto Presupuesto</h5>
           <button type="button" class="close" data-dismiss="modal" aria-label="Close">
             <span aria-hidden="true">&times;</span>
           </button>
         </div>
         <form id="addform">

            <div class="modal-body">
                {{ csrf_field()}}

            <div class="form-group">
                   <label> Nombre del Producto </label>
                   <input type="text" name ="producto" class="form-control"  placeholder="Ingresa nombre del producto" >
               </div>

              <div class="form-group">
                    <label> Descripcion </label>
                    <input type="text" name ="descripcion" class="form-control" placeholder="Ingresa una descripcion">
              </div>

              <div class="form-group">
                <label> Precio </label>
                <input type="text" name ="precio" class="form-control" placeholder="Ingresa el precio">
             </div>

             <div class="form-group">
                <label> Cantidad </label>
                <input type="text" name ="cantidad" class="form-control" placeholder="Ingresa el precio">
             </div>

         </div>
         <div class="modal-footer">
           <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
           <button type="submit" class="btn btn-primary"> Agregar </button>
         </div>
         </form>
       </div>
     </div>
   </div>


     <!--Editar Modal -->
   <div class="modal fade" id="editPreModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
     <div class="modal-dialog" role="document">
       <div class="modal-content">
         <div class="modal-header">
           <h5 class="modal-title" id="exampleModalLabel"> Editar Producto Presupuesto</h5>
           <button type="button" class="close" data-dismiss="modal" aria-label="Close">
             <span aria-hidden="true">&times;</span>
           </button>
         </div>
         <form id="editform">

            <div class="modal-body">
                {{ csrf_field()}}
                {{ method_field('PUT') }}

                <input type="hidden" name="id" id="id">

            <div class="form-group">
                   <label> Nombre del Producto </label>
                   <input type="text" name ="producto" id="producto" class="form-control"  placeholder="Ingresa nombre del producto" >
               </div>

              <div class="form-group">
                    <label> Descripcion </label>
                    <input type="text" name ="descripcion" id="descripcion" class="form-control" placeholder="Ingresa una descripcion">
              </div>

              <div class="form-group">
                <label> Precio </label>
                <input type="text" name ="precio" id="precio" class="form-control" placeholder="Ingresa el precio">
             </div>

              <div class="form-group">
                <label> Cantidad </label>
                <input type="text" name ="cantidad" id="cantidad" class="form-control" placeholder="Ingresa la cantidad">
             </div>

         </div>
         <div class="modal-footer">
           <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
           <button type="submit" class="btn btn-primary"> Editar </button>
         </div>
         </form>
       </div>
     </div>
   </div>

 <br> <br>

   

   <div class="container">

        <center> <h3> <b> Refaccionaria Chino JR </b> </h3> </center>


        <br>
         
         <div align="left">
           
            <h5> Carretera Internacional, Segunda Sección, San Pablo Huitzo </h5>
            <h5> Telefono: <b> 9511235453 </b></h5>
         </div>

         <br> <br>

       <div>
           <div class="row">
               <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addPreModal"> 
                   Agregar Presupuesto 
               </button>
                <table class="table mt-4">
                <thead class="table table-primary">
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Producto</th>
                    <th scope="col">Descripcion</th>
                    <th scope="col">Precio</th>
                    <th scope="col"> Cantidad </th>
                    <th scope="col"> Total </th>

                    <th scope="col"> Acciones </th>
                    
                  </tr>
                </thead>
                <tbody>
                        @foreach ($presu as $datosVi)
                          
                      <tr>
                        <td> {{$datosVi -> id}}</td>
                        <td> {{$datosVi -> producto}}</td>
                        <td> {{$datosVi -> descripcion}}</td>
                        <td> {{$datosVi -> precio}}</td>
                        <td> {{$datosVi -> cantidad}}</td>
                        <td> ${{$datosVi -> total}}</td>
                            
                            
                            <td>
                              <a href="#" class="btn btn-info edit" > <i class="fas fa-edit"></i> </i></a>
                            
                            </td>
                      </tr>
                        @endforeach
                    </tbody>
              </table>
           </div>
       </div>

       <div align="right">
       <table>

         <td>
            <a href=" {{ route('verPDF') }} " class="btn btn-primary" > <i class="fas fa-eye fa-1.8x"></i></i> </a>
         </td>
         <td>
           <a href="{{ route('descaPDF') }}" class="btn btn-primary"><i class="fas fa-file-download fa1.8x"></i></a>
         </td>
         <td>
           <a href="/index" class="btn btn-primary"> <i class="fas fa-home fa-1.8x"></i> </a>
         </td>
       </table>
         </div> 
         <br> 

        
    <form action="{{ url('/store-photo') }}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="form-group">

            <div class="custom-file">
                <input type="file" id="file" name="file" class="custom-file-input">
                <label class="custom-file-label" for="file" style="width:300px; height:35px" > Buscar PDF</label>
            </div>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary"> <i class="fas fa-file-upload"></i> </button>
        </div>
    </form>

   </div>
    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <!-- Editar Producto -->

   <script>

       $(document).ready(function(){
           $('.edit').on('click', function(){
               $('#editPreModal').modal('show');

               $tr = $(this).closest('tr');
               
               var data = $tr.children('td').map(function(){
                   return $(this).text();
               }).get();

               console.log(data);

                $('#id').val(data[0]);
               $('#producto').val(data[1]);
               $('#descripcion').val(data[2]);
               $('#precio').val(data[3]);
               $('#cantidad').val(data[4]);

              
           });

           $('#editform').on('submit', function(e){
                    e.preventDefault();

                    var id = $('#id').val();

                    $.ajax({
                        type: "PUT",
                        url: "/editarPresu/"+id,
                        data: $('#editform').serialize(),
                        success: function(response){
                            console.log(response)
                            $('#editPreModal').modal('hide')
                            alert("Producto Actualizado");
                            location.reload();
                        },
                        error: function(error){
                            console.log(error);
                        }
                    });
                });
       });
   
   </script>

    <!-- Insertar Producto -->
        <script>
            $(document).ready(function (){

                $('#addform').on('submit', function(e){
                    e.preventDefault();

                    $.ajax({
                        type: "POST",
                        url: "/crearPresu",
                        data: $('#addform').serialize(),
                        success: function(response){
                            console.log(response)
                            $('#addPreModal').modal('hide')
                            alert("Producto Agregado");
                            location.reload();
                        },
                        error: function(error){
                            console.log(error)
                            alert("Error: Campos Vacios");
                        }
                    });
                });
            });
        
        </script>
    
   </body>
   </html>

@endsection