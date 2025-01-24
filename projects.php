<?php
require_once 'includes/imports.php';
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.19/dist/full.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="css/input.css">
    <link rel="stylesheet" href="css/output.css">
    <link rel="stylesheet" href="css/projects.css">
    <link rel="stylesheet" href="css/tailwind.css">
    <link rel="stylesheet" href="css/mq.css">
    <script src="https://unpkg.com/scrollreveal"></script>
    <title>Projetos</title>

</head>

<body>
<header>


<nav class=" border-gray-200 dark:bg-black">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">

        <div class="flex items-center md:order-2 space-x-1 md:space-x-0 rtl:space-x-reverse">
            <button type="button" data-dropdown-toggle="language-dropdown-menu"
                class="inline-flex items-center font-medium justify-center px-4 py-2 text-sm text-white dark:text-white rounded-lg cursor-pointer hover:bg-black dark:hover:bg-black">
                <svg class="w-5 h-5 rounded-full me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 512 512">
                    <rect width="512" height="512" fill="#6da544" />
                    <polygon points="256,56.6 462.6,256 256,455.4 49.4,256" fill="#ffda44" />
                    <circle cx="256" cy="256" r="96" fill="#f0f0f0" />
                    <path fill="#0052b4"
                        d="M205.6 256c0-11.8 3.4-22.8 9.2-32.2l91.4 91.4c-9.5 5.9-20.5 9.2-32.2 9.2-35.3 0-64.4-28.6-68.4-64.4zm136.8 32.2l-91.4-91.4c9.5-5.9 20.5-9.2 32.2-9.2 35.3 0 64.4 28.6 68.4 64.4-11.8 0-22.8 3.4-32.2 9.2z" />
                </svg>

                Português (BR)
            </button>
            <!-- Dropdown -->
            <div class="z-50 hidden my-4 text-base list-none bg-black divide-y divide-black-100 rounded-lg shadow dark:bg-black"
                id="language-dropdown-menu">
                <ul class="py-2 font-medium" role="none">
                    <li>
                        <a href="#"
                            class="block px-4 py-2 text-sm  hover:bg-gray-100 dark:text-white dark:hover:bg-black dark:hover:text-white"
                            role="menuitem">
                            <div class="inline-flex items-center">
                                <svg aria-hidden="true" class="h-3.5 w-3.5 rounded-full me-2"
                                    xmlns="http://www.w3.org/2000/svg" id="flag-icon-css-br"
                                    viewBox="0 0 512 512">
                                    <rect width="512" height="512" fill="#6da544" />
                                    <polygon points="256,96 96,256 256,416 416,256 256,96" fill="#ffda44" />
                                    <circle cx="256" cy="256" r="85" fill="#0052b4" />
                                    <path
                                        d="M166 282c3-28 58-56 108-61s84 15 108 29c5 3 3 6 1 8-24 26-69 50-113 52-44 3-96-9-104-26-1-2-2-2-0-2z"
                                        fill="#fff" />
                                </svg>

                                Português (BR)
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="projects-eua.php"
                            class="block px-4 py-2 text-sm  hover:bg-gray-100 dark:text-white dark:hover:bg-black    dark:hover:text-white"
                            role="menuitem" role="menuitem">
                            <div class="inline-flex items-center">
                                <svg aria-hidden="true" class="h-3.5 w-3.5 rounded-full me-2"
                                    xmlns="http://www.w3.org/2000/svg" id="flag-icon-css-us"
                                    viewBox="0 0 512 512">
                                    <g fill-rule="evenodd">
                                        <g stroke-width="1pt">
                                            <path fill="#bd3d44"
                                                d="M0 0h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0z"
                                                transform="scale(3.9385)" />
                                            <path fill="#fff"
                                                d="M0 10h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0z"
                                                transform="scale(3.9385)" />
                                        </g>
                                        <path fill="#192f5d" d="M0 0h98.8v70H0z" transform="scale(3.9385)" />
                                        <path fill="#fff"
                                            d="M8.2 3l1 2.8H12L9.7 7.5l.9 2.7-2.4-1.7L6 10.2l.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8H45l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7L74 8.5l-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9L92 7.5l1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm-74.1 7l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7H65zm16.4 0l1 2.8H86l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm-74 7l.8 2.8h3l-2.4 1.7.9 2.7-2.4-1.7L6 24.2l.9-2.7-2.4-1.7h3zm16.4 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8H45l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9L92 21.5l1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm-74.1 7l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7H65zm16.4 0l1 2.8H86l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm-74 7l.8 2.8h3l-2.4 1.7.9 2.7-2.4-1.7L6 38.2l.9-2.7-2.4-1.7h3zm16.4 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8H45l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9L92 35.5l1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm-74.1 7l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7H65zm16.4 0l1 2.8H86l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm-74 7l.8 2.8h3l-2.4 1.7.9 2.7-2.4-1.7L6 52.2l.9-2.7-2.4-1.7h3zm16.4 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8H45l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9L92 49.5l1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm-74.1 7l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7H65zm16.4 0l1 2.8H86l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm-74 7l.8 2.8h3l-2.4 1.7.9 2.7-2.4-1.7L6 66.2l.9-2.7-2.4-1.7h3zm16.4 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8H45l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9L92 63.5l1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9z"
                                            transform="scale(3.9385)" />
                                    </g>
                                </svg>
                                English (US)
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
            <button data-collapse-toggle="navbar-language" type="button"
                class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                aria-controls="navbar-language" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 1h15M1 7h15M1 13h15" />
                </svg>
            </button>
        </div>
        <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1"
            id="navbar-language">
            <ul
                class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-black md:dark:bg-white-900 dark:border-white-700">
                <li>
                    <a href="index.php" class="block py-2 px-3 text-white rounded md:bg-transparent md:p-0"
                        aria-current="page">Home</a>
                </li>
                <li>
                    <a href="index.php#tech"
                        class="block py-2 px-3 text-white rounded md:bg-transparent md:p-0">Tecnologias</a>
                </li>
                <li>
                    <a href="index.php#compe" class="block py-2 px-3 text-white rounded md:bg-transparent md:p-0"
                        aria-current="page">Competências</a>
                </li>
                <li>
                    <a href="projects.php"
                        class="block py-2 px-3 text-white rounded md:bg-transparent md:p-0">Projetos</a>
                </li>
                <li>
                    <a href="index.php#contato"
                        class="block py-2 px-3 text-white rounded md:bg-transparent md:p-0">Contato</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
