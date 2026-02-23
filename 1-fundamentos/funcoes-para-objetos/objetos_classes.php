<?php 
/**
 * Exemplo como podemos investigar estrutura de Classes de uma Hierarquia
 * 
 */
class Funcionario 
{
    public $nome;
    public $salario;
    public $departamento;
}

class Estagiario extends Funcionario
{
    public $bolsa;
}

//Crinado Objetos
$jose = new Funcionario;
$marcos = new Estagiario;

//Eu quero investigar sobre essa estrutura, quero saber mais sobre as Classes
//Funcoes que o php tem para isso
//Funcao para retornar o nome da classe do objeto passado no parametro:
echo get_class( $jose ) . '<br>'; 
echo get_class( $marcos ) . '<br>'; 

//Funcao para retornar classe parent ou a classe PAI (essa funcao pode recber uma varivel=Objeto ou uma Classe = 'Funcionario')
echo get_parent_class( $marcos );

//Funcao para retornar um valor booleano se o objeto Marcos e filho da classe Funcionario (essa funcao pode receber um objeto ou uma classe)
var_dump(is_subclass_of( $marcos, 'Funcionario'));
var_dump(is_subclass_of( 'Estagiario', 'Funcionario'));