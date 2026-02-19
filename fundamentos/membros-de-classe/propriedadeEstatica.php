<?php

/**Como iremos utilizar atributo estatico da Classe
 * 
 * 
 * 
 * 
 */

class Software
{
    private $id;
    private $nome;

    public function __construct($nome)
    {
        $this->nome = $nome; 
    }
}

$s1 = new Software('Gimp');
$s2 = new Software('Gnunmeric');