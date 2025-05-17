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
        <div id="liste-oeuvres">        

        <?php 
        require_once(__DIR__ . '/oeuvres.php'); 
        $index=0;
        foreach($oeuvres as $oeuvre) { ?>
        <article class="oeuvre">
                <a href="oeuvre.php?id=<?php echo $index; ?>">
                <img src=" <?= $oeuvre['image']; ?>">
                    <h2><?= $oeuvre['titre']; ?></h2>
                    <p class="description"><?= $oeuvre['artiste'];?></p>
                </a>
            </article>
        <?php 
        $index++;
        }; ?>

        </div>
    </main>
    <?php include_once(__DIR__ . '/footer.php'); ?>
</body>
</html>