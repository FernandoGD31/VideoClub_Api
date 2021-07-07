<?php
include('header.php');
?>

<body>
    <?php
    include('navbar.php');
    ?>

    <div class="container mt-5">
        <table class="table table-dark">
            <thead>
                <tr>
                    <th scope="col" class="h4">Equipo</th>
                    <th scope="col" class="h4">Numero de control</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">Fernando Gonzalez Diaz</th>
                    <td>156650308</td>
                    <td> </td>
                    <td> </td>
                </tr>
                <tr>
                    <th scope="row">Juli</th>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                </tr>
                <tr>
                    <th scope="row">kevin</th>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                </tr>
                <tr>
                    <th scope="row">cris</th>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                </tr>
            </tbody>
        </table>
    </div>


    <div class="container mt-5">
        <table class="table table-dark">
            <thead>
                <tr>
                    <th scope="col" class="h4">Materia</th>
                    <th scope="col" class="h4">Docente</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tr>
                <th scope="row">Programación de Servicios WEB</th>
                <th scope="row">Andrés Mendoza Moreno</th>

                <td> </td>
                <td> </td>
            </tr>

        </table>
    </div>

    <div class="container mt-5">
        <table class="table table-dark table-bordered">
            <thead>
                <tr>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    <th scope="col" class="h3 p-3">Servicios de la API VideoClub</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tr>
                <th scope="row">URL</th>
                <th scope="row">METODO</th>
                <th scope="row">PARAMETROS</th>
                <th scope="row">EJEMPLO DE USO</th>
            </tr>

            <tr>
                <td>/RegistrarContenido</td>
                <td>POST</td>
                <td>Nombre,
                    Genero,
                    Clasificación,
                    Sinopsis,
                    Idioma,
                    Duración,
                    Calificación,
                    Fecha estreno,
                    temporadas,
                    capítulos,
                    ID de director
                </td>
                <td>Registrar una película o serie</td>
            </tr>

            <tr>
                <td>/EditarContenido/id</td>
                <td>POST</td>
                <td>Nombre,
                    Genero,
                    Clasificación,
                    Sinopsis,
                    Idioma,
                    Duración,
                    Calificación,
                    Fecha estreno,
                    temporadas,
                    capítulos,
                    ID de director
                </td>
                <td>Editar los valores de una película o una serie buscándola por su id de registro</td>
            </tr>

            <tr>
                <td>/EliminarContenido/{id}</td>
                <td>GET</td>
                <td>ID de contenido</td>
                <td>Eliminar el registro del contenido</td>
            </tr>

            <tr>
                <td>/MostrarContenido</td>
                <td>GET</td>
                <td></td>
                <td>Muestra todo el contenido (películas y series)</td>
            </tr>

            <tr>
                <td>/MostrarContenido/{nombreContenido}</td>
                <td>GET</td>
                <td>Nombre</td>
                <td>Muestra la información del contenido al pasar el nombre de este como parámetro</td>
            </tr>

            <tr>
                <td>/MostrarPeliculas</td>
                <td>GET</td>
                <td></td>
                <td>Muestra todas las películas</td>
            </tr>

            <tr>
                <td>/MostrarSeries</td>
                <td>GET</td>
                <td></td>
                <td>Muestra todas las series</td>
            </tr>

            <tr>
                <td>/GeneroPelicula/{genero}</td>
                <td>GET</td>
                <td>Genero</td>
                <td>Muestra las películas por el género que se le pase por parámetro</td>
            </tr>

            <tr>
                <td>/GeneroSeries/{genero}</td>
                <td>GET</td>
                <td>Genero</td>
                <td>Muestra las series por el genero que se le pase por parámetro</td>
            </tr>

            <tr>
                <td>/Calificacion/{nombreContenido}</td>
                <td>GET</td>
                <td>Nombre </td>
                <td>Devuelve la calificación del contenido al pasarle el nombre</td>
            </tr>

