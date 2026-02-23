<?php

class Orcamento
{
    private $itens;

    //Criando Metodo para adicionar produto e quantidade 
    public function adiciona(OrcavelInterface $produto, $qtde)
    {
        //Vetor que ira receber quantidade e produto
        $this->itens[] = [$qtde, $produto];
    }

    public function calculaTotal()
    {
        $total = 0;
        //para cada 
        foreach ($this->itens as $item)
            {
                $total += ($item[0] * $item[1]->getPreco());
            }
            return $total;
    }


}