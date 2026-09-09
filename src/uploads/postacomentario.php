<?php 
session_start();
require_once("../../config/database.php"); 

if ($_SERVER['REQUEST_METHOD'] === "POST"){
    $comentario = $_POST['comentario'];
    $usuario = $_SESSION['user_id'];


    $sql = $conexao->prepare("INSERT INTO comentario (comentario, usuario_id) VALUES (:comentario, :usuario)");
    $sql->bindParam(':comentario', $comentario);
    $sql->bindParam(':usuario', $usuario);
    $sql->execute();

    header("Location: ../../index.php");
    exit;
};
?>