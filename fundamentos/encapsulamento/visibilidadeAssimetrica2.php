<?php

class Cidade 
{
    
    public function __construct(public private(set) string $nome){
    }
}

class Pessoa 
{
    public private(set) string $nome;
    public private(set) Cidade $cidade;

    public function __construct(string $nome, Cidade $cidade)
    {
        $this->nome = $nome;
        $this->cidade = $cidade;
    }
}

$c1 = new Cidade('Rio de Janeiro');
$p1 = new Pessoa('Maria', $c1);

print $p1->nome;
print $p1->cidade->nome;