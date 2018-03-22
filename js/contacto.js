// $(function() {
//     var toggleC = 0;
//     $("#submit").click(function(){
//         if(toggleC==0){
//             let contacto = $("#contact");
//             let square = '<div class="position-absolute square-contacto">' +
//                             '<p class="h1 text-justify p-5 text-secondary"><i>Gracias por su mensaje, <br> en breve nuestros ejecutivos se pondrán en contacto con usted.</i></p>' +
//                             '<button type="button" id="aceptar" class="btn btn-light d-block mx-auto btn-lg">Aceptar</button>' +
//                         '</div>';
//             let htmlParse = $.parseHTML(square);
//             contacto.append(htmlParse);
//             toggleC = 1;
//         }
//         $("#aceptar").click(function(){
//             $(".square-contacto").remove();
//             toggleC = 0;
//         });
//     });
// });