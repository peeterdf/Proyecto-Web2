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
    event.preventDefault();
    $.get( "index.php?action=muestra_tabla_ventas", function(data) {
      $('.page').html(data);
    });
  });

});

$(document).on('click','.btn-filtro-cat',function() {

});

$(document).on('click','.btn-agregaprod',function() {
  $('.mostrarprod').toggle();
});

$(document).on('click','.btn-editacat',function() {
  $('.editacat').toggle();
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
