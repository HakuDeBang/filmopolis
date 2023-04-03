<?php
    include '../filmopolis/contents/config/admin/pdo.php';
    include '../filmopolis/contents/config/trait_select_films.php';
?>
<div id="default-carousel" class="relative w-full" data-carousel="slide">
    <!-- Carousel wrapper -->
    <div class="relative overflow-hidden rounded-xl sm:mx-14 h-60 sm:h-96 md:h-112 lg:h-144 xl:h-168 my-10">
        <?php foreach($afficherGalerie as $galerie){ ?>
        <div class="hidden duration-3000 ease-in-out" data-carousel-item>
            <img src="<?= $galerie['lien_galerie']; ?>" class="absolute block w-auto -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
        <?php } ?>
    </div>
</div>