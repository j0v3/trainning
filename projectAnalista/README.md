# 🧑‍💻projectAnalista

Olá, aqui se encontra o projeto para **Analista de Sistemas**, abaixo será possível encontrar mais informações.

## Guia
* [📝Instruções](README.md/#instruções)
    * [Instalar o MySQL Server](README.md/#instalar-o-mysql-server) 
    * [Instalar o PHP + Extensões](README.md/#instalar-o-php--extensões)
* [🔨Execuções](README.md/#execuções)
    * [📊Banco de Dados(*MySQL*)](README.md/#banco-de-dadosmysql)
    * [🐘PHP](README.md/#php)
* [🖼️Funcionamento(Imagens)](README.md/#️funcionamentoimagens)
---

|Categoria|Badge|
|---|---|
| Linguagens Usadas | ![PHP](https://img.shields.io/badge/PHP-blue?style=for-the-badge&logo=php&logoColor=white&logoSize=auto&) ![JAVASCRIPT](https://img.shields.io/badge/JavaScript-yellow?style=for-the-badge&logo=javascript&logoColor=white&logoSize=auto&) ![HTML](https://img.shields.io/badge/HTML-orange?style=for-the-badge&logo=html5&logoColor=white&logoSize=auto&) ![CSS](https://img.shields.io/badge/CSS-blue?style=for-the-badge&logo=css&logoColor=white&logoSize=auto) ![SQL](https://img.shields.io/badge/SQL-blue?style=for-the-badge&logo=mysql&logoColor=white&logoSize=auto&) |
| Outros | ![MYSQL](https://img.shields.io/badge/MySQL-blue?style=for-the-badge&logo=mysql&logoColor=white&logoSize=auto) ![VSCODE](https://img.shields.io/badge/VSCode-blue?style=for-the-badge&logoColor=white&logoSize=auto) |


---

## 📝Instruções

>### 💡Lembrete
>O processo foi feito utilizando o **Windows com WSL**, a distribuição foi o **Ubuntu 22.04 LTS**, é possível realizar um passo a passo semelhante quando se utiliza somente o **Windows**, porém o processo pode ser mais demorado(*a configuração ou instalação*).

Para se executar o projeto é necessário ter as ferramentas e linguagens instaladas no dispositivo, **supondo que o VSCode esteja instalado**, o processo será o seguinte:

### Instalar o MySQL Server
Quando se utiliza uma distro linux é necessário prosseguir com comandos simples para se **instalar o MySQL**, o comando que deve ser dado no terminal com permissões de superusuário é: **`sudo apt-get install mysql-server`** [^1].

Se tudo ocorrer bem, o MySQL Server será instalado no seu computador, um ponto importante é, caso seus repositórios não estejam atualizados, ou não saiba se está, é recomendado que você o atualize utilizando o seguinte comando: **`sudo apt update`**, isso **deve ser feito antes de instalar o mysql**.

### Instalar o PHP + Extensões
Para se **instalar o PHP** o comando é semelhante aos encontrados no mysql, são os seguintes: [^1]


```bash
# Atualiza os pacotes
sudo apt update

# Instala o PHP
sudo apt install -y php

#Instala as Extensões do mysql no PHP
sudo apt install php-mysql
```

Depois de instalado é possível prosseguir com o projeto.

## 🔨Execuções
O primeiro passo a ser executado é criar o banco de dados no MySQL, depois criar o código PHP e o vincular ao DB e por fim mostrar utilizando a interface web com JavaScript. **Todos os códigos se encontram nas suas respectivas pastas.**

### 📊Banco de Dados(*MySQL*)
Para se **criar o banco de dados** é possível fazer isso via Terminal, mas antes é preciso criar um usuário para acessar o DB. O Comando que será executado no terminal e que chamará o DB é **``mysql``**, caso não funcione será preciso executar esse comando em modo superusuário, da seguinte forma: **``sudo mysql``**.

Após o `sudo mysql` ou `mysql` o mysql será executado, para se criar um usuário você irá executar: [^2]
```SQL
--Cria o usuário diretamente no banco de dados mysql.
USE 'mysql';
CREATE USER 'nome_do_usuario' IDENTIFIED BY 'senha_segura';

--Concede os privilégios ao usuário em um DB específico.
GRANT SELECT, INSERT, UPDATE, DELETE ON nome_do_banco.* TO 'nome_do_usuario';

--Aplica imediatamente as permissões.
FLUSH PRIVILEGES;
```

Depois de criar o usuário é necessário criar o DB do projeto que se chama ***avaliacao*** e suas tabelas, um dos comandos usados pode ser encontrado abaixo, os outros referentes ao banco de dados se encontra na [pasta](/projectAnalista/sql/) especifica.

```SQL
CREATE SCHEMA `avaliacao` DEFAULT CHARACTER SET utf8mb3 ;
```

O comando acima, assim como todos os outros encontrados na [pasta sql](/projectAnalista/sql/) podem ser executados no terminal, quando o mysql está ativo.

![Exemplo do mysql ativo no Terminal](/projectAnalista/documents/imgs/mysql%20ativo%20terminal.png)

### 🐘PHP
No caso do **PHP**, além de escrever os códigos, que podem ser copiados da [pasta]() específica, é necessário executar um comando, seja no terminal do sistema ou no terminal do VSCode [^3] :

```bash
php -S localhost:8000
```

O Comando acima irá executar o **servidor embutido do PHP**, permitido assim que o PHP seja executado, funcionando semelhante a um servidor, isso também permitirá que as requisições sejam possíveis.

>‼️**O Comando deve ser executado dentro da pasta do projeto.** Após ser executado é possível acessar o ``localhost:8000`` pelo navegador, depois disso é só definir a pasta que se encontra os arquivos. Por exemplo `localhost:8000/pasta/nomeDoArquivo.index`.

---

## 🖼️Funcionamento(Imagens)
Nessa sessão é possível visualizar algumas **imagens do projeto em funcionamento** local. Um [video](/projectAnalista/documents/) mostrando o funcionamento está disponível na [pasta documents](/projectAnalista/documents/).

As imagens serão apresentadas na seguinte ordem:
1. Interface do projeto
2. Projeto exibindo dados
3. Inserção de dados
4. Nova exibição de dados atualizados

![Interface do Projeto na Web](/projectAnalista/documents/imgs/interface%20do%20projeto%20na%20web.png)
![Projeto exibindo dados](/projectAnalista/documents/imgs/interface%20exibe%20dados.png)
![Insercao de dados](/projectAnalista/documents/imgs/interface%20insercao%20de%20dados.png)
![Nova exibição de dados atualizados](/projectAnalista/documents/imgs/interface%20exibe%20novos%20dados.png)

[^1]: Baseado na documentação Oficial.
[^2]: Caso seja super usuário( *sudo* ).
[^3]: Caso ele seja utilizado.