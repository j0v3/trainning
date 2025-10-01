let number = document.getElementById("inpuRaio");
let resultArea = document.getElementById("resultArea");

//Function
//pi = 3,14159

function CircleArea(raio){

    let calcArea = (3.14*raio)**2;
    //console.log(calcArea);

    resultArea.textContent = `O Valor do raio é: ${calcArea}`;

}

 number.addEventListener("change", ()=>{
        CircleArea(number.value);

    });