<?php 

/**Nesse estudo de Abtracao iremos falar sobre conceitos de Classes Abstratas, Classes Finais, Metodos Abstratos e Metodos Finais
 * 
 * Nos exemplos anteriores nos implementamos uma Heranca de Classe Conta(Pai), Conta Poupanca(Filhas) e Conta Corrente(Filhas)
 * Naquele exemplo a `Classe Conta` era uma classe incompleta pois nos nao definimos nela o Metodo Retirar,
 * somente foi definido o Metodo Retirar nas `Classes Filhas`, como a Classe Conta e uma classe incompleta ela serviu para
 * estruturar outras Classes, ela nao deveria ser utilizada diretamente pelo desenvolvedor e sim somnete 
 * uma das suas classes filhas, como ela nao deveria ser utilizada diretamente nos deveriamos impedir que o desenvolvedor Utilize
 * ela, justamente pelo fato dela ser uma classe incompleta, que o unico proposito dela e construir outras Classes apartir dela.
 * 
 * Existe um mecanismo na linguagem que impede que o desenvovledor crie instancias(Objetos) de uma classe
 * para isso nos temos que marcar a Classe como sendo uma Classe Abstrata  
 * 
 * 1- Oque é uma classe Abstrata?
 *      R: Uma Classe Abstrta é uma Classe que ira servir de molde para outras classes apartir da estrutura dela
 *          e tambem impedindo que a Classe Abstrata seja acessada pelo desenvovledor diretamemte, impedindo de 
 *              criar instancias(objetos) apartir da classe modelo(Abstrata) 
 * 
 * *Entao quando uma Classe existir apenas com o Proposito de ser base para outras Classes na hierarquia
 *  vamos marcar ela como sendo uma Classe Abstrata*
 * ---------------------------------------------------------------------------
 * 2- Oque é uma Classe Final?
 *      R: Uma Classe Final é uma classe que nos queremos impedir que ela seja estendida(`extends`)
 *          impedir que alguem crie uma classe Filha derivada dela.
 * Por exemplo: A classe Poupanca vamos supor que gostariamos de impedir que alguem criasse uma classe filha 
 *              de Conta Poupanca imaginando que nos ja implementamos tudo que deveria ter no modelo e nao queremos
 *              que alguem cometa o erro de estender(`extend`) por engano aquela classe.
 * Como faremos isso ?
 *      R: Devemos abrir a classe e adicionar a palavra `final` ex: `final class ContaPoupanca extends Conta`
 * Ao colocarmos a palavra `final` estamos automaticamente impedindo alguem de criar uma classe derivada dela.
 * 
 * *Entao nao posso criar uma Classe Filha de uma Classe que é marcada como Classe Final*
 * ---------------------------------------------------------------------------------------
 * 3- Oque é um Metodo Abstrato?
 *      R: Um Metodo Abstrato é usado para 'Obrigar' que as Classe Filhas implementem obrigatoriamente um Metodo.
 * (No cado da Classe Conta: nao tem o metodo `Retirar` na classe Pai mas suas Classes Filhas tem por uso "forcado"
 *  criado o metodo diretamente dentro das classes filhas, sem usar o Metodo Abstrato, vamos supor que um Programador 
 *   crie mais uma Classe Filha(ex: ContaDeInvestimentos) e ele esqueca de implementar o Metodo Retirar: Isoo seria um PROBLEMA!
 *      seria um problema caso o desenvolvedor esqueca de implementar o Metodo em Classes Filha
 *      porque é esperado que a Classe tenha aquele Metodo especifico.)
 *  
 *  A Classe Conta(PAI) sendo uma Classe Pai, ela pode ter um mecanismo de Obrigar esse Metodo nas classes filhas.
 *      Podemos Obrigar que as Classe Filhas de Conta implementem obrigatoriamente o Metodo.
 * Como faremos isso ?
 *      R: Para fazer isso basta nos declararmos a assinatura na Classe Pai `abstract function retirar($quantia);`
 * 
 * *Entao um Metodo Abstrato é um Metodo que a gente gostaria de forcar na implementacao das Classe Filhas*
 * -----------------------------------------------------------------------------
 * 4- Oque é um Metodo Final?
 *      R: Um Metodo Final é um Metodo que nos nao queremos que seja estendido em uma Classe Filha ou que seja modificado
 *          em uma Classe Filha.
 * Por exemplo: O Metodo Retirar da Classe ContaCorrente se nos marcamos ele como Metodo Final, quando alguem criar 
 *              uma Classe Filha de ContaCorrente, nao conseguirar modificar esse Metodo, essa modificacao sera Proibida!
 * 
 * Como faremos isso ?
 *      R: Usando a palvra final ex(public `final` function retirar()) na criacao da funcao 
 *          isso siginifca fim de linha para ele, ele nao pode ser mais redefinido em Classes Filhas 
 * 
 * Tentando criar Classe apartir da Classe ContaCorrente e redefinir o Metodo Final == ERROR
 * teste no arquivo ContaCorrenteEspecial.php
 * 
 * *Entao nao pode tentar sobrescrever um Metodo Final ContaCorrente::retirar pois a funcao foi definida como metodo final*
 *  
*/

//Importando Classe 
require_once 'Conta.php';
require_once 'ContaPoupanca.php';

/**Lembrando que a Classe Conta é uma classe incompleta: 
 * Assim nao sendo possivel criar uma instancia/objeto apartir dela diretamente*/


//2- Criando Classe Final filha da ContaPoupanca
/**Lembrando que a ContaPoupanca foi definada como `final` no seu codigo fonte; Assim nao sendo possivel estendeer a Classe */
class ContaPoupancaUniversitaria extends ContaPoupanca
{

}

//3- Para