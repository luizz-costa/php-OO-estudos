<?php
/** 
 * 
 * O que é a Heranca ?
 * 
 * Heranca é um recurso da estrutura Orientada a Objetos que permite que criamos uma Estrutura nova usando 
 * uma estrutura que ja existe, basicamente explicando: nós criamos uma classe que chamamos de Classe Filha
 * essa classe filha ela herda comportamentos, dados, atributos e metodos (PUBLICOS/PUBLIC e PROTEGIDOS/PROTECTED) da Classe Pai 
 * e claro que a gente pode redefinir algumas coisas na Classe Filha, mas inicialmente ela herda tudo que for (PUBLICO e PROTEGIDO) 
 * que a Classe pai tem.
 * Na classe filha nos podemos redefinir algumas caractersiticas. 
 * 
 * Quando estamos trabalhando com um estrutura orientada a objetos nos podemos usar a Heranca de duas maneiras:
 *  1. A primeira é fazendo Especializacao: que seria criar uma Classe basica/essencial e apartir dela criar Classes
 *     com comportamentos especificos que difere-se um pouco entre elas, voce estaria especializando o comportamento 
 *     na visao de cima para baixo 
 *  2. Outro caminho que seria caminho inverso da Especializacao seria o caso de voce ja ter uma serie de Classes espalhadas
 *     no sistema, e voce comeca encontrar coisas em comum entre elas e dai voce reune essas coisas em comum ne uma Classe Pai
 *     e usa o mecanismo de Heranca para compartilhar esse recurso, usamos o termo Generalizacao para dar nome essa acao
 *     quando e de baixo para cima a criacao da estrutura de Classes 
 * 
 * O exemplo para contextualizar o que é heranca, iremos Utilizar o exemplo de Conta Bancaria
 * As Classes filhas tera o Metodo de retirar dinheiro, cada classe tem um jeito especifico de retirar
 * valores da classe pai
 * class Conta == classe pai
 * class ContaPoupanca == classe filha `classeFilha1.php`
 * class ContaCorrente == classe filha `classeFilha2.php`
 * 
 * Para criar uma classe que herda atributos e metodos da classe pai utiilizamos a palavra reservada: Extends
 *  ex:
 *      class (nomedaClasseCriada) extends (nomedaClassePai)
 *      {
 *      
 *      }  
*/
require_once 'classePai.php';
require_once 'classeFilha1.php';
require_once 'classeFilha2.php';

//Criando Objeto da Classe ContaPoupanca
$p = new ContaPoupanca('100', '55678', 500);
//Usando metodo Getsaldo que foi herdado da classe Pai, pois a classe ContaPoupanca nao foi criada com Metodo Getsaldo
echo $p->getSaldo() . '<br>';

// Metodo Despositar foi escrito na classe Pai e usado na classe Filha(ContaPoupanca)
$p->depositar( 200 );
echo $p->getSaldo() . '<br>';

// Metodo Retirar foi escrito na classe Filha 
$p->retirar( 100 );
echo $p->getSaldo() . '<br>';

// var_dump($p);