<?php
// include 'admin/pdo.php';
// // Vérification que le formulaire à été soumis
// if(isset($_POST['submit'])){
//     // Récupération des données du formulaire
//     $titre = $_POST['titre'];
//     $duree = $_POST['duree'];
//     $synopsis = $_POST['synopsis'];
//     $genre = $_POST['genre'];
//     $categorie = $_POST['categorie'];

//     // var_dump($titre);
//     // var_dump($duree);
//     // var_dump($synopsis);
//     // var_dump($genre);
//     // var_dump($categorie);

//     // Insertion des données dans la table Film
//     $req_ins = "INSERT INTO Film (titre_film, duree_film, synopsis_film, id_genre, id_affiche) VALUES (?, ?, ?, ?, ?)";
//     $stmt = $connex->prepare($req_ins);
//     $stmt->execute([$titre, $duree, $synopsis, $genre]);
//     // var_dump($stmt);

//     // Récupération de l'id du film
//     $id_film = $connex->lastInsertId();

//     // Traitement de l'affiche
//     if(isset($_FILES['affiche']) && $_FILES['affiche']['error'] == UPLOAD_ERR_OK){

//         // Vérification de la taille du fichier (5Mo maximum)
//         if($_FILES['affiche']['size'] <= 5000000){

//             // Vérification du type de fichier
//             $allowed_type = ['image/jpg', 'image/jpeg', 'image/png'];
//             if(in_array($_FILES['affiche']['type'], $allowed_type)){

//                 // Déplacement du fichier uploadé vers le fichier de destination
//                 $upload_dir = '../../../filmopolis/assets/uploads/affiche/';
//                 $upload_file = $upload_dir . basename($_FILES['affiche']['name']);

//                 if(move_uploaded_file($_FILES['affiche']['tmp_name'], $upload_file)){

//                     //Insertion dans la table Affiche
//                     $req_ins = "INSERT INTO Affiche (nom_affiche, lien_affiche, id_film) VALUES (?, ?, ?)";
//                     $stmt = $connex->prepare($req_ins);
//                     $stmt->execute([$titre, $upload_file, $id_film]);

//                     echo "L'affiche à bien été uploadée";
//                 }else{
//                     echo "Une erreur est survenue lord du téléchargement de l'affiche";
//                 }
//             }else{
//                 echo "Le type de fichier n'est pas autorisé";
//             }
//         }else{
//             echo "L'affiche est trop volumineuse (5Mo maximum)";
//         }
//     }else{
//        echo "Un erreur est survenue lors du téléchargement de l'affiche";
//     }

//     // Traitement de la galerie
//     if(isset($_FILES['galerie']) && !empty($_FILES['galerie']['name'])){

//         $nb_files = count($_FILES['galerie']['name']);

//         // Vérification de la taille des fichiers (5Mo maximum)
//         $allowed_size = 5000000;

//         // Déplacement des fichiers uploadés vrs le dossier de destination
//         $upload_dir = '../../../filmopolis/assets/uploads/galerie/';
//         $upload_files = [];

//         for($i=0; $i<$nb_files; $i++){
//             $allowed_types = ['image/jpg', 'image/jpeg', 'image/png'];
//             $type = $_FILES['galerie']['type'][$i];
//             if(!in_array($type, $allowed_types)){
//                 echo "Le type de fichier n'est pas autorisé";
//             }
//             // var_dump($type);
//             // var_dump($_FILES['galerie']);

//             $size = $_FILES['galerie']['size'][$i];
//             if($size > $allowed_size){
//                 echo "La taille du fichier est trop grande !";
//             }

//             $name = $_FILES['galerie']['name'][$i];
//             if(empty($name)){
//                 echo "Le nom du fichier est vide";
//             }

//             $tmp_name = $_FILES['galerie']['tmp_name'][$i];
//             if(!is_uploaded_file($tmp_name)){
//                 echo "Le fichier temporaire est invalide";
//             }

