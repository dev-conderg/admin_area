<?php

//Caminho absoluto raiz do projeto
define('BASE_PATH', dirname(__DIR__) . '/');

//URL base do projeto 
define('BASE_URL', 'http://localhost:8181/admin_area/admin_area/');

//Carrega a conexão com o banco
require_once BASE_PATH . 'config/db_connection.php';