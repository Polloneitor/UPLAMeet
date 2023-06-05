<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>UPLAMeet</title>
  </head>
  <body>
    <div class="container-fluid ">
    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/3c/Blanco.svg/1200px-Blanco.svg.png"width="100" height="100">
    <div class="row">
    <div class="col-2"></div>

    <div class="col">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-1"></div>
                    <div class="col">


                    <table class="table table-info table-striped" id="tablaGenero">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Apellido</th>
                            <th scope="col">Correo</th>
                            <th scope="col">Cargos</th>
                            <th scope="col">Invitar</th>
                            <th scope="col">Asignar como secretario/a</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <th scope="row">1</th>
                            <td>Nombre  1</td>
                            <td>Apellido 1</td>
                            <td>correo@xxxx.upla.cl </td>
                            <td>cargo1_cargo2</td>
                            <td> <a href="/UPLAMeet/Home/agregar_invitados"><button type="button" class="btn btn-success">Invitar</button></a></td>
                            <td> <a href="/UPLAMeet/Home/agregar_invitados"><button type="button" class="btn btn-warning">Asignar</button></a></td></td>
                            </tr>

                            <tr>
                            <th scope="row">2</th>
                            <td>Nombre  2</td>
                            <td>Apellido 2</td>
                            <td>correo@xxxx.upla.cl </td>
                            <td>cargo1_cargo2</td>
                            <td> <a href="/UPLAMeet/Home/agregar_invitados"><button type="button" class="btn btn-success">Invitar</button></a></td>
                            <td> <a href="/UPLAMeet/Home/agregar_invitados"><button type="button" class="btn btn-warning">Asignar</button></a></td></td>
                            </tr>

                            <tr>
                            <th scope="row">3</th>
                            <td>Nombre  3</td>
                            <td>Apellido 3</td>
                            <td>correo@xxxx.upla.cl </td>
                            <td>cargo1_cargo2</td>
                            <td> <a href="/UPLAMeet/Home/agregar_invitados"><button type="button" class="btn btn-success">Invitar</button></a></td>
                            <td> <a href="/UPLAMeet/Home/agregar_invitados"><button type="button" class="btn btn-warning">Asignar</button></a></td></td>
                            </tr>

                            <tr>
                            <th scope="row">4</th>
                            <td>Nombre  4</td>
                            <td>Apellido 4</td>
                            <td>correo@xxxx.upla.cl </td>
                            <td>cargo1_cargo2</td>
                            <td> <a href="/UPLAMeet/Home/agregar_invitados"><button type="button" class="btn btn-success">Invitar</button></a></td>
                            <td> <a href="/UPLAMeet/Home/agregar_invitados"><button type="button" class="btn btn-warning">Asignar</button></a></td></td>
                            </tr>
                            
                           
                        </tbody>
                        </table>






                    </div>
                    <div class="col-1"></div>
                    
                </div>
            </div>
        </div>
    </div>
    <div class="col-2"></div>
    </div>
    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/3c/Blanco.svg/1200px-Blanco.svg.png"width="100" height="100">

    <div class="row">
    <div class="col-5"></div>
    <div class="col-2">        <a href="/UPLAMeet/Home/volver_crear"><button type="button" class="btn btn-info">Invitar</button></a>
</div>

    </div>
        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/3c/Blanco.svg/1200px-Blanco.svg.png"width="100" height="100">

    </div>






    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
    <script src="//cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script> 
    <script>

        //var tabla= document.querySelector("#tablaLibro")

        //var dataTable = new DataTable(tablaLibro);
        //let table = new DataTable('#tablaLibro', {paging: false,
    //scrollY: 400
    // options
//});
    b =new DataTable( '#tablaGenero', {
    paging: false,
    scrollY:        300,
    deferRender:    true,
    scroller:       true
} );
    </script>
 
  </body>
</html>