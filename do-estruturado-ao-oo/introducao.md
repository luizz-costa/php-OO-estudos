
Do estruturado ao Orientado a Objetos 

Nosso objetivo nesse estudo sera construir um programa estruturado e converter ele aos poucos pro modo Orientado a Objetos 

- Vamos construir algumas rotinas (forms, lists) que sao alguns cadastros e algumas listagens rotina comum em um sistema;
- Vamos inicialmente construir de maneira estruturada, nao orientada a objetos;
- E esses programas construidos de maneira estruturada nós iremos refazer(refatorar) aos poucos teremos um programa melhor, mais organizada, e OO
- É preciso desenvolver um projeto ou metodo simplificado e aperfeicoar ele.

- Quando começamos a programar, só queremos que o programa:
    - Grave
    - Liste
    - Exclua
- No inicio nao estamos muitos preocupados em seguir os melhores padroes
- O metodo estruturado é mais simples para o aprendizado inicial
- Um programa OO é um passo além do estruturado
- Vamos simular o caminho do aprendizado tradicional.

Metodologia em 7 etapas:
    1- Procedural: um script por acao;
        - Estruturado 
        - PHP, HTML e SQL misturados
        - Cada ação (incluir, editar, excluir, listar) é um script

    2- Agrupando ações comuns em scripts
        - Reunimos ações comuns em torno de menos script
        - Incluir junto com editar, listar junto com excluir
        - Conceito de script e ação realizada

    3- Separando o HTML com micro templates
        - Tiramos HTML misturado com programa 
        - Trabalhamos com o HTML em arquivos a parte, templates
        - Separamos o visual do resto do programa

    4- Separando o acesso a dados com funcoes
        - Iremos arrancar fora toda parte de acesso ao banco de dados
        - Separamos o acesso a dados com funções
        - Série de funções (insere_pessoa, exclui_pessoa)
        - Separamos as funções de persistencia do programa principal 

    5- Separando o acesso a dados com classes
        - A camada de acesso ao banco de dados vai ser transformado em classes 
        - Transformamos as funções de acesso à BD em classes de modelo
        - Introduzimos a biblioteca PDO
        - Começamos a trabalhar com exceções
        - Nossa camada de banco já está utilizando classes.

    6- Melhorando as conexoes e a segurança
        - Refatorando nossa classe de banco de dados
        - Não apresentar mais os dados de conexão (banco, usuario, e senha);
        - Aumentamos a seguranca ao trabalhar com prepared statements
        - Evitar ataques como SQL injection 

    7- Transformando paginas em classes de controle
        - Tudo se torna classes
        - Refatoramos nossos programas principais ainda estruturados
        - Transformamos estes em classes de controle (Ex: PessoaForm, PessoaList)
        - Cada ação do usuario é identificada por um método
        - Alteramos o fluxo da aplicação
        - Agora temos um arquivo (index.php) por onde passam todas as rotas.