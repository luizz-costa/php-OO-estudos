<?php 

class Produto
{
    private $descricao;
    private $estoque;
    private $preco;

    //Como nao podemos setar valores diretamente no atributo, temos que criar Metodos para setar valores nas Variaveis
    //Criando Metodo para Setar ou Definir valores de maneira correta e segura na Variavel:
    //Metodos Set
    public function setDescricao($descricao)
    {
        if (is_string($descricao))
            {
                $this->descricao = $descricao;
            }
    }

    //Caso queira ler os valores definidos na variavel Descricao
    //Metodos Get
    public function getDescricao()
    {
        return $this->descricao;
    }

    //Metodo Set na variavel $estoque
    public function setEstoque($estoque)
    {
        if(is_numeric($estoque) and $estoque > 0)
            {
                $this->estoque = $estoque;
            }
    }
    //Metodo Get na variavel $estoque
    public function getEstoque()
    {
        return $this->estoque;
    }
    //Metodo Set na variavel $preco
    public function setPreco($preco)
    {
        if (is_numeric($preco) and $preco > 0)
            {
                $this->preco = $preco;
            }
    }
    //Metodo Get na variavel $preco
    public function getPreco()
    {
        return $this->preco;
    }

    public function aumentarEstoque($unidades)
    {
        //Validando os dados de entrada:
        if (is_numeric($unidades) and $unidades >= 0)
            {
                
                $this->estoque += $unidades;
            }
    }
    //Criando um Metodo:
    public function diminuirEstoque($unidades)
    {
        //Validando os dados de entrada:
        if (is_numeric($unidades) and $unidades >= 0)
            {
                //Diminuindo o estoque atual - o valor de entrada
                $this->estoque -= $unidades;
            }
    }
    //Criando um Metodo:
    public function reajustarPreco($percentual)
    {
        //Validando os dados de entrada:
        if (is_numeric($percentual) and $percentual >= 0)
            {
                
                $this->preco *= (1 + ($percentual/100));
            }
    }
}

//Criando o objeto ou Estanciando o Objeto
$p1 = new Produto;
$p1->setDescricao('Chocolate');
$p1->setEstoque(10);
$p1->setPreco(9);

echo "O estoque de {$p1->getDescricao()} e {$p1->getEstoque()}<br>";
echo "O preco de {$p1->getDescricao()} e {$p1->getPreco()}<br>";


$p1->aumentarEstoque(10);
$p1->diminuirEstoque(5);
$p1->reajustarPreco(50);

echo "O estoque de {$p1->getDescricao()} e {$p1->getEstoque()}<br>";
echo "O preco de {$p1->getDescricao()} e {$p1->getPreco()}<br>";
