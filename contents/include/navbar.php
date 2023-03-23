<nav class="p-3 bg-spaceCadet">
    <div class="container flex flex-wrap items-center justify-between mx-auto">
        <a href="../../../FILMOPOLIS/index.php" class="flex flex-col items-center">
            <img src="../../../FILMOPOLIS/assets/img/logo/filmopolis.png" class="h-7 lg:h-10" alt="Filmopolis Logo"/>
            <h1 class="hidden lg:flex bg-cardinal rounded font-bold text-lg">FILMOPOLIS</h1>
        </a>
        <div class="flex items-center lg:order-2">
            <!-- AVATAR -->
            <button type="button" class="flex mr-3 text-sm bg-gray-800 rounded-full md:mr-2" id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown" data-dropdown-placement="bottom">
                <span class="sr-only">Open user menu</span>
                <img class="w-8 h-8 lg:w-12 lg:h-12 rounded-full" src="../../../FILMOPOLIS/assets/img/users/user.png" alt="user photo">
            </button>
            <!-- DROPDOWN MENU PROFILE -->
            <div class="z-50 w-56 hidden my-4 text-base list-none divide-y rounded-lg shadow bg-gray-700 divide-gray-600" id="user-dropdown">
                <div class="px-4 py-3">
                    <span class="block text-sm text-gray-900 dark:text-white">Capy Bara</span>
                    <span class="block text-sm font-medium text-gray-400">capybara@gmail.com</span>
                </div>
                <ul class="py-2" aria-labelledby="user-menu-button">
                    <li>
                        <a href="#" class="flex flex-wrap items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white"><img src="../../../FILMOPOLIS/assets/img/users/dashboard.png" class="mr-1 w-5" alt="">Tableau de bord</a>
                    </li>
                    <li>
                        <a href="#" class="flex flex-wrap items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white"><img src="../../../FILMOPOLIS/assets/img/users/settings.png" class="mr-1 w-5" alt="">Paramètres</a>
                    </li>
                    <li>
                        <a href="#" class="flex flex-wrap items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white"><img src="../../../FILMOPOLIS/assets/img/users/logout.png" class="mr-1 w-5" alt="">Se déconnecter</a>
                    </li>
                </ul>
            </div>
            <!-- HAMBURGER MENU -->
            <button data-collapse-toggle="mobile-menu-2" type="button" class="inline-flex items-center text-sm text-antiflashWhite lg:hidden" aria-controls="navbar-solid-bg" aria-expanded="false">
                <span class="sr-only">Open Main Menu</span>
                <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
            </button>
        </div>
        <div class="items-center justify-between hidden w-full lg:flex lg:w-auto lg:order-1" id="mobile-menu-2">
            <ul class="flex flex-col p-4 mt-4 rounded-lg lg:flex-row lg:space-x-2 lg:mt-0 lg:text-sm lg:font-medium">
                <!-- DROPDOWN MENU GENRE -->
                <li>
                    <button id="dropdownGenreLink" data-dropdown-toggle="dropdownGenre" class="flex items-center justify-between w-full py-2 pl-3 pr-4 my-1 font-medium text-antiflashWhite rounded-lg border-2 border-cardinal">Genre <svg class="w-5 h-5 ml-1" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg></button>
                    <div id="dropdownGenre" class="z-10 hidden font-normal rounded-lg shadow w-44 md:w-72 dark:bg-gray-700">
                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-400" aria-labelledby="dropdownLargeButton">
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-600 ">Fiction</a>
                            </li>
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-600 ">Documentaire</a>
                            </li>
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-600 ">Dessins Animés</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <!-- DROPDOWN MENU CATEGORIE -->
                <li>
                    <button id="dropdownCategorieLink" data-dropdown-toggle="dropdownCategorie" data-dropdown-placement="bottom" class="flex items-center justify-between w-full py-2 pl-3 pr-4 my-1 font-medium text-antiflashWhite rounded-lg border-2 border-cardinal">Catégorie <svg class="w-5 h-5 ml-1" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg></button>
                    <div id="dropdownCategorie" class="z-10 hidden font-normal rounded-lg shadow w-44 md:w-72 dark:bg-gray-700">
                        <ul class="h-28 overflow-y-auto text-sm text-gray-700 dark:text-gray-400" aria-labelledby="dropdownCategorieLink">
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-600 ">Action</a>
                            </li>
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-600 ">Aventure</a>
                            </li>
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-600 ">Comédie</a>
                            </li>
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-600 ">Comédie dramatique</a>
                            </li>
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-600 ">Drame</a>
                            </li>
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-600 ">Fantastique</a>
                            </li>
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-600 ">Guerre</a>
                            </li>
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-600 ">Policier</a>
                            </li>
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-600 ">Horreur</a>
                            </li>
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-600 ">Western</a>
                            </li>
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-600 ">Science-Fiction</a>
                            </li>
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-600 ">Documents</a>
                            </li>
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-600 ">Biopic</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <!-- SEARCHBAR -->
                <form class="flex items-center my-1">   
                    <label for="simple-search" class="sr-only">Rechercher un film...</label>
                    <div class="relative w-full">
                        <input type="text" id="simple-search" class="bg-gray-50 border-2 border-cardinal text-gray-900 text-sm rounded-lg block w-full dark:bg-gray-700 dark:border-cardinal dark:placeholder-gray-400 dark:text-white dark:focus:ring-cardinal dark:focus:border-cardinal" placeholder="Rechercher un film..." required>
                        <button type="submit" class="absolute inset-y-0 right-0 p-2.5 ml-1 text-sm font-medium text-antiflashWhite rounded-lg">
                            <div class="flex items-center pointer-events-none">
                                <span class="sr-only">Search</span>
                                <img src="../../../FILMOPOLIS/assets/img/other/search.png" class="w-5 h-5 text-gray-500 dark:text-gray-400" alt="">
                            </div>
                        </button>
                    </div>
                </form>
                <!-- CATALOGUE -->
                <button type="button" class="w-full lg:py-0 lg:pl-0 lg:pr-0 lg:w-28 py-2 pl-3 pr-4 my-1 font-medium text-antiflashWhite rounded-lg bg-cardinal">
                    <a href="../../../FILMOPOLIS/contents/pages/catalogue.php" class="flex flex-wrap items-center justify-center"><img src="../../../FILMOPOLIS/assets/img/other/catalogue.png" class="w-5 h-5 text-gray-500 dark:text-gray-400 mr-1" alt="">Catalogue</a>
                </button>
            </ul>
        </div>
    </div>
</nav>