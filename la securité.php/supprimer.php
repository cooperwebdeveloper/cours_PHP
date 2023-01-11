<?php

if ($_GET['admin'] !== '1') { /* ici il faut remplacer le $_GET par $_ */
    die('Vous n\'avez pas le droit de supprimer des articles !');
}

$posts = [
    1 => ['title' => 'Comment sécuriser mon application ?', 'createdAt' => new \DateTime('2020-04-06')],
    ['title' => 'Comment récupérer un paramètre de mon URL ?', 'createdAt' => new \DateTime('2020-03-12')],
    ['title' => 'Comment récupérer le contenu de mon formulaire ?', 'createdAt' => new \DateTime('2020-02-04')],
];

unset($posts[$_GET['id']]);

header('Location: index.php');