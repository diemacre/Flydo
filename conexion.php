<?php
/**
 * Created by PhpStorm.
 * User: diego
 * Date: 14/5/16
 * Time: 12:42
 */

$dbhost = "databasehost";
$dbuser = "user";
$dbpass = "password";
$dbname = "databasename";
try {
    $db = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass,
        array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'UTF8'"));
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    }catch(Exception $error) {

    die("Error conexión BBDD " . $error->getMessage());
}

?>
