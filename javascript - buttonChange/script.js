const changeBT = document.querySelector("#changeBT");
const message = document.querySelector("#Message");

message.style.border = "5px solid red";
message.style.padding = "20px";
message.style.borderRadius = "20px 50px";
message.style.backgroundColor = "green";
message.style.width = "500px";

let vari = 0;

changeBT.addEventListener("click", ()=>{
    
    const listRR = ["Bom dia, ORE", "não esqueça de Deus", "busque sempre ao verdadeiro criador!"];
    if(listRR.length > vari){

        message.textContent = listRR[vari];
        vari = vari + 1;

    }else if(vari == listRR.length-1){vari = 0;}else{vari = 0;}
    

});

let agora = new Date();

message.textContent = `${agora.getHours()}:${agora.getMinutes()}`;