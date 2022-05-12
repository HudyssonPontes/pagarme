<?php 
   	define('DB_HOST','darpa.com.br');
    define('DB_NAME','u760263040_darpa_database');
    define('DB_USER','u760263040_hudyssonpontes');
    define('DB_PASS','corcel ccI-7903');
    define('DB_TYPE','mysql');
    define('DB_PORT',3306);
    define('DATA_LAYER_CONFIG', 
    ['driver' => 'mysql',
    'host' => 'darpa.com.br',
    'port' => '3306',
    'dbname' => 'u760263040_darpa_database',
    'username' => 'u760263040_hudyssonpontes',
    'pass' => 'corcel ccI-7903',
    'options' => [
        PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
        PDO::ATTR_CASE => PDO::CASE_NATURAL
    ]
    ]
);
    define('PAGARME_API_KEY', '')
?>