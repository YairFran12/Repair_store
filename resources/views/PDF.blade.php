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

        <center> <h3> <b> Refaccionaria Chino JR </b> </h3> </center>


        <br>
         
         <div align="left">
           
            <h5> Carretera Internacional, Segunda Sección, San Pablo Huitzo </h5>
            <h5> Telefono: <b> 9511235453 </b></h5>
         </div>

         <br> <br>

       <div>
           <div class="row" >
                <table class="table mt-4">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">Producto</th>
                    <th scope="col">Descripcion</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Cantidad</th>
                    <th scope="cil">Total  </th>
                    
                  </tr>
                </thead>
                <tbody>
                        @foreach ($presu as $datosVi)
                          
                      <tr>
                        <td> {{$datosVi -> producto}}</td>
                        <td> {{$datosVi -> descripcion}}</td>
                        <td> ${{$datosVi -> precio}}</td>
                         <td> {{$datosVi -> cantidad}}</td>
                        <td> ${{$datosVi -> total}}</td>
                      </tr>
                        @endforeach
                    </tbody>
              </table>
           </div>
       </div>

</body>
</html>