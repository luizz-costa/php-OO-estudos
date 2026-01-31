<?php 

//Variaveis ou Atributos do tipo Private sao Atributos Privados que nao podem ser modificados fora da classe.
//Nao e possivel acessar atributos Private de fora da Classe = ERROR
//Para setar valores nos Atributos private temos que criar um Metodo 
class Produto
{
    //Atributos do tipo Private
    private $descricao;
    private $estoque;
    private $preco;
}

//Criando Objeto dessa Classe da maneira ERRADA:
//Nao pode setar valores de Atributos Private diretamente
$p1 = new Produto;
$p1->descricao = 'Chocolate';
$p1->estoque = 10;
