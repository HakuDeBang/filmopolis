<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Filmopolis</title>

        <!-- CSS -->
        <link rel="stylesheet" href="assets/css/reset.css">
        <link rel="stylesheet" href="assets/css/style.css">

        <!-- FAVICON -->
        <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicon/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicon/favicon-16x16.png">
        <link rel="manifest" href="assets/img/favicon/site.webmanifest">

        <!-- FONT AWESOME -->
        <script src="https://kit.fontawesome.com/f3a181213b.js" crossorigin="anonymous"></script>

        <!-- FLATICONS -->
        <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-regular-straight/css/uicons-regular-straight.css'>

        <!-- GOOGLE FONTS -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

        <!-- TAILWIND CSS -->
        <script src="https://cdn.tailwindcss.com"></script>

        <!-- FLOWBITE TAILWIND CSS -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.css" rel="stylesheet"/>

        <!-- TAILWIND CONFIG -->
        <script>
            tailwind.config = {
                theme: {
                    extend: {
                        colors: {
                            eerieBlack: '#212529',
                            spaceCadet: '#2b2d42',
                            cardinal: '#C61D31',
                            antiflashWhite: '#edf2f4',
                        },
                        fontFamily: {
                            'roboto': ['Roboto', 'sans-serif'],
                        },
                        height: {
                            '112': '28rem',
                            '128': '32rem',
                            '144': '36rem',
                            '152': '40rem',
                            '160': '44rem',
                            '168': '48rem',
                            '176': '52rem',
                            '184': '56rem',
                            '192': '60rem',
                            '200': '64rem',
                            '208': '68rem',
                        },
                        width: {
                            '42': '10.25rem',
                            '54': '13.25rem',
                            '68': '17rem',
                        },
                    }
                }
            }
        </script>
    </head>
    <body class="bg-eerieBlack font-roboto text-antiflashWhite">

        <!-- NAVBAR -->
        <?php include('contents/include/navbar.php'); ?>

        <!-- HEADER -->
        <?php include('contents/include/header.php'); ?>

        <!-- CAROUSEL -->
        <?php include('contents/include/carousel.php'); ?>

        <!-- BANNIERE HOMEPAGE -->
        <?php include('contents/include/banner_homepage.php'); ?>

        <div class="card-group flex flex-col place-items-center grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 xl:grid-cols-6 gap-4 mx-10">
            <div class="w-42 sm:w-44 md:w-54">
                <a href="#">
                    <img class="rounded-lg" src="assets/img/films/alice_darling/affiche_film.jpg" alt="" />
                </a>
            </div>
            <div class="w-42 sm:w-44 md:w-54">
                <a href="#">
                    <img class="rounded-lg" src="assets/img/films/alice_darling/affiche_film.jpg" alt="" />
                </a>
            </div>
            <div class="w-42 sm:w-44 md:w-54">
                <a href="#">
                    <img class="rounded-lg" src="assets/img/films/alice_darling/affiche_film.jpg" alt="" />
                </a>
            </div>
            <div class="w-42 sm:w-44 md:w-54">
                <a href="#">
                    <img class="rounded-lg" src="assets/img/films/alice_darling/affiche_film.jpg" alt="" />
                </a>
            </div>
            <div class="w-42 sm:w-44 md:w-54">
                <a href="#">
                    <img class="rounded-lg" src="assets/img/films/alice_darling/affiche_film.jpg" alt="" />
                </a>
            </div>
            <div class="w-42 sm:w-44 md:w-54">
                <a href="#">
                    <img class="rounded-lg" src="assets/img/films/alice_darling/affiche_film.jpg" alt="" />
                </a>
            </div>
            <div class="w-42 sm:w-44 md:w-54">
                <a href="#">
                    <img class="rounded-lg" src="assets/img/films/alice_darling/affiche_film.jpg" alt="" />
                </a>
            </div>
        </div>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js"></script>
    </body>
</html>