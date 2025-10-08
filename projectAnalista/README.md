# 🧑‍💻projectAnalista

Olá, aqui se encontra o projeto para **Analista de Sistemas**, abaixo será possível encontrar mais informações.

## Guia
* [📝Instruções](README.md/#instruções)
    * [Instalar o MySQL Server](README.md/#instalar-o-mysql-server) 
    * [Instalar o PHP + Extensões](README.md/#instalar-o-php--extensões)
---

|Categoria|Badge|
|---|---|
| Linguagens Usadas | ![PHP](https://img.shields.io/badge/PHP-blue?style=for-the-badge&logo=php&logoColor=white&logoSize=auto&) ![JAVASCRIPT](https://img.shields.io/badge/JavaScript-yellow?style=for-the-badge&logo=javascript&logoColor=white&logoSize=auto&) ![HTML](https://img.shields.io/badge/HTML-orange?style=for-the-badge&logo=html5&logoColor=white&logoSize=auto&) ![CSS](https://img.shields.io/badge/CSS-blue?style=for-the-badge&logo=css&logoColor=white&logoSize=auto) ![SQL](https://img.shields.io/badge/SQL-blue?style=for-the-badge&logo=mysql&logoColor=white&logoSize=auto&) |
| Outros | ![MYSQL](https://img.shields.io/badge/MySQL-blue?style=for-the-badge&logo=mysql&logoColor=white&logoSize=auto) ![VSCODE](https://img.shields.io/badge/VSCode-blue?style=for-the-badge&logoColor=white&logoSize=auto) |


---

## 📝Instruções

>### 💡Lembrete
>O processo foi feito utilizando o **Windows com WSL**, a distribuição foi o **Ubuntu 22.04 LTS**, é possível realizar um passo a passo semelhante ao utilizar somente o **Windows**, porém o processo pode ser mais demorado(*a configuração ou instalação*).

Para se executar o projeto é necessário ter as ferramentas e linguagens instaladas no dispositivo, **supondo que o VSCode esteja instalado**, o processo será o seguinte:

1. [Instalar o MySQL Server](README.md/#instalar-o-mysql-server)
2. [Instalar o PHP + Extensões](README.md/#instalar-o-php--extensões)

### Instalar o MySQL Server
Utilizando o linux é necessário prosseguir com comandos simples para se **instalar o MySQL**, o comando que deve ser dado no terminal com permissões de superusuário é: **`sudo apt-get install mysql-server`** (*baseado na documentação oficial*).

Se tudo ocorrer bem, o MySQL Server será instalado no seu computador, um ponto importante é, caso seus repositórios não estejam atualizados, ou não saiba se está, é recomendado que você o atualize utilizando o seguinte comando: **`sudo apt update`**, isso **deve ser feito antes de instalar o mysql**.

### Instalar o PHP + Extensões
Para se instalar o PHP o comando é semelhante, com base na documentação oficial, os comandos são os seguintes: [^1]

<code> 
    
     # Update the package lists.
    sudo apt update

    # Install PHP.
    sudo apt install -y php 
    
</code>

[^1]: Baseado na documentação Oficial.