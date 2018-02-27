$(function() {
    var toggle = 0;
    $( ".logos-serv" ).click(
        function() {
            if(toggle == 0) {
                const service = $("#services");
                let htmlParse;
                if(this.id == "transporte") {
                    htmlParse = htmlParser("square-right");
                } else if(this.id == "residuos") {
                    htmlParse = htmlParser("square-left");
                }
                service.append(htmlParse);
                $(".cursor").hover(
                    function(){
                        let imgSource = "img/servicios/"+this.id+".png",
                            str = `<img src=${imgSource} class="float-right img-service"/>`,
                            parse = $.parseHTML(str);
                            $("#close").append(parse);
                    }, function(){
                        $(".img-service").remove();
                    }
                );
                toggle = 1;
            }
            $(".close").click(function() {
                $("#close").remove();
                toggle = 0;
            });
        }
    );
    function htmlParser(squareSide){
        let square = `<div class="square p-2 ${squareSide}" id="close">`;
        if(squareSide == "square-right") {
            square = square +
                    '<button type="button" class="close position-absolute" aria-label="Close">' +
                        '<span aria-hidden="true">&times;</span>' +
                    '</button>' +
                    '<ul class="list-unstyled float-left ul-services">' +
                        '<li class="cursor" id="rabon35">√ Rabón de 3/2 toneladas</li>' +
                        '<li class="cursor" id="rabon5">√ Rabón de 5 toneladas</li>' +
                        '<li class="cursor" id="rabon9">√ Rabón de 9 toneladas</li>' +
                        '<li class="cursor" id="trailer">√ Tráiler</li>' +
                        '<li class="cursor" id="torton">√ Tortón</li>' +
                        '<li class="cursor" id="tolva">√ Tolva</li>' +
                        '<li class="cursor" id="portacontenedor">√ Portacontenedores</li>' +
                    '</ul>' +
                '</div>'
        } else if(squareSide == "square-left") {
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