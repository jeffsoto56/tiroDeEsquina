<?php
//estaba debajo de la definicion URL
define('LIBS','libs/'); 

//variables cuando uso localhost
define('URL','http://localhost/tiroDeEsquina/');
define('DB_TYPE','mysql');
define('DB_HOST','localhost');
define('DB_NAME','bd_tiroDeEsquina');
define('DB_USER','root');
define('DB_PASS','');

/*No cambiar la hash_key porque es la clave del password*/
define('HASH_GENERAL_KEY','tiroDeEsquina');

/*ESTE ES PARA LA BASE DE DATOS SOLAMENTE*/
define('HASH_PASSWORD_KEY','tiroDeEsquina');
?>
