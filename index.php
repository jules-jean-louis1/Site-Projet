<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jules Jean-Louis / Projets</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/8b26d30613.js" crossorigin="anonymous"></script>
    <!-- tailwindcss -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="script.js"></script> 
</head>
<body>
<header class="fixed top-2 left-0 right-0 z-10 mx-2 flex justify-center">
    <nav class="bg-[#202124fc] rounded-full py-2 lg:w-[85%]">
        <ul class="flex justify-between items-center px-3">
            <li><a href="index.php" class="text-white"><img src="img/jjl-3d-v2.svg" alt="" class="w-9"></a></li>
            <li class="rounded-full w-[3%]">
                <a href="contact.php" class="text-white bg-red ">
                    <i class="fa-regular fa-user"></i>
                </a>
            </li>
        </ul>
    </nav>
</header>
    <main>
        <article>
            <section class="w-full flex flex-col items-center lg:h-[100vh]">
                <div id="title" class="pt-[7%]">
                    <h1 class="text-[#D2D2D3] font-bold text-3xl text-center">Projets</h1>
                    <p>
                        <span class="text-[#707173]">
                            Voici une liste de mes projets
                        </span>
                    </p>
                </div>
                <div id="containerProject" class="flex flex-col justify-center items-center mx-5 space-y-5 lg:flex-row lg:flex-wrap lg:space-x-5 lg:space-y-4">
                    <!-- projet list oclock-->
                    <div id="project" class="bg-[#181A1D] hover:bg-[#202124] rounded-lg ease-in duration-300 lg:w-1/4 lg:mt-5 lg:ml-5">
                        <div id="imgContainer" class="">
                            <img src="projet/oclock.jpg" alt="Oclock" class="object-cover object-center rounded-t-lg">
                        </div>
                        <div id="titleProject" class="flex flex-col items-center py-3">
                            <h2>
                                <span class="text-[#D2D2D3] font-semibold">
                                  O'clock
                                </span>
                            </h2>
                            <p>
                                <span class="text-[#707173]">
                                    Projet Minuteur, chrono, horloge
                                </span>
                            </p>
                        </div>
                        <div id="linkProject" class="flex justify-center mb-2 space-x-2 text-[#707173]">
                            <a href="#" class="bg-[#27282B] px-2 rounded hover:text-[#a770ff]">
                                <i class="fa-solid fa-globe"></i>
                                Projet
                            </a>
                            <a href="#" class="bg-[#27282B] px-2 rounded hover:text-[#a770ff]">
                                <i class="fa-brands fa-github"></i>
                                Github
                            </a>
                        </div>
                    </div>
                    <!-- projet list Autocomplete-->
                    <div id="project" class="bg-[#181A1D] hover:bg-[#202124] rounded-lg ease-in duration-300 lg:w-1/4">
                        <div id="imgContainer" class="">
                            <img src="projet/autocomplete.jpg" alt="Oclock" class="object-cover object-center rounded-t-lg">
                        </div>
                        <div id="titleProject" class="flex flex-col items-center py-3">
                            <h2>
                                <span class="text-[#D2D2D3] font-semibold">
                                  Autocomplete
                                </span>
                            </h2>
                            <p>
                                <span class="text-[#707173]">
                                    Autocomplete avec JS et PHP
                                </span>
                            </p>
                        </div>
                        <div id="linkProject" class="flex justify-center mb-2 space-x-2 text-[#707173]">
                            <a href="#" class="bg-[#27282B] px-2 rounded hover:text-[#a770ff]">
                                <i class="fa-solid fa-globe"></i>
                                Projet
                            </a>
                            <a href="#" class="bg-[#27282B] px-2 rounded hover:text-[#a770ff]">
                                <i class="fa-brands fa-github"></i>
                                Github
                            </a>
                        </div>
                    </div>
                    <!-- projet list Runtrack3-->
                    <div id="project" class="bg-[#181A1D] hover:bg-[#202124] rounded-lg ease-in duration-300 lg:w-1/4">
                        <div id="imgContainer" class="">
                            <img src="projet/runtrack3.png" alt="Oclock" class="object-cover object-center rounded-t-lg">
                        </div>
                        <div id="titleProject" class="flex flex-col items-center py-3">
                            <h2>
                                <span class="text-[#D2D2D3] font-semibold">
                                  Runtrack3
                                </span>
                            </h2>
                            <p>
                                <span class="text-[#707173]">
                                    Découverte de JS
                                </span>
                            </p>
                        </div>
                        <div id="linkProject" class="flex justify-center mb-2 space-x-2 text-[#707173]">
                            <a href="#" class="bg-[#27282B] px-2 rounded hover:text-[#a770ff]">
                                <i class="fa-solid fa-globe"></i>
                                Projet
                            </a>
                            <a href="#" class="bg-[#27282B] px-2 rounded hover:text-[#a770ff]">
                                <i class="fa-brands fa-github"></i>
                                Github
                            </a>
                        </div>
                    </div>
                    <!-- projet list Memory-->
                    <div id="project" class="bg-[#181A1D] hover:bg-[#202124] rounded-lg ease-in duration-300 lg:w-1/4">
                        <div id="imgContainer" class="">
                            <img src="projet/memory.jpg" alt="Oclock" class="object-cover object-center rounded-t-lg">
                        </div>
                        <div id="titleProject" class="flex flex-col items-center py-3">
                            <h2>
                                <span class="text-[#D2D2D3] font-semibold">
                                  Memory
                                </span>
                            </h2>
                            <p>
                                <span class="text-[#707173]">
                                    Jeu de paires en PHP
                                </span>
                            </p>
                        </div>
                        <div id="linkProject" class="flex justify-center mb-2 space-x-2 text-[#707173]">
                            <a href="#" class="bg-[#27282B] px-2 rounded hover:text-[#a770ff]">
                                <i class="fa-solid fa-globe"></i>
                                Projet
                            </a>
                            <a href="#" class="bg-[#27282B] px-2 rounded hover:text-[#a770ff]">
                                <i class="fa-brands fa-github"></i>
                                Github
                            </a>
                        </div>
                    </div>
                    <!-- projet list cms-->
                    <div id="project" class="bg-[#181A1D] hover:bg-[#202124] rounded-lg ease-in duration-300 lg:w-1/4">
                        <div id="imgContainer" class="">
                            <img src="projet/CMS-WP.jpg" alt="Oclock" class="object-cover object-center rounded-t-lg">
                        </div>
                        <div id="titleProject" class="flex flex-col items-center py-3">
                            <h2>
                                <span class="text-[#D2D2D3] font-semibold">
                                  CMS - Boutique en ligne
                                </span>
                            </h2>
                            <p>
                                <span class="text-[#707173]">
                                    Découverte de Wordpress
                                </span>
                            </p>
                        </div>
                        <div id="linkProject" class="flex justify-center mb-2 space-x-2 text-[#707173]">
                            <a href="#" class="bg-[#27282B] px-2 rounded hover:text-[#a770ff]">
                                <i class="fa-solid fa-globe"></i>
                                Projet
                            </a>
                            <a href="#" class="bg-[#27282B] px-2 rounded hover:text-[#a770ff]">
                                <i class="fa-brands fa-github"></i>
                                Github
                            </a>
                        </div>
                    </div>
                    <!-- projet list Reservation de salles-->
                    <div id="project" class="bg-[#181A1D] hover:bg-[#202124] rounded-lg ease-in duration-300 lg:w-1/4">
                        <div id="imgContainer" class="">
                            <img src="projet/rsalles.jpg" alt="Oclock" class="object-cover object-center rounded-t-lg">
                        </div>
                        <div id="titleProject" class="flex flex-col items-center py-3">
                            <h2>
                                <span class="text-[#D2D2D3] font-semibold">
                                  Reservation de salles
                                </span>
                            </h2>
                            <p>
                                <span class="text-[#707173]">
                                    Site de réservation en PHP
                                </span>
                            </p>
                        </div>
                        <div id="linkProject" class="flex justify-center mb-2 space-x-2 text-[#707173]">
                            <a href="#" class="bg-[#27282B] px-2 rounded hover:text-[#a770ff]">
                                <i class="fa-solid fa-globe"></i>
                                Projet
                            </a>
                            <a href="#" class="bg-[#27282B] px-2 rounded hover:text-[#a770ff]">
                                <i class="fa-brands fa-github"></i>
                                Github
                            </a>
                        </div>
                    </div>
                    <!-- projet list Livre d'or-->
                    <div id="project" class="bg-[#181A1D] hover:bg-[#202124] rounded-lg ease-in duration-300 lg:w-1/4">
                        <div id="imgContainer" class="">
                            <img src="projet/livre-or.jpg" alt="Oclock" class="object-cover object-center rounded-t-lg">
                        </div>
                        <div id="titleProject" class="flex flex-col items-center py-3">
                            <h2>
                                <span class="text-[#D2D2D3] font-semibold">
                                  Livre d'or
                                </span>
                            </h2>
                            <p>
                                <span class="text-[#707173]">
                                    Livre d'or en PHP
                                </span>
                            </p>
                        </div>
                        <div id="linkProject" class="flex justify-center mb-2 space-x-2 text-[#707173]">
                            <a href="#" class="bg-[#27282B] px-2 rounded hover:text-[#a770ff]">
                                <i class="fa-solid fa-globe"></i>
                                Projet
                            </a>
                            <a href="#" class="bg-[#27282B] px-2 rounded hover:text-[#a770ff]">
                                <i class="fa-brands fa-github"></i>
                                Github
                            </a>
                        </div>
                    </div>
                </div>
            </section>
        </article>
    </main>
    <footer>

    </footer>
</body>
</html>