<!DOCTYPE html>
<html lang="es">

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>CRUD Estandarizacion</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    <!-- Bootstrap core CSS -->

    <link href="./carousel/css/carousel.css" rel="stylesheet">

</head>

<body>

    <header>
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">CRUD Estandarizacion</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                    aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav me-auto mb-2 mb-md-0">

                        <li class="nav-item">
                            <a class="nav-link active" href="#">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="">CBA</a>
                            <ul class="bg-transparent">
                                <li class="nav-item">
                                    <a class="nav-link" href="../5s/crud_clasificacion.php">CRUD Clasificacion</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="../5s/crud_disciplina.php">CRUD Disciplina</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="../5s/crud_estandarizacion.php">CRUD Estandarizacion</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="../5s/crud_limpieza.php">CRUD Limpieza</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="../5s/crud_organizacion.php">CRUD Organizacion</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Lacteos</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Capicultura</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Cunicultura</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Administracion</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Biblioteca</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Sistemas</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Auditorio</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Internado</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="">Normas</a>
                            <ul class="bg-transparent">
                                <li class="nav-item">
                                    <a class="nav-link" href="">Manual del Aprendiz</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="">Administracion </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="">Emergencias</a>
                            <ul class="bg-transparent">
                                <li class="nav-item">
                                    <a class="nav-link" href="">Botiquin</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="">Alarmas</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="">Brigadistas</a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link active" href="">Reportar</a>
                            <ul class="bg-transparent">
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Riesgos estructurales</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Riesgos Biologicos</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Situaciones</a>
                                </li>

                            </ul>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link active" href="">Eventos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="">Mapa</a>
                            <ul class="bg-transparent">
                                <li class="nav-item">
                                    <a class="nav-link" href="">Rutas</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="">Recorrido Virtual</a>
                                </li>
                            </ul>
                        </li>

                    </ul>
        </nav>
    </header>

    <marquee class="anuncios_parroquiales">
        <h1>Hola esta es el CRUD de la tabla estandarizacion</h1>
    </marquee>

        <center>
            <form action="php/script_crud_estandarizacion.php" method="post">

            <h1>CRUD Estandarizacion</h1>

            <div class="form-group">
                <label for="id_Est">ID_ESTANDARIZACION</label>
                <input type="text" name="id_Est" class="form-control" id="id_Est" placeholder="INGRESE EL ID DE LA ESTANDARIZACION">
            </div>

            <div class="form-group">
                <label for="Estandarizacion">NOMBRE_ESTANDARIZACION</label>
                <input type="text" name="Estandarizacion" class="form-control" id="Estandarizacion" placeholder="INGRESE LA DESCRIPCION DE LA ESTANDARIZACION">
            </div>

            <div class="form-group">
                <label for="Verificar_Est">¿QUE SE VERIFICA EN LA ESTANDARIZACION?</label>
                <input type="text" name="Verificar_Est" class="form-control" id="Verificar_Est" placeholder="INGRESE EL VERIFICAR DE LA ESTANDARIZACION">
            </div>

            <div class="form-group">
                <label for="Calificacion_Est">CALIFICACION</label>
                <input type="text" name="Calificacion_Est" class="form-control" id="Calificacion_Est" placeholder="INGRESE LA CALIFICACION DE LA ENTIDAD ESTANDARIZACION">
            </div>

            <center>
                <input type="submit" value="consultar" class="btn btn-primary" name="btn_consultar">
                <input type="submit" value="registrar" class="btn btn-success" name="btn_registrar">
                <input type="submit" value="actualizar" class="btn btn-info" name="btn_actualizar">
                <input type="submit" value="eliminar" class="btn btn-danger" name="btn_eliminar">
            </center>

            <br>
            <br>
            <br>
            
            </form>
            <hr class="featurette-divider">
    </div>

    <footer class="container">
        <p class="float-end"><a href="#">Back to top</a></p>
        <br>
        <br>
        </center>
        <p>&copy;Servicio Nacional de Aprendizaje SENA - Centro de Biotecnologia Agropecuaria - Regional Cundinamarca
            Dirección: Km 7 Via Bogota-Mosquera Cundinamarca - Telefono: (1) 5462323 Ext. 17967
            Conmutador Nacional (57 1) 5461500
            Atención telefónica: lunes a viernes 7:30 a.m. a 4:30 P.M
            Atención al ciudadano: Bogotá (57 1) 5925555 - Línea gratuita y resto del país 018000 910270
            Atención al empresario: Bogotá (57 1) 4049494 - Línea gratuita y resto del país 018000 910682 &middot; <a
                href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
    </footer>
    </main>

</html>

<?php
    include("./php/script_crud_estandarizacion.php");
?>