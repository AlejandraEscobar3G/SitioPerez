$(function() {
    var toggle = 0;
    $( ".logos-serv" ).click(
        function(){
            if(toggle == 0) {
                const service = $("#services");
                if(this.id == "transporte") {
                    htmlParse = htmlParser(this.id);
                } else if(this.id == "residuos") {
                    htmlParse = htmlParser(this.id);
                }
                service.append(htmlParse);
                toggle = 1;
            }
            $(".close").click(function() {
                $("#close").remove();
                toggle = 0;
            });
        }
    );
    function htmlParser(icon){
        let square = `<div class="square p-2 ${icon}" id="close">`;
        if(icon == "transporte") {
            square = square +
                    '<button type="button" class="close position-absolute" aria-label="Close">' +
                        '<span aria-hidden="true">&times;</span>' +
                    '</button>' +
                    '<div class="container">' +
                        '<div class="row">' +
                            '<div class="col">' +
                                '<div>' +
                                    '<img src="img/servicios/camioneta35.png" class="img-thumbnail" alt="camioneta35">' +
                                    '<p>Camioneta de 3 1/2 toneladas</p>' +
                                '</div>' +
                            '</div>' +
                            '<div class="col">' +
                                '<div>' +
                                    '<img src="img/servicios/torton5.png" class="img-thumbnail" alt="torton5">' +
                                    '<p>Tortón de 5 toneladas</p>' +
                                '</div>' +
                            '</div>' +
                            '<div class="col">' +
                                '<div>' +
                                    '<img src="img/servicios/torton9.png" class="img-thumbnail" alt="torton9">' +
                                    '<p>Tortón de 9 toneladas</p>' +
                                '</div>' +
                            '</div>' +
                            '<div class="col">' +
                                '<div>' +
                                    '<img src="img/servicios/trailer.png" class="img-thumbnail" alt="trailer">' +
                                    '<p>Tráiler</p>' +
                                '</div>' +
                            '</div>' +
                            '<div class="w-100"></div>' +
                            '<div class="col">' +
                                '<div>' +
                                    '<img src="img/servicios/termos.png" class="img-thumbnail" alt="termos">' +
                                    '<p>Tráiler con Termos</p>' +
                                '</div>' +
                            '</div>' +
                            '<div class="col">' +
                                '<div>' +
                                    '<img src="img/servicios/tolva.png" class="img-thumbnail" alt="tolva">' +
                                    '<p>Tolva</p>' +
                                '</div>' +
                            '</div>' +
                            '<div class="col">' +
                                '<div>' +
                                    '<img src="img/servicios/portacontenedor.png" class="img-thumbnail" alt="portacontenedor">' +
                                    '<p>Portacontenedores</p>' +
                                '</div>' +
                            '</div>' +
                            '<div class="col">' +
                                '<div>' +
                                    '<img src="img/servicios/cajaseca.png" class="img-thumbnail" alt="cajaseca">' +
                                    '<p>Tráiler de caja seca</p>' +
                                '</div>' +
                            '</div>' +
                        '</div>' +
                    '</div>' +
                '</div>'
        } else if(icon == "residuos") {
            square = square + 
                    '<button type="button" class="close position-absolute float-left" aria-label="Close">' +
                        '<span aria-hidden="true">&times;</span>' +
                    '</button>' +
                    '<div class="float-right residuos-text">' +
                        '<div class="h-50 w-100 text-center">' +
                            '<img class="residuo-icon" src="img/icons/sct.png"/>' +
                            '<p class="p-2 font-responsive">Permiso para el transporte terrestre de materiales y residuos peligrosos, emitido por la SCT(No-1512)</p>' +
                        '</div>' +
                        '<div class="h-50 w-100 text-center">' +
                            '<img class="residuo-icon" src="img/icons/semarnat.png"/>' +
                            '<p class="p-2 font-responsive">Permiso para el transporte de residuos ante la SEMARNAT(DFMARNAT-3200-2017)</p>' +
                        '</div>' +
                    '</div>' +
                    '<div class="float-left residuos-img text-center">' +
                        '<img class="w-75 h-100" src="img/servicios/servicios.jpg"/>' +
                    '</div>' +
                '</div>';
        }
        let htmlParse = $.parseHTML(square);
        return htmlParse;
    }
});