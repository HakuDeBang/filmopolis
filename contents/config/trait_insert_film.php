<?php 
if(isset($_POST['submit_film'])){
    // echo 'ok';
    if(!empty($_FILES['affiche_film'])){
        $nameFile = $_FILES['affiche_film']['name'];
        $typeFile = $_FILES['affiche_film']['type'];
        $tmpFile = $_FILES['affiche_film']['tmp_name'];
        $errorFile = $_FILES['affiche_film']['error'];
        $sizeFile = $_FILES['affiche_film']['size'];

        $extensions = ['png', 'jpg', 'jpeg'];
        $type = ['affiche_film/png', 'affiche_film/jpg', 'affiche_film/jpeg'];

        $extension = explode('.', $nameFile);
    }
}
    // Si les champs ne sont pas vides, on execute le code
    // if(!empty($_POST['titre_film']) && !empty($_POST['duree_film']) && !empty($_POST['synopsis_film']) && !empty($_POST['affiche_film']) && !empty($_POST['bande_annonce_film']) && !empty($_POST['galerie_film'])){
    //     $titre = htmlspecialchars(trim($_POST['titre_film']));
    //     $duree = htmlspecialchars(trim($_POST['duree_film']));
    //     $synopsis = htmlspecialchars(trim($_POST['synopsis_film']));
    //     $bandeannonce = htmlspecialchars(trim($_FILES['userfile']['name']));
    //     $affiche = htmlspecialchars(trim($_FILES['userfile']['name']));
    //     $galerie = htmlspecialchars(trim($_FILES['userfile']['name']));

    //     $req_ins = $connex->prepare('INSERT INTO film SET titre_film = ?, duree_film = ?, synopsis_film = ?');
    //     $req_ins = $connex->prepare('INSERT INTO ba_film SET bande_annonce_ba_film = ?, id_film = ?');
    //     $req_ins = $connex->prepare('INSERT INTO img_aff_films SET lien_img_aff_film = ?, id_film = ?');
    //     $req_ins = $connex->prepare('INSERT INTO img_gal_films SET lien_img_gal_film = ?, id_film = ?');
    //     $req_ins->execute([$titre_film], [$duree_film], [$synopsis_film]);
    //     $res_ins = $req_ins-fetchAll();
    //     var_dump($res_ins);

        // var_dump($afficher_film);
    // }
?>