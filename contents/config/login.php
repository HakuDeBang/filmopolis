<?php
session_start();
include 'admin/pdo.php';
    //Lorsqu'on clique sur "Se connecter", ça execute l'envoie du formulaire
    if(isset($_POST['submit'])){
        // Si les champs NE SONT PAS vides (!empty), on execute le code
        if(!empty($_POST['pseudo_users']) && !empty($_POST['password_users'])){
            $pseudo = htmlspecialchars(trim($_POST['pseudo_users']));
            $pass = htmlspecialchars(trim($_POST['password_users']));

            $stmt = $connex->prepare('SELECT * FROM users WHERE pseudo_users = ?');
            $stmt->execute([$pseudo]);
            $users = $stmt->fetch();
            $id_users = $users['id_users'];
            $id_roles = $users['id_roles'];

            if(password_verify($pass, $users['password_users'])){
                $rolestmt = $connex->prepare('SELECT * FROM users WHERE id_users = ?');
                $rolestmt->execute([$id_users]);
                $role = $rolestmt->fetchAll();
                
                if($id_roles == 1){
                    $_SESSION['user'] = $id_roles;
                    $_SESSION['pseudo_users'] = $_POST['pseudo_users'];
                    $_SESSION['password_users'] = $_POST['password_users'];
                    $_SESSION['nom_users'] = $users['nom_users'];
                    $_SESSION['prenom_users'] = $users['prenom_users'];
                    $_SESSION['email_users'] = $users['email_users'];
                    $_SESSION['id_users'] = $users['id_users'];
                    header("Location: ../../../filmopolis/index.php");
                }
                elseif($id_roles == 2){
                    $_SESSION['admin'] = $id_roles;
                    $_SESSION['pseudo_users'] = $_POST['pseudo_users'];
                    $_SESSION['password_users'] = $_POST['password_users'];
                    $_SESSION['nom_users'] = $users['nom_users'];
                    $_SESSION['prenom_users'] = $users['prenom_users'];
                    $_SESSION['email_users'] = $users['email_users'];
                    $_SESSION['id_users'] = $users['id_users'];
                    header("Location: ../../../filmopolis/index.php");
                }
            }elseif($users['pseudo_users'] == $pseudo && $users['password_users'] != $pass){
                $_SESSION['message'] = 'Mot de passe incorrect';
                header("Location: ../../../filmopolis/contents/pages/connexion.php");
                exit();
            }else{
                $_SESSION['message'] = 'Le pseudo n\'existe pas ou vous n\'êtes pas inscrit !';
                header("Location: ../../../filmopolis/contents/pages/connexion.php");
                exit();
            }
        }else{
            die("erreur");
        }
    }else{
        $_SESSION['message'] = 'Veuillez remplir tout les champs !';
        header("Location: ../../../filmopolis/contents/pages/connexion.php");
        exit();
    }
?>