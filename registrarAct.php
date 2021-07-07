<?php
include('header.php');
?>

<body>
    <?php
    include('navbar.php');
    ?>

    <div class="container txt-color mt-5">
        <h3 class="titulo">Registrar Actor</h3><br>
        <form method="POST" action="php/registrarActor.php" class="row g-3">
            <div class="col-md-4">
                <label class="form-label ">Nombre</label>
                <input type="text" class="form-control" name="nombre">
            </div>
            <div class="col-md-3">
                <label class="form-label">Apellido </label>
                <input type="text" class="form-control" name="apellido">
            </div>
            <div class="col-md-3">
                <label class="form-label">Fecha de Nacimiento </label>
                <input type="text" class="form-control" name="fecha_nac" placeholder="AAAA-MM-DD">
            </div>
            <div class="col-md-2">
                <label class="form-label">Sexo </label>
                <input type="text" class="form-control" name="sexo">
            </div>
            

            <div class="col-12">
                <input type="submit" name="registrar" class="btn btn-color" value="Registrar">
            </div>
        </form>
    </div>

</body>

</html>