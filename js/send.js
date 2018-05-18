'use strict';
const nodemailer = require('./lib/nodemailer');

let transporter = nodemailer.createTransport({
    service: 'gmail',
    auth: {
        user: 'ale.fesico@gmail.com',
        pass: 'alefesico'
    }
});

let message = {
    from: 'ale.fesico@gmail.com', 
    to: 'maury2804arriet@gmail.com',
    subject: 'Prueba de correo',
    text: 'Holi boli (:',
    html: '<p><b>Hola</b> a todos</p>'
};

transporter.sendMail(message, (error, info) => {
    if (error) {
        console.log('Hubo un error');
        console.log(error.message);
        return process.exit(1);
    }

    console.log(info.envelope);
    console.log(info.messageId);
    console.log(info.message.toString());
});
