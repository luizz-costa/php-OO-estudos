<?php

/**Como iremos utilizar atributo estatico da Classe
 * 
 * O atributo estatico retem o seu valor dentro da classe software 
 * 
 * O atrbiuto estatico e uma varivael da classe software que nao precisa de um objeto para existir  
 */

class Software
{
    private $id;
    private $nome;
    
    //Criando atrbiuto estatico 
    static $contador;

    public function __construct($nome)
    {
        //Acessando uma variavel estatica
        self::$contador ++;
        $this->id = self::$contador;
        $this->nome = $nome; 
    }
}

$s1 = new Software('Gimp');
$s2 = new Software('Gnunmeric');

echo '<pre>';
var_dump($s1);
var_dump($s2);
echo '</pre>';