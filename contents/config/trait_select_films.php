<?php
include 'pdo.php';
$req_sel = $connex->prepare('SELECT f.id_film, f.titre_film, f.duree_film, f.synopsis_film, ba.bande_annonce_ba_film, aff.lien_img_aff_films, gal.lien_img_gal_films FROM Film f, Ba_film ba, Img_aff_films aff, Img_gal_films gal WHERE ba.id_film = f.id_film AND aff.id_film = f.id_film AND gal.id_film = f.id_film;');
$req_sel->execute();
$afficherFilm = $req_sel->fetchAll();
?>