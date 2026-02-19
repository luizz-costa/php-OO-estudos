<?php 

/**
 * Propriedades de um Objeto que eu posso definir apenas uma vez e depois nao mais 
 * 
 * Contexto:
 *  Marcando a propriedade(atributo) da classe como somente leitura com a palavra do php `readonly`
 *  ex:   private `readonly` int $id; 
 *  basicamente estamos dizendo para o php que essa propriedade pode ser inicializada uma vez e
 *  depois nao mais pode ser modificada 
 * 
 *  essa inicializacao ela nao precisa ser necessariamente no metodo construtor, pode ser por outro metodo
 * 
 */

//Classe usada para mostrar o conceito de readonly:
/*class Usuario 
{
    private readonly int $id;
    private string $login;
    private string $nome;
    private string $email;

    public function __construct(string $id, string $login, string $nome, string $email)
    {
        $this->id = $id;
        $this->login = $login;
        $this->nome = $nome;
        $this->email = $email;
    }

    public function setId($id)
    {
        $this->id = $id;
    }
}

$x = new Usuario(1, 'pedro', 'Pedro', 'pedro@email.com');

//Aqui estamos tentand setar outro valor no atributo id, definido como readonly, entao essa acao vai resultar um erro!
//Pois o Atributo $id foi definido como somente leitura, ele armazena o valor da sua criacao e nao pode ser alterado posteriormente
$x->setId(5);

var_dump($x);
--------------------------------------------------------------------------------------------------------------------------*/

/**
 * Data Transfer Object ou Objeto de Transporte de Dados
 * 
 * O que é ?
 *  Data Transfer Object é um Objeto que serve apenas para carregar dados junto com ele, normalmente ele nao precisa ter
 *  Metodos, Comportamento, o uso dele se dar para usar como Parametro, Armazenar dentro de outro Objeto, assim por diante..
 *  
 *  É só uma Estrutura de Dados um pouco mais complexa organizada na forma de um Objeto 
 * 
 *  Pode-se estanciar o objeto definindo as propriedades e ler essas propriedades, acessar os valores dela.
 *  mas nao pode modificar os valores dessas propriedades 
 * 
 * IMPORTANTE:
 *  Como e apenas um objeto de transporte de dados, podemos utilizar o recurso de Promocao da Propriedade do Construtor
 *  Que seria declarar as propriedades diretamente no metodo construtor, assim elimnado uma boa quantidade de linhas de codigo 
 *  ex:
 *  class Endereco
 *  {
 *                                  //Declarando as variaveis e atribuindo os valores diretamnete no metodo Construtor 
 *      public function __construct(public readonly string $logadouro, public readonly string $numero, public readonly string $bairro)
 *  }
 */

//Classe usada para demonstrar o conceito de Data Transfer Object ou seja Objeto de Transporte de Dados(valores)

class Endereco
{
    //É uma caracterista do Objeto de Transporte de Dados que seja readonly
    public readonly string $logradouro;
    public readonly string $numero;
    public readonly string $bairro;
    public readonly string $cep;

    public function __construct(string $logradouro, string $numero, string $bairro, string $cep)
    {
        $this->logradouro = $logradouro;
        $this->numero = $numero;
        $this->bairro = $bairro;
        $this->cep = $cep;
    }
}

//Iniciando o objeto com os seguintes dados 
$x = new Endereco('Rua Capitao America', '2026', 'Centro', '62.857-000');

//Tentando modificar uma propriedade readonly mesmo definida como publica == ERROR
$x->logradouro = 'x';