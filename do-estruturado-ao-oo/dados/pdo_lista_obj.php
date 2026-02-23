<?php 

/**
 * Utilizando biblioteca PDO para listar registros 
 * 
 * Fazendo pequenas alteracoes: no lugar de usar o foreach para percorrer os resultados que traz cada linha no formado de array.
 * podemos encima do objeto $result chamar o Metodo $result->`fetch( PDO::FETCH OBJ )`) ele vai retornar uma linha na forma de um OBJ
 * 
 * O resultado pratico e o mesmo !!
 * 
 * */

try
{
    //crinado conexao com banco de dados Postgre
    $conn = new PDO('pgsql:dbname=livro;user=postgres;password=;host=localhost');

    //Dizendo para biblioteca PDO para ela trabalhar com EXCEPTION, para caso cair em um erro(excecao) parar o resto dos codigos
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    //Após definir a string de conexao nós executamos comandos, por exemplo o de LISTAR REGISTROS:
    $result = $conn->query("SELECT codigo, nome FROM famosos");

    //Testando result para verificar se algum resultado foi retornado da pesquisa
    if ($result)
        {
            //Se foi retornado algum resultado da consulta:
            //foreach == para cada resultado da consulta; atribua na variavel row e exiba na tela
            //foreach ($result as $row) ------> TRAZ CADA LINHA EM FORMATO DE ARRAY

            /**
             * Encima do objeto $result estamos chamando o metodo fetch passando parametro (PDO::FETCH_OBJ) 
             * que vai retornar uma linha na forma de um OBJ 
             * e adicionando um while por fora, ele vai percorrer isso varias vezes ate chegar o fim
             * nesse caso o $row nao e mais um array e sim um Objeto
             * !!!! RESULTADO PRATICO E O MESMO DO FOREACH ARRAY !!!!
            */
                                        //Usando o estilo do fetch PDO::FETCH_OBJ (mais estilos na documentacao do php)
            while ($row = $result->fetch( PDO::FETCH_OBJ ))
                {
                    //nesse caso o $row se tornar um objeto e nao um array
                    echo $row->codigo . ' - ' . $row->nome . '<br>' ;
                }
        }

    //Para fecharmos a conexao basta:
    $conn = null;

}
//Dentro do bloco catch sera tratada as Exceçoes
catch (PDOException $e)
{
    //Por exemplo: Podemo exibir essa Exceção ou fazer algo com essa mensagem de erro que foi gerada
    echo 'Erro: ' . $e->getMessage();
}