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

  $(".productos").click(function() {
    $('.page').load('templates/productos.tpl');
  });

  $(".productos_prueba").click(function() {
    $('.page').load('templates/productosprueba.tpl');
  });

  $('.productos_prueba').click(function(){
event.preventDefault();
$.get( "index.php?action=mostrar_productos", function(data) {
  console.log(data);
  $('.prodprueba').html(data);
});
});

  $(".venta").click(function() {
    $('.page').load('templates/venta.tpl');
    //crear();
    get_info_tabla();
  });

  $(".rubiapilsen").click(function() {
    $('.page').load('templates/productos.tpl', function () {
      $('html, body').animate({
         scrollTop: $('#pilsen').offset().top -50
     }, 'slow');
    });
  });

  $(".weissbier").click(function() {
    $('.page').load('templates/productos.tpl', function () {
      $('html, body').animate({
         scrollTop: $('#weissbier').offset().top -50
     }, 'slow');
    });
  });

  $(".honeybeer").click(function() {
    $('.page').load('templates/productos.tpl', function () {
      $('html, body').animate({
         scrollTop: $('#honey').offset().top -50
     }, 'slow');
    });
  });

  $(".roja").click(function() {
    $('.page').load('templates/productos.tpl', function () {
      $('html, body').animate({
         scrollTop: $('#roja').offset().top
     }, 'slow');
    });
  });

  $(".negrabock").click(function() {
    $('.page').load('templates/productos.tpl', function () {
      $('html, body').animate({
         scrollTop: $('#bock').offset().top
     }, 'slow');
    });
  });

  $(".negradoppelbock").click(function() {
    $('.page').load('templates/productos.tpl', function () {
      $('html, body').animate({
         scrollTop: $('#doppel').offset().top
     }, 'slow');
    });
  });

  $(".rauchbier").click(function() {
    $('.page').load('templates/productos.tpl', function () {
      $('html, body').animate({
         scrollTop: $('#rauch').offset().top
     } , 'slow');
    });
  });
})

$(document).on('click','.btn-agrega',function() {
  $('.mostrar').toggle();
});

$(document).on('click','.btn-enviar',function () {
    var cerveza = $("#Tcerveza").val();
    var precioMAY = $("#Pmayorista").val();
    var precioMIN = $("#Pminorista").val();
    create_info(cerveza,precioMAY,precioMIN);
    $('.formulario')[0].reset();
});

$(document).on('click','.boton', function () {
  var valor = $(this).attr("value");
  eliminar(valor);
});

function eliminar (id) {
  $.ajax ({
    url: "http://web-unicen.herokuapp.com/api/delete/" + id,
    method: "DELETE",
    success: function() {
      $('tbody').empty();
      get_info_tabla();
    },
    error: function(jqxml, status, errorThrown) {
      console.log(errorThrown);
    }
  });
}

  function crearRow (info) {
    return "<tr><td>"+info.thing.cerveza+"</td><td>"+info.thing.precio_may+"</td><td>"+info.thing.precio_min+"</td><td><button class='boton btn btn-default' value="+info._id+">Eliminar</button></td></tr>";
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

 function create_info(cerveza, precio_may, precio_min) {
   event.preventDefault();
   var grupo = 21;
   var Tcerveza = cerveza;
   var mayorista = precio_may;
   var minorista = precio_min;
   var info = {
     "group" : grupo,
     "thing":{
     "cerveza" : Tcerveza,
     "precio_may" : mayorista,
     "precio_min" : minorista
   }
   };

   $.ajax({
     url: "http://web-unicen.herokuapp.com/api/create",
     method: "POST",
     dataType: 'JSON',
     contentType: "application/json; charset=utf-8",
     data : JSON.stringify(info),
     success: function(resultData) {
       console.log(resultData);
       $('tbody').empty();
       get_info_tabla();
     },
     error: function(jqxml, status, errorThrown) {
         console.log(errorThrown);
     }
   });
 }
