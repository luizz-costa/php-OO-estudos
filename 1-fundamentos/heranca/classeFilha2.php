<?php 
//A classe ContaCorrente tambem e filha de Conta(Pai) mas tem o metodo de retirada de saldo diferente
//A ContaCorrente tem de diferente: O limite que pode ficar o valor negativo na Conta

class ContaCorrente extends Conta
{
    //Criando Atributo de Limite
    protected $limite;

    //Teremos que criar um novo metodo Construtor para criar ContasCorrentes pois precisa ser adicionado o atributo Limite
    public function __construct( $agencia, $conta, $saldo, $limite )
    {
        /**Nesse caso para nos nao precisarmos copiar e colar as linhas do Metdo Construtor(Pai)
         * Podemos chamar o Metodo Construct da classe Pai dentro da Classe ContaCorrente
         * com a sintaxe `parent::__construct();`
         */
        //Chamando Metodo Construtor da Classe Pai passando como parametro as variaveis que temos em maos
        //este metodo esta criando a conta da classe pai, e posteriormente gravamos o limite
        parent::__construct( $agencia, $conta, $saldo );
        $this->limite = $limite;
    }
    //Criando Metodo Retirar com regras da ContaCorrente
    public function retirar($quantia)
    {
        //Regras de negocio ContaCorrente
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