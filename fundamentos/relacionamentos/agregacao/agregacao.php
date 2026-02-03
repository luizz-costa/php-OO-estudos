<?php 

/**
 * Agregacao é um tipo de Relacionamento ou Associacao na orientação a objetos  
 * Os objetos estao relacionados e tambem e conhecido com um tipo de relacionamento conhecido como Todo-Parte
 * Todo-Parte porque existe uma parte que e mais forte que a outra nesse relacionamento uma claase é o TODO e outra as PARTES
 * Nesse exemplo a seguir temos a Cesta de compras e os produtos que fazem parte da cesta de compras
 * os objetos aqui estao relacionados, existe uma associacao entre eles
 * 
 * Mas por que chamamos essa assosiacao de Agregacao? 
 *  -porque aqui temos algumas caracteristicas especificas, temos dois Objetos que sao criados de maneira separada
 *  diferente da Composicao na qual a Caracterista(Partes) era um objeto criado dentro do Objeto Produto(Todo), 
 *  ele estava contido ali dentro 
 *  Já no caso da Agregacao os dois Objetos sao criados separadamente e depois reunidos mas essa reuniao ainda é no sentido
 *  de colocar varios Objetos de um tipo dentro do outro: Varios Objetos do tipo Produto dentro da Cesta, oque ocorro é que
 *  esses objetos Produtos eles ja existem, eles na sao criados dentro da classe Cesta e sim fora e adicionados posteriormente
 *  por meio de Metodos que ira adicionar o Produto na Cesta
 *  A cesta tera um Vetor chamado Itens que sera um Vetor de Produtos que vao ser adicionados na Cesta de compras 
 *  O que diferencia tambem a Agregacao da Composicao é uma PARTE que nesse caso é o Produto pode fazer parte de um 
 *  Objeto Cesta mas pode fazer parte de outros Objetos Cesta tambem, eu posso ter mais de um Objeto do tipo Cesta de compras
 *  e eu posso ter o mesmo Produto dentro de diferente Cestas,
 * 
 *  No caso do Relacionamento Composicao: O Objeto Carcateristica ele só existe para um Produto, ele e expecifico de um 
 *  determinado Produto e o Objeto Carcteristica ele nao existe sozinho no Sistema, ele só existe dentro de um Produto
 * 
 *  No caso do Relacionamento Agregacao: Existe um Produto sozinho no Sistema mesmo que ele nao esteja dentro de uma 
 *  cesta de compras, alem disso um Produto pode fazer parte de mais de uma Cesta de compras diferente do tipo Composicao.
 *  Alem disso quando excluirmos uma Cesta de compras nao excluimos os Produtos que fazem parte dela, difernete do tipo Composicao.
 *  
 *  Em relacaoo ao Banco de Dados:
 *  enquanto na Associacao é bem comum nos termos uma tabela com uma chave estrangeira para Outra
 *  no Caso da Composicao é bem comum nos termos uma tabela que é a (PARTE) apontado para outra tabela que representa o (TODO)
 *  Na Agregacao é normal termos uma tabela para Cesta de compras uma tabela para Produto e uma tabela no meio para relacionar 
 *  Cesta e Produto uma relacao de N para N
 *  Nesse caso quando apagamos um registro de uma Cesta devemos apagar na tabela de Cestas e na  tabela intermediaria mas nao na 
 *  tabela de Produtos, entao em termo de Banco de dados teremos 3 tabelas: Cesta, Prodtuo e Item da Cesta  
 */

