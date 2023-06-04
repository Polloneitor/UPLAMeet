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
          <div class="col-1">
            
            </div>
            <div class="col">
            <h1>Reuniones Realizadas</h1>
            </div>
            
            <div class="col">
            
            </div>
        </div>

        <div class="row">
          <div class="col-1">
            
            </div>
            <div class="col">

            <select class="form-select" aria-label="Default select example">
            <option selected>Ordenar por:</option>
            <option value="1">Fecha</option>
            <option value="2">Tipo de Reunión</option>
            <option value="3">Organizador</option>
            <option value="3">Sólo con acta</option>

          </select>


            </div>
            
            <div class="col">
            
            </div>
        </div>



        <div class="row">
          <div class="col-1"></div>

          
          <div class="col">
          <div class="accordion accordion-flush" id="accordionFlushExample">
              <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingOne">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                    <b>12/04/2023</b> --------------- Reunión número 1 
                  </button>
                </h2>
                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">
                    <b>Titulo: </b> titulo de la reunion<br>
                    <b>Descripción: </b> Descripción de la reunion<br>
                    <b>Fecha: </b>12/04/2023<br>
                    <b>Horario: </b> 15:30 hrs<br>
                    <b>Tipo: </b> tipo de reunion<br>
                    <b>Acta: </b> <a href="/UPLAMeet/Home/ver_acta">ACTA_12/04/2023_TEMA</a><br>
                    <b>Comentarios: </b> <a href="/UPLAMeet/Home/ver_comentarios0">(0)</a><br>




                  
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingTwo">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                  <b>11/11/2022</b> --------------- Reunión número 2 
                  </button>
                </h2>
                <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">
                  <b>Titulo: </b> titulo de la reunion<br>
                    <b>Descripción: </b> Descripción de la reunion<br>
                    <b>Fecha: </b>11/11/2022 <br>
                    <b>Horario: </b> 15:30 hrs<br>
                    <b>Tipo: </b> tipo de reunion<br>
                    <b>Acta: </b> <a href="/UPLAMeet/Home/ver_acta">ACTA_11/11/2022_TEMA</a><br>
                    <b>Comentarios: </b> <a href="/UPLAMeet/Home/ver_comentarios">(3)</a><br>

                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingThree">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                  <p style="color:red"><b>07/09/2022</b> --------------- Reunión número 3 </p>
                  </button>
                </h2>
                <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">
                  <b>Titulo: </b> titulo de la reunion<br>
                    <b>Descripción: </b> Descripción de la reunion<br>
                    <b>Fecha: </b>07/09/2022 <br>
                    <b>Horario: </b> 15:30 hrs<br>
                    <b>Tipo: </b> tipo de reunion<br>
                    <b>Acta: </b><p style="color:red"> No se encuentra disponible el acta aún</p> <br>
                    <b style="color:grey">Comentarios: </b> (0)<br>

                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-1"></div>

        </div>
        <div class="row">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/3c/Blanco.svg/1200px-Blanco.svg.png"width="100" height="100">

        </div>
    </div>

    
 
  </body>
</html>