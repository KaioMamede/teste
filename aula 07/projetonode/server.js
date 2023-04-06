const app = require('./app')

require('dotenv').config({path:"variaveis.env"})

app.set('port',process.env.PORT ||7777); //escolha da porta que a plicação vai rodar
const server = app.listen(app.get('port'),()=>{
    console.log("Servidor rodando na porta: "+server.address().port);
});