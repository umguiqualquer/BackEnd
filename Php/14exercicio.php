<?php

//lista mãe com listas dentro dela
$usuarios = [
    [   "id" => 1,
        "nome" => "Guilherme",
        "cidade" => "Tatui",
        "estado" => "SP"],

    [   "id" => 2,
        "nome" => "Hamilton",
        "cidade" => "Cerquilho",
        "estado" => "SP"],

    [   "id" => 3,
        "nome" => "Celeri",
        "cidade" => "Cerquilho",
        "estado" => "SP"],

    [   "id" => 4,
        "nome" => "Enzo",
        "cidade" => "Tokyo",
        "estado" => "JP"],

    [   "id" => 5,
        "nome" => "Felipe",
        "cidade" => "Tatui",
        "estado" => "SP"]
];

//o item que deve ser procurado
$buscar = "Enzo";

echo '</pre>';
print_r($usuarios);
echo '</pre>';

//verifica se o item selecionado esta lista
$indice = array_search($busca, array_column($usuarios, "nome"));
if ($indice !== false){
    echo "$buscar foi encontrado com o ID: ".$usuarios[$indice]["id"];

} else {
    echo "$buscar não foi encontrada na lista de usuários.";
}

?>