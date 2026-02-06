<?php 

/**
 * Polimorfismo
 * 
 * O que e o Polimorfismo?
 * Polimorfismo e uma palavra que remete a muitas formas, em Orientacao a Objetos é a capacidade de
 * Classes Filhas terem metodos com o mesmo nome, mas comportamentos diferentes, entao elas fazem parte 
 * de uma mesma hierarquia, mesma familia de classes, mesmo nome de Metodos mas eles se comportam diferentes 
 * isso classifica uma classe como uma classe com Polimorfismo 
 * 
 * No exemplo mostrado no codigo a seguir podemos ver o conceito de Polimorfismo, enquanto na conta corrente foi permitido
 * realizar a retirada de dinheiro na conta poupanca nao foi permitido, isso caracteriza um polimorfismo 
 * pois possui duas Classes da mesma hierarquia, filhas da mesma Classe `Conta`, porem tiveram comportamento diferente
 * nos metodos, pois a regra de negocio e implementada de maneira difernete na classe de conta corrente em relacao a Classe
 * de conta poupanca, caracterizando o polimorfismo.
 * 
 */
require_once 'Conta.php';
require_once 'ContaCorrente.php';
require_once 'ContaPoupanca.php';

//Criando um Vetor de Contas
$contas = [];
//Armazenando Contas no Vetor
$contas[] = new ContaCorrente(1234, 'CC.2929', 100, 500);
$contas[] = new ContaPoupanca(1245, 'PP.2939', 100);

//Percorrendo Contas com foreach
foreach ($contas as $conta)
{
    /**Instanceof verifica se esse objeto que estamos percorrendo
     * é uma instancia da classe Conta, se é filho da classe Conta
     * Tudo que é filho de ContaCorrente e ContaPoupanca automaticamnete
     * é filho da Classe Conta
     * Entao somente entrar no IF classes desse tipo 
    */
    //Entao somente entrar no IF classes desse tipo (filho de Conta)
    if ($conta instanceof Conta)
    {
        //Exibindo informacoes da conta
        print $conta->getInfo() . '<br>';
        print "--Saldo atual: {$conta->getSaldo()} <br>";

        //Depositando saldo:
        $conta->depositar(200);

        //Exibindo saldo atual, apos o deposito:
        print "--Deposito de 200 concluido <br>";
        print "--Saldo atual: {$conta->getSaldo()} <br>";
        print "<br>";

        if ($conta->retirar(700))
        {
            print "-- Retirada de 700 (OK) <br>";

        }
        else
        {
            print "-- Retirada de 700 (nao permitida)<br>";
        }
        print "-- Saldo atual: {$conta->getSaldo()} <br>";
        print "<br>";
    }
    
}