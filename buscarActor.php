<?php
include('header.php');
?>
<body>
<?php
include('navbar.php');
?>

 <div class="container txt-color mt-5">
        <h3 class="titulo">Buscar Director</h3><br>
        <form method="POST" action="mostrarActorBuscar.php" class="row g-3">
            <div class="col-md-4">
                <label class="form-label ">Nombre</label>
                <input type="text" class="form-control" name="nombre">
            </div>
            <div class="col-12">
                <input type="submit" name="buscar" class="btn btn-color" value="Buscar">
            </div>
        </form>
    </div>
</body>
</html>
