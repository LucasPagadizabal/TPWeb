
$(document).on("click", "#btnHome", cargarHome);

function cargarHome(event){
  alert("hss");
  event.preventDefault();
  var link = "index.php?action=cabanias"
  partialRender(link);
}

$('.eliminarCabania').click(function(){
event.preventDefault();

$.get("index.php?action=borrarCabania",{ id_cabania: $(this).attr("data-idcabania") }, function(data) {

  $('#listaCabanias').html(data);

  //$('#tarea').val('');
});
});

function partialRender(dir){
  $.ajax({
    url: dir,
    method:"GET",
    dataType: "html",
    success: function(data){
      console.log(data);
      $("#articulo").html(data);
    },
    error: function(){
      alert("FALLASTE");
    }
  });
}
