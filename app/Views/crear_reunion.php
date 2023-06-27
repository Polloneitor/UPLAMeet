<!doctype html>
<html lang="en">
<style>
    .center {
        margin: auto;
        margin-top: 2%;
        margin-bottom: -2%;
        width: 50%;
        border: 3px solid green;
        padding: 10px;

    }

    .center2 {
        margin: auto;
        margin-top: 1%;
        margin-bottom: 2%;
        width: 50%;
        border: 3px solid green;
        padding: 10px;

    }

    .center3 {
        margin: auto;
        margin-top: 1%;
        margin-bottom: 2%;
        width: 50%;
        border: 3px solid red;
        padding: 10px;

    }
</style>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

    <title>UPLAMeet</title>
</head>

<body>
    <div class="container-fluid ">
        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/3c/Blanco.svg/1200px-Blanco.svg.png" width="100" height="100">
        <div class="row">
            <h1 style="text-align: center;">Crear Reunión</h1>
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
                            <div class="col">
                                <div class="input-group">
                                    <span class="input-group-text">Descripción de la Reunión</span>
                                    <textarea class="form-control" aria-label="With textarea"></textarea>
                                </div>
                            </div>

                            <div class="col-1"></div>
                        </div>
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/3c/Blanco.svg/1200px-Blanco.svg.png" width="100" height="5">


                        <div class="row">
                            <div class="col-1"></div>
                            <div class="col">
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="inputGroup-sizing-default">Tipo</span>
                                    <select class="form-select" aria-label="Default select example" id="tipo_reunion">
                                        <option selected>Seleccione el tipo de reunión</option>
                                        <option value="1">Tipo 1</option>
                                        <option value="2">Tipo 2</option>
                                        <option value="3">Tipo 3</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-1"></div>
                        </div>
                        <div id="container" class='form-group'>
                            <div class="col-1">
                                <div class="row">
                                    <label id="text-especialidad"></label>
                                </div>
                            </div>
                        </div>
                        <div id="container2" class='form-group'>
                            <div class="col-1">
                                <div class="row">
                                    <label id="text-especialidad"></label>
                                </div>
                            </div>
                        </div>
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/3c/Blanco.svg/1200px-Blanco.svg.png" width="100" height="5">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/3c/Blanco.svg/1200px-Blanco.svg.png" width="100" height="5">
                        <div class="row">
                            <div class="col-1"></div>
                            <div class="col">
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="inputGroup-sizing-default">Fecha</span>
                                    <input id="myDate" type="date" class="form-control" value="dd-mm-yyyy" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                                </div>
                            </div>
                            <div class="col-1"></div>
                        </div>
                        <div class="row">
                            <div class="col-1"></div>
                            <div class="col">
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="inputGroup-sizing-default">Horario</span>
                                    <select onchange="myFunction2()" class="form-select" aria-label="Default select example" id="periodo">
                                        <option selected>Seleccione el periodo</option>
                                        <option value="1">Periodo 1 (08:00 - 09:15)</option>
                                        <option value="2">Periodo 2 (09:15 - 10:50)</option>
                                        <option value="3">Periodo 3 (11:10 - 11:30)</option>
                                        <option value="4">Periodo 4 (12:45 - 14:00)</option>
                                        <option value="5">Periodo 5 (14:20 - 15:35)</option>
                                        <option value="6">Periodo 6 (15:55 - 17:10)</option>
                                        <option value="7">Periodo 7 (17:30 - 18:45)</option>
                                        <option value="8">Periodo 8 (19:05 - 20:20)</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-1"></div>
                        </div>
                        <div id="container3"></div>
                        <div class="row">
                            <div class="col-1"></div>

                            <div class="col">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked>
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Mensualmente
                                    </label>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        Semanalmente
                                    </label>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3">
                                    <label class="form-check-label" for="flexRadioDefault3">
                                        Extraordinario
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
    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/3c/Blanco.svg/1200px-Blanco.svg.png" width="100" height="100">

    <div class="row">
        <div class="col-5"></div>
        <div class="col-2"> <a href="/UPLAMeet/Home/ver_creadas2"><button type="button" class="btn btn-success">Actualizar</button></a>
        </div>

    </div>
    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/3c/Blanco.svg/1200px-Blanco.svg.png" width="100" height="100">

    </div>
