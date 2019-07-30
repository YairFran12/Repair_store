<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="css/simple-sidebar.css" rel="stylesheet">

    <!-- Bootstrap CSS 
    
   <-! <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> ->
    -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css">
     <!-- fonts icons -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="css/bootstrap.min.css">
     

    <title>Index</title>
</head>
<body>


        <div class="d-flex" id="wrapper">

            <!-- Sidebar -->
            <div class="bg-primary" id="sidebar-wrapper">
              <div class="sidebar-heading"></div>
              <div class="list-group list-group-flush">
                <br><br><br><br>
                <center>
                <a href="/index" class="btn btn-primary">Principal</a>
                <br> <br> <br> <br>
                <a href="" class="btn btn-primary">Productos</a>
                <br> <br>
                <a href="ver_ocultos" class="btn btn-primary">Ventas</a>
                <br> <br>
                <a href="/empleados" class="btn btn-primary">Empleados</a>
                <br> <br>
                <a href="/clientes" class="btn btn-primary">Clientes</a>
                <br> <br>
                <a href="ver_ocultos" class="btn btn-primary">Compras</a>
                <br> <br>
                <a href="/crearPresupuesto" class="btn btn-primary">Presupuesto</a>
            </center>

                <br>
              </div>
            </div>
            <!-- /#sidebar-wrapper -->
        
            <!-- Page Content -->
            <div id="page-content-wrapper">
        
              <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
                
        
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
        
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                        <button class="btn btn-outline-secondary" id="menu-toggle"><i class="fas fa-arrows-alt-h"></i></button>

                  </ul>
                </div>
              </nav>

              @yield('content')
        

            </div>
            <!-- /#page-content-wrapper -->
        
          </div>
    
</body>

<script>
        $("#menu-toggle").click(function(e) {
          e.preventDefault();
          $("#wrapper").toggleClass("toggled");
        });
      </script>

</html>