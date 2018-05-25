$(function() {

    $("#submit").click(function(){
        let name = $("input#name").val();
        let email = $("input#email").val();
        let option = $("select#options").val();
        let msg = $("textarea#message").val();

        if ((name != '') && (email != '') && (option != '') && (msg != '')) {
            const html = '<div class="position-absolute square-contacto">' +
                        '<p class="h1 text-justify p-5 text-secondary"><i>Gracias por su mensaje, <br> en breve nuestros ejecutivos se pondrán en contacto con usted.</i></p>' +
                        '<button type="button" id="aceptar" class="btn btn-light d-block mx-auto btn-lg">Aceptar</button>' +
                      '</div>';
            $("#contact").append(html);
            $("#aceptar").click(function(){
                $(".square-contacto").remove();
            });
        }
    });
});