$(function() {
    let submenu = {
        "quien": "<p class='text-light'>Somos una empresa de logística y transporte terrestre. A lo largo de 50 años de experiencia nos hemos comprometido en brindar la mejor opción de transporte terrestre de materiales y residuos peligrosos para nuestros socios comerciales a través de tarifas competitivas y servicio personalizado.</p>",
        "mision": "<p class='text-light'>Somos una empresa especializada en brindar soluciones en logística y transporte de materiales y residuos peligrosos. La innovación en los procesos de operación e infraestructura, así como el desarrollo de nuestro capital humano, van encaminados a satisfacer las necesidades de nuestros socios comerciales ofreciendo un servicio personalizado, garantizando excelencia, calidad, y seguridad. Somos una empresa comprometida con el medio ambiente.</p>",
        "vision": "<ul class='text-light'><li>Ser una empresa líder en el ramo de servicio de transporte terrestre y logística en materiales y residuos peligrosos.</li><li>Anticipar las necesidades del cliente y del mercado excediendo los estándares requeridos a través de la inversión, la creatividad y la innovación.</li><li>Asegurar el bienestar y superación de nuestro personal para contar con el capital humano calificado y reconocido por la organización como valor principal que fortalece el crecimiento de la misma.</li><li>Buscar la excelencia y la rentabilidad mediante estrategias bien definidas.</li></ul>",
        "valores": "<ul class='text-light'><li>Responsabilidad social y ambiental.</li><li>Compromiso por la calidad.</li><li>Trabajo en equipo para el éxito común.</li><li>Proactividad. Hacer las cosas a pesar de las circunstancias.</li><li>Integridad y honestidad.</li><li>Respeto.</li><li>Comunicación asertiva.</li></ul>"
    };
    $(".submenu").hover(
        function() {
            switch (this.id) {
                case 'quien':
                    $("#submenu").append(`<div class="position-absolute field-blue p-3 responsive-font">${submenu.quien}</div>`);
                    break;
                case 'mision':
                    $("#submenu").append(`<div class="position-absolute field-blue p-3 responsive-font" id="mision-box">${submenu.mision}</div>`);
                    break;
                case 'vision':
                    $("#submenu").append(`<div class="position-absolute field-blue pl-1 pr-3 py-3 responsive-font" id="vision-box">${submenu.vision}</div>`);
                    break;
                default:
                    $("#submenu").append(`<div class="position-absolute field-blue pl-1 pr-3 py-3 responsive-font" id="valores-box">${submenu.valores}</div>`);
                    break;
            }
        },
        function() {
            $(".field-blue").remove();
        });
});