$(document).ready(function() {
    $.ajax({
        type: "GET",
        url: "php/mostrarDirector.php",
 
        success: function(response) {
            let datos = JSON.parse(response);
            let grid = document.querySelector('#container')
            grid.innerHTML = ""

            for (const item of datos) {
               
                grid.innerHTML += `

                <div class="container mt-5">
                 <table class="table table-dark">
                <thead>
                <tr>
                    <th scope="col" class="h6">Id Director</th>
                    <th scope="col" class="h6">Nombre</th>
                    <th scope="col" class="h6">Apellido</th>
                    <th scope="col" class="h6">Fecha de Nacimiento</th>
                    <th scope="col" class="h6">Sexo</th>
                </tr>
                </thead>
                <tr>
                <td scope="row"> <div class="contenido">${item.id}</div></td>
                <td scope="row"><div class="contenido">${item.nombre}</div></td>
                <td scope="row"><div class="contenido">${item.apellido}</div></td>
                <td scope="row"><div class="contenido">${item.fecha_nac}</div></td>
                <td scope="row"><div class="contenido">${item.sexo}</div></td>
                </tr>
                </table>
                </div>
            
              

            `;

            }

        },
    });

});