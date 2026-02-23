<?php 

class Produto
{
    //Dentro da classe primeiramente podemos declarar seus Atributos:
    //Para declarar um Atributo usamos uma das Palvras Chaves: Public, Private, Protected
    //Essas tres palavras chaves determina como o atributo vai poder ser manipulado.
    //Iniciaremos com a palvra chave Public por ser mais didatica a explicar OO, mas nao e uma boa pratica usar Public
    //Quando o atributo e usado a palavra Chave Public ele aceita qualuqer coisa que seja gravado fora do escopo da Classe
    //IMPORTANTE SEMPRE USAR PALAVRA CHAVE CORRETA, PRA NAO DEIXAR OUTROS PROGRAMADORES AO UTILIZAR NOSSAS CLASSES POSSAM GRAVAR VALORES INCONSITENTE DENTRO DO OBJETO
    //Em PHP e bastante comum termos um arquivo so com a definicao das Classes e outro arquivo com Programa que usa aquela Classe

    public $descricao;
    public $estoque;
    public $preco;

}

//Assim que a Classe for criada podemos criar objetos apartir dessa Classe.
//Para criar um objeto temos que dar um nome de $Variavel = new nomedaClasse;
//Podemos criar quantos objetos quiser, lembrando que cada objeto ocupara 2 regioes da memoria apontado pra um local da meoria
$p1 = new Produto;

//Para definir um atributo com a palavra chave Public, podemos definir de maniera simples, apenas com:
//Definindo Atributos do Objeto p1
$p1->descricao = 'Chocolate';
$p1->estoque = 10;
$p1->preco = 9;

//Objeto p2
$p2 = new Produto;
//Definindo Atributos do Objeto p2
$p2->descricao = 'Leite Condensado';
$p2->estoque = 20;
$p2->preco = 5;

//Agora com esses objetos criados podemos fazer: Printar na tela seus atributos
// print $p2->descricao;
//Podemos tambem printar o objeto inteiro uando var_dump
var_dump($p1);