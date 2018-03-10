<?php

require_once('conexao.php');

$sql =  " INSERT INTO usuarios(usuarios,senha)VALUES('matheus','123') ";
//$sql = " UPDATE usuarios SET usuarios = 'matheus marques',  senha = '63970719' WHERE id = 1 ";
//$sql = " DELETE FROM usuarios WHERE id = 1 ";

//$sql = " SELECT * FROM usuarios ";

//Função nativa do PDO: executa a query 
//$result = $dbMysql->query($sql);

//função nativa do PDO: fetchALL transforma o resource em um array
//PDO::FETCH_ASSOC: tranforma esse array em um array assosiativo
//$usuarios = $result->fetchALL(PDO::FETCH_ASSOC);
//print_r($usuarios);

//$dbMysql->exec($sql);


/*try{
  //Trabalhando com transação 
  $dbMysql->beginTransaction();
  $sql =  " INSERT INTO usuarios(usuarios,senha)VALUES('matheus','123') ";  
  $dbMysql->exec($sql);

  $sql =  " INSERT INTO usuarios(usuarios,senha)VALUES('matheus','123') ";  
  $dbMysql->exec($sql);

  $sql =  " INSERT INTO usuarios(usuarios,senha)VALUES('matheus','123') ";  
  $dbMysql->exec($sql);

  $dbMysql->commit();
} catch(PDOException $e){
    $dbMysql->rollback();
    echo 'erro deu ruim';
    //echo "Erro: " . $e->getMessage();
}*/