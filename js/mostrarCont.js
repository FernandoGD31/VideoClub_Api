$(document).ready(function() {
    $.ajax({
        type: "GET",
        url: "php/mostrarCont.php",

        success: function(response) {
            let datos = JSON.parse(response);
            let grid = document.querySelector('#grid')
            grid.innerHTML = ""

            for (const item of datos) {
                if (item.temporadas == null) {
                    temp = "0";
                    cap = "0";
                } else {
                    temp = item.temporadas;
                    cap = item.temporadas;
                }
                grid.innerHTML += `
            
                <div class="cards">    
                <div class="wrapper-text">                     
                    <div class="titulo">${item.nombre}</div>
                    <div class="contenido"><label class="mr-2">ID de Contenido:</label>${item.id}</div>
                    <div class="contenido"><i class="far fa-star star mr-2"></i>${item.calificacion}</div>
                    <div class="contenido"><label class="mr-2">Genero:</label>${item.genero}</div>
                    <div class="contenido"><label class="mr-2">Clasificacion: </label>${item.clasificacion}</div>
                    <div class="contenido"><label class="mr-2">Idioma: </label>${item.idioma}</div>
                    <div class="contenido"><label class="mr-2">Director: </label>${item.duracion}</div>
                    <div class="contenido"><label class="mr-2">Fecha de estreno: </label>${item.fecha_estreno}</div>
                    <div class="contenido"><label class="mr-2">Temporadas </label>${temp}</div>
                    <div class="contenido"><label class="mr-2">Capitulos: </label>${cap}</div>                    
                    <div class="contenido"><label class="mr-2">ID del director: </label>${item.director_id}</div>  
                    <div class="contenido"><label class="mr-2">Sinopsis </label>${item.sinopsis}</div>                  
                </div>
             </div>

            `;

            }

        },
    });

});