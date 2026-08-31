<?php 
session_start();
require_once("./config/database.php");

if ($_SERVER['REQUEST_METHOD']=="POST"){
    try{
        $titulo= filter_input(INPUT_POST, "titulo", FILTER_SANITIZE_SPECIAL_CHARS);
        $arquivo = file("foto");

        $sql = "INSERT INTO lembretes (usuario_id, titulo, descricao, data_lembrete, status)
        VALUES (:usuario_id, :titulo, :descricao, :data_lembrete, :status)";
        $inputLembrete = $conexao->prepare($sql);
        $inputLembrete->bindParam(":usuario_id", $usuario_id);
        $inputLembrete->bindParam(":titulo", $titulo);
        $inputLembrete->bindParam(":descricao", $descricao);
        $inputLembrete->bindParam(":data_lembrete", $data_lembrete);
        $inputLembrete->bindParam(":status", $status);

        if ($inputLembrete->execute() && $inputLembrete->rowCount()>0){
            $_SESSION['mensagem'] = "Cadastrado com Sucesso";
            $_SESSION['cor'] = "alert-succes";
            header("Location: ../dashboard.php");
            exit;
        };
    } catch (Exception $e) {
        $_SESSION['mensagem'] = "Erro ao Cadastrar $e";
        $_SESSION['cor'] = "alert-danger";
        header("Location: ../dashboard.php");
        exit;
    } finally {
        unset($conexao);
    }
}
?>