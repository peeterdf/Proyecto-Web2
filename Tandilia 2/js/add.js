$(document).ready(function() {
  const ROW_VACIO = "<tr><td colspan='3'>Vacio Ameo!</td></tr>";

  $('.page').load('templates/principal.tpl');

  $(".navbar-nav li:not(.dropdown)").click(function() {
   $('.navbar-toggle').click();
  })

  $(".index").click(function() {
    $('.page').load('templates/principal.tpl');
  });

  $(".nosotros").click(function() {
    $('.page').load('templates/nosotros.tpl');
  });

  $(".contacto").click(function() {
    $('.page').load('templates/contacto.tpl');
  });

  $(".abm").click(function() {
    $.get( "index.php?action=cargar_abm", function(data) {
        $('.page').html(data);
    });
  });



  $(".productos").click(function(){
event.preventDefault();
$.get( "index.php?action=mostrar_productos", function(data) {
    $('.page').html(data);
});
});

  $(".venta").click(function() {
    $('.page').load('templates/venta.tpl');
    //crear();
    get_info_tabla();
  });
})

$(document).on('click','.btn-agrega',function() {
  $('.mostrar').toggle();
});

 //$('.btn-enviar').click(function(){
$(document).on('click','.btn-enviar',function () {
   event.preventDefault();
   $.post( "index.php?action=guardar_producto",$("#formProductos").serialize(), function(data) {
     $('#listaProducto').html(data);
     $('producto').val('');
     //$('.formulario')[0].reset();
 });
 });

 //$(document).on('click','.btn-enviar',function () {
//     $.post("index.php?action=guardar_producto",$("#formProductos").serialize(), function(data) {
//       $('#listaProducto').html(data);
//       $('#producto').val('');
//     )};
 //});

$('.eliminarProducto').click(function(){
event.preventDefault();
$.get( "index.php?action=eliminar_producto",{ id_producto: $(this).attr("data-idproducto") }, function(data) {
  $('.page').html(data);
});

});

$(document).on('click','.boton-eliminar', function () {
  var valor = $(this).attr("value");
  eliminar(valor);
});


  function crearRow (info) {
    return "<tr><td>"+info.thing.cerveza+"</td><td>"+info.thing.precio_may+"</td><td>"+info.thing.precio_min+"</td><td><button class='eliminarProducto btn btn-default' value="+info._id+">Eliminar</button></td></tr>";
 }

function get_info_tabla() {
  $.ajax ({
    url: "http://web-unicen.herokuapp.com/api/group/21?",
    method: "GET",
    contentType: "application/json; charset=utf-8",
    success: function (resultData) {
      var tbody=$("tbody");
      if(resultData.information.length === 0){
        tbody.html(ROW_VACIO);
        return;
      }
      for (var i = 0; i < resultData.information.length; i++) {
        tbody.append(crearRow(resultData.information[i]));
      }
    },
    error: function (jqxml, status, errorThrown) {
      alert ('Error');
    }
  });
 }
