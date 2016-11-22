$(document).ready(function(){
  initDynamicEventHandlers();

  $(".nav-Element").click(function(event){
    event.preventDefault();
    partialRender($(this).attr("href"), function(data) {
      $("#articulo").html(data)
    });
  });

  $(".nav-Element-Action").click (function(event){
    event.preventDefault();
    $.get("index.php?action=" + $(this).attr("href"), function(data) {
      $('body').html(data);
    });
  });

  function initDynamicEventHandlers() {

    $(".nav-link").on("click",function(event){
      event.preventDefault();
      var dir = $(this).attr("href");
      $.get("index.php?action="+dir, function(data) {
        $('#articulo').html(data);
        initDynamicEventHandlers();
      });
    });

    $(".ajaxForm").submit(function(event){
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
        setInterval(function() {comentariosAjax(id)}, 2000);
        comentariosAjax(id);
        initDynamicEventHandlers();
      });
    });

    $(".crearComentario").submit(function(ev){//creacion de comentarios con api
      ev.preventDefault();
      $.ajax({
        url : 'api/comentarios',
        data : {texto:$(".text-api").val(),puntaje:$(".puntaje-api").val(),id_cabania:$(".id_cabania-api").val(),admin:true},
        type : 'POST',
        dataType : 'json',
        success : function() {
            $(".text-api").val("");
            comentariosAjax($(".id_cabania-api").val());
            setInterval(function() {comentariosAjax($(".id_cabania-api").val())}, 2000);
        }
    });

  });

  }//cierre de super funcion

  $(document).on("click",".eliminarImagen",function(e) {
    e.preventDefault();
    var dir = $(this).attr("href");
    console.log($(this).attr("id-imagen"));
    $.post("index.php?action="+dir,{id_imagen: $(this).attr("id-imagen"), id_cabania : $(this).attr("id-cabania")},function(data) {
      $('#articulo').html(data);
    })

  })



  $(document).on("click",".eliminarComentario",function() {//eliminacion de comentarios con api
    var priv = $(".privilegio").val();
    if (priv == 1) {
      var id_cabania = $(this).attr("id_cabania");
      var dir = $(this).attr("id_comentario");
      $.ajax({
          url: 'api/comentarios/'+dir,
          type: 'DELETE',
          success: function(result) {
            comentariosAjax(id_cabania);
      }
    });
    }

})
//cargado de comentarios de la api
  function comentariosAjax(id_cabania) {
    console.log("hola");
    $.ajax(
      {
        method:"GET",
        dataType: "JSON",
        url: "api/comentarios/" +id_cabania,//traer id de la cabania que pertenece
        success:function(data) {
          createComentarios(data);
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
