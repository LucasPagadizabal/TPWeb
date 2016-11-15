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

  function initDynamicEventHandlers() {

    $(".nav-link").click (function(){
      event.preventDefault();
      var dir = $(this).attr("href");
      $.get("index.php?action="+dir, function(data) {
        $('#articulo').html(data);
        initDynamicEventHandlers();
      });
    });

    $(".ajaxForm").submit(function(){
      event.preventDefault();
      formData = new FormData(this);
      var dir = $(this).attr("href");
      $.ajax({
        method: "POST",
        url: dir,
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

    $(".nav-link-categoria").click (function(){
      event.preventDefault();
      var dir = $(this).attr("href");
      $.get("index.php?action="+dir,{id_categoria : $(this).attr("data-id-categoria"),estrella : $(this).attr("data")}, function(data) {
        $('#articulo').html(data);
        initDynamicEventHandlers();
      });
    });

    $(".nav-link-cabania").click(function (){
      event.preventDefault();
      var dir = $(this).attr("href");
      var id = $(this).attr("data-idcabania");
      $.get("index.php?action="+dir,{ id_cabania: $(this).attr("data-idcabania") }, function(data) {
        $('#articulo').html(data);
        comentariosAjax(id);
        initDynamicEventHandlers();
      });
    });


    $(".formApi").submit(function(e){//creacion de comentarios API
      console.log("entro");
      e.preventDefault();
      $.post("api/comentarios",{texto:$(".text-api").val(),puntaje:$(".puntaje-api").val(),id_cabania:$(".id_cabania-api").val()},
      function(data) {
        console.log(data);
        comentariosAjax($(".id_cabania-api").val());
        initDynamicEventHandlers();
      }
    );
    });

  }//cierre de super funcion



//cargado de comentarios de la api
  function comentariosAjax(id_cabania) {
    $.ajax(
      {
        method:"GET",
        dataType: "JSON",
        url: "api/comentarios/" +id_cabania,//traer id de la cabania que pertenece
        success:function(data) {
          createComentarios(data);
         initDynamicEventHandlers();
        }
      }

    )
  }
  //crear tpl de Mustache
  function createComentarios(comentarios){
    $.ajax({ url: 'js/templates/comentarios.mst',
     success: function(templateReceived) {
       var rendered = Mustache.render(templateReceived,{paquete:comentarios});
       $("#div-com").html(rendered);
     }
    });
  }


  function partialRender(dir, functionDestino){1
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
