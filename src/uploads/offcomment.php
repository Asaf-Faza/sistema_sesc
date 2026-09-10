<?php 
session_start();
include_once('../../config/database.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['aprovar'])) {
    $id = $_POST['aprovar'];

    if (!$id) {
        exit('ID inválido.');
    }

    $stmt = $conexao->prepare(
        "UPDATE comentarios
        SET aprovado = FALSE
        WHERE id = ?"
    );
    $stmt->execute([$id]);
    $arquivo = $stmt->fetch(PDO::FETCH_ASSOC);

    header('location: ../../files.php');
    exit;

}else{
    // header('Location: ../../index.php');
    // exit;
}
?>