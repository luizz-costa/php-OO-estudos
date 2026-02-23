<?php

/**
 * 
 */

class Funcionario 
{
    public $nome;
    public $salario;
    public $departamento;
}

$jose = new Funcionario;
$jose->nome = 'Jose da Silva';
$jose->salario = 2000;
$jose->departamento = 'Financeiro';

//Funcao para retornar o conteudo publico dos Atrbitutos do Objeto 
var_dump(get_object_vars( $jose ));