</body>

</html>

<script>
    var e = document.getElementById("tipo_reunion");
    var div = document.getElementById('container');

    function onChange() {
        var text = e.options[e.selectedIndex].text;
        if (text != "Seleccione el tipo de reunión") {
            div.innerHTML = '<div class=center ><span style="text-align: center;">Miembros de la facultad de ' + text + ' se unirán a la reunión</span></div><div class="row"><div class="col-1"></div><div class="col" style="margin-top:4%;"><button onclick="myFunction()" type="button" class="btn btn-outline-secondary">Agregar Invitados</button></div><div class="col-1"></div></div>';
            div.style.visibility = 'visible';
        } else {
            div.innerHTML = ''
            div.style.visibility = 'hidden';
        }
    }

    e.onchange = onChange;
    onChange();
</script>
<script>
    function myFunction() {
        var x = document.getElementById("container2");
        if (x.style.display == "none") {
            x.innerHTML = '<div class="row" style="margin-top:2.5%;margin-right:7.5%;"><div class="col-2"></div><div class="col"><div class="card" style="margin-right:7.5%"><div class="card-body"><div class="row"><div class="col-1"></div><div class="col"><table class="table table-info table-striped" id="tablaGenero"><thead><tr><th scope="col">#</th><th scope="col">Nombre</th><th scope="col">Apellido</th><th scope="col">Correo</th><th scope="col">Cargos</th><th scope="col">Invitar</th><th scope="col">Asignar como secretario/a</th></tr></thead><tbody><tr><th scope="row">1</th><td>Nombre 1</td><td>Apellido 1</td><td>correo@xxxx.upla.cl </td><td>cargo1_cargo2</td><td><button type="button" class="btn btn-success">Invitar</button></td><td><button type="button" class="btn btn-warning">Asignar</button></td></td></tr><tr><th scope="row">2</th><td>Nombre 2</td><td>Apellido 2</td><td>correo@xxxx.upla.cl </td><td>cargo1_cargo2</td><td><button type="button" class="btn btn-success">Invitar</button></td><td><button type="button" class="btn btn-warning">Asignar</button></td></td></tr><tr><th scope="row">3</th><td>Nombre 3</td><td>Apellido 3</td><td>correo@xxxx.upla.cl </td><td>cargo1_cargo2</td><td><button type="button" class="btn btn-success">Invitar</button></td><td><button type="button" class="btn btn-warning">Asignar</button></td></td></tr><tr><th scope="row">4</th><td>Nombre 4</td><td>Apellido 4</td><td>correo@xxxx.upla.cl </td><td>cargo1_cargo2</td><td><button type="button" class="btn btn-success">Invitar</button></td><td><button type="button" class="btn btn-warning">Asignar</button></td></td></tr></tbody></table></div><div class="col-1"></div></div></div></div></div>'
            x.style.display = "block";
        } else {
            x.style.display = "none";
        }
    }
</script>
<script>
    $(function() {
        var dtToday = new Date();

        var month = dtToday.getMonth() + 1;
        var day = dtToday.getDate();
        var year = dtToday.getFullYear();

        if (month < 10)
            month = '0' + month.toString();
        if (day < 10)
            day = '0' + day.toString();

        var minDate = year + '-' + month + '-' + day;
        $('#myDate').attr('min', minDate);
    });
</script>
<script>
    function getRandomInt(max) {
        return Math.floor(Math.random() * max);
    }
    var y = document.getElementById('periodo');
    var h = document.getElementById('myDate').valueAsDate;
    var z = document.getElementById("container3");
    var num = 0

    function myFunction2() {
        if (h != 'dd-mm-aaaa') {
            if (y != 'Seleccione el periodo') {
                num = getRandomInt(100)
                if (num < 49) {
                    z.innerHTML = '<div class=center2>Ningún miembro está ocupado.</div>'
                } else {
                    z.innerHTML = '<div class=center3>Uno o más miembros están ocupado.</div>'
                }
            }

        }
    }
</script>