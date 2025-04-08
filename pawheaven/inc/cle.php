<?php

define('SERVER', 'mysql:server=localhost;dbname=pawheaven' ); 
define('USER', 'root');
define('PWD', '');


$cle = new PDO(SERVER, USER, PWD);

try{
    $cle = new PDO(SERVER,USER,PWD);
} 
catch(Exception $e){
    echo $e->getMessage();
}