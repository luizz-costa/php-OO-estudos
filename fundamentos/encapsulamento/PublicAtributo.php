<?php 
/**
 * Qual é a caracteristica do Public ?
 *  -O Public e o tipo de declaracao que permite que a gente altere 
 *  os Atributo de dentro da Classe e tambem Permite que alteramos 
 *  os Atributos de fora da Classe.
 *  Podendo gravar qualquer dado no Atributo
 *  Por exemplo: o Atributo `nascimento` sabemos que ele normalmente é no formato de DATA 
 *  so que pelo fato do Atributo ser Public ele permite gravar qualquer dentro 
 *  Seja algo como `1990-03-12` ou `12 de Março de 1990`
 * 
 */
class Pessoa
{
    public $nome;
    public $endereco;
    public $nascimento;
    public $idade;
}

//Criando Objeto da Classe
$p1 = new Pessoa;
$p1->nome = 'Maria da Silva';
$p1->endereco = 'Rua Bento Goncalves';
$p1->nascimento = '12 de Março de 1990';

var_dump($p1);