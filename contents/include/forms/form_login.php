<div class="lg:grid lg:grid-flow-col lg:gap-2 xl:gap-4 h-full lg:h-full">
    <div class="w-0 hidden lg:flex lg:w-full h-auto">
        <img src="../../../filmopolis/assets/img/pics/filmopolis.png" alt="">
    </div>
    <div class="lg:mr-10 py-3 w-full lg:mt-0 h-screen lg:h-full flex flex-col items-center justify-center bg-[url('../../../filmopolis/assets/img/pics/filmopolis.png')] lg:bg-none">
        <div class="flex flex-col items-center justify-center mb-2.5">
            <h2 class="text-antiflashWhite bg-cardinal font-bold rounded-lg text-md px-10 py-1 text-center uppercase">Connexion</h2>
        </div>
        <form action="../../../filmopolis/contents/config/login.php" method="post" class="border border-2 border-cardinal rounded-xl flex flex-col justify-center px-3 py-3 mt-2.5 backdrop-blur-sm">
            <div class="flex flex-row space-x-3 flex flex-row space-x-3">
                <div class="mb-3">
                    <input type="text" name="pseudo_users" id="pseudo_users" class="bg-antiflashWhite border border-2 border-cardinal text-spaceCadet text-sm rounded-lg block w-full p-2.5" placeholder="Pseudo" required>
                </div>
                <div class="mb-3">
                    <input type="password" name="password_users" id="password_users" class="bg-antiflashWhite border border-2 border-cardinal text-spaceCadet text-sm rounded-lg block w-full p-2.5" placeholder="Votre mot de passe" required></input>
                </div>
            </div>
            <button type="submit" name="submit" class="text-antiflashWhite mb-3 border border-antiflashWhite border-2 rounded-lg bg-cardinal text-sm w-full sm:w-auto px-5 py-2.5 text-center uppercase">Se connecter</button>
            <a class="text-antiflashWhite text-center text-xs lg:hover:underline" href="../../../filmopolis/contents/pages/inscription.php">Pas encore inscrit ?</a>
        </form>
    </div>
</div>