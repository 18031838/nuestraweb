<?php
$servidor="mysql:dbname=".BD.";host=".SERVIDOR;

try {
    $pdo=new PDO($servidor,USUARIO,PASSWORD,
    array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8")); //Valores de codificacion por defecto
} catch (PDOException $e) {
    echo "error de conexion: (".$e->getMessage();
}

/*
    create user gerente@localhost identified by '1234';
    GRANT ALL on cafeteria.* TO gerente@localhost;
    */
?>