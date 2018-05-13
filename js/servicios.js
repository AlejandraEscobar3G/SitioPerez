function changeVehiculo() {
  $("#vehiculo").css({width:"70%"}).attr("src", flotilla[contador].source);
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