<?php

require_once('conexao.php');
/*
try {
    $dbMysql->beginTransaction();

    $dados = [
        'usuarios' => 'caio',
        'senha' => '123'
    ];

    $sql = " INSERT INTO usuarios(usuarios,senha)VALUES(:user,:pass) ";

    //Função nativa do PDO: prepare evita sqlinject
    $stmt = $dbMysql->prepare($sql);

    $paramns = [
        ':user' => $dados['usuarios'],
        ':pass' => $dados['senha']
    ];

    $stmt->execute($paramns);

    $dbMysql->commit();

} catch(PDOException $e){
    $dbMysql->rollback();
    echo 'erro deu ruim';
    echo "Erro: " . $e->getMessage();
}*/


try {
    $dbMysql->beginTransaction();

    $dados = [
        'usuarios' => 'test',
        'senha' => '123'
    ];

    $sql = " INSERT INTO usuarios(usuarios,senha VALUES (:user,:pass) ) ";

    //Função nativa do PDO: prepare evita sqlinject
    $stmt = $dbMysql->prepare($sql);

    $stmt->bindParam  = [
        ':user' => $dados['usuarios'],
        ': pass' => $dados['senha']
    ];

    $stmt->execute();

    $dbMysql->commit();
}catch(PDOException $e){

    $dbMysql->rollback();

    echo "Erro: " . $e->getMessage();

}