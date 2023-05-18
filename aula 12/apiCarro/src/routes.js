const express = require('express');
const router = express.Router();

const CarroController = require('./controllers/CarroController');

router.get('/carros', CarroController.buscarTodos);

router.get('/carro/:codigo', CarroController.buscarUm);

router.post9('/carro', CarroController.inserir)
module.exports = router;