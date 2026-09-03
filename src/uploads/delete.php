<?php 
session_start();
require_once('../../config/database.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['delete'])) {
    $id = filter_input(INPUT_POST, 'delete', FILTER_VALIDATE_INT);

    if (!$id) {
        exit('ID inválido.');
    }

    $stmt = $conexao->prepare(
        "SELECT nome FROM imagensenviadas WHERE id = ?"
    );
    $stmt->execute([$id]);
    $arquivo = $stmt->fetchColumn();

    if ($arquivo) {
        $caminho = __DIR__ . DIRECTORY_SEPARATOR . basename($arquivo);

        if (is_file($caminho)) {
            unlink($caminho);
        }

        $stmt = $conexao->prepare(
            "DELETE FROM imagensenviadas WHERE id = ?"
        );
        $stmt->execute([$id]);
    }

    header('Location: ../../files.php');
    exit;
}

if (isset($_GET['id'])) {
    $id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);

    if (!$id) {
        exit('ID inválido.');
    }

    $stmt = $conexao->prepare(
        "SELECT nome FROM imagensenviadas WHERE id = ?"
    );
    $stmt->execute([$id]);
    $imagem = $stmt->fetch();

    if ($imagem) {
        echo '<input type="hidden" name="delete" value="' . $imagem['id'] . '">';
    }
}