<?php
include('header.php');
?>

<body>
    <?php
    include('navbar.php');
    ?>

    <div class="container txt-color mt-5">
        <h3 class="titulo">Agregar contenido</h3><br>
        <form method="POST" action="php/registrarCont.php" class="row g-3">
            <div class="col-md-4">
                <label class="form-label ">Nombre</label>
                <input type="text" class="form-control" name="nombre">
            </div>
            <div class="col-md-3">
                <label class="form-label">Genero </label>
                <input type="text" class="form-control" name="genero">
            </div>
            <div class="col-md-3">
                <label class="form-label">Clasificacion </label>
                <input type="text" class="form-control" name="clasificacion">
            </div>
            <div class="col-md-2">
                <label class="form-label">Calificacion </label>
                <input type="text" class="form-control" name="calificacion">
            </div>
            <div class="col-md-2">
                <label class="form-label">Fecha de estreno </label>
                <input type="text" class="form-control" name="fecha_estreno">
            </div>
            <div class="col-md-10">
                <label class="form-label">Sinopsis </label>
                <input type="text" class="form-control" name="sinopsis">
            </div>
            <div class="col-md-3">
                <label class="form-label">Idioma </label>
                <input type="text" class="form-control" name="idioma">
            </div>
            <div class="col-md-3">
                <label class="form-label">Duracion </label>
                <input type="text" class="form-control" name="duracion">
            </div>
            <div class="col-md-2">
                <label class="form-label">Temporadas (Opcional)</label>
                <input type="number" class="form-control" name="temporadas">
            </div>
            <div class="col-md-2">
                <label class="form-label">Capitulos (Opcional)</label>
                <input type="number" class="form-control" name="capitulos">
            </div>
            <div class="col-md-2">
                <label class="form-label">ID del director</label>
                <input type="number" class="form-control" name="director_id">
            </div>
             


            <div class="col-12">
                <input type="submit" name="registrar" class="btn btn-color" value="Registrar">
            </div>
        </form>
    </div>

</body>

</html>