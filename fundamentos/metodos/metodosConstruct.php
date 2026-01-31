<?php 

/*Quando nos criamos um Objeto que e oque acontece pelo uso do operador "new Produto;" 
nesse momento e criado um objeto em memoria, um objeto da Classe Produto, e nesse momento 
todos seus Atributos sao inicializados com valor null, seja descricao, estoque, preco e null
Depois acionamos Metodos para definirmos valores para esse Objeto

Quando criamos o Objeto é o momento da Construcao do objeto, nos podemos definir um comportamento inicial
na criacao do objeto, isso se chama metodo de construcao do objeto, isso se chama: Metodo Construtor
entao nos podemos passar parametros no momento de Estanciar o objeto e esses parametros podem ser recebidos por
uma Funcao/Metodo chamado `__construct()`

Entao sempre que nos temos que criar um objeto e esse objeto sempre precisa de alguns Atributos inicias 
para "viver" "ter um ciclo de vida" é interessante que a gente ja passe esse Atributos no metodo Construct
*/

class Produto
{
    private $descricao;
    private $estoque;
    private $preco;

    //Criando Metodo Construtor
    //Os parametros passados na construcao ira fazer o objeto inicializar com esses valores passados nas variaveis 
    public function __construct($descricao, $estoque, $preco)
    {
        $this->setDescricao($descricao);
        $this->setEstoque($estoque);
        $this->setPreco($preco);
    }


    public function setDescricao($descricao)
    {
        if (is_string($descricao))
            {
                $this->descricao = $descricao;
            }
    }

    public function getDescricao()
    {
        return $this->descricao;
    }

    public function setEstoque($estoque)
    {
        if(is_numeric($estoque) and $estoque > 0)
            {
                $this->estoque = $estoque;
            }
    }
    public function getEstoque()
    {
        return $this->estoque;
    }
    public function setPreco($preco)
    {
        if (is_numeric($preco) and $preco > 0)
            {
                $this->preco = $preco;
            }
    }
    public function getPreco()
    {
        return $this->preco;
    }

    public function aumentarEstoque($unidades)
    {
        if (is_numeric($unidades) and $unidades >= 0)
            {
                
                $this->estoque += $unidades;
            }
    }
    public function diminuirEstoque($unidades)
    {
        if (is_numeric($unidades) and $unidades >= 0)
            {
                $this->estoque -= $unidades;
            }
    }
    public function reajustarPreco($percentual)
    {
        if (is_numeric($percentual) and $percentual >= 0)
            {
                
                $this->preco *= (1 + ($percentual/100));
            }
    }
}


/*Passando valores no momento da criacao do objeto para o metodo `__construct`
Esses tres parametros serao recebidos pelo __construct 
e ser encaminhado para os metodos que vao definir esses atributos para Classe */
$p1 = new Produto('Chocolate', 10, 8);


echo "O estoque de {$p1->getDescricao()} e {$p1->getEstoque()}<br>";
echo "O preco de {$p1->getDescricao()} e {$p1->getPreco()}<br>";
