<?php
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