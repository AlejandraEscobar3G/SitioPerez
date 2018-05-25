var express = require('express');
var router = express.Router();
var nodemailer = require('nodemailer');

/* GET home page. */
router.get('/', function(req, res, next) {
  res.render('index', { title: 'TyL Pérez' });
});

/* Contact form */
router.post('/', function(req, res, next) {

  let optionBox = req.body.options, nameBox = req.body.name, emailBox = req.body.email, messageBox = req.body.message;
  let emailList = '';

  if (optionBox == 'Facturacion') {
    emailList = ''
  } else if (optionBox == 'Calidad') {
    emailList = ''
  } else if (optionBox == 'Servicios') {
    emailList = ''
  } else {
    emailList = ''
  }

  let transporter = nodemailer.createTransport({
    service: 'MIAB',
    host: 'box.corporativoperez.com',
    auth: {
        user: 'web@corporativoperez.com',
        pass: 'password aqui'
    }
  });

  let message = {
      from: 'web@corporativoperez.com', 
      to: emailList,
      subject: optionBox,
      text: 'Nombre: '+nameBox+'. Correo Electrónico: '+emailBox+'. Mensaje: '+messageBox+'.',
      html: `<p>Nombre: ${nameBox}</p><p>Correo Electrónico: ${emailBox}</p><p>Mensaje: ${messageBox}</p>`
  };

  transporter.sendMail(message, (error, info) => {
      if (error) {
          console.log('Hubo un error');
          console.log(error.message);
          res.redirect('/');
          return process.exit(1);
      }

      res.redirect('#s-contacto');
      console.log(info.envelope);
      console.log(info.messageId);
      console.log(info.message.toString());
  });

});

module.exports = router;
