<?php

require_once ('autolooad.php');

use Model\Usuario\Usuario;
use DAO\UsuarioDAO\UsuarioDAO;

echo '<pre>';
$matheus = new Usuario('matheusMarques','123');
$dao = new UsuarioDAO();
$dao->insert($matheus);

print_r();
