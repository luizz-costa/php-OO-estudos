<?php 

/**
 * Iremos testar se determinado Metodo existe naquele contexto daquele Objeto
 * 
 * Por que é interessante usar o method_exists?
 *  - é interessante sempre que precisamos testar se um Objeto tem ou nao determinado Metodo antes da execucao
 */
class Funcionario
{
    public $nome;
    public $salario;
    public $departamento;
    
    function setSalario(){}
    function getSalario(){}
}

//Criando Objeto 
$jose = new Funcionario;

//Funcao para saber se esse Objeto possui o metodo setNome 
if (method_exists( $jose, 'setNome'))
    {
        echo 'Jose tem o Metodo setNome()';
    }
if (method_exists( $jose, 'setSalario'))
    {
        echo 'Jose tem o Metodo setSalario()';
    }