/* utilizarei regex e o método match() do 
JavaScript para fazer a contagem das vogais*/

let frase = document.getElementById("frase");
let resultado = document.getElementById("resultado");


frase.addEventListener("change",()=>{
    console.log(frase.value);

    resultado.textContent = frase.value;
})