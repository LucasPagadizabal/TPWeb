$( document ).ready(function() {
  const numGrupo = 1;

  $("#btnQuienesSomos").click(quienesSomos);
  $("#btnComoLLegar").click(comoLlegar);
  $("#btnHome").click(home);
  $("#btnServicios").click(servicios);
  $('#btnTarifas').click(tarifas);
  $('#btnContacto').click(contacto);
  $('#btnReservas').click(reservas);
  $(document).on("click", '#crearInfo' , function (event){
    event.preventDefault();
    crearInfor();
  });
  function crearRow(datos, _id){
    $('#tabla').append('<tr ><td>'+datos[0]+'</td><td>'+datos[1]+'</td><td>'+datos[2]+'</td><td>'+datos[3]+'</td><td>'+datos[4]+
    '</td><td><button type="button" class="btn btn-default" name="button" id="'+_id+'">borrar</button></td></tr>');
  }
  function eliminarFila(_id){
    $('#'+_id).click(function(){
      eliminarInfor(_id);
    })
  }
  function tarifas(){
    var a = $('#btnTarifas').attr('href');
    event.preventDefault();
    partialRender(a, function(){
    $('#mostrarTabla').click(crearTabla);
  });
  }
  function servicios(){
    event.preventDefault();
    var a = $('#btnServicios').attr('href');
    partialRender(a);
  }
  function reservas(){
    event.preventDefault();
    var a = $('#btnReservas').attr('href');
    partialRender(a);
  }
  function contacto(){
    event.preventDefault();
    var a = $('#btnContacto').attr('href');
    partialRender(a);
  }
  function home(){
    event.preventDefault();
    var a = $('#btnHome').attr('href');
    partialRender(a);
  }
  function quienesSomos(){
    event.preventDefault();
    var a = $("#btnQuienesSomos").attr('href');
    partialRender(a);
  }
  function comoLlegar(){
    event.preventDefault();
    var a = "template/comoLlegar.tpl";
    partialRender(a);
  }

  function partialRender(dir, fnsc){
    $.ajax({
      url: dir + '?',
      method:"GET",
      dataType: "html",
      success: function(data){
        $("#articulo").html(data);
        if (fnsc) {
          fnsc();
        }
      },
      error: function(){
        alert("FALLASTE");
      }
    });
  }

  function crearTabla(){
    $.ajax({
      url:"http://web-unicen.herokuapp.com/api/group/"+numGrupo,
      method:"GET",
      contentType: "application/json; charset=utf-8",
      success: function(resultData){
        var a = $('#tabla').html();
        if (a === '') {
          for (var i = 0; i < resultData.information.length; i++) {
            var elId = resultData.information[i]._id;
            crearRow(resultData.information[i].thing, elId);
            eliminarFila(elId);
          }
          $('#mostrarTabla').parent().parent().addClass('alerta-success');
        }
      },
      error:function(jqxml, status, errorThrown){
        $('#mostrarTabla').parent().parent().addClass('alerta-danger');
        alert('Error');
      }
    });
  }
  function eliminarInfor(_id){
    event.preventDefault();
    $.ajax({
      url:"http://web-unicen.herokuapp.com/api/delete/"+_id+"?",
      method: 'DELETE',
      contentType: "application/json; charset=utf-8",
      success:function(){
      },
      error:function(jqxml, status, errorThrown){
        console.log(errorThrown);
      }
    });
  }

  function crearInfor(){
    event.preventDefault();
    var datos = [$("#nroNoches").val(), $("#precio1o2Per").val(), $("#precio3Per").val(), $("#precio4Per").val(), $("#precioMasDe4Per").val()];
    var info = {
      "group" : numGrupo,
      "thing" : datos
    };
    $.ajax({
      url:"http://web-unicen.herokuapp.com/api/create",
      method:'POST',
      contentType: "application/json; charset=utf-8",
      data: JSON.stringify(info),
      success: function(resultData){
        crearRow(datos, resultData.information._id);
        var elId = resultData.information._id;
        eliminarFila(elId);
        $('input').val('');
        $('#crearInfo').parent().parent().parent().addClass('alert-success');
      },
      error:function(jqxml, status, errorThrown){
        console.log(errorThrown);
        $('#crearInfo').parent().parent().parent().addClass('alert-danger');
      }
    });
}
home();
});
