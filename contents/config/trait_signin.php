<?php
include 'pdo.php';
// Lorsqu'on clique sur "S'inscrire", ça execute l'envoie du formulaire
if(isset($_POST['submit_signin'])){
    // Si les champs NE SONT PAS vides (!empty), on execute le code
    if(!empty($_POST['nom_users']) && !empty($_POST['prenom_users']) && !empty($_POST['pseudo_users']) && !empty($_POST['email_users']) && !empty($_POST['password_users']) && !empty($_POST['conf_password_users']) && $_POST['password_users'] == $_POST['conf_password_users']){
        $nom = htmlspecialchars(trim($_POST['nom_users']));
        $prenom = htmlspecialchars(trim($_POST['prenom_users']));
        $pseudo = htmlspecialchars(trim($_POST['pseudo_users']));
        $email = htmlspecialchars(filter_var(trim($_POST['email_users'], FILTER_VALIDATE_EMAIL)));
        $pass = htmlspecialchars(trim(password_hash($_POST['password_users'], PASSWORD_BCRYPT)));

        // On var_dump les variables pour vérifier que l'on récupère bien les données insérées dans 
        // var_dump($nom);
        // var_dump($prenom);
        // var_dump($pseudo);
        // var_dump($email);
        // var_dump($pass);

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
            'id_role_users' => '1',
        ]);
        $_SESSION['success_register'] = 'Vous êtes bien enregistré.';
        header("Location: ../../../FILMOPOLIS/contents/pages/connexion.php");
            
        }
        elseif ($_POST['password_users']!=$_POST['conf_password_users']) {
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