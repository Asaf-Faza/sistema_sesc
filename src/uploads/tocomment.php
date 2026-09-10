<?php 
session_start();
include_once('../../config/database.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['adicionar'])) {
    $id = filter_input(INPUT_POST, 'adicionar', FILTER_VALIDATE_INT);

    if (!$id) {
        exit('ID inválido.');
    }

    $stmt = $conexao->prepare(
        "SELECT id, comentario, datahoraupload, usuario_id FROM comentario WHERE id = ?"
    );
    $stmt->execute([$id]);
    $arquivo = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$arquivo) {
        exit('Comentário não encontrado.');
    }

    // Copia o comentario diretamente da tabela de origem, preservando seu valor.
    $stmt = $conexao->prepare(
        "INSERT INTO comentarios_aprovados
            (id, comentario, datahoraupload, usuario_id)
         SELECT id, comentario, datahoraupload, usuario_id
         FROM comentario
         WHERE id = :id"
    );
    $stmt->bindValue(':id', (int) $arquivo['id'], PDO::PARAM_INT);
    $stmt->execute();

    
}else{
    header('Location: ../../index.php');
    exit;
}
?>