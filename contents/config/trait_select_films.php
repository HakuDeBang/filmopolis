<?php
include 'admin/pdo.php';
$req_sel = $connex->prepare('SELECT f.titre_film, a.lien_affiche, f.duree_film, f.synopsis_film, f.trailer_film FROM Film f, Affiche a WHERE f.id_affiche = a.id_affiche');
$req_sel->execute();
$afficherFilm = $req_sel->fetchAll();
// var_dump($afficherFilm);

$req_sel = $connex->prepare('SELECT f.id_film, f.titre_film, i.lien_images FROM Images i, Film f, Galerie g WHERE i.id_film = f.id_film AND g.id_galerie = i.id_galerie AND g.id_film = f.id_film');
$req_sel->execute();
$afficherImages = $req_sel->fetchAll();
?>