// Definindo Variáveis e conexão com o documento html
let impAr = document.querySelector("#recipe");
let resulT = document.querySelector("#result");

//Adicionando escutador que agirá quando o imput for alterado
impAr.addEventListener("change", ()=>{
    
    let resultAdo = impAr.value%2;

    //console.log(resultAdo);

    //console.log(impAr.value);

    if(resultAdo==0){

        //console.log(`O Valor ${impAr.value} é par`);
        resulT.textContent = `O Valor ${impAr.value} é par`;

    }else{

       // console.log(`O Valor ${impAr.value} é impar`)
        resulT.textContent = `O Valor é ${impAr.value} impar`;
    }
}
);