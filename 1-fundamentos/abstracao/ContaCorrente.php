<?php 

//Demonstrando o uso do Metodo Final na funcao retirar 

class ContaCorrente extends Conta
{
    
    protected $limite;

    
    public function __construct( $agencia, $conta, $saldo, $limite )
    {
        parent::__construct( $agencia, $conta, $saldo );
        $this->limite = $limite;
    }
    
    // Definindo a Funcao como Metodo Final usando a palvra `final`
    public final function retirar($quantia)
    {
       
        if (($this->saldo + $this->limite) >= $quantia)
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