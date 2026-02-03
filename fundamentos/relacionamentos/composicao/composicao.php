<?php 

/**
 * Composicao: e um tipo de Relacionamento/Associacao entre Objetos mas é um tipo de Associacao Especial
 * porque nao apenas um objeto possui um apontamento para o outro, e um relacionamento que diz mais do que isso
 * mais do que um simples apontamento
 * No caso da composicao um Objeto nao tem apenas um apontamento para outro Objeto, mas ele contem varias partes
 * que sao outros Objetos 
 * 
 * A Composicao é um relacionamento do tipo todo parte, pois tera um Objeto chamado Todo e outro Objeto chamado Partes
 * que sao as partes daquele Objeto.
 * 
 *  Por que o nome: Todo Parte?
 *  -Porque a ideia é formar um Objeto maior sendo que ele é composto de partes menores 
 *  -Essas partes menores sao Objetos filhos, criado dentro do objeto "Todo"
 * 
 * Dessa maniera uma parte nesse caso a seguir a class (Caracteristica) ela sempre vai estar vinculada 
 * a um Objeto da Classe Produto, ela nao vai existir sozinha no sistema, so irao existir objetos da
 * Classe Carcteristica dentro da classe Produto, nao sozinhas e fora da classe todo = (Produto)
 * entao quando excluir um Objeto da classe Produto(todo) a Caracteristica(partes) tambem sera 
 * excluida pois elas pertencem a esse Objeto Todo(produto)
 *  
 *  Ex na pratica:
 *        (Todo)
 * --------------------
 *        Protudo
 *  - descricao : string
 *  - estoque : float
 *  - preco : float
 *  - fabricante : Fabricante ( Associacao )
 *  - caracteristicas : Caracteristica[] ( Vetor(composicao) )
 *      +getDescricao() : String
 *      +setFabricante(Fabricante f : int) : void
 *      +getFabricante() : Fabricante
 *      +addCaracteristica(nome : String, valor : String) : void
 *      +getCaracteristica() : Carcteristica[]
 * 
 *         (Partes)
 * ------------------------------
 *         Caracteristica
 *  - nome : String
 *  - valor : String
 *      +getNome() : String
 *      +getValor() : String
 */

//Como funciona na pratica:

require_once 'classeTodo.php';
require_once 'classePartes.php';

$p1 = new Produto('Chocolate', 10, 7);
$p1->addCaracteristica('Cor', 'Marrom');
$p1->addCaracteristica('Peso', '500gr');

var_dump($p1);

/**
 * Saida:
 * object(Produto)[1]
 * private 'descricao' => string 'Chocolate' (length=9)
 * private 'estoque' => int 10
 * private 'preco' => int 7
 * private 'fabricante' => null
 * private 'caracteristicas' => 
 *   array (size=2)
 *     0 => 
 *       object(Caracteristica)[2]
 *         private 'nome' => string 'Cor' (length=3)
 *         private 'valor' => string 'Marrom' (length=6)
 *     1 => 
 *       object(Caracteristica)[3]
 *         private 'nome' => string 'Peso' (length=4)
 *         private 'valor' => string '500gr' (length=5)
 */