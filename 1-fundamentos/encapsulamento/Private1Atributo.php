<?php
/**
 * Qual é a caracteristica do Private ?
 *  -O Private1 e o tipo de declaracao que nao permite que a gente altere 
 *  os Atributo diretamente fora da Classe e tambem nao Permite que alteramos 
 *  os Atributos de fora da Classe.
 * 
 */
class Pessoa
{
    private $nome;
    private $endereco;
    private $nascimento;
}

//Criando Objeto da Classe
$p1 = new Pessoa;
$p1->nome = 'Maria da Silva';
$p1->endereco = 'Rua Bento Goncalves';
$p1->nascimento = '12 de Março de 1990';

var_dump($p1);