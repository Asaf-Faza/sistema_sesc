<?php 
session_start();
require_once("../../config/database.php"); 

if ($_SERVER['REQUEST_METHOD'] === "POST"){
    if (isset($_SESSION['user_id'])) {
        $usuario = $_SESSION['user_id'];
        $comentario = $_POST['comentario'];

        $sql = $conexao->prepare("INSERT INTO comentarios (comentario, usuario_id) VALUES (:comentario, :usuario)");
        $sql->bindParam(':comentario', $comentario);
        $sql->bindParam(':usuario', $usuario);
        $sql->execute();
    } else {
        $usuario = 1;
        $nome = $_POST['nome'];
        $comentario = $_POST['comentario'];

        $sql = $conexao->prepare("INSERT INTO comentarios (comentario, usuario_id, nome) VALUES (:comentario, :usuario, :nome)");
        $sql->bindParam(':comentario', $comentario);
        $sql->bindParam(':usuario', $usuario);
        $sql->bindParam(':nome', $nome);
        $sql->execute();
    }
    
    


    

    header("Location: ../../index.php");
    exit;
};
?>