<?php 

//Criando classe filha que extende ou herda Valores da classe Pai = (Conta)
class ContaPoupanca extends Conta
{
    //Criando Metodo para retirar um valor da Conta que esta armazenado na class Pai(Conta)
    public function retirar($quantia)
    {
        if ($this->saldo >= $quantia )
        {
            $this->saldo -= $quantia;
        }
        else
        {
            return false;
        }
        return true;
    } 
}