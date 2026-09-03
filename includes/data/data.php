<?php 
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

$depoimentos = [
    [
        "id" => 1,
        "nome" => "Bernadette Meira",
        "foto" => "src/img/pensemoqquiser.png",
        "comentario" => "lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.",
    ],
    [
        "id" => 1,
        "nome" => "Sandra Lima",
        "foto" => "src/img/image.png",
        "comentario" => "lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.",
    ],
    [
        "id" => 1,
        "nome" => "Mair Bocuda",
        "foto" => "src/img/bocuda.png",
        "comentario" => "lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.",
    ],
]
?>