<?php 
session_start();
include_once('../../config/database.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['adicionar'])) {
    $id = filter_input(INPUT_POST, 'adicionar', FILTER_VALIDATE_INT);

    if (!$id) {
        exit('ID inválido.');
    }

    $stmt = $conexao->prepare(
        "SELECT nome FROM imagensenviadas WHERE id = ?"
    );
    $stmt->execute([$id]);
    $arquivo = $stmt->fetchColumn();

    if ($arquivo) {
        $stmt = $conexao->prepare(
            "INSERT INTO imagensnobanner (nome) VALUES (:nome_arquivo)"
        );
        $stmt->bindParam(':nome_arquivo', $arquivo);
        $stmt->execute();
    }

    header('Location: ../../files.php');
    exit;
}   
?>