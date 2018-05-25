var express = require('express');
var router = express.Router();
var nodemailer = require('nodemailer');

/* GET home page. */
router.get('/', function(req, res, next) {
  res.render('index', { title: 'TyL Pérez' });
});

/* Contact form */
router.post('#s-contacto', function(req, res, next) {
  
});

module.exports = router;
