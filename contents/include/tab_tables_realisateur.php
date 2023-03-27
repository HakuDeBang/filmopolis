<form class="flex flex-row mb-4 justify-end">
    <label for="table-search" class="sr-only">Search</label>
    <div class="relative mr-4">
        <button class="absolute inset-y-0 left-0 flex items-center pl-3">
            <svg class="w-5 h-5 text-antiflashWHite" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
        </button>
        <input type="text" id="table-search-films" class="block p-2 pl-10 md:text-md text-antiflashWhite border border-cardinal rounded-lg w-auto bg-spaceCadet focus:ring-cardinal focus:border-cardinal" placeholder="Rechercher un film">
    </div>
    <a href="#" type="button" class="text-antiflashWhite bg-eerieBlack border border-antiflashWhite font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center" data-modal-target="addRealisateurModal" data-modal-show="addRealisateurModal">Ajouter un réalisateur</a>
    <?php //include 'add_realisateurs_modal.php'; ?>
</form>
<div class="relative overflow-x-auto shadow-md rounded-lg">
    <table class="w-full text-sm text-center text-antiflashWhite">
        <thead class="text-md text-antiflashWhite uppercase bg-spaceCadet">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Nom Prénom
                </th>
                <th scope="col" class="px-6 py-3">
                    Âge
                </th>
                <th scope="col" class="px-6 py-3">
                    Nationalité
                </th>
                <th scope="col" class="px-6 py-3">
                    Image
                </th>
                <th scope="col" class="px-6 py-3">
                    Biographie
                </th>
                <th scope="col" class="px-6 py-3">
                    Options
                </th>
            </tr>
        </thead>
        <tbody>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <td class="px-6 py-4 font-normal text-antiflashWhite">
                    Anna Kendrick
                </td>
                <td class="px-6 py-4">
                    37 ans
                </td>
                <td class="px-6 py-4">
                    Americaine
                </td>
                <td class="w-52 p-4">
                    <img src="../../../FILMOPOLIS/assets/img/realisateurs/mary_nighy.jpg" alt="Anna Kendrick">
                </td>
                <td class="px-6 py-4 font-normal text-antiflashWhite w-128">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quam cupiditate eveniet distinctio aspernatur alias commodi fuga quasi voluptas iste inventore adipisci, quisquam nulla? Sunt, quam.
                </td>
                <td class="px-6 py-4">
                    <a href="#" data-modal-target="editFilmModal" data-modal-show="editFilmModal" class="font-medium text-carrotOrange p-2"><i class="fa-regular fa-pen-to-square"></i></a>
                    <a href="#" class="font-medium text-cardinal"><i class="fa-solid fa-trash"></i></a>
                </td>
            </tr>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <td class="px-6 py-4 font-normal text-antiflashWhite">
                    Anna Kendrick
                </td>
                <td class="px-6 py-4">
                    37 ans
                </td>
                <td class="px-6 py-4">
                    Americaine
                </td>
                <td class="w-52 p-4">
                    <img src="../../../FILMOPOLIS/assets/img/realisateurs/mary_nighy.jpg" alt="Anna Kendrick">
                </td>
                <td class="px-6 py-4 font-normal text-antiflashWhite w-128">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quam cupiditate eveniet distinctio aspernatur alias commodi fuga quasi voluptas iste inventore adipisci, quisquam nulla? Sunt, quam.
                </td>
                <td class="px-6 py-4">
                    <a href="#" data-modal-target="editFilmModal" data-modal-show="editFilmModal" class="font-medium text-carrotOrange p-2"><i class="fa-regular fa-pen-to-square"></i></a>
                    <a href="#" class="font-medium text-cardinal"><i class="fa-solid fa-trash"></i></a>
                </td>
            </tr>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <td class="px-6 py-4 font-normal text-antiflashWhite">
                    Anna Kendrick
                </td>
                <td class="px-6 py-4">
                    37 ans
                </td>
                <td class="px-6 py-4">
                    Americaine
                </td>
                <td class="w-52 p-4">
                    <img src="../../../FILMOPOLIS/assets/img/realisateurs/mary_nighy.jpg" alt="Anna Kendrick">
                </td>
                <td class="px-6 py-4 font-normal text-antiflashWhite w-128">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quam cupiditate eveniet distinctio aspernatur alias commodi fuga quasi voluptas iste inventore adipisci, quisquam nulla? Sunt, quam.
                </td>
                <td class="px-6 py-4">
                    <a href="#" data-modal-target="editFilmModal" data-modal-show="editFilmModal" class="font-medium text-carrotOrange p-2"><i class="fa-regular fa-pen-to-square"></i></a>
                    <a href="#" class="font-medium text-cardinal"><i class="fa-solid fa-trash"></i></a>
                </td>
            </tr>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <td class="px-6 py-4 font-normal text-antiflashWhite">
                    Anna Kendrick
                </td>
                <td class="px-6 py-4">
                    37 ans
                </td>
                <td class="px-6 py-4">
                    Americaine
                </td>
                <td class="w-52 p-4">
                    <img src="../../../FILMOPOLIS/assets/img/realisateurs/mary_nighy.jpg" alt="Anna Kendrick">
                </td>
                <td class="px-6 py-4 font-normal text-antiflashWhite w-128">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quam cupiditate eveniet distinctio aspernatur alias commodi fuga quasi voluptas iste inventore adipisci, quisquam nulla? Sunt, quam.
                </td>
                <td class="px-6 py-4">
                    <a href="#" data-modal-target="editFilmModal" data-modal-show="editFilmModal" class="font-medium text-carrotOrange p-2"><i class="fa-regular fa-pen-to-square"></i></a>
                    <a href="#" class="font-medium text-cardinal"><i class="fa-solid fa-trash"></i></a>
                </td>
            </tr>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <td class="px-6 py-4 font-normal text-antiflashWhite">
                    Anna Kendrick
                </td>
                <td class="px-6 py-4">
                    37 ans
                </td>
                <td class="px-6 py-4">
                    Americaine
                </td>
                <td class="w-52 p-4">
                    <img src="../../../FILMOPOLIS/assets/img/realisateurs/mary_nighy.jpg" alt="Anna Kendrick">
                </td>
                <td class="px-6 py-4 font-normal text-antiflashWhite w-128">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quam cupiditate eveniet distinctio aspernatur alias commodi fuga quasi voluptas iste inventore adipisci, quisquam nulla? Sunt, quam.
                </td>
                <td class="px-6 py-4">
                    <a href="#" data-modal-target="editFilmModal" data-modal-show="editFilmModal" class="font-medium text-carrotOrange p-2"><i class="fa-regular fa-pen-to-square"></i></a>
                    <a href="#" class="font-medium text-cardinal"><i class="fa-solid fa-trash"></i></a>
                </td>
            </tr>
        </tbody>
    </table>
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