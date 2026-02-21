<?php 

/**
 * Como programar a execucao de uma Funcao para outro momento (Call Back)
 */

function apresenta($nome)
{
    echo "Ola $nome";
}
// apresenta('Pablo');
$funcao = 'apresenta';
call_user_func( $funcao, 'Pablo');

class Pessoa 
{
    public static function apresenta($nome)
    {
        echo "Ola $nome"; 
    } 
}
// Pessoa::apresenta('Pablo');

$classe = 'Pessoa';
$metodo = 'apresenta';

call_user_func( [$classe, $metodo], 'Pablo' );