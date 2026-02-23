<?php

/**Nullsafe Operator é um Operador utilizado em Orientacao a Objetos muito importante quando estamos trabalhando
 * com o conceito de Associacao, ele auxilia em casos de encadeamento onde nao tem como garantir oque vem depois
 * vai existir 
 * 
 * para falar sobre Nullsafe precisamos usar um contexto
 * Contexto:
 *  Duas Classes quese relacionam de maniera simples por meio de Associacao
 * 
 * Um dos motivos do uso do Operador Nulssafe e para resolver problemas causados com uso da Associacao 
 * 
 * O nullsafe operator (?->) em PHP permite acessar métodos ou propriedades sem gerar erro quando o objeto é null.
 * Se for null, o resultado da expressão também será null, e o código continua rodando.
 * 
 * O que acontece:
 *  quando o operador Nullsafe encontra um nulo, ele retorna nulo para execucao 
 * 
 * Exemplo:
 *  Um encadeamento: $pessoa->getCidade()?->getEstado()?->getPais()?->getNome()
 *  Supondo: "Se a Pessoa nao tiver cidade, e se a cidade nao tiver estado, e se o estado nao tiver pais....?"
 * IMPORTANTE: Mesmo que na Base de Dados esteja tudo certo, com campos obrigatorios, as vezes temos sistemas que
 * os dados vem Migrados, o sistema e legado e incompleto, entao o Nullsafe e uma solucao que pode ser aplicada nessas situacoes
 * 
*/

//Contexto
class Estado 
{
    private string $nome;

    public function __construct(string $nome)
    {
        $this->nome = $nome;
    }

    public function getNome(): string
    {
        return $this->nome;
    }
}

class Cidade 
{
    private string $nome;
    private ?Estado $estado;

    public function __construct(string $nome, Estado $estado = null)
    {
        $this->nome = $nome;
        $this->estado = $estado;
    }

    public function getEstado()
    {
        return $this->estado;
    }
}

// Criando Objeto
/*
$mg = new Estado('MG');
$cidade = new Cidade('Belo Horizonte', $mg);
echo $cid->getEstado()->getNome();
*/

$cid = new Cidade('BH');

//Usando Operador Nullsafe
echo $cid->getEstado()?->getNome();