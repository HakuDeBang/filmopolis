<?php
    include '../filmopolis/contents/config/admin/pdo.php';
    include '../filmopolis/contents/config/select_films.php';
?>
<div id="default-carousel" class="relative w-full" data-carousel="static">
    <!-- Carousel wrapper -->
    <div class="relative overflow-hidden sm:mx-14 h-60 sm:h-96 md:h-112 lg:h-144 xl:h-168 my-10">
            <?php foreach($afficherImages as $images){ ?>
            <div class="hidden" data-carousel-item>
                <figure class="cursor-pointer">
                    <img src="<?= $images['lien_images']; ?>" class="absolute block w-auto -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    <figcaption class="absolute px-4 text-xl text-antiflashWhite bottom-6 bg-neutral-950 opacity-80"><p><?= $images['titre_film']; ?></p></figcaption>
                </figure>
            </div>
            <?php } ?>
    </div>
    <!-- Slider controls -->
    <button type="button" class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30">
            <svg aria-hidden="true" class="w-6 h-6 text-white dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
            <span class="sr-only">Previous</span>
        </span>
    </button>
    <button type="button" class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30">
            <svg aria-hidden="true" class="w-6 h-6 text-white dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
            <span class="sr-only">Next</span>
        </span>
    </button>
</div>