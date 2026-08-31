<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <header></header>
    <main>
        <section id="comentar">
            <form class="" method="POST" action="./includes/process/salvarimagem.php" enctype="multipart/form-data">
                <label for="foto">comente aqui</label>
                <input type="file" name="foto" id="foto" accept="image/png, image/jpg">
                <button type="submit">Upload</button>
            </form>
        </section>
    </main>
</body>
</html>