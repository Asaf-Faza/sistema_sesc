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
        "comentario" => "digite uma mensagem",
    ],
    [
        "id" => 1,
        "nome" => "Sandra Lima",
        "foto" => "src/img/image.png",
        "comentario" => "Adorei muito escravizar meu filho nessa instituição. Ele adquiriu depressão aguda e nunca mais quis conversar com ninguém com medo de falarem sobre PHP para ele de novo (de acordo com ele, isso é pior que vape) 10/10.",
    ],
    [
        "id" => 1,
        "nome" => "Mair Bocuda",
        "foto" => "src/img/bocuda.png",
        "comentario" => "Se botasse uma tenda viraria circo de tanto palhaço que tem dentro",
    ],
]
?>