$(document).ready(function() {
    $.ajax({
        type: "GET",
        url: "php/mostrarAct.php",

        success: function(response) {
            let datos = JSON.parse(response);
            let grid = document.querySelector('#containe')
            grid.innerHTML = ""

            for (const item of datos) {
                grid.innerHTML += `

             <div class="container mt-5">
                 <table class="table table-dark">
                <thead>
                <tr>
                    <th scope="col" class="h6"><i class="fas fa-user"></i> id Actor:</th>
                    <th scope="col" class="h6"><i class="fas fa-user"></i> Nombre Actor: </th>
                    <th scope="col" class="h6"><i class="fas fa-portrait"></i>  Apellido: </th>
                    <th scope="col" class="h6"><i class="far fa-calendar-alt"></i>  Fecha Nacimiento</i></th>
                    <th scope="col" class="h6">><i class="fas fa-venus-mars"></i>  Sexo: </th>
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