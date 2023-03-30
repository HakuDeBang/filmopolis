<div class="lg:grid lg:grid-flow-col lg:gap-2 xl:gap-4 h-full lg:h-full">
    <div class="w-0 hidden lg:flex lg:w-full h-auto">
        <img src="../../../FILMOPOLIS/assets/img/films/alice_darling/gallery/5.jpg" alt="">
    </div>
    <div class="lg:mr-10 py-3 w-full lg:mt-0 h-screen lg:h-full flex flex-col items-center justify-center bg-[url('../../../FILMOPOLIS/assets/img/films/alice_darling/gallery/5.jpg')] lg:bg-none">
        <div class="flex flex-col items-center justify-center mb-2.5">
            <h2 class="text-antiflashWhite bg-cardinal font-bold rounded-lg text-md px-10 py-1 text-center uppercase">Connexion</h2>
        </div>
        <form class="border border-2 border-cardinal rounded-xl flex flex-col justify-center px-3 py-3 mt-2.5 backdrop-blur-sm" action="../../../FILMOPOLIS/contents/config/trait_login.php" method="post">
            <div class="flex flex-row space-x-3 flex flex-row space-x-3">
                <div class="mb-3">
                    <input type="text" id="pseudo_users" class="bg-antiflashWhite border border-2 border-cardinal text-spaceCadet text-sm rounded-lg block w-full p-2.5" placeholder="Pseudo" name="pseudo_users">
                </div>
                <div class="mb-3">
                    <input type="password" id="password_users" class="bg-antiflashWhite border border-2 border-cardinal text-spaceCadet text-sm rounded-lg block w-full p-2.5" placeholder="Votre mot de passe" name="password_users"></input>
                </div>
            </div>
            <button type="submit" class="text-antiflashWhite mb-3 border border-antiflashWhite border-2 rounded-lg bg-cardinal text-sm w-full sm:w-auto px-5 py-2.5 text-center uppercase" name="submit_login">Se connecter</button>
            <a class="text-antiflashWhite text-center text-xs lg:hover:underline" href="../../../FILMOPOLIS/contents/pages/inscription.php">Pas encore inscrit ?</a>
        </form>
    </div>
</div>