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

    $(document).on("click",".nav-link",function(){
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

    $(document).on("click",".nav-link-categoria",function(){
      event.preventDefault();
      var dir = $(this).attr("href");
      $.get("index.php?action="+dir,{id_categoria : $(this).attr("data-id-categoria"),estrella : $(this).attr("data")}, function(data) {
        $('#articulo').html(data);
        initDynamicEventHandlers();
      });
    });

    $(document).on("click",".nav-link-cabania",function (){
      event.preventDefault();
      var dir = $(this).attr("href");
      var id = $(this).attr("data-idcabania");
      $.get("index.php?action="+dir,{ id_cabania: $(this).attr("data-idcabania") }, function(data) {
        $('#articulo').html(data);
        comentariosAjax(id);
        initDynamicEventHandlers();
      });
    });


  }//cierre de super funcion

  $(document).on("click",".eliminarImagen",function(e) {
    e.preventDefault();
    var dir = $(this).attr("href");
    console.log($(this).attr("id-imagen"));
    $.post("index.php?action="+dir,{id_imagen: $(this).attr("id-imagen")},function(data) {
      $('#articulo').html(data);
    })

  })



  $(document).on("click",".crearComentario",function(e){//creacion de comentarios con api
    console.log("entro");
    e.preventDefault();
    $.ajax({
      url : 'api/comentarios',
      data : {texto:$(".text-api").val(),puntaje:$(".puntaje-api").val(),id_cabania:$(".id_cabania-api").val()},
      type : 'POST',
      dataType : 'json',
      success : function() {
        comentariosAjax($(".id_cabania-api").val());
      }
  });

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
