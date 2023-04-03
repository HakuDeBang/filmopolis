<div class="lg:grid lg:grid-flow-col lg:gap-10 xl:gap-14 h-full">
    <div class="lg:mx-5 py-10 w-full lg:mt-0 h-screen lg:h-full flex flex-col items-center justify-center bg-[url('../../../FILMOPOLIS/assets/img/films/alice_darling/gallery/3.jpg')] bg-cover lg:bg-none">
        <div class="flex flex-col items-center justify-center mb-2.5">
            <h2 class="text-antiflashWhite bg-cardinal font-bold rounded-lg text-md px-10 py-1 text-center uppercase">Contact</h2>
        </div>
        <form class="border border-2 border-cardinal rounded-xl flex flex-col justify-center px-8 py-8 mt-2.5 backdrop-blur-sm">
            <div class="flex flex-row space-x-3">
                <div class="mb-3">
                    <input type="text" name="nom" id="nom" class="bg-antiflashWhite border border-2 border-cardinal text-spaceCadet text-sm rounded-lg block w-full p-2.5" placeholder="Nom" required>
                </div>
                <div class="mb-3">
                    <input type="text" name="prenom" id="prenom" class="bg-antiflashWhite border border-2 border-cardinal text-spaceCadet text-sm rounded-lg block w-full p-2.5" placeholder="Prenom" required>
                </div>
            </div>
            <div class="mb-3">
                <input type="email" name="email" id="email" class="bg-antiflashWhite border border-2 border-cardinal text-spaceCadet text-sm rounded-lg block w-full p-2.5" placeholder="Adresse email" required>
            </div>
            <div class="mb-3">
                <textarea type="text" name="message" id="message" class="bg-antiflashWhite border border-2 border-cardinal text-spaceCadet text-sm rounded-lg block w-full p-2.5" placeholder="Votre message" required></textarea>
            </div>
            <button type="submit" name="submit" class="text-antiflashWhite border border-antiflashWhite border-2 rounded-lg bg-cardinal text-sm w-full sm:w-auto px-5 py-2.5 text-center uppercase">Envoyer</button>
        </form>
    </div>
    <div class="w-0 hidden lg:flex lg:w-full h-auto">
        <img src="../../../filmopolis/assets/img/pics/filmopolis.png" alt="">
    </div>
</div>