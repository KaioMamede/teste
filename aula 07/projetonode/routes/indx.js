const express = require('express');


//Rotas (quando o servidor for acessado, para onde ele vai?)
const router = express.Router();
router.get('/',(req,res)=>{
    res.send('olá Mundo 2023!!');
});

router.get('/contato',(req,res)=>{
    res.send('Pagina com informção de contato');
});

router.get('/cadastro',(req,res)=>{
    res.send('Pagina de apalicativo');
})

module.exports = router;