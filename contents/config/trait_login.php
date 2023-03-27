<?php
session_start();
include 'pdo.php';
    //Lorsqu'on clique sur sur "Se connecter", ça execute l'envoie du formulaire
    if(isset($_POST['submit'])){
        // Si les champs NE SONT PAS vides (!empty), on execute le code
        if(!empty($_POST['pseudo_users']) && !empty($_POST['password_users'])){
            $pseudo = htmlspecialchars($_POST['pseudo_users']);
            $pass = htmlspecialchars($_POST['password_users']);

            $stmt = $connex->prepare('SELECT * FROM users WHERE pseudo_users = ?');
            $stmt->execute([$pseudo]);
            $users = $stmt->fetch();
            $id_users = $users['id_users'];
            $id_role_users = $users['id_role_users'];

            if(password_verify($pass, $users['password_users'])){
                $rolestmt = $connex->prepare('SELECT * FROM users WHERE id_users = ?');
                $rolestmt->execute([$id_users]);
                $role = $rolestmt->fetchAll();
                
                if($id_role_users == 1){
                    $_SESSION['message_user'] = null;
                    $_SESSION['pseudo_users'] = $_POST['pseudo_users'];
                    $_SESSION['password_users'] = $_POST['password_users'];
                    $_SESSION['nom_users'] = $users['nom_users'];
                    $_SESSION['prenom_users'] = $users['prenom_users'];
                    $_SESSION['email_users'] = $users['email_users'];
                    $_SESSION['id_users'] = $users['id_users'];
                    header("Location: ../../../FILMOPOLIS/index.php");
                }
                elseif($id_role_users == 2){
                    $_SESSION['message_admin'] = 'Bonjour ' . $pseudo . '';
                    $_SESSION['pseudo_users'] = $_POST['pseudo_users'];
                    $_SESSION['password_users'] = $_POST['password_users'];
                    $_SESSION['nom_users'] = $users['nom_users'];
                    $_SESSION['prenom_users'] = $users['prenom_users'];
                    $_SESSION['email_users'] = $users['email_users'];
                    $_SESSION['id_users'] = $users['id_users'];
                    header("Location: ../../../FILMOPOLIS/index.php");
                }
            }elseif($users['pseudo_users'] == $pseudo && $users['password_users'] != $pass){
                $_SESSION['message'] = 'Mot de passe incorrect';
                header("Location: ../../../FILMOPOLIS/contents/pages/connexion.php");
                exit();
            }else{
                $_SESSION['message'] = 'Le pseudo n\'existe pas ou vous n\'êtes pas inscrit !';
                header("Location: ../../../FILMOPOLIS/contents/pages/connexion.php");
                exit();
            }
        }else{
            die("erreur");
        }
    }else{
        $_SESSION['message'] = 'Veuillez remplir tout les champs';
        header("Location: ../../../FILMOPOLIS/contents/pages/connexion.php");
        exit();
    }
?>