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
        let square = `<div class="square pt-3 pl-3 ${icon}" id="close">`;
        if(icon == "transporte") {
            square = square +
                    '<button type="button" class="close position-absolute" aria-label="Close">' +
                        '<span aria-hidden="true">&times;</span>' +
                    '</button>' +
                    '<div class="container pt-4">' +
                        '<div class="row">' +
                            '<div class="col">' +
                                '<div class="img-thumbnail h-100">' +
                                    '<img src="img/servicios/camioneta35.png" class="img-thumbnail" alt="camioneta35">' +
                                    '<p class="text-center">Camioneta de 3 1/2 toneladas</p>' +
                                '</div>' +
                            '</div>' +
                            '<div class="col">' +
                                '<div class="img-thumbnail h-100">' +
                                    '<img src="img/servicios/torton5.png" class="img-thumbnail" alt="torton5">' +
                                    '<p class="text-center">Tortón de 5 toneladas</p>' +
                                '</div>' +
                            '</div>' +
                            '<div class="col">' +
                                '<div class="img-thumbnail h-100">' +
                                    '<img src="img/servicios/torton9.png" class="img-thumbnail" alt="torton9">' +
                                    '<p class="text-center">Tortón de 9 toneladas</p>' +
                                '</div>' +
                            '</div>' +
                            '<div class="col">' +
                                '<div class="img-thumbnail h-100">' +
                                    '<img src="img/servicios/trailer.png" class="img-thumbnail" alt="trailer">' +
                                    '<p class="text-center">Tráiler</p>' +
                                '</div>' +
                            '</div>' +
                            '<div class="w-100 p-2"></div>' +
                            '<div class="col">' +
                                '<div class="img-thumbnail h-100">' +
                                    '<img src="img/servicios/termos.png" class="img-thumbnail" alt="termos">' +
                                    '<p class="text-center">Tráiler con Termos</p>' +
                                '</div>' +
                            '</div>' +
                            '<div class="col">' +
                                '<div class="img-thumbnail h-100">' +
                                    '<img src="img/servicios/tolva.png" class="img-thumbnail" alt="tolva">' +
                                    '<p class="text-center">Tolva</p>' +
                                '</div>' +
                            '</div>' +
                            '<div class="col">' +
                                '<div class="img-thumbnail h-100">' +
                                    '<img src="img/servicios/portacontenedor.png" class="img-thumbnail" alt="portacontenedor">' +
                                    '<p class="text-center">Portacontenedores</p>' +
                                '</div>' +
                            '</div>' +
                            '<div class="col">' +
                                '<div class="img-thumbnail h-100">' +
                                    '<img src="img/servicios/cajaseca.png" class="img-thumbnail" alt="cajaseca">' +
                                    '<p class="text-center">Tráiler de caja seca</p>' +
                                '</div>' +
                            '</div>' +
                        '</div>' +
                    '</div>' +
                '</div>'
        } else if(icon == "residuos") {
            square = square + 
                    '<button type="button" class="close position-absolute" aria-label="Close">' +
                        '<span aria-hidden="true">&times;</span>' +
                    '</button>' +
                    '<div class="container pt-4">' +
                        '<div class="row">' +
                            '<div class="col-5">' +
                                '<img class="mx-auto d-block residuos-img" src="img/servicios/residuos.png" alt="residuos">' +
                            '</div>' +
                            '<div class="col-7">' +
                                '<div>' +
                                    '<img class="residuo-icon mx-auto d-block" src="img/icons/sct.png"/>' +
                                    '<p class="text-center p-2 font-responsive">Permiso para el transporte terrestre de materiales y residuos peligrosos, emitido por la SCT(No-1512)</p>' +
                                '</div>' +
                                '<div>' +
                                    '<img class="residuo-icon mx-auto d-block" src="img/icons/semarnat.png"/>' +
                                    '<p class="text-center p-2 font-responsive">Permiso para el transporte de residuos ante la SEMARNAT(DFMARNAT-3200-2017)</p>' +
                                '</div>' +
                            '</div>' +
                        '</div>' +
                    '</div>' +
                '</div>';
        }
        let htmlParse = $.parseHTML(square);
        return htmlParse;
    }
});