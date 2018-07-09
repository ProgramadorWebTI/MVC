<?php
session_start();

// diretório base da aplicação
define('BASE_PATH', dirname(__FILE__));

// Diretorio da aplicação
$urlExplode = explode("\\",BASE_PATH);
define('DIRETORIO_BASE',$urlExplode[4]);

// credenciais de acesso ao MySQL
define('MYSQL_HOST', 'localhost');
define('MYSQL_USER', 'root');
define('MYSQL_PASS', '');
define('MYSQL_DBNAME', 'controledegasto');

// configurações do PHP
ini_set('display_errors', true);
error_reporting(E_ALL);
date_default_timezone_set('America/Sao_Paulo');