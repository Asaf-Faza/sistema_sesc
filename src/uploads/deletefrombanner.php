<?php 
session_start();
require_once('../../config/database.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['delete'])) {
    $id = filter_input(INPUT_POST, 'delete', FILTER_VALIDATE_INT);

    if (!$id) {
        exit('ID inválido.');
    }

    $stmt = $conexao->prepare(
        "SELECT nome FROM imagensnobanner WHERE id = ?"
    );
    $stmt->execute([$id]);
    $arquivo = $stmt->fetchColumn();

    if ($arquivo) {

        $stmt = $conexao->prepare(
            "DELETE FROM imagensnobanner WHERE id = ?"
        );
        $stmt->execute([$id]);
    }

    header('Location: ../../files.php');
    exit;
}
?>