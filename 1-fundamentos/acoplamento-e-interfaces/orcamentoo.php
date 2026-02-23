<?php 
require_once 'Orcavelinterface.php';
require_once 'Orcamento.php';
require_once 'Servico.php';
require_once 'Produto2.php';

$orc = new Orcamento;
$orc->adiciona( new Produto('Maquina de Cafe', 10, 300), 1);
$orc->adiciona( new Produto('Motocicleta', 5, 5000), 2);
$orc->adiciona( new Produto('Sanduiche', 20, 40), 4);

$orc->adiciona( new Servico('Conserto', 20, ), 1 );
$orc->adiciona( new Servico('Manutencao', 50, ), 2 );
echo $orc->calculaTotal();