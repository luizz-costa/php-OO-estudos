<?php 

/**
 * O PHP tem uma Classe pre-definida chamada `stdClass` 
 * que é uma estrutura vazia que permite criar um Objeto a partir dessa classe 
 * e agregar Atributos nele, entao funciona como um Objeto para carregar Dados  
 * é uma Estrutura em Memoria uma estrutura de Objeto que pode ser usada para armazenar uma serie de informacoes dentro dela
 * 
 * Conversao de tipo:
 * Conversao de tipo é conveter por exemplo um Objeto em um Vetor ou vice-versa
 * é um conceito simples 
 * Para conveter um Objeto em um Vetor basta utilizarmos a palavra `(array)` antes do Objeto e atribuirmos isso a 
 * uma Variavel do tipo Vetor, assim ira converter todos Atributos Publico daquele objeto para Atributos do Vetor.
 * 
 * 
 */

$produto = new stdClass;
$produto->descricao = 'Chocolate';
$produto->estoque = 100;
$produto->preco = 10;

//Transformando um Objeto em um Vetor
$vetor1 = (array) $produto;

//Transformando um Vetor em um Objeto
$vetor2 = [
            'descricao' => 'Cafe', 
            'estoque' => 90,
            'preco' => 5
        ];

//Criando o Objeto apartir desse Vetor
$produto2 = (object) $vetor2;


echo '<pre>';
var_dump($vetor1);
var_dump($produto2);

echo '</pre>';

//Outra Possibilidade:
$produto = [];
$produto ['descricao'] = 'chocolate';
$produto ['estoque'] = 2;
$produto ['preco'] = 10;

$objeto = new stdClass;

foreach ($produto as $chave =>$valor)
    {
        $objeto->$chave = $valor;
    }
echo '<pre>';
print_r($objeto);
echo '</pre>';