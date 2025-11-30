function executeBot(){

    while (true){

        alert("Esse é um bot em testes");
        let inicio = prompt("Para ver o menu principal digite 1, para sair digite 2");
        if (inicio === "1"){botMenu()} else if (inicio === "2"){break;}

    }
}

function botMenu(){

    while (true){

        let decMenu = prompt("Ao clicar em 1, você vai se cadastrar, 2 você vai ver mais opções, 3 você volta ao inicio, 4 você encerra tudo");
        if (decMenu === "4"){return false}else if(decMenu === "1"){alert("você irá se cadastrar")}else if(decMenu === "2"){subMenuBot()}else if(decMenu === "3"){break;}
    }

}

function subMenuBot(){}

executeBot();