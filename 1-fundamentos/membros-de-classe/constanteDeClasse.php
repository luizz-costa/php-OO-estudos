<?php

/**
 * Constante de Classe
 * 
 * Para definirmos uma constante dentro de uma Classe utilizamos:
 * 
 *    
 * 
 *  
 */

class Pessoa 
{
    private $nome;
    private $genero;

    //Criando Constante dentro da Classe:
    //const / nome da constante(variavel) / valor que ela armazena
    const GENEROS = [ 'M' => 'Masculino', 'F' => 'Feminino']; //nossa classe ira ter esse array fixo

    public function __construct($nome, $genero)
    {
        $this->nome = $nome;
        $this->genero = $genero;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function getNomeGenero()
    {
        //Como estamos dentro da classe usamos (self::) para acessar a constante
        return self::GENEROS[ $this->genero ];
    }

}

//Criando Objeto da Classe
$p1 = new Pessoa('Maria da Silva', 'F');
$p2 = new Pessoa('Carlos Pereira', 'M');

print $p1->getNome();
print $p1->getNomeGenero();
print $p2->getNome();
print $p2->getNomeGenero();


//Acessando a constante por fora da classe (podemos acessar de qualquer ponto do programa)
/*print Pessoa::GENEROS['F'];*/