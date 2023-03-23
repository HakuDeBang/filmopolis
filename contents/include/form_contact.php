<div class="lg:grid lg:grid-flow-col lg:gap-10 xl:gap-14 h-full">
    <div class="lg:mx-5 py-10 w-full lg:mt-0 h-screen lg:h-full flex flex-col items-center justify-center bg-[url('../../../FILMOPOLIS/assets/img/films/alice_darling/gallery/3.jpg')] bg-cover lg:bg-none">
        <div class="flex flex-col items-center justify-center mb-2.5">
            <h2 class="text-antiflashWhite bg-cardinal font-bold rounded-lg text-md px-10 py-1 text-center uppercase">Contact</h2>
        </div>
        <form class="border border-2 border-cardinal rounded-xl flex flex-col justify-center px-8 py-8 mt-2.5 backdrop-blur-sm">
            <div class="xl:flex xl:flex-row xl:space-x-3">
                <div class="mb-3">
                    <input type="text" id="nom" class="bg-antiflashWhite border border-2 border-cardinal text-spaceCadet text-sm rounded-lg block w-full p-2.5" placeholder="Nom" name="nom" required>
                </div>
                <div class="mb-3">
                    <input type="text" id="prenom" class="bg-antiflashWhite border border-2 border-cardinal text-spaceCadet text-sm rounded-lg block w-full p-2.5" placeholder="Prenom" name="prenom" required>
                </div>
            </div>
            <div class="mb-3">
                <input type="email" id="email" class="bg-antiflashWhite border border-2 border-cardinal text-spaceCadet text-sm rounded-lg block w-full p-2.5" placeholder="Adresse email" name="email" required>
            </div>
            <div class="mb-3">
                <textarea type="text" id="message" class="bg-antiflashWhite border border-2 border-cardinal text-spaceCadet text-sm rounded-lg block w-full p-2.5" placeholder="Votre message" name="message" required></textarea>
            </div>
            <button type="submit" class="text-antiflashWhite border border-antiflashWhite border-2 rounded-lg bg-cardinal text-sm w-full sm:w-auto px-5 py-2.5 text-center uppercase">Envoyer</button>
        </form>
    </div>
    <div class="w-0 hidden lg:flex lg:w-full h-auto">
        <img src="../../../FILMOPOLIS/assets/img/films/alice_darling/gallery/3.jpg" alt="">
    </div>
</div>