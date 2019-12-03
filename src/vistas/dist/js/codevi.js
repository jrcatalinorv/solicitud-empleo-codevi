/* Arreglo de datos del usuario */
var formData = [];

/* Funcion para verificar si los campos estan vacios */
function isEmpty(str) {
    return (!str || 0 === str.length);
}

/* Botones de control */
$('.btn-cancel').click(function(){
	window.location="home";
})