<?php

class Exec
{
	public function execute($fn,array $args)
	{
		call_user_func_array($fn,$args);
	}
}

$exec = new Exec();
$exec->execute(function($valor,$valor2){
	var_dump($valor);
	var_dump($valor2);
},array("oi","ola"));
