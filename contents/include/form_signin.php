<div class="lg:grid lg:grid-flow-col lg:gap-2 xl:gap-4 h-full">
    <div class="w-0 hidden lg:flex lg:w-full h-auto">
        <img src="../../../FILMOPOLIS/assets/img/films/alice_darling/gallery/5.jpg" alt="">
    </div>
    <div class="lg:mr-10 py-3 w-full lg:mt-0 h-screen lg:h-full flex flex-col items-center justify-center bg-[url('../../../FILMOPOLIS/assets/img/films/alice_darling/gallery/5.jpg')] bg-cover lg:bg-none">
        <div class="flex flex-col items-center justify-center mb-2.5">
            <h2 class="text-antiflashWhite bg-cardinal font-bold rounded-lg text-md px-10 py-1 text-center uppercase">Inscription</h2>
        </div>
        <form class="border border-2 border-cardinal rounded-xl flex flex-col justify-center px-3 py-3 mt-2.5 backdrop-blur-sm" action="" method="post">
            <div class="xl:flex xl:flex-row xl:space-x-3">
                <div class="mb-3">
                    <input type="text" id="nom" class="bg-antiflashWhite border border-2 border-cardinal text-spaceCadet text-sm rounded-lg block w-full p-2.5" placeholder="Nom" name="nom_users" required>
                </div>
                <div class="mb-3">
                    <input type="text" id="prenom" class="bg-antiflashWhite border border-2 border-cardinal text-spaceCadet text-sm rounded-lg block w-full p-2.5" placeholder="Prenom" name="prenom_users" required>
                </div>
            </div>
            <div class="xl:flex xl:flex-row xl:space-x-3">
                <div class="mb-3">
                    <input type="email" id="email" class="bg-antiflashWhite border border-2 border-cardinal text-spaceCadet text-sm rounded-lg block w-full p-2.5" placeholder="Adresse email" name="email_users" required>
                </div>
                <div class="mb-3">
                    <input type="email" id="confEmail" class="bg-antiflashWhite border border-2 border-cardinal text-spaceCadet text-sm rounded-lg block w-full p-2.5" placeholder="Confirmez votre adresse email" name="conf_email_users" required>
                </div>
            </div>
            <div class="xl:flex xl:flex-row xl:space-x-3">
                <div class="mb-3">
                    <input type="password" id="motdepasse" class="bg-antiflashWhite border border-2 border-cardinal text-spaceCadet text-sm rounded-lg block w-full p-2.5" placeholder="Votre mot de passe" name="password_users" required></input>
                </div>
                <div class="mb-3">
                    <input type="password" id="confMotdepasse" class="bg-antiflashWhite border border-2 border-cardinal text-spaceCadet text-sm rounded-lg block w-full p-2.5" placeholder="Confirmez votre mot de passe" name="conf_password_users" required></input>
                </div>
            </div>
            <button type="submit" class="text-antiflashWhite mb-3 border border-antiflashWhite border-2 rounded-lg bg-cardinal text-sm w-full sm:w-auto px-5 py-2.5 text-center uppercase">S'inscrire</button>
            <a class="text-antiflashWhite text-center text-xs lg:hover:underline" href="../../../FILMOPOLIS/contents/pages/connexion.php">Vous avez déjà un compte ?</a>
        </form>
    </div>
</div>