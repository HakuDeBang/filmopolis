<?php
    include '../../../filmopolis/contents/config/admin/pdo.php';
    include '../../../filmopolis/contents/config/trait_select_films.php';
?>
<div class="mx-10 my-4 border border-cardinal rounded-lg">
    <ul class="flex flex-wrap -mb-px text-sm font-medium text-center justify-around" id="myTab" data-tabs-toggle="#myTabContent" role="tablist">
        <li class="mr-2" role="presentation">
            <button class="inline-block p-4 border-b-2 rounded-t-lg" id="films-tab" data-tabs-target="#films" type="button" role="tab" aria-controls="films" aria-selected="false">Films</button>
        </li>
        <li class="mr-2" role="presentation">
            <button class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="utilisateurs-tab" data-tabs-target="#utilisateurs" type="button" role="tab" aria-controls="utilisateurs" aria-selected="false">Utilisateurs</button>
        </li>
    </ul>
</div>
<div id="myTabContent">
                                                                                            <!---------------------- --- ----- ----- ---------------------->
                                                                                            <!---------------------- TAB TABLE FILMS ---------------------->
                                                                                            <!---------------------- --- ----- ----- ---------------------->
    <div class="hidden mx-10 rounded-lg bg-eerieBlack" id="films" role="tabpanel" aria-labelledby="films-tab">
        <form class="flex flex-row mb-4 justify-end">
            <label for="table-search" class="sr-only">Search</label>
            <div class="relative mr-4">
                <button class="absolute inset-y-0 left-0 flex items-center pl-3">
                    <svg class="w-5 h-5 text-antiflashWHite" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
                </button>
                <input type="text" id="table-search-films" class="block p-2 pl-10 md:text-md text-antiflashWhite border border-cardinal rounded-lg w-auto bg-spaceCadet focus:ring-cardinal focus:border-cardinal" placeholder="Rechercher un film">
            </div>
            <a href="#" type="button" class="text-antiflashWhite bg-eerieBlack border border-antiflashWhite font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center" data-modal-target="addFilmModal" data-modal-show="addFilmModal">Ajouter un film</a>
        </form>

                                                                                            <!---------------------- ----- ------- ---- ---------------------->
                                                                                            <!---------------------- MODAL AJOUTER FILM ---------------------->
                                                                                            <!---------------------- ----- ------- ---- ---------------------->

        <!-- Add Film Modal -->
        <div id="addFilmModal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 items-center justify-center hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] md:h-full">
            <div class="relative w-full h-full max-w-2xl md:h-auto rounded-lg shadow dark:bg-gray-700">
                <!-- Modal content -->
                <form action="../../../filmopolis/contents/config/upload.php" method="post" enctype="multipart/form-data">
                    <!-- Modal header -->
                    <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                            Ajouter un film
                        </h3>
                        <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="addFilmModal">
                            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>  
                        </button>
                    </div>
                    <!-- Modal body -->
                    <div class="p-6 space-y-6">
                        <div class="grid grid-cols-6 gap-6">
                            <div class="col-span-6 sm:col-span-3">
                                <label for="titre" class="block mb-2 text-sm font-medium text-antiflashWhite">Titre</label>
                                <input type="text" name="titre" id="titre" class="shadow-sm bg-spaceCadet border border-antiflashWhite text-antiflashWhite text-sm rounded-lg focus:ring-cardinal focus:border-cardinal block w-full p-2.5" placeholder="Titre du film">
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="duree" class="block mb-2 text-sm font-medium text-antiflashWhite">Durée</label>
                                <input type="text" name="duree" id="duree" class="shadow-sm bg-spaceCadet border border-antiflashWhite text-antiflashWhite text-sm rounded-lg focus:ring-cardinal focus:border-cardinal block w-full p-2.5" placeholder="Durée du film">
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="synopsis" class="block mb-2 text-sm font-medium text-antiflashWhite">Synopsis</label>
                                <input type="text" name="synopsis" id="synopsis" class="shadow-sm bg-spaceCadet border border-antiflashWhite text-antiflashWhite text-sm rounded-lg focus:ring-cardinal focus:border-cardinal block w-full p-2.5" placeholder="Synopsis du film">
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="affiche" class="block mb-2 text-sm font-medium text-antiflashWhite">Affiche</label>
                                <input name="affiche" type="file" id="affiche" class="block w-full bg-spacecadet text-sm text-antiflashWhite border border-antiflashWhite rounded-lg cursor-pointer">
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="images" class="block mb-2 text-sm font-medium text-antiflashWhite">Galerie</label>
                                <input name="images[]" id="images" type="file" multiple aria-describedby="images_help" class="block w-full bg-spacecadet text-sm text-antiflashWhite border border-antiflashWhite rounded-lg cursor-pointer">
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="trailer" class="block mb-2 text-sm font-medium text-antiflashWhite">Bande Annonce</label>
                                <input name="trailer" id="trailer" type="file" aria-describedby="trailer_help" class="block w-full bg-spacecadet text-sm text-antiflashWhite border border-antiflashWhite rounded-lg cursor-pointer">
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="genre" class="block mb-2 text-sm font-medium text-antiflashWhite">Genre</label>
                                <select id="genre" name="genre" class="flex items-center justify-between bg-spaceCadet w-full py-2 pl-3 pr-4 my-1 font-medium text-antiflashWhite rounded-lg border-2 border-cardinal">
                                    <option selected disabled>...</option>
                                <?php
                                foreach($genreFilm as $genre){ ?>
                                    <option><?= $genre['id_genre'] . ' - ' . $genre['nom_genre']; ?></option>
                                <?php
                                }
                                ?>
                                </select>
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="categorie" class="block mb-2 text-sm font-medium text-antiflashWhite">Catégorie</label>
                                <select id="categorie" name="categorie" class="flex items-center justify-between bg-spaceCadet w-full py-2 pl-3 pr-4 my-1 font-medium text-antiflashWhite rounded-lg border-2 border-cardinal">
                                    <option selected disabled>...</option>
                                    <?php
                                    foreach($categorieFilm as $categorie){ ?>
                                        <option><?= $categorie['id_categorie'] . ' - ' . $categorie['nom_categorie']; ?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <!-- Modal footer -->
                    <div class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                        <button type="submit" name="submit" class="text-spaceCadet bg-antiflashWhite border border-4 border-spaceCadet hover:text-antiflashWhite hover:bg-spaceCadet hover:border-antiflashWhite font-medium rounded-lg text-sm px-5 py-2.5 text-center">Ajouter</button>
                    </div>
                </form>
            </div>
        </div>

                                                                                            <!---------------------- ----- ---- ---------------------->
                                                                                            <!---------------------- TABLE FILM ---------------------->
                                                                                            <!---------------------- ----- ---- ---------------------->
        <?php
            if(isset($_GET['error'])){
        ?>
                <p><?= $_GET['error'] ?></p>
        <?php
        }
        ?>
        <div class="relative overflow-x-auto shadow-md rounded-lg">
            <table class="w-full text-sm text-center text-antiflashWhite">
                <thead class="text-md text-antiflashWhite uppercase bg-spaceCadet">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Titre
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Affiche
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Durée
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Synopsis
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Bande Annonce / Galerie
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Options
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    // var_dump($afficherFilm);
                    foreach($afficherFilm as $film){ ?>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <td class="px-6 py-4 font-normal text-antiflashWhite"><?= $film['titre_film']; ?></td>
                        <td class="w-52 p-4"><img src="<?= $film['lien_affiche']; ?>" alt="<?= $film['titre_film']; ?>"></td>
                        <td class="px-6 py-4"><?= $film['duree_film']; ?></td>
                        <td class="px-6 py-4 font-normal text-antiflashWhite w-80"><?= $film['synopsis_film']; ?></td>
                        <td class="px-4 py-4">
                            <div class="xl:grid xl:grid-cols-2 place-items-center gap-2">
                                <video class="hidden xl:flex w-112" controls>
                                    <source src="<?= $film['trailer_film'] ?>" type="video/mp4">
                                </video>
                                <div class="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-3 gap-2">
                                    <?php foreach($afficherImages as $images){?>
                                    <div>
                                        <img class="w-96 md:rounded-lg" src="<?= $images['lien_images']; ?>" alt="">
                                    </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4">
                            <a href="#" data-modal-target="editFilmModal" data-modal-show="editFilmModal" class="font-medium text-carrotOrange p-2"><i class="fa-regular fa-pen-to-square"></i></a>
                            <a href="#" class="font-medium text-cardinal"><i class="fa-solid fa-trash"></i></a>
                        </td>
                    </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
        <nav class="flex flex-col items-center justify-between pt-4 mb-4" aria-label="Table navigation">
            <span class="text-sm font-normal text-gray-500 dark:text-gray-400">Showing <span class="font-semibold text-gray-900 dark:text-white">1-10</span> of <span class="font-semibold text-gray-900 dark:text-white">1000</span></span>
            <ul class="inline-flex items-center -space-x-px">
                <li>
                    <a href="#" class="block px-3 py-2 ml-0 leading-tight text-gray-500 bg-white border border-gray-300 rounded-l-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                        <span class="sr-only">Previous</span>
                        <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                    </a>
                </li>
                <li>
                    <a href="#" class="px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">1</a>
                </li>
                <li>
                    <a href="#" class="px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">2</a>
                </li>
                <li>
                    <a href="#" aria-current="page" class="z-10 px-3 py-2 leading-tight text-blue-600 border border-blue-300 bg-blue-50 hover:bg-blue-100 hover:text-blue-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white">3</a>
                </li>
                <li>
                    <a href="#" class="px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">...</a>
                </li>
                <li>
                    <a href="#" class="px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">100</a>
                </li>
                <li>
                    <a href="#" class="block px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 rounded-r-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                        <span class="sr-only">Next</span>
                        <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
    <!-- TABLE UTILISATEURS -->
    <div class="hidden mx-10 rounded-lg bg-eerieBlack" id="utilisateurs" role="tabpanel" aria-labelledby="utilisateurs-tab">
        <?php include 'tables/tables_utilisateurs.php'; ?> 
    </div>
</div>