<?php
include('header.php');
?>

<body>
    <?php
    include('navbar.php');
    ?>

    <div class="container txt-color mt-5">
        <h3 class="titulo">Agregar contenido</h3><br>
        <form method="POST" action="php/registrarActorCont.php" class="row g-3">
            <div class="col-md-4">
                <label class="form-label ">ID Actor</label>
                <input type="number" class="form-control" name="actor_id">
            </div>
            <div class="col-md-3">
                <label class="form-label">ID Contenido</label>
                <input type="number" class="form-control" name="contenido_id">
            </div>
            <div class="col-12">
                <input type="submit" name="registrar" class="btn btn-color" value="Registrar">
            </div>
        </form>
    </div>

</body>

</html>