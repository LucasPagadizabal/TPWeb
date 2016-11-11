$(document).ready(function(){
  function createComentarios(comentarios){

       var rendered = Mustache.render(template,{paquete:comentarios});
       $('#comentarios').html(rendered);

  }
  var template;
  $.ajax({ url: 'js/templates/comentarios.mst',
   success: function(templateReceived) {
     template = templateReceived;
   }
 });

$('.comentarios').click(function(event){
  event.preventDefault();
  $.ajax(
    {
      method:"GET",
      dataType: "JSON",
      url: "api/comentarios/" + { id_cabania: $(this).attr("data-idcabania")},//traer id de la cabania que pertenece
      success: createComentarios
    }
  )
});

});
