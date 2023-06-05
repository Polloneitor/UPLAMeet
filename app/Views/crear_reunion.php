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

    <div class="col-8">
        <div class="card">
            <div class="card-body">
                <div class="row">
                <div class="col-1"></div>
                    <div class="col">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-default">Titulo de la Reunión</span>
                        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                        </div>
                        </div>
                        
                    <div class="col-1"></div>
                </div>

                <div class="row">
                <div class="col-1"></div>
                    <div class="col"><div class="input-group">
                        <span class="input-group-text">Descripción de la Reunión</span>
                        <textarea class="form-control" aria-label="With textarea"></textarea>
                        </div>
                        </div>
                        
                    <div class="col-1"></div>
                </div>
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/3c/Blanco.svg/1200px-Blanco.svg.png"width="100" height="5">


                <div class="row">
                <div class="col-1"></div>
                    <div class="col">
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Seleccione el tipo de reunión</option>
                        <option value="1">Tipo 1</option>
                        <option value="2">Tipo 2</option>
                        <option value="3">Tipo 3</option>
                    </select>
                        </div>
                        
                    <div class="col-1"></div>
                </div>
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/3c/Blanco.svg/1200px-Blanco.svg.png"width="100" height="5">


                <div class="row">
                <div class="col-1"></div>
                    <div class="col">
                    <a href="/UPLAMeet/Home/agregar_invitados"><button type="button" class="btn btn-outline-secondary">Agregar Invitados</button></a>                        
                        </div>
                        
                    <div class="col-1"></div>
                </div>

                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/3c/Blanco.svg/1200px-Blanco.svg.png"width="100" height="5">


                <div class="row">
                <div class="col-1"></div>
                    <div class="col">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-default">Fecha</span>
                        <input type="text" class="form-control"placeholder="dd-mm-yyyy" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                        </div>
                        
                        </div>
                        
                    <div class="col-1"></div>
                </div>




                <div class="row">
                <div class="col-1"></div>
                    <div class="col">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-default">Horario</span>
                        <input type="text" class="form-control"placeholder="hh:mm formato de 24 horas" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                        </div>
                        
                        </div>
                        
                    <div class="col-1"></div>
                </div>



                

                <div class="row">
                <div class="col-1"></div>
                    <div class="col">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                        <label class="form-check-label" for="flexCheckChecked">
                            Establecer mensualmente
                        </label>
                        </div>
                    </div>
                        
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
    <div class="col-2">        <a href="/UPLAMeet/Home/ver_creadas2"><button type="button" class="btn btn-success">Actualizar</button></a>
</div>

    </div>
        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/3c/Blanco.svg/1200px-Blanco.svg.png"width="100" height="100">

    </div>
 
  </body>
</html>