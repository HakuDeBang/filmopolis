<?php
require_once('pdo.php');
// Lorsqu'on clique sur "S'inscrire", ça execute l'envoie du formulaire
if(isset($_POST['submit'])){
    // Si les champs NE SONT PAS vides (!empty), on execute le code
    if(!empty($_POST['nom_users']) && !empty($_POST['prenom_users']) && !empty($_POST['pseudo_users']) && !empty($_POST['email_users']) && !empty($_POST['password_users']) && !empty($_POST['conf_password_users']) && $_POST['password_users'] == $_POST['conf_password_users']){
        $nom = htmlspecialchars($_POST['nom_users']);
        $prenom = htmlspecialchars($_POST['prenom_users']);
        $pseudo = htmlspecialchars($_POST['pseudo_users']);
        $email = htmlspecialchars($_POST['email_users']);
        $pass = htmlspecialchars(password_hash($_POST['password_users'], PASSWORD_BCRYPT));

        // On var_dump les variables pour vérifier que l'on récupère bien les données insérées dans 
        // var_dump($nom);
        // var_dump($prenom);
        // var_dump($pseudo);
        // var_dump($email);
        // var_dump($pass);
        // var_dump($conf_pass);
        // var_dump($id_role);

        // Requête d'insertion dans la base de données
        $req_ins = 'INSERT INTO users (nom_users, prenom_users, pseudo_users, email_users, password_users, id_role_users) VALUES (:nom_users, :prenom_users, :pseudo_users, :email_users, :password_users, :id_role_users)';
        // var_dump($req_ins);
        // Préparation de la requête
        $res_ins = $connex->prepare($req_ins);
        // var_dump($res_ins);
        // Eecution de la requête
        $res_ins->execute([
            'nom_users' => $nom,
            'prenom_users' => $prenom,
            'pseudo_users' => $pseudo,
            'email_users' => $email,
            'password_users' => $pass,
            'id_role_users' => ':id_role_users',
        ]);
        $_SESSION['success_register'] = 'Bienvenue ' . $pseudo .', vous êtes enregistré.';
        header("Location: ../../../FILMOPOLIS/contents/pages/connexion.php");
            
        }
        elseif ($_POST['password']!=$_POST['password2']) {
            echo "Vous devez entrer un mot de passe identique";
            header("Location: ../../../FILMOPOLIS/contents/pages/inscription.php");
            exit();
        }
        // Vérifier que tous les champs ont bien été remplis
        else
        {
            $_SESSION['message'] = 'Veuillez remplir tous les champs';
                header("Location: ../../../FILMOPOLIS/contents/pages/inscription.php");
                exit();
        }
    }
?>