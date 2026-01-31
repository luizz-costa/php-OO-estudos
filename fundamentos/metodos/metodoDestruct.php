<?php 

class Produto
{
    private $descricao;
    private $estoque;
    private $preco;

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

    /** Criando Metodo Destruct
     * 
     * O Metodo Destruct é usado sempre que o Objeto ele e desalocado da memoria
     * Um Objeto e desalocado da memoria quando: 
     * 1. O programa termina de Executar: automaticamente o objeto deixa a memoria, mas eu posso forcar
     * que ele deixa a memoria antes disso atribuindo `null` ou chamando o metodo `unset`
     * 
     * O Metodo Destruct serve para definir um comportamento quando ele e Destruido 
     * Suponha que esse Objeto dentro do Ciclo de vida dele a gente criou alguma coisa temporaria que precisa
     * excluir de alguma maneira quando esse objeto sair da memoria, entao dentro do metodo Destruct a gente poderia
     * deixar essa instrucao, supondo que no Construct ou em algum outro Metodo do Objeto nos criamos um arquivo 
     * temporario uma conexao temporaria, algo que precisa ser limpo, nos podemos limpar essa condicao 
     * dentro do metodo Destrutor
     * 
     */
    public function __destruct()
    {
        
    }
}


$p1 = new Produto('Chocolate', 10, 8);


echo "O estoque de {$p1->getDescricao()} e {$p1->getEstoque()}<br>";
echo "O preco de {$p1->getDescricao()} e {$p1->getPreco()}<br>";