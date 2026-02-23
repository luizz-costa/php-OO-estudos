<?php 

//Iremos estudar os Metodos recriando mesmo exemplo de Classe usada na aula de classe.
//A ideia dos Metodos e oferecer funcionalidades, funcoes que a classe oferece para quem utilizar ela.
//Os Metodos tambem oferece formas de modificar os atributos de uma forma segura.
class Produto
{
    public $descricao;
    public $estoque;
    public $preco;

    //Criando um Metodo:
    public function aumentarEstoque($unidades)
    {
        //Validando os dados de entrada:
        if (is_numeric($unidades) and $unidades >= 0)
            {
                //Somando o estoque atual + o valor de entrada
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
$p1->descricao = 'Chocolate';
$p1->estoque = 10;
$p1->preco = 9;

echo "O estoque de {$p1->descricao} e {$p1->estoque}<br>";
echo "O preco de {$p1->descricao} e {$p1->preco}<br>";

//Usando o Metodo:
//Usando Metodo para manipular o atributo de estoque de maneira mais segura:
//Vantagens de usar Metodos para manipular atributos: Podemos fazer algumas validacoes para ver se os dados passados pelo o usuario e valido 
//Isso evita que o Usuario passa uma variavel STRING onde o atributo so aceita INT: quebrando o sistema
$p1->aumentarEstoque(10);
$p1->diminuirEstoque(5);
$p1->reajustarPreco(50);

echo "O estoque de {$p1->descricao} e {$p1->estoque}<br>";
echo "O preco de {$p1->descricao} e {$p1->preco}<br>";
