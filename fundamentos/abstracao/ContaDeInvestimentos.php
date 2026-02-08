<?php 

require_once 'Conta.php';



//Criando nova Classe chamada ContaSalario filha da Classe Conta 
//Que devera forcar criar um Metodo retirar, definido na classe Pai como Metodo Abstract
class ContaDeInvestimentos extends Conta
{
    //Definindo Metodo Abstrato obrigatorio definido na classe Pai
    function retirar($quantia)
    {
        
    }
}