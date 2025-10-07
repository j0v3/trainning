let recTitulo = document.querySelector("#titulo");
let recFeito = document.querySelector("#feito");
let botaClick = document.querySelector("#buttonDB");
let mostraDados = document.querySelector("#mostraDados");
let pegaDados = document.querySelector("#pegaDados");

botaClick.addEventListener("click",()=>{

   const dados = {titulo:recTitulo.value, feito:recFeito.value};
   
   fetch('../php/requests.php', {

    method:'POST', 
    headers:{
        'Content-Type': 'application/json' }, 
        body: JSON.stringify(dados)
   }).then(response=>{

        if(!response.ok){
            throw new error("Erro na requisição: " + response.status);
        }return response.json();

   }).then(data=> {console.log("Resposta do Servidor: ", data);}).catch(error=>{
    console.log("Erro: ", error);
   })

});

pegaDados.addEventListener("click",()=>{



});