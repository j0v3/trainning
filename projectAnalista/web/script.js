let recTitulo = document.querySelector("#titulo");
let recFeito = document.querySelector("#feito");
let botaClick = document.querySelector("#buttonDB");
let mostraDados = document.querySelector("#mostraDados");
let pegaDados = document.querySelector("#pegaDados");
let formInput = document.getElementById("formInput");

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
   });

   formInput.reset();
   recTitulo.focus();

});

function listaDDados(tarefas){
    return `<tr class="trTable"><td>${tarefas.id}</td><td>${tarefas.titulo}</td><td>${tarefas.criado_em}</td></tr>`;

};

pegaDados.addEventListener("click",async ()=>{

    try{
        const resposta = await fetch('../php/requests.php',{

            method: 'GET' });

        const lista = await resposta.json();

        const container = mostraDados;
        const nova = lista.map(listaDDados);

        container.innerHTML = nova.join('');

    }catch(error){
        console.error("Falha ao buscar dados", error);
    };
    
});