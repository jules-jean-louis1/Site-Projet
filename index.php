<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jules Jean-Louis / Projets</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="img/circle-rev-1.png">
    <script src="https://kit.fontawesome.com/8b26d30613.js" crossorigin="anonymous"></script>
    <!-- tailwindcss -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="script.js"></script> 
</head>
<body>
<header class="fixed top-2 left-0 right-0 z-10 mx-2 flex justify-center">
    <nav class="bg-[#181A1Dfc] rounded-full py-2 w-[95%] lg:w-[85%]">
        <ul class="flex justify-between items-center px-3">
            <li><a href="index.php" class="text-white"><img src="img/jjl-3d-v2.svg" alt="" class="w-9"></a></li>
            <div class="flex space-x-2">
                <li class="rounded-full w-9 bg-[#202124] flex justify-center ">
                    <a href="https://github.com/jules-jean-louis1" class="text-[#D2D2D3]">
                        <i class="fa-brands fa-github fa-2x"></i>
                    </a>
                </li>
                <li class="rounded-full w-9 bg-[#202124] flex justify-center ">
                    <a href="contact.php" class="text-[#D2D2D3]">
                        <i class="fa-regular fa-circle-user fa-2x"></i>
                    </a>
                </li>
            </div>
        </ul>
    </nav>
</header>
    <main>
        <article>
            <section class="w-full flex flex-col items-center lg:h-[140vh]">
                <div id="title" class="pt-[20%] pb-[4%] lg:pt-[7%]">
                    <h1 class="text-[#D2D2D3] font-bold text-3xl text-center uppercase">
                        Projets
                    </h1>
                    <p>
                        <span class="text-[#707173]">
                            Liste de mes projets
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
                            <a href="https://jules-jean-louis.students-laplateforme.io/autocompletion/index.php" class="bg-[#27282B] px-2 rounded hover:text-[#a770ff]">
                                <i class="fa-solid fa-globe"></i>
                                Projet
                            </a>
                            <a href="https://github.com/jules-jean-louis1/Autocompletion" class="bg-[#27282B] px-2 rounded hover:text-[#a770ff]">
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
                            <a href="https://jules-jean-louis.students-laplateforme.io/oclock/index.php" class="bg-[#27282B] px-2 rounded hover:text-[#a770ff]">
                                <i class="fa-solid fa-globe"></i>
                                Projet
                            </a>
                            <a href="https://github.com/jules-jean-louis1/oclock" class="bg-[#27282B] px-2 rounded hover:text-[#a770ff]">
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
                            <a href="https://github.com/jules-jean-louis1/memory" class="bg-[#27282B] px-2 rounded hover:text-[#a770ff]">
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
                    <!-- projet list Module de connexion-->
                    <div id="project" class="bg-[#181A1D] hover:bg-[#202124] rounded-lg ease-in duration-300 lg:w-1/4">
                        <div id="imgContainer" class="">
                            <img src="projet/module-connexion.PNG" alt="Oclock" class="object-cover object-center rounded-t-lg">
                        </div>
                        <div id="titleProject" class="flex flex-col items-center py-3">
                            <h2>
                                <span class="text-[#D2D2D3] font-semibold">
                                  Module de connexion
                                </span>
                            </h2>
                            <p>
                                <span class="text-[#707173]">
                                    Module de connexion/inscription en PHP
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
                    <!-- projet list App-favorite-->
                    <div id="project" class="bg-[#181A1D] hover:bg-[#202124] rounded-lg ease-in duration-300 lg:w-1/4">
                        <div id="imgContainer" class="">
                            <img src="projet/previs-app-fav.png" alt="Oclock" class="object-cover object-center rounded-t-lg">
                        </div>
                        <div id="titleProject" class="flex flex-col items-center py-3">
                            <h2>
                                <span class="text-[#D2D2D3] font-semibold">
                                  App-favorite
                                </span>
                            </h2>
                            <p>
                                <span class="text-[#707173]">
                                    Site de favoris en HTML/CSS
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
    <div id="containerFooter" class="w-full p-4">
        <div id="wapperFooter" class="flex flex-col items-center pt-[5%] pb-[2%] w-full lg:p-0">
            <div id="linkFooter" class="flex flex-col space-y-3 w-full lg:flex-row lg:justify-center lg:space-x-5 lg:space-y-0 ">
                <a href="https://github.com/jules-jean-louis1" id="boxFooter" class="px-7 py-4 rounded-lg border-2 border-[#202124] hover:bg-[#202124] flex justify-center
                        ease-in duration-300 ">
                    <button class="flex items-center space-x-3 lg:space-0">
                            <span class="text-[#D2D2D3]">
                                <i class="fa-brands fa-github fa-lg"></i>
                            </span>
                        <span class="text-[#707173]">
                                Github
                            </span>
                    </button>
                </a>
                <a href="https://github.com/jules-jean-louis1" id="boxFooter" class="px-7 py-4 rounded-lg border-2 border-[#202124] hover:bg-[#202124] flex justify-center
                        ease-in duration-300 ">
                    <button class="flex items-center space-x-3 lg:space-0">
                            <span class="text-[#D2D2D3]">
                                <img src="img/jjl-3d-v2.svg" id="logoFooter" alt="" class="w-5">
                            </span>
                        <span class="text-[#707173]">
                                Portfolio
                            </span>
                    </button>
                </a>
            </div>
            <div id="creationFooter" class="pt-[4%] pb-[2%] lg:p-2">
                <h6>
                    <span class="text-[#707173]">
                        Création de Jules Jean-Louis
                    </span>
                </h6>
            </div>
        </div>
    </div>
</footer>
</body>
</html>