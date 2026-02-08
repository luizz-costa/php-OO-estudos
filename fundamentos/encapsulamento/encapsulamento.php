<?php 

/**
 * O Encapsulamento é a capacidade de uma Classe Proteger acesso ao seus Atributos ou de Proteger a informacao
 * que ela carrega.
 * Proteger de quem?; Proteger do Proprio Desenvolvedor, porque no momento que nos temos uma Classe definida, essa 
 * Classe tem Atributos, tem Metodos, O desenvolvedor pode eventualmente gravar um valor inconsistente dentro de um
 * Atributo de um Objeto, muitas vezes por nao saber qual é o formato correto de armazenamento daquele Atributo, ele pode
 * passar uma informacao errada, para que isso nao aconteça, a propria Classe deve se proteger desse acesso errado.
 * E o encapsulamento é a maneira que existe em uma classe para proteger o acesso aos atributos da Classe 
 * 
 * De qual maneira a gente protege ?
 *  -Um objeto ele deve ser visto como uma Capsula, onde no seu interior está os Atributos, e na sua fronteira está os Metodos
 *  responsaveis por: Armazenar informacoes dentro dos (atributos) e ler informacoes de dentro dos (Atributos).
 *  -Entao uma classe tem que ter a capacidade de definir que seus Atributos nao devem ser acessados pelo "mundo externo"
 *  e que esse acesso somente deve ser feito pelos Metodos.
 * 
 * *Então o encapsulamento prever ou permite que uma classe ela deve ter a capacidade de definir que seus atributos
 *  NÃO devem ser acessados pelo mundo externo diretamente, e que esse acesso SOMENTE deve ser feito por meio de Metodos  *
 * 
 * Basicamente: Quando a gente define um Atributo de uma Classe nos podemos definir que esse Atributo pode ser:
 * Um Atributo Publico, Atributo Privado ou Atributo Protegido
 * 
 * Qual a diferenca das 3 delcaracoes, e o que devemos utilizar e o que nao devemos utilizar em cada Contexto?
 * 
 * //Acesso Public: mais simples, e menos seguro é o acesso 
 * 
 * //Acesso Private: mais seguro, e nao pode acessar/gravar atributos privados por fora da classe 
 *  
 * 
 */