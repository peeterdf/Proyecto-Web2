$(document).ready(function() {

  $('.page').load('templates/principal.tpl');

  $(".index").click(function() {
    $('.page').load('templates/principal.tpl');
  });

  $(".nosotros").click(function() {
    $('.page').load('templates/nosotros.tpl');
  });

  $(".contacto").click(function() {
    $('.page').load('templates/contacto.tpl');
  });

  $(".login").click(function() {
    $.get( "index.php?action=login", function(data) {
        $('.page').html(data);
        });
  });

  $(".logout").click(function() {
    $.get( "index.php?action=logout", function(data) {
        $('.page').html(data);
        });
  });

  $(".register").click(function() {
    $.get( "index.php?action=registrar_usuario", function(data) {
        $('.page').html(data);
        });
  });



  $(document).on('click','.ampliarproducto', function(){
    event.preventDefault();
    $.get( "index.php?action=ampliar_producto",{ id_producto: $(this).attr("data-idproducto") }, function(data) {
    $('.page').html(data);
    var id_producto=$(".comentarios").attr('data-idproducto');
    obtenerComentarios(id_producto);
   });
 });

 $(".adminItems").click(function() {
 $.get( "index.php?action=cargar_abm", function(data) {
     $('.page').html(data);
 });
});

$(".adminUsers").click(function() {
 $.get( "index.php?action=administrar_usuarios", function(data) {
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
    event.preventDefault();
    $.get( "index.php?action=muestra_tabla_ventas", function(data) {
      $('.page').html(data);
    });
  });


  var template;
  var repetidor;
  function obtenerComentarios(id_producto){
    $.ajax({ url: 'js/templates/comentario.mst',
    success: function(templateReceived) {
      template = templateReceived;
    }
  });
  clearInterval(repetidor);
  function get() {
    url="api/comentario/"+id_producto;
    $.get( url, function(data) {
      var datos = [];
      for (var i = 0; i < data.length; i++) {
          datos.push(data[i]);
          alert("netro  ");
      }
      alert(datos);
      var rendered = Mustache.render(template,{comentarios:datos});
      $(".comentarios").html(rendered);
    });
  }
  get();
  repetidor = setInterval(get, 2000);

}

  //var template;
  //  $.ajax({ url: 'js/templates/comentario.mst',
  //   success: function(templateReceived) {
  //     template = templateReceived;
  //   }
   //});

  function cargarComentarios(){
   $.ajax(
       {
         method:"GET",
         dataType: "JSON",
         url: "api/comentario",
         success: createComentarios
       }
     )
  };

   function createComentarios(comentarios){
         var rendered = Mustache.render(template,{comentarios});
         $('.comentarios').html(rendered);

    };

});

$(document).on('click','.btn-filtro-cat',function() {

});

$(document).on('click','.btn-agregaprod',function() {
  $('.mostrarprod').toggle();
});

$(document).on('click','.btn-eliminaimg',function() {
  $('.eliminaimg').toggle();
});

$(document).on('click','.btn-editacat',function() {
  $('.editacat').toggle();
});

$(document).on('click','.btn-agregaimg',function() {
  $('.agregaimg').toggle();
});

$(document).on('click','.btn-agregacat',function() {
  $('.mostrarcat').toggle();
});

$(document).on('click','.btn-borrarcat',function() {
  $('.borrarcat').toggle();
});

$(document).on('click','.btn-editaprod',function() {
  $('.editaprod').toggle();
});


$(document).on("submit", ".form-signin", function(event)
{
    event.preventDefault();
    var url=$(this).attr("href");
    $.ajax({
        url: url,
        type: $(this).attr("method"),
        data: new FormData(this),
        processData: false,
        contentType: false,
        success: function (data)
        {
          $('.page').html(data);
        },
    });
});

 $(document).on("submit", ".formularioabm", function(event)
 {
     event.preventDefault();
     var url=$(this).attr("href");
     $.ajax({
         url: url,
         type: $(this).attr("method"),
         data: new FormData(this),
         processData: false,
         contentType: false,
         success: function (data)
         {
           $('.page').html(data);
         },
     });
 });

 $(document).on("submit", ".formcontacto", function(event)
 {
     event.preventDefault();
     var url=$(this).attr("href");
     $.ajax({
         url: url,
         type: $(this).attr("method"),
         data: new FormData(this),
         processData: false,
         contentType: false,
         success: function (data)
         {
           $('.page').html(data);
         },
     });
 });

 $(document).on('click','.eliminarUsuario', function(){
   event.preventDefault();
   $.get( "index.php?action=eliminar_usuario",{ id_usuario: $(this).attr("data-idusuario") }, function(data) {
   $('.page').html(data);
  });
});

//$(document).on('click','.eliminarImagen', function(){
//  event.preventDefault();
//  $.get( "index.php?action=eliminar_imagen",{ id_imagen: $(this).attr("data-imagen") }, function(data) {
//  $('.page').html(data);
 //});
//});

$(document).on('click','.editarPrivilegio', function(){
  event.preventDefault();
  $.get( "index.php?action=editar_usuario",{ id_usuario: $(this).attr("data-idusuario") }, function(data) {
  $('.page').html(data);
 });
});

 $(document).on('click','.eliminarProducto', function(){
   event.preventDefault();
   $.get( "index.php?action=eliminar_producto",{ id_producto: $(this).attr("data-idproducto") }, function(data) {
   $('.page').html(data);
  });
});

$(document).on('click','.eliminarCategoria', function(){
  event.preventDefault();
  $.get( "index.php?action=eliminar_categoria",{ id_categoria: $(this).attr("data-idcategoria") }, function(data) {
  $('.page').html(data);
 });
});
