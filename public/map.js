// public/js/map.js
function loadMap() {
    // Realiza una solicitud AJAX para cargar la vista del mapa
    $.ajax({
        url: "{{ route('map') }}", // Utiliza la ruta de Laravel para cargar la vista del mapa
        type: "GET",
        success: function(response) {
            // Reemplaza el contenido del cuerpo con la vista del mapa
            $('body').html(response);
        },
        error: function(xhr, status, error) {
            // Maneja errores si los hay
            console.error(error);
        }
    });
}
