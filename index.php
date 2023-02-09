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
<header class="fixed top-2 left-0 right-0 z-10 mx-2">
    <nav class="bg-[#202124fc] rounded-full py-2">
        <ul class="flex justify-between items-center px-3">
            <li><a href="index.php" class="text-white"><img src="img/jjl-3d-v2.svg" alt="" class="w-9"></a></li>
            <li><a href="projets.php" class="text-white">Projets</a></li>
            <li><a href="contact.php" class="text-white">Contact</a></li>
        </ul>
    </nav>
</header>
    <main>
        <article>
            <section class="w-full flex flex-col items-center">
                <div id="title">
                    <h1>Projets</h1>
                </div>
                <div id="containerProject" class="flex flex-col justify-center items-center mx-5 space-y-5">
                    <div id="project1" class="bg-[#181A1D] hover:bg-[#202124] rounded-lg ease-in duration-300">
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
                            <a href="#" class="bg-[#202124] px-2 rounded hover:text-[#2137fc]">
                                <i class="fa-solid fa-globe"></i>
                                Projet
                            </a>
                            <a href="#" class="bg-[#202124] px-2 rounded hover:text-[#2137fc]">
                                <i class="fa-brands fa-github"></i>
                                Github
                            </a>
                        </div>
                    </div>
                    <div id="project1" class="bg-[#181A1D] hover:bg-[#202124]">
                        <div id="imgContainer">
                            <img src="projet/autocomplete.jpg" alt="Oclock">
                        </div>
                        <div id="titleProject">
                            <h2>
                                <span>
                                  O'clock
                                </span>
                            </h2>
                            <p>
                                <span>
                                    Projet Minuteur, chrono, horloge
                                </span>
                            </p>
                        </div>
                        <div id="linkProject">
                            <a href="#">Voir le projet</a>
                            <a href="#">Voir le code</a>
                        </div>
                    </div>
                    <div id="project1" class="bg-[#181A1D] hover:bg-[#202124]">
                        <div id="imgContainer">
                            <img src="projet/oclock.jpg" alt="Oclock">
                        </div>
                        <div id="titleProject">
                            <h2>
                                <span>
                                  O'clock
                                </span>
                            </h2>
                            <p>
                                <span>
                                    Projet Minuteur, chrono, horloge
                                </span>
                            </p>
                        </div>
                        <div id="linkProject">
                            <a href="#">Voir le projet</a>
                            <a href="#">Voir le code</a>
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