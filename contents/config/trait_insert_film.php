<?php
// include 'admin/pdo.php';
// require 'functions.php';
    
//     if(!empty($_FILES['affiche'])){
//         $nameFile = $_FILES['affiche']['name'];
//         $typeFile = $_FILES['affiche']['type'];
//         $tmpFile = $_FILES['affiche']['tmp_name'];
//         $errorFile = $_FILES['affiche']['error'];
//         $sizeFile = $_FILES['affiche']['size'];

//         $extensions = ['png', 'jpg', 'jpeg'];
//         $type = ['image/png', 'image/jpg', 'image/jpeg'];

//         $extension = explode('.', $nameFile);

//         $max_size = 500000;

//         if(in_array($typeFile, $type)){
//             if(count($extension) <= 2 && in_array(strtolower(end($extension)), $extensions)){
//                 if($sizeFile <= $max_size && $errorFile == 0){
//                     if(move_uploaded_file($tmpFile, $image = '../../../FILMOPOLIS/assets/img/films/upload_affiche/' . uniqid() . '.' . end($extensions))){
//                         echo 'Upload effectué !';
//                     }else{
//                         echo 'Echec de l\'upload de l\'image';
//                     }
//                 }else{
//                         echo 'Le poids de l\'image est trop élevé !';
//                 }
//             }else{
//                     echo 'Merci d\'upload une image';
//             }
//         }else{
//                 echo 'Type de fichier non autorisé!';
//         }
//     }

//     $affiche = $_POST['titre'];

//     if(isset($_POST['submit'])){
//         // echo "Ok";
//         var_dump($_POST['submit']);

//         if(isset($_POST['titre']) && isset($_POST['duree']) && isset($_POST['synopsis']) && isset($lien_img_aff_films)){

//             if(!empty($_POST['titre']) && !empty($_POST['duree']) && !empty($_POST['synopsis']) && !empty($lien_img_aff_films)){
//                 // echo "Titre ok";
//                 $titre = htmlspecialchars(strip_tags($_POST['titre']));
//                 $duree = htmlspecialchars(strip_tags($_POST['duree']));
//                 $synopsis = htmlspecialchars(strip_tags($_POST['synopsis']));

//                 // Insertion dans la bdd
//                 try{
//                     add_film($titre, $duree, $synopsis);
//                 }catch (Exception $e){
//                     die('Erreur : '.$e->getMessage());
//                 }
//                 try{
//                     $tab_id = last_id();

//                     $id = $tab_id[0][0];
//                     add_affiche($lien_img_aff_films, $id);
//                     header("Location: ../../../FILMOPOLIS/contents/pages/dashboard.php");
//                 }catch (Exception $e){
//                     die('Erreur : '.$e->getMessage());
//                 }
//             }
//         }
//     }
?>