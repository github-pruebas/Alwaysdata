$(document).ready(function()
    {

    // Ponemos ".enlaceqdq" cuando 'enlaceqdq' es el nombre de una 'class' (ver como están en jquery.html)
    $(".enlaceqdq").click(function(evento)
        {
	        alert("Te diriges a QDQ");
        });

    // Ponemos "#enlacevacio" cuando 'enlacevacio' es el nombre de un 'id' (ver como están en jquery.html)
    $("#enlacevacio").click(function(evento)
        {
		alert("Pulsaste un link vacío!. Ahora se va a modificar el estilo del link de QDQ, el fondo de pantalla y la primera y última líneas!. Después todo desaparecerá.");
		// Ahora cambiamos aspecto del los objetos de la clase "enlaceqdq"
		$(".enlaceqdq").css({"background-color" : "red", "color" : "white" }) ;
		// Y también el de otros elementos
		$(".elemento").css({"background-color" : "red", "color" : "white" }) ;
		// Ahora cambiamos el body de color de fondo
		$("body").css("background-color","yellow");
		// Ahora hacemos que el body desaparezca en 5 segundos
		$("body").fadeOut(5000);
        });

}); 
