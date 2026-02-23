<?php 

//Iniciando conexao ao bd
$conn = pg_connect('host=localhost port=5432 dbname=livro user=postgres password=');

//Fazendo consulta
$query = 'SELECT codigo, nome FROM famosos';

$result = pg_query($conn, $query);

if ($result)
    {
        while ($row = pg_fetch_assoc($result))
        {
            echo $row['codigo'] . ' - ' . $row['nome'] . '<br>';
        }
    }


pg_close($conn);