//             $upload_files[$i] = $upload_dir . uniqid() . '.' . pathinfo($_FILES['galerie']['name'][$i], PATHINFO_EXTENSION);
//             if(!move_uploaded_file($tmp_name, $upload_files[$i])){
//                 echo "Une erreur est survenue lors du téléchargement du fichier . $name";
//             }

//             // var_dump($upload_files[$i]);
//         }

//         // Insertion de la galerie vers la bdd
//         $req_ins = "INSERT INTO Galerie (lien_galerie) VALUES (?)";
//         $stmt = $connex->prepare($req_ins);
//         for($i=0; $i<$nb_files; $i++){
//             $stmt->execute([$upload_files[$i]]);
//         }

//         $id_galerie[] = $connex->lastInsertId();
//         $id_film = $connex->lastInsertId();

//         foreach ($id_galerie as $id_image){
//             $req_ins = "INSERT INTO Correspondre (id_film, id_galerie) VALUES (?, ?,)";
//             $stmt = $connex->prepare($req_ins);
//             $stmt->execute([$id_film, $id_galerie]);
//         }

//         echo "La galerie à bien été uploadée !";
//     }else{
//         echo "Une erreur est survenue lors du téléchargement de la galerie";
//     }
//     header("Location: ../../../filmopolis/contents/pages/dashboard.php");
// }

