<?php
    include '../../../filmopolis/contents/config/admin/pdo.php';
    include '../../../filmopolis/contents/config/select_films.php';
?>
<div class="flex flex-col items-center justify-center my-10">
    <h2 class="text-antiflashWhite bg-cardinal font-medium rounded-lg text-md px-10 py-1 text-center">Prochainement sur Filmopolis</h2>
</div>
<div class="card-group place-items-center grid grid-cols-2 sm:grid-cols-3 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 2xl:grid-cols-6 gap-4 mx-10 mb-10">
    <?php foreach($afficherFilm as $film){ ?>
    <div class="w-42 sm:w-44 md:w-54">
        <a href="#">
            <img class="rounded-lg" src="<?= $film['lien_affiche']; ?>" alt="" />
        </a>
    </div>
    <?php } ?>
</div>