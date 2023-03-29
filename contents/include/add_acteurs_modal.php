<!-- Add Film Modal -->
<div id="addFilmModal" tabindex="-2" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 items-center justify-center hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] md:h-full">
    <div class="relative w-full h-full max-w-2xl md:h-auto rounded-lg shadow dark:bg-gray-700">
        <!-- Modal content -->
        <form action="#" method="post">
            <!-- Modal header -->
            <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                    Ajouter un acteur
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="addFilmModal">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>  
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-6 space-y-6">
                <div class="grid grid-cols-6 gap-6">
                    <div class="col-span-6 sm:col-span-3">
                        <label for="first-name" class="block mb-2 text-sm font-medium text-antiflashWhite">Titre</label>
                        <input type="text" name="first-name" id="first-name" class="shadow-sm bg-spaceCadet border border-antiflashWhite text-antiflashWhite text-sm rounded-lg focus:ring-cardinal focus:border-cardinal block w-full p-2.5" placeholder="Titre du film" required="">
                    </div>
                    <div class="col-span-6 sm:col-span-3">
                        <label class="block mb-2 text-sm font-medium text-antiflashWhite" for="affiche_film">Affiche film</label>
                        <input class="block w-full bg-spacecadet text-sm text-antiflashWhite border border-antiflashWhite rounded-lg cursor-pointer" aria-describedby="affiche_film_help" id="affiche_film" type="file">
                    </div>
                    <div class="col-span-6 sm:col-span-3">
                        <label for="duree" class="block mb-2 text-sm font-medium text-antiflashWhite">Durée</label>
                        <input type="text" name="duree" id="duree" class="shadow-sm bg-spaceCadet border border-antiflashWhite text-antiflashWhite text-sm rounded-lg focus:ring-cardinal focus:border-cardinal block w-full p-2.5" placeholder="Durée du film" required="">
                    </div>
                    <div class="col-span-6 sm:col-span-3">
                        <label for="synopsis" class="block mb-2 text-sm font-medium text-antiflashWhite">Synopsis</label>
                        <input type="text" name="synopsis" id="synopsis" class="shadow-sm bg-spaceCadet border border-antiflashWhite text-antiflashWhite text-sm rounded-lg focus:ring-cardinal focus:border-cardinal block w-full p-2.5" placeholder="Synopsis du film" required="">
                    </div>
                    <div class="col-span-6 sm:col-span-3">
                        <label class="block mb-2 text-sm font-medium text-antiflashWhite" for="bande_annonce">Bande Annonce</label>
                        <input class="block w-full bg-spacecadet text-sm text-antiflashWhite border border-antiflashWhite rounded-lg cursor-pointer" aria-describedby="bande_annonce_help" id="bande_annonce" type="file">
                    </div>
                    <div class="col-span-6 sm:col-span-3">
                    <label class="block mb-2 text-sm font-medium text-antiflashWhite" for="galerie">Galerie</label>
                        <input class="block w-full bg-spacecadet text-sm text-antiflashWhite border border-antiflashWhite rounded-lg cursor-pointer" aria-describedby="galerie_help" id="galerie" type="file">
                    </div>
                </div>
            </div>
            <!-- Modal footer -->
            <div class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                <button type="submit" class="text-spaceCadet bg-antiflashWhite border border-4 border-spaceCadet hover:text-antiflashWhite hover:bg-spaceCadet hover:border-antiflashWhite font-medium rounded-lg text-sm px-5 py-2.5 text-center">Ajouter</button>
            </div>
        </form>
    </div>
</div>