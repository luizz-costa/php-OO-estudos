<?php 

require_once 'Conta.php';
require_once 'ContaCorrente.php';

//Metodo Final

//Tentando criar Classe apartir da Classe ContaCorrente e redefinir o Metodo Final == ERROR
class ContaCorrenteEspecial extends ContaCorrente
{
    //Tentando redefinir o Metodo Retirar que foi definido como metodo final Pai
    public function retirar($quantia) //== ERROR: nao pode tentar sobrescrever um Metodo Final ContaCorrente::retirar 
        $this->saldo -= $quantia;
    }

}