<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>The ArtBox</title>
</head>
<body>
    <?php include_once(__DIR__ . '/<header>.php'); ?>
<main>

<?php require_once(__DIR__ . '/oeuvres.php'); 
$index=$_GET['id'];
?>

    <article id="detail-oeuvre">
        <div id="img-oeuvre">
        <img src=" <?= $oeuvres[$index]['image']; ?>" alt="Dodomu">
        </div>
        <div id="contenu-oeuvre">
            <h1><?= $oeuvres[$index]['titre']; ?></h1>
            <p class="description"><?= $oeuvres[$index]['artiste'];?></p>
            <p class="description-complete">
            <?= $oeuvres[$index]['description'];?>
            </p>
        </div>
    </article>

</main>
<footer>
      <?php include_once(__DIR__ . '/footer.php'); ?>
</footer>
</body>
</html>
