$(function() {
    var toggle = 0;
    $( "#transporte" ).click(
        function() {
            if(toggle == 0) {
                var service = $("#services");
                var stringHtml ='<div class="animation-square p-4" id="close">' +
                                '<button type="button" class="close" aria-label="Close">'+
                                    '<span aria-hidden="true">&times;</span>' +
                                '</button>' +
                                '<ul><li>La mas esbeltaaaaaaaaa</li></ul>' +
                            '</div>';
                var htmlParse = $.parseHTML(stringHtml);
                service.append(htmlParse);
                toggle = 1;
            }
            $(".close").click(function() {
                $("#close").remove();
                toggle = 0;
            });
        }
    );
    $( "#residuos" ).click(
        function() {
            console.log("residuos in");
        }
    );
    $(".logos-serv").hover(
        function(){
            $(this).css("cursor", "pointer");
        }
    );
});