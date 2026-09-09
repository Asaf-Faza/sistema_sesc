<?php
$imagens = [];
$imagensBanner = [];
$depoimentos = [];

$sql = $conexao->prepare("SELECT * FROM imagensenviadas");
$sql->execute();
$i = 0;
foreach ($sql as $row) {
    $imagens[$i] = [
        "id" => $row['id'],
        "nome" => $row['nome'],
    ];
    $i++;
}

$sql2 = $conexao->prepare("SELECT * FROM imagensnobanner");
$sql2->execute();
$j = 0;
foreach ($sql2 as $row) {
    $imagensBanner[$j] = [
        "id" => $row['id'],
        "nome" => $row['nome'],
    ];
    $j++;
}

$sql3 = $conexao->prepare(
    "SELECT c.id, c.comentario, u.nome, u.img AS foto
     FROM comentario c
     LEFT JOIN usuarios u ON u.id = c.usuario_id
     ORDER BY c.id DESC"
);
$sql3->execute();
$k = 0;
foreach ($sql3 as $row){
    $depoimentos[$k] = [
        "id" => $row['id'],
        "comentario" => $row['comentario'],
        "nome" => $row['nome'] ?? 'Usuário',
        "foto" => $row['foto'] ?? ''
    ];
    $k++;
};