include 'admin/pdo.php';
// Vérification de la soumission du formulaire
if(isset($_POST['submit'])){
    // Récupération des données du formulaire
    $titre_film = $_POST['titre'];
    $duree_film = $_POST['duree'];
    $synopsis_film = $_POST['synopsis'];
    $id_genre = $_POST['genre'];
    $id_affiche = null; // On initialise la valeur à null car on la récupère plus tard

    // Vérification et traitement de l'affiche
    $affiche = $_FILES['affiche'];
    $extension_upload = strtolower(substr(strrchr($affiche['name'], '.'), 1));
    $extensions_valides = ['jpg', 'jpeg', 'png'];
    $taille_max = 5000000; // Taille maximale (5Mo)
    $chemin_temporaire = $affiche['tmp_name'];

    // Vérification de l'upload du fichier
    if($affiche['error'] == UPLOAD_ERR_OK){
        // Vérification du type du fichier
        if(in_array($extension_upload, $extensions_valides)){
            // Vérification de la taille du fichier
            if($affiche['size'] <= $taille_max){
                // L'upload du fichier est OK
                $nom_nouveau_fichier = uniqid() . '.' . $extension_upload;
                $chemin_nouveau_fichier = '../../../filmopolis/assets/uploads/affiche/' . $nom_nouveau_fichier;
                move_uploaded_file($chemin_temporaire, $chemin_nouveau_fichier);

                // Enregistrement de l'affiche dans la base de données
                $req_ins = $connex->prepare('INSERT INTO Affiche (nom_affiche, lien_affiche) VALUES (?, ?)');
                $req_ins->execute([$titre_film, $chemin_nouveau_fichier]);
                $id_affiche = $connex->lastInsertId();
            }else{
                // Le fichier est trop grand
                $erreur_fichier = "Le fichier est trop grand (taille maximale : 5Mo)";
            }
        }else{
            // L'extension du fichier n'est pas valide
            $erreur_fichier = "L'extension du fichier n'est pas valide (extensions autorisées : jpg, jpeg, png)";
        }
    }else{
        // L'upload à échoué
        $erreur_fichier = "Une erreur est survenue lors du téléchargement de l'affiche";
    }

    // Insertion dans la table Film
    $req_ins = $connex->prepare('INSERT INTO Film (titre_film, duree_film, synopsis_film, id_genre, id_affiche) VALUES (?, ?, ?, ?, ?)');
    $req_ins->execute([$titre_film, $duree_film, $synopsis_film, $id_genre, $id_affiche]);
    $id_film = $connex->lastInsertId();

    // Vérification et traitement des images
    $images = $_FILES['images'];
    $id_galerie = null;

    // On vérifie si des fichiers ont été uploadés pour la galerie
    if(!empty($images['name'][0])){
        // Enregistrement du nom de la galerie dans la table Galerie
        $nom_galerie = $titre_film;
        $req_ins = $connex->prepare('INSERT INTO Galerie (nom_galerie, id_film) VALUES (?, ?)');
        $req_ins->execute([$nom_galerie, $id_film]);
        $id_galerie = $connex->lastInsertId();

        // Ajout des images dans la table Images
        foreach($images['name'] as $key => $value){
            $extension_upload = strtolower(substr(strrchr($images['name'][$key], '.'), 1));
            $extensions_valides = ['jpg', 'jpeg', 'png'];
            $taille_max = 5000000; // Taille maximale (5Mo)
            $chemin_temporaire = $images['tmp_name'][$key];

            // Vérification de l'upload du fichier
            if($images['error'][$key] == UPLOAD_ERR_OK){
                // Vérification du type du fichier
                if(in_array($extension_upload, $extensions_valides)){
                    // Vérification de la taille du fichier
                    if($images['size'][$key] <= $taille_max){
                        // L'upload du fichier est OK
                        $nom_nouvelle_image = uniqid() . '.' . $extension_upload;
                        $chemin_nouvelle_image = '../../../filmopolis/assets/uploads/galerie/' . $nom_nouvelle_image;
                        move_uploaded_file($chemin_temporaire, $chemin_nouvelle_image);

                        // Enregistrement des images dans la table Images
                        $nom_images = $images['name'][$key];
                        $req_ins = $connex->prepare('INSERT INTO Images (nom_images, lien_images, id_galerie, id_film) VALUES (?, ?, ?, ?)');
                        $req_ins->execute([$nom_images, $chemin_nouvelle_image, $id_galerie, $id_film]);
                    }else{
                        // L'image est trop grande
                        $erreur_images = "L'image est trop grande (taille maximale : 5Mo)";
                    }
                }else{
                    // L'extension de l'image n'est pas valide
                    $erreur_images = "L'extension de l'image n'est pas valide (extensions autorisées : jpg, jpeg, png)";
                }
            }else{
                // L'upload à échoué
                $erreur_images = "Une erreur est survenue lors du téléchargement des images";
            }
        }
    }

    // Vérification et traitement de la video
    $trailer = $_FILES['trailer'];
    $extension_upload = strtolower(substr(strrchr($trailer['name'], '.'), 1));
    $extensions_valides = ['mp4', 'avi', 'mov'];
    $taille_max = 32000000; // Taille maximale (32Mo)
    $chemin_temporaire = $trailer['tmp_name'];

    // Vérification de l'upload du fichier
    if($trailer['error'] == UPLOAD_ERR_OK){
        // Vérification du type de fichier
        if(in_array($extension_upload, $extensions_valides)){
            // Vérification de la taille de la video
            if($trailer['size'] <= $taille_max){
                // L'upload du fichier est OK
                $nom_nouvelle_video = uniqid() . '.' . $extension_upload;
                $chemin_nouvelle_video = '../../../filmopolis/assets/uploads/video/' . $nom_nouvelle_video;
                move_uploaded_file($chemin_temporaire, $chemin_nouvelle_video);

                // Enregistrement du trailer dans la table Film
                $req_ins = $connex->prepare('UPDATE Film SET trailer_film = ? WHERE id_film = ?');
                $req_ins->execute([$chemin_nouvelle_video, $id_film]);
            }else{
                // Le fichier est trop grand
                $erreur_video = "Le fichier est trop volumineux (taille maximale : 32Mo)";
            }
        }else{
            // L'extension de la video n'est pas valide
            $erreur_video = "L'extension de la video n'est pas valide (extensions autorisée : mp4, avi, mov)"; 
        }
    }else{
        // L'upload de la vidéo à échoué
        $erreur_video = "Une erreur est survenue lors du téléchargement de la vidéo";
    }
}
?>