</header>

    <main>
        <div class="job flex flex-row justify-center align-center">
            <div class="image-projetos flex flex-col bg-transparent overflow-hidden">
                <div class="background-layer">
                </div>
            </div>
            <div class="list flex flex-col">
                <h1
                    class="mb-4 text-3xl font-normal text-gray-900 dark:text-white md:text-5xl lg:text-6xl text-start">
                    <span class="text-transparent bg-clip-text title-degradado" id="top">MEUS PROJETOS</span>
                </h1>
                <ul class="name-projetos flex-start">
                    <?php foreach ($projetos as $projeto): ?>
                        <li class="li-projeto">
                            <a href="<?= $projeto['link'] ?>" target="_blank" class="projeto-link">
                                <div class="projeto-container">
                                    <div class="seta-container">
                                        <h4 class="seta-title">➜</h4>
                                    </div>
                                    <h4 class="projeto-title"><?= htmlspecialchars($projeto['title']) ?></h4>
                                </div>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
    </main>
    
    <?php Footer($footer); ?>



        <script>
            const projetos = <?php echo json_encode($projetos); ?>;
            const projetoItems = document.querySelectorAll(".li-projeto");
            const backgroundLayer = document.querySelector(".background-layer");

            projetoItems.forEach((projetoLi, index) => {
                const projeto = projetos[index];
                const setaH4 = projetoLi.querySelector(".seta-title");
                const projetoH4 = projetoLi.querySelector(".projeto-title");


                projetoLi.addEventListener("mouseenter", () => {
                    setaH4.style.transform = "translateX(0)";
                    setaH4.style.opacity = "1";
                    setaH4.style.visibility = "visible";
                    projetoH4.style.transform = "translateX(24px)";
                    backgroundLayer.style.backgroundImage = `url(${projeto.image})`;
                    backgroundLayer.style.opacity = "1";
                });

                projetoLi.addEventListener("mouseleave", () => {
                    setaH4.style.transform = "translateX(-100%)";
                    setaH4.style.opacity = "0";
                    projetoH4.style.transform = "translateX(0)";
                    backgroundLayer.style.opacity = "0";
                });
            });
        </script>
        <script src="js/script.js"></script>

        <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
        <script src="tailwind.config.js"></script>

</body>

</html>