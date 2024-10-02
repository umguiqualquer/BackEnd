<?php

$usuario_autenticado = false;
//cria uma lista com os valores de email se senha que serão verificados no futuro
$usuario_cadastrado = [
    ['email' => 'admin@senai.br',
    'senha' => 12345],
    ['email' => 'aluno@senai.br',
    'senha' => 'abcde'],
    ['email' => 'suporte@senai.br',
    'senha' => '1a2b3c']
];
//cria uma outra forma de chamar a arrya como se fosse uma abreviação
foreach($usuario_cadastrado as $user){
    if($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']){
        $usuario_autenticado = true;
    }
}

//verifica se o usuario_autenticado esta sendo true, caso o contrario a mensagem de falha sera exibida
if ($usuario_autenticado == true){
    echo "Usuário autenticado com sucesso";
}else{
    //echo "Usuário ou senha incorreto";
    header ('Location: index.php?senha=erro');
}
?>