function crearEstrellas(){
  var cantidad = $("#cantidadEstrellas").html();
  $("#cantidadEstrellas").html("");
  for (var i = 0; i < cantidad; i++) {
    $("#cantidadEstrellas").append('<img src="img/starRegular.png" alt="star"/>');
  }
}

crearEstrellas();
