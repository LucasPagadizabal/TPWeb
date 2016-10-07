$(document).on("click", ".nav-Element", function(event){
  event.preventDefault();
  partialRender($(this).attr("href"));
});
$(document).on("click", ".home", function(event){
  event.preventDefault();
  partialRenderHome($(this).attr("href"));
});


$(document).on("click", ".eliminarCabania", function(){
  event.preventDefault();
  $.get("index.php?action=borrarCabania",{ id_cabania: $(this).attr("data-idcabania") }, function(data) {
    $('#listaCabanias').html(data);
  });
});
$("#formCabania").on("submit", function(){
  event.preventDefault();
  formData = new FormData(this);
  $.ajax({
    method: "POST",
    url: "index.php?action=crearCabania",
    data: formData,
    contentType: false,
    cache: false,
    processData: false,
    success: function(){
      partialRenderHome("index.php");
    }
  });
});










function partialRender(dir){
  $.ajax({
    url: dir,
    method:"GET",
    dataType: "html",
    success: function(data){
      $("#articulo").html(data);
    },
    error: function(){
      alert("FALLASTE");
    }
  });
}
function partialRenderHome(dir){
  $.ajax({
    url: dir,
    method:"GET",
    dataType: "html",
    success: function(data){
      $("body").html(data);
    },
    error: function(){
      alert("FALLASTE");
    }
  });
}
function crearEstrellas(){
  var cantidad = $("#cantidadEstrellas").html();
  $("#cantidadEstrellas").html("");
  for (var i = 0; i < cantidad; i++) {
    $("#cantidadEstrellas").append('<img src="img/starRegular.png" alt="star"/>');
  }
}
crearEstrellas();
