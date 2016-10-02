function crear () {
  create_info("Rubia Pilsen", 35, 50);
  create_info("WeissBier", 35, 50);
  create_info("HoneyBeer", 40, 60);
  create_info("Roja", 30, 45);
  create_info("Negra Bock", 50 , 60);
  create_info("Negra doppelbock", 50 , 60);
  create_info("RauchBier", 50 , 60);
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
    },
    error: function(jqxml, status, errorThrown) {
        console.log(errorThrown);
    }
  });
}
