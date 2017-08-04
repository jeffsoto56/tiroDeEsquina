<h2>Bienvenidos a Tiro de Esquina.</h1>
<p>Versión Beta desarrollada por empresa Corporation.</p>
<?php
//Forma de Encriptacion del Password
echo Hash::create('md5', '123queso', HASH_PASSWORD_KEY);
?>