<!--  -->
            <tr>
                <td>/RegistrarDirector</td>
                <td>POST</td>
                <td>Nombre, Apellido, Fecha de nacimiento, sexo(M o F) </td>
                <td>Registra la informacion de un director</td>
            </tr>

            <tr>
                <td>/EliminarDirector/{id}</td>
                <td>GET</td>
                <td>ID del director</td>
                <td>Elimina el registro de un director segun el id que se le pase</td>
            </tr>

            <tr>
                <td>/EliminarActor/{id}</td>
                <td>GET</td>
                <td>ID del Actor</td>
                <td>Elimina el registro de un Actor segun el id que se le pase</td>
            </tr>

            <tr>
                <td>/RegistrarActor</td>
                <td>POST</td>
                <td>Nombre, Apellido, Fecha de nacimiento, sexo(M o F) </td>
                <td>Registra la informacion de un actor</td>
            </tr>

            <tr>
                <td>/MostrarActores</td>
                <td>GET</td>
                <td> </td>
                <td>Devuelve la lista de los actores registrados hasta el momento</td>
            </tr>
            <tr>
                <td>/MostrarDirectores</td>
                <td>GET</td>
                <td> </td>
                <td>Devuelve la lista de los directores registrados hasta el momento</td>
            </tr>

            <tr>
                <td>/RegistrarActorContenido</td>
                <td>POST</td>
                <td>Id de actor y ID de contenido</td>
                <td>Registra la relacio entre los actores y el contenido</td>
            </tr>

            






<!--  -->

            <tr>
                <td>/Director/{nombreContenido}</td>
                <td>GET</td>
                <td>Nombre </td>
                <td>Devuelve la información del director al pasarle el nombre del contenido</td>
            </tr>

            <tr>
                <td>/Actor/{nombreContenido}</td>
                <td>GET</td>
                <td>Nombre</td>
                <td>Devuelve los actores del contenido al pasarle el nombre de este</td>
            </tr>

            <tr>
                <td>/sinopsis/{nombreContenido}</td>
                <td>GET</td>
                <td>Nombre</td>
                <td>Devuelve la sinopsis del contenido</td>
            </tr>

            <tr>
                <td>/NumeroTemporadas/{nombreContenido}</td>
                <td>GET</td>
                <td>Nombre</td>
                <td>Devuelve el numero de temporadas y el total de capítulos si es una serie al pasar el nombre</td>
            </tr>

            <tr>
                <td>/próximosEstrenos</td>
                <td>GET</td>
                <td></td>
                <td>Devuelve el nombre de las películas próximas a estrenarse</td>
            </tr>

            <tr>
                <td>/Peliculas/{idioma}</td>
                <td>GET</td>
                <td></td>
                <td>Devuelve las películas en el idioma que se le pase</td>
            </tr>

            <tr>
                <td>/Series/{idioma}</td>
                <td>GET</td>
                <td></td>
                <td>Devuelve las series en el idioma que se le pase</td>
            </tr>

            <tr>
                <td>/RegistrarCliente</td>
                <td>POST</td>
                <td>Nombre,
                    Apellido paterno,
                    Apellido materno,
                    Correo,
                    Edad,
                    Sexo (M o F),
                    Fecha de registro
                </td>
                <td>Registra clientes</td>
            </tr>

            <tr>
                <td>/EditarCliente/{id}</td>
                <td>POST</td>
                <td>Nombre,
                    Apellido paterno,
                    Apellido materno,
                    Correo,
                    Edad,
                    Sexo (M o F),
                    Fecha de registro
                </td>
                <td>Edita clientes según el id de registro</td>
            </tr>

            <tr>
                <td>/EliminarCliente/{id}</td>
                <td>GET</td>
                <td>ID de contenido</td>
                <td>Elimina clientes</td>
            </tr>
            <tr>
                <td>/MostrarClientes</td>
                <td>GET</td>
                <td></td>
                <td>Muestra los clientes registrados </td>
            </tr>
            <tr>
                <td>/MostrarCliente/{nombreCliente}</td>
                <td>GET</td>
                <td>Nombre</td>
                <td>Muestra toda la información de un cliente según el id de registro que se pase</td>
            </tr>
            <tr>
                <td>/RentaContenido/{id_pago}/{id_contenido}</td>
                <td>POST</td>
                <td>Id de cliente
                    Id de contenido
                    Número de tarjeta
                    fecha de expiración
                    código de seguridad
                </td>
                <td>Devuelve el URL del contenido al después de validar la película y el cobro</td>
            </tr>
            <tr>
                <td>/ContenidoRentado/{id_cliente}</td>
                <td>GET</td>
                <td>Id cliente</td>
                <td>Devuelve una lista de contenido rentado por un cliente</td>
            </tr>
            <tr>
                <td>/cantidadGastada/{id_cliente}</td>
                <td>GET</td>
                <td>Id cliente</td>
                <td>Devuelve la cantidad gastada en rentas por un cliente</td>
            </tr>

        </table>
    </div>


</body>

</html>