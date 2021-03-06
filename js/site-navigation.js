$(document).ready(function(){
  initDynamicEventHandlers();

  $(".nav-Element").click(function(event){
    event.preventDefault();
    $.get($(this).attr("href"), function(data) {
      $("#articulo").html(data);
      pararTemporizador();
    });
  });

  $(".nav-Element-Action").click (function(event){
    event.preventDefault();
    $.get("index.php?action=" + $(this).attr("href"), function(data) {
      $('body').html(data);
      pararTemporizador();
    });
  });

  var temporizador;

  function pararTemporizador() {
    clearInterval(temporizador);
  }

  function initDynamicEventHandlers() {

    //pararTemporizador();

    $(".nav-link").on("click",function(event){
      event.preventDefault();
      var dir = $(this).attr("href");
      $.get("index.php?action="+dir, function(data) {
        $('#articulo').html(data);
        pararTemporizador();
        initDynamicEventHandlers();
      });
    });

    $(".ajaxForm").submit(function(event){
      event.preventDefault();
      formData = new FormData(this);
      var dir = $(this).attr("href");
      var id = $(this).attr("data-idcabania");
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
          comentariosAjax(id); //aca tengo que pedir de vuelta los comentarios a la api
        }                       //porque cuando cargo una imagen refresca todo el div #articulo
      });                     // y despues no los tiene mas
    });

    $(".nav-link-categoria").on("click",function(event){
      event.preventDefault();
      var dir = $(this).attr("href");
      $.get("index.php?action="+dir,{id_categoria : $(this).attr("data-id-categoria"),estrella : $(this).attr("data")}, function(data) {
        $('#articulo').html(data);
        initDynamicEventHandlers();
      });
    });

    $(".nav-link-cabania").on("click",function (event){
      event.preventDefault();
      var dir = $(this).attr("href");
      var id = $(this).attr("data-idcabania");
      $.get("index.php?action="+dir,{ id_cabania: $(this).attr("data-idcabania") }, function(data) {
        $('#articulo').html(data);
        comentariosAjax(id);
        temporizador = setInterval(function() {comentariosAjax(id)}, 2000);
        initDynamicEventHandlers();
      });
    });
    $(".crearComentario").submit(function(ev){//creacion de comentarios con api
      ev.preventDefault();
      $.ajax({
        url : 'api/comentarios',
        data : {texto:$(".text-api").val(),puntaje:$(".puntaje-api").val(),id_cabania:$(".id_cabania-api").val()},
        type : 'POST',
        dataType : 'json',
        success : function() {
            $(".text-api").val("");
            comentariosAjax($(".id_cabania-api").val());
            temporizador = setInterval(function() {comentariosAjax($(".id_cabania-api").val())}, 2000);
        }
    });
  });

  }//cierre de super funcion

  $(document).on("click",".eliminarImagen",function(e) {
    e.preventDefault();
    var dir = $(this).attr("href");
    var id = $(this).attr("id-cabania");
    $.post("index.php?action="+dir,{id_imagen: $(this).attr("id-imagen"), id_cabania : $(this).attr("id-cabania")},function(data) {
      $('#articulo').html(data);
      initDynamicEventHandlers();
      comentariosAjax(id); //aca tambien traigo de nuevo los comentarios d la api
    })
  })

  $(document).on("click",".eliminarComentario",function() {//eliminacion de comentarios con api
      var id_cabania = $(this).attr("id_cabania");
      var dir = $(this).attr("id_comentario");
      $.ajax({
          url: 'api/comentarios/'+dir,
          type: 'DELETE',
          success: function(result) {
            comentariosAjax(id_cabania);
      }
    });
  })
//cargado de comentarios de la api
  function comentariosAjax(id_cabania) {
    console.log("entro");
    $.ajax(
      {
        method:"GET",
        dataType: "JSON",
        url: "api/comentarios/" +id_cabania,//traer id de la cabania que pertenece
        success:function(data) {
          createComentarios(data);
          iniciarBotonEliminarCometario();
        }
      })
  }
  function iniciarBotonEliminarCometario(){
    var priv = $("#inputPrivilegio").val();
    if(priv === "0"){
      $(".botonEliminarComent").remove();
    }
  }

  //crear tpl de Mustache

  var templateComentario;
  $.ajax({ url: 'js/templates/comentarios.mst',
  success: function(templateReceived) {
  templateComentario = templateReceived;
}
});

  function createComentarios(comentarios){
      var rendered = Mustache.render(templateComentario,{paquete:comentarios});
      $("#div-com").html(rendered);
  }
});
