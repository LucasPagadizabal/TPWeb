$(document).ready(function(){
  initDynamicEventHandlers();

  $(".nav-Element").click(function(event){
    event.preventDefault();
    partialRender($(this).attr("href"), function(data) {
      $("#articulo").html(data)
    });
  });

  $(".nav-Element-Action").click (function(){
    event.preventDefault();
    $.get("index.php?action=" + $(this).attr("href"), function(data) {
      $('body').html(data);
    });
  });



  //funcion que hace que se recarguen los listeners de toda la pagina
  //el nombre quedo asi porque lo saque d internet

  function initDynamicEventHandlers() {

    $(".disponiblidadCabania").click(function (){
      event.preventDefault();
      $.get("index.php?action=editarDispCabania",{ id_cabania: $(this).attr("data-idcabania") }, function(data) {
        $('#articulo').html(data);
        initDynamicEventHandlers();
      });
    });
    $(".editarCabania").click(function (){
      event.preventDefault();
      $.get("index.php?action=editorDeCabania&id="+$(this).attr("data-idcabania"), function(data) {
        $('#articulo').html(data);
        initDynamicEventHandlers();
      });
    });
    $(".tituloCabania").click(function (){
      event.preventDefault();
      $.get("index.php?action=cabania&id="+$(this).attr("data-idcabania"), function(data) {
        $('#articulo').html(data);
        initDynamicEventHandlers();
      });
    });

    $(".eliminarCabania").click(function(){
      event.preventDefault();
      $.get("index.php?action=borrarCabania",{ id_cabania: $(this).attr("data-idcabania") }, function(data) {
        $('#articulo').html(data);
        initDynamicEventHandlers();
      });
    });

    $("#formCabania").submit(function(){
      event.preventDefault();
      formData = new FormData(this);
      $.ajax({
        method: "POST",
        url: "index.php?action=crearCabania",
        data: formData,
        contentType: false,
        cache: false,
        processData: false,
        success: function(data){
          $("#articulo").html(data);
          initDynamicEventHandlers();
        }
      });
    });

    $("#formCabaniaEdit").submit(function(){
      event.preventDefault();
      formData = new FormData(this);
      $.ajax({
        method: "POST",
        url: "index.php?action=editarCabania",
        data: formData,
        contentType: false,
        cache: false,
        processData: false,
        success: function(data){
          $("#articulo").html(data);
          initDynamicEventHandlers();
        }
      });
    });
  }

  function partialRender(dir, functionDestino){
    $.ajax({
      url: dir,
      method:"GET",
      dataType: "html",
      success: function(data){
        functionDestino(data);
      },
      error: function(){
        alert("FALLASTE");
      }
    });
  }
});
