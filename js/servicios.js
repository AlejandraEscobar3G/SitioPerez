function changeVehiculo() {
  if (contador == 0) {
    $(`li#8`).removeClass("checked text-light");
  } else {
    $(`li#${flotilla[contador].id-1}`).removeClass("checked text-light");
  }
  $("#vehiculo").css({width:"100%", height:"400px"}).attr("src", flotilla[contador].source);
  $(`li#${flotilla[contador].id}`).addClass("checked text-light");
  contador++;
  if (contador >= flotilla.length) {
    contador = 0;
  }

  setTimeout("changeVehiculo()", 2000);
}

const source = "img/servicios/";
let flotilla = [{source:`${source}rabon35.png`, id:1},{source:`${source}rabon5.png`,id:2}, {source:`${source}rabon9.png`,id:3},{source:`${source}trailer.png`,id:4},{source:`${source}cajaseca.png`,id:5},{source:`${source}refri.png`,id:6},{source:`${source}tolva.png`,id:7},{source:`${source}portacontenedor.png`,id:8}];
let contador = 0;

$(function() {
  changeVehiculo();
});