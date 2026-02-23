<?php 

/**
 * Utilizando biblioteca PDO para conexao com banco de dados 
 * 
 * Vantagem de usar a biblioteca PDO
 *  - A conexao com banco de dados é padronizado, onde so muda a string de conexao entre uma conexao e outra
 *  - Os Metodos da biblioteca sao os mesmo, independente do banco de dados para qual nos iremos enviar o comando
 * 
 *  Caso algum comando falhe, oque ocorre na programacao é oque chamamos de uma 'Exceção' ou uma 'Exception'
 *  por hora; qualquer coisa que pode gerar uma Exceção deve ser tratada dentro de um bloco (try {} catch) e caso ocorra alguma Exceção
 *  essa Exceção é tratada pelo bloco (catch ( PDOException $e ){})
 * 
 * */

//variavel armazena uma instancia da classe PDO, que abre a conexao com banco de dados 
// A string que passamos no metodo construtor, na hora de criar o objeto, essa string varia sim de um banco de dados para outro(ex: mysql, postgre.)

//Iniciando bloco (try{} catch{})
try
{
    //crinado conexao com banco de dados Postgre
    $conn = new PDO('pgsql:dbname=livro;user=postgres;password=;host=localhost');

    //Dizendo para biblioteca PDO para ela trabalhar com EXCEPTION, para caso cair em um erro(excecao) parar o resto dos codigos
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    //Após definir a string de conexao nós executamos comandos, por exemplo de INSERCAO:
    $conn->exec("INSERT INTO famosos (codigo, nome) VALUES (1, 'Érico Veríssimo')"); 
    $conn->exec("INSERT INTO famosos (codigo, nome) VALUES (2, 'John Lennon')"); 
    $conn->exec("INSERT INTO famosos (codigo, nome) VALUES (3, 'Mahatma Gandhi')"); 
    $conn->exec("INSERT INTO famosos (codigo, nome) VALUES (4, 'Ayrton Senna')"); 
    $conn->exec("INSERT INTO famosos (codigo, nome) VALUES (5, 'Charlie Chaplin')"); 
    $conn->exec("INSERT INTO famosos (codigo, nome) VALUES (6, 'Anita Garibaldi')"); 
    $conn->exec("INSERT INTO famosos (codigo, nome) VALUES (7, 'Mário Quintana')"); 

    //Para fecharmos a conexao basta:
    $conn = null;

}
//Dentro do bloco catch sera tratada as Exceçoes
catch (PDOException $e)
{
    //Por exemplo: Podemo exibir essa Exceção ou fazer algo com essa mensagem de erro que foi gerada
    echo 'Erro: ' . $e->getMessage();
}