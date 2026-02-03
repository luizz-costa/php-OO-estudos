<?php 
/**
 * Relacionamento entre Objetos
 * Temos varios tipos de Relacionamentos como:
 * 1. Associacao
 * 2. Composicao
 * 3. Agregacao
 * 
 * Oque é a Associacao?
 * Associacao e quando um Objeto contem um apontamento para outro Objeto
 * 
 * Classe apontada:
 * class Fabricante
 * {
 *  - nome : String
 *  - endereco : String
 *  - documento : String
 *  ---------------------
 *  + getNome() : String
 * }
 * 
 * Classe principal/apontadora que contem o apontamento:
 * class Produto
 * {
 *  - descricao : String
 *  - estoque : float
 *  - preco : float
 *  - fabricante : Fabricante
 *  --------------------------
 *  + getDescricao(): String
 *  + setFabricante(Fabricante f : int) : void
 *  + getFabricante() : Fabricante
 * }
 */
require_once 'associacaoApontada.php';
require_once 'associacaoApontadora.php';

//Classe Apontadora
$p1 = new Produto('Chocolate', 10, 7);

//Classe Apontada
$f1 = new Fabricante('Garoto', 'Rua Barbacena 1326', '93.828828.000');

// Para associar os dois Objetos:
$p1->setFabricante($f1);


//Para acessar o Objeto
//echo "O Fabricante do Produto {$p1->getDescricao()} é {$p1->getFabricante()->getNome()} e reside no endereco {$p1->getFabricante()->getEndereco()}";

//Quebrando o codigo para entender melhor
$descricao = $p1->getDescricao();
//A seguir mostra como fica chamar um metodo que o retorno nao e uma string e sim um Objeto:
//getFabricante traz um Objeto e como esse Objeto existe metodos, conseguimos chamar os metodos dele tambem
//Isso se chama encadeamento de chamada:
$nome_fabricante = $p1->getFabricante()->getNome();
$endereco = $p1->getFabricante()->getEndereco();

echo "O Fabricante do produto {$descricao} é {$nome_fabricante} no endereco {$endereco}";