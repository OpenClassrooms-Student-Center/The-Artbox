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

<! le header du site>

        <?php require_once(__DIR__ . '/header.php');?>

<main>
    <article id="detail-oeuvre">
        <div id="img-oeuvre">
            <img src="img/pawel-czerwinski-2.png" alt="La marée rouge">
        </div>
        <div id="contenu-oeuvre">
            <h1>La marée rouge</h1>
            <p class="description">Martin Rodriguez</p>
            <p class="description-complete">
                Vivamus quis odio vel ligula feugiat facilisis. Donec eleifend pellentesque massa, ut malesuada est bibendum sit amet. Morbi tincidunt nec tellus vel ornare. Mauris dolor tellus, gravida eget euismod eu, viverra eget urna. Phasellus feugiat ipsum nec lorem accumsan, sed porta quam dictum massa nunc.
            </p>
        </div>
    </article>
</main>
<footer>
    <p>
        <strong>© THE ARTBOX</strong> - <em>Tous droits réservés</em>
    </p>
</footer>
</body>
</html>