<?php
include('header.php');
?>

<body>
    <?php
    include('navbar.php');
    ?>
    <div class="container txt-color mt-5">
        <h3 class="titulo">Eliminar Actor</h3><br>
        <form method="POST" action="php/eliminarAct.php" class="row g-3">
            <div class="col-md-4">
                <label class="form-label ">ID del Actor</label>
                <input type="text" class="form-control" name="actor_id">
            </div>
            
            <div class="col-12">
                <input type="submit" name="eliminar" class="btn btn-color" value="Eliminar">
            </div>
        </form>
    </div>
</body>
</html>