<?php 
session_start();
require_once("../../config/database.php");

if ($_SERVER['REQUEST_METHOD']=="POST"){
    $arquivo = file("foto");
}
?>