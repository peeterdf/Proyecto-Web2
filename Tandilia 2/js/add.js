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

$(document).on('click','.btn-agregaprod',function() {
  $('.mostrarprod').toggle();
});

$(document).on('click','.btn-agregacat',function() {
  $('.mostrarcat').toggle();
});

$(document).on('click','.btn-borrarcat',function() {
  $('.borrarcat').toggle();
});

//$(document).on('click','.btn-enviarprod',function () {
  // event.preventDefault();
  // $.post( "index.php?action=guardar_producto",$("#formProductos").serialize(), function(data) {
  //   $('.tablaabm').html(data);
     //$('producto').val('');
     //$('.formulario')[0].reset();
 //});
 //});


 //$(document).on('click','.btn-enviar',function () {
//     $.post("index.php?action=guardar_producto",$("#formProductos").serialize(), function(data) {
//       $('#listaProducto').html(data);
//       $('#producto').val('');
//     )};
 //});

 $(document).on('click','.eliminarProducto', function(){
   event.preventDefault();
   $.get( "index.php?action=eliminar_producto",{ id_producto: $(this).attr("data-idproducto") }, function(data) {
  //$('.page').html(data);
  //$('#listaProducto').html(data);
  //$('#producto').val('');
  });
});

$(document).on('click','.eliminarCategoria  ', function(){
  event.preventDefault();
  $.get( "index.php?action=eliminar_categoria",{ id_categoria: $(this).attr("data-idcategoria") }, function(data) {
 //$('.page').html(data);
 //$('#listaProducto').html(data);
 //$('#producto').val('');
 });
});
