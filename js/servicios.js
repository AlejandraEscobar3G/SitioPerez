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
                        let imgSource = "img/servicios/"+this.id+".jpg",
                            str = `<img src=${imgSource} class="float-right img-service"/>`,
                            parse = $.parseHTML(str);
                            $("#close").append(parse);
                            console.log(str);
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
        console.log(squareSide);
        let square = `<div class="square p-4 ${squareSide}" id="close">`;
        if(squareSide == "square-right") {
            square = square +
                    '<button type="button" class="close" aria-label="Close">' +
                        '<span aria-hidden="true">&times;</span>' +
                    '</button>' +
                    '<ul class="list-unstyled float-left pt-5">' +
                        '<li class="cursor" id="rabon32">√ Rabón de 3/2 toneladas</li>' +
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
                    '<div class="float-right w-50 h-100">' +
                        '<div class="h-50 w-100 text-center">' +
                            '<img class="h-50 w-50" src="img/icons/sct.png"/>' +
                            '<p class="p-2">Permiso para el transporte terrestre de materiales y residuos peligrosos, emitido por la SCT(No-1512)</p>' +
                        '</div>' +
                        '<div class="h-50 w-100 text-center">' +
                            '<img class="h-50 w-50" src="img/icons/semarnat.png"/>' +
                            '<p class="p-2">Permiso para el transporte terrestre de materiales y residuos peligrosos, emitido por la SCT(No-1512)</p>' +
                        '</div>' +
                    '</div>' +
                    '<div class="float-left w-50 h-100 text-center">' +
                        '<img class="w-75 h-100" src="img/servicios/servicios.jpg"/>' +
                    '</div>' +
                '</div>';
        }
        let htmlParse = $.parseHTML(square);
        return htmlParse;
    }
});