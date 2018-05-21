'use strict';
const nodemailer = require('./lib/nodemailer');

let transporter = nodemailer.createTransport({
    service: 'MIAB',
    host: 'box.corporativoperez.com',
    auth: {
        user: 'correo web aqui',
        pass: 'pass web aqui'
    }
});

let message = {
    from: 'correo web aqui', 
    to: 'destinatario aqui',
    subject: 'Prueba nueva de correo',
    text: '',
    html: '<h1>prueba de correos</h1>'
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
