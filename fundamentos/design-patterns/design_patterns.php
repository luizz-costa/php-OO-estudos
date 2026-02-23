<?php 

/**
 * Design Patterns == Padroes de Projeto 
 * 
 * Iremos falar de Padroes de Projeto em PHP e na Engenharia de Software como um todo.
 * 
 * Onde surgiu o conceito de Padroes de Projeto?
 * - O conceito surgiu na Arquitetura, se a gente reparar é possivel perceber que na arquitetura existe
 *   uma serie de Padroes/Coincidencias que se repetem nas construcoes.
 *   esses Padroes sao padroes arquitetonicos ou padroes estruturais e que muito provavelmente um profissional
 *   quando comeca um projeto novo ele olha para esses padroes na hora de comecar um novo desenho, um novo projeto 
 *   ou novo design.
 *   Entao nem tudo é totalmente novo, alguns problemas, algumas cituacoes, alguns contextos já estao mapeados
 *   já são de conhecimento notorio, e esses padroes de certa maneira são repetidos claro que com pequenas diferencas
 *   pequenas adptacoes, para dar um toque de diferenciacao no Projeto.
 *  
 *   Outra area que podemos notar padroes é na area de Pontes, dependendo de onde a ponte é construida do tipo de Rio,
 *   do tipo de Leito, do tipo de Solo, a extensao entre as margens um determinado tipo de ponte é recomendado para construcao. 
 *   * Quando o problema for de determinadas Caracteristas então determinado tipo de Padrão é recomendado
 * 
 * O que são Design Patterns?
 * - Design Patterns são soluções documentadas, catalogadas e elegantes para resolver problemas que se repetem em um determinado contexto
 *   seja ele de arquitetura ou de software tambem 
 *  
 * * Em 2002 o Martin Fowler publicou o livro `Patterns of Enterprise Application Architecture` 
 * que é um livro que fala de Padroes de Projeto para aplicacoes de Negocio:
 * como Active records, Front Controller, Repository, Template View e outros.
 * Ao longo desse livro nos vamos ver Padroes fortemente inspirados no livro de 1994 de Erick Gama `Design Patterns: Elements of Reusable OO Software`
 *  
 * Esses Autores eles nao inventaram os Padroes de Projeto, eles só perceberam que esses padrões existiam.
 * Na maioria da vezes eles perceberam que determinadas equipes de desenvolvimento utilizavam determinadas Solucoes e isso era muito Comum
 * Muitos deles eram consultores que tinha convivio com muitas equipes de projetos reais e percebia determinadas formas de resolver probelma
 * e acabaram documentando essas formas e deram um nome para essa forma de resolver problemas, catalogaram isso e de uma maneira organizada 
 * Entao a maioria das solucoes eles nao inventaram, eles descobriram, catalogaram e deram nome.
 * Existem varios Padroes de Projeto, as vezes para resolver um determinado tipo de projeto, existe mais de um padroes 
 * Um Padrao nao e uma solucao Magica que voce baixa um zip e vem uma biblioteca e voce sai usando, NAO !
 * O Padrao e uma solucao abstrata, um mesmo padrao pode resolver problemas de Natureza diferente, entao nao e focado em uma coisa
 * 
 * Comecaremos por Padroes mais utilizados. 
 *  Padroes:
 *  1. Singleton
 *      - É necessario compartilhar informacoes (prefs, configs);
 *      - Visiveis dentro de diferentes contexto, classes, metodos;
 *      - Variaveis globais, são do mal, falta encapsulamento;
 *      - Como compatilhar uma unica versao de verdade;
 *      * - Singleton:
 *          - Classe é visivel global;
 *          - Mas permite N Objetos;
 *          - E se retornasse o mesmo ?
 *          - Limitar a instanciação;
 *          - Metodo para criar 1 Obj;
 *          - Nao mais do que 1.
 *      - Como fabricar apenas uma instancia ?
 *      - Seu metodo construtor é marcado como private
 *      - Tente dar um new fora da classe terá um Fatal Error 
 *      - Só poderá instanciar dentro da propria classe
 *      - É preciso criar outro Metodo de instanciacao:getInstance();
 *      - Retornará sempre a mesma instância.
 *  2. Facade (fachada, trata-se de algo visivel que esconde algo atras que nao queremos mostrar de inicio)
 *      - Facade ajuda a diminuir o acoplamento;
 *      - Oferece uma interface unica para um conjunto de interfaces de um subsistema;
 *      - A APP ficara dependente da Facade, nao do subsistema.
 *      - 
 *      * - Facade:
 *          - Entao a fachada ou Facade é uma Classe que centraliza as requisições e dentro dela despacha paras classes especificas
 *          - 
 *  3. Adapter 
 *      - Favorece o isolamento e a manutenção
 *      - Converte a interface de uma classe em outra
 *      - Também conhecido como Wrapper
 *      - Object Wrapper: Encapsula adaptado por composição;
 *      - Class Wrapper: Adapta interface por heranca. 
 *      * - Adapter:
 *          -
 *          -
 * 
 * 
 * 
 */