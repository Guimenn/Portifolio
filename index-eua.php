<?php

require_once 'includes/imports.php';

?>

<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.19/dist/full.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="css/input.css">
    <link rel="stylesheet" href="css/output.css">
    <link rel="stylesheet" href="css/tailwind.css">
    <link rel="stylesheet" href="css/mq.css">
    <script src="https://unpkg.com/scrollreveal"></script>


</head>

<body>

    <header>


        <nav class=" border-gray-200 dark:bg-black">
            <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">

                <div class="flex items-center md:order-2 space-x-1 md:space-x-0 rtl:space-x-reverse">
                    <button type="button" data-dropdown-toggle="language-dropdown-menu"
                        class="inline-flex items-center font-medium justify-center px-4 py-2 text-sm text-white dark:text-white rounded-lg cursor-pointer hover:bg-black dark:hover:bg-black">
                        <svg aria-hidden="true" class="h-3.5 w-3.5 rounded-full me-2" xmlns="http://www.w3.org/2000/svg"
                            id="flag-icon-css-us" viewBox="0 0 512 512">
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
                    </button>
                    <!-- Dropdown -->
                    <div class="z-50 hidden my-4 text-base list-none bg-black divide-y divide-black-100 rounded-lg shadow dark:bg-black"
                        id="language-dropdown-menu">
                        <ul class="py-2 font-medium" role="none">
                            <li>
                                <a href="index.php"
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
                                <a href="index-eua.php"
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
                        class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-black dark:bg-black md:dark:bg-black dark:border-black">
                        <li>
                            <a href="#" class="block py-2 px-3 text-white rounded md:bg-transparent md:p-0"
                                aria-current="page">Home</a>
                        </li>
                        <li>
                            <a href="#tech"
                                class="block py-2 px-3 text-white rounded md:bg-transparent md:p-0">Technology</a>
                        </li>
                        <li>
                            <a href="#compe"
                                class="block py-2 px-3 text-white rounded md:bg-transparent md:p-0">Competencies</a>
                        </li>
                        <li>
                            <a href="projects-eua.php"
                                class="block py-2 px-3 text-white rounded md:bg-transparent md:p-0">Projects</a>
                        </li>
                        <li>
                            <a href="#contato"
                                class="block py-2 px-3 text-white rounded md:bg-transparent md:p-0">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <section id="">
            <div class="intro">
                <div class="name">
                    <img src="img/foto.png" alt="">
                    <h1 id="typewriter-name" class="font-mono text-2xl"></h1>
                </div>

                <div class="title">
                    <h1 class="text">UNDERSTAND HOW A <span class="text-[#19D1C2]">METHOD </span>BECOMES A <span
                            class="text-[#19D1C2]">PROJECT</span> </h1>
                    <br>
                    <p class="text-p">CREATING SYSTEMS WITH PASSION AND CONSTANT LEARNING!
                    </p>
                </div>
            </div>
        </section>
        <section id="tech">
            <div class="technology flex flex-row items-center justify-center gap-4 flex-wrap mt-4
            ">
                <h1 class="text-xl text-[white] font-normal    " id="tech">
                    TECHNOLOGIES I WORK WITH
                </h1>

                <div class="flex items-center justify-center gap-4 flex-wrap mt-4 cards">
                    <?php
                    $tecnologias = array_unique($tecnologias, SORT_REGULAR);


                    foreach ($tecnologias as $tecnologia) {
                        $icon = $tecnologia["icon"];
                        $name = $tecnologia["name"];
                        $stars = $tecnologia["stars"];

                        echo "
                            <div class='card'>  
                                <img src='$icon' alt='$name'>
                                <div class='flex items-center'>
                                    $stars
                                </div>
                            </div>
                        ";
                    }

                    ?>

                </div>

            </div>
        </section>
        <section id="compe">
            <div class="comp">
                <div class="flex flex-col container-comp">
                    <div class="card-comp border" id="right">
                        <img class="img-icon"
                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAACXBIWXMAAAsTAAALEwEAmpwYAAACfUlEQVR4nO1ZPW8TQRBdR0F8lDTeiYLT8F8CCIlfAAQlIIToCFDyf2gd3F5mT7iAi5hxrkIIQ4KQKGgpnMChWa+TkxXQ3dnHrdE+acvZmXcz8+ydUSogIGBmrPb7F4HNfSDsacYvwOYI2GQ1nSPrg7AnPteG0YXZGSil2mRuajIHNQb+16MJP+vB7o2ZSMAAHwPhT3fpG03m9so+XlFRtKzqQhQtiw9N8R0gfOt8H2s2jypnwpE41rT7RGVZS/1rZFlLE26fxMHx9dI9MSknS6JhAJtn48zgp1I9A4P4waScGsnENLKsBYSJI7OlisIpRiY9oTyBZrzrPu5OcSMyh2JkG9sTQBp33Mc9KG7EOBKjWtWpLJLknCutUWGbiYYrzwBl4wpE/gBN5gUQflCLnJHVtH8ZGL8B4a+FJHL1fe88MN7ShGzvW0QiwOZr7j9atrhECF/mj2b8sZBEzvyBDUROETKi5oRQWlMIpaXmhFBaUwilpeaE/6a0gDHVhN+bIxL5+NQ15Yn4NHzQe6/XKhORsaXyBCvvzL3KRGT26t+AzlQgMp6Gb9caZJF4BvHzfEzFDXOvOnnptRmfNjTEXrIk5LUpsVTPCG6dPFkJEzu2TOOOKEit6pTGnTbjhiaz53wLkc0KRE4njZrMNWDzsalFD4hvwvVKk8bp2S8kySW7eGGzA2yGE6L1HBw5H10ZosuKIy+/5Wa/ZF75Jr9txg1HtFvYyC4+/ZLfpVy/bBa2k62QLCE9lN+hDP5KGcsmVfZ23sgv21jWK90jm1R7QdPyy7KQxYcz3SubVFlCNii/w8qZOKtn7I/jWBIP65ZfPfbRlcYu3RMBAWqu+A1w8c9KwkGYygAAAABJRU5ErkJggg=="
                            alt="1-key">
                        <h1>My Technical Skills</h1>
                        <p>My journey as a Systems Development student has been marked by challenges and achievements
                            that have shaped my vision for the future in technology. During this time, I have
                            participated in academic and personal projects that allowed me to apply concepts learned in
                            the classroom and explore new solutions to real-world problems. With a results-oriented
                            approach, I aim not only to deliver what's expected but to exceed expectations by creating
                            innovative solutions. I believe that technology has the power to transform lives, and this
                            motivation drives me to continue learning and developing my skills. I am determined to
                            contribute to meaningful projects that have a positive impact on society.</p>


                    </div>
                    <div class="self-start card-comp" id="left">
                        <img class="img-icon"
                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAACXBIWXMAAAsTAAALEwEAmpwYAAADUUlEQVR4nO1Zv2sUQRSexIg/EAtRbubUxMLCQhDFShAthKjY2Rl/RBIliJ1RC7HRf8Dayjp2JqYR2XtvNQbdcG/2rggpcpqIilhYiGISszJzc+cRTtmdc7MTuA+m2eG9mW9n3jcz7zHWRhtttIxdExObhMQrgmCcS3gvJC4KiVFKbVGPQTCuxuypeBtbZ8AYyxGe4YRzKU78n40TvONh4XRLJEQI1wXBL+P0NSe8kC/BbuZ5XSwteF6XGoOTf1EQvDFjL3GJ16xXwpBY4lS4waKog602oqiDEwzX5yH9U4ljoradNImMISTeqq4MvE0UMyL0r9a2UyYrsRJR1CEIAkNmkMWFUYxIxQRzBFzCJfNzx+IbEc4rIx3YjkCU/W7zc+fiG0lYUEapqlNSBMF6s7UWYtvUNJw5BpF0Xm0iDRCycJRLeCIkfuAEP7WcEz4SobePrZUVEbJwTh1gteDkhCgIPxq/3/IlOOI8kW2Tk1uFxK/mnnSXRVGn7hgZWScI75vv0/XvrhIRIfRpe4KgWT8nkEZ9DrlNROI9/dcl3mnWzwkfmFU56zQRTjDECZ7xEI819U3wWPnOFf3ja1Z+c+Tt54Q/VODbPJiEC0SqbwyY1tuqiOdtfIisiQiCXiHhc13JbP3IjIjsKHtbOMFDQbCsJTmEvlb8iSyI7Cz5B7jEGePrea7o7WnFXyZE8lQ4yAm/cAnfRejftjn8sj9HAm+7IPikthIPXxy28eEGEXMNSfQkdfRkL5kryit9MP6lOX9F4SouYiTe8qF/YvWIeC4+dTE5EZeSD3zqZY81EZW2ZI4gX8TL1kRU7tW9BB1aEKnejYZTnWSc+YT+7cY52azIskog5yTczCiJ3alJqCR29b5muyIwWC8rEAQ6bVn2u5WCpKpOZb87J6GfE06ZsRWRAQsifzKNnPCkkDgb52xIqc2qZ4BVpnFl7lcEwWZdeJE4JiRWakTTabBgxhhVSXRV4miU32S5X8KnrslvTkK/IToa20gXPt2S386GeBmIbacSA6oI6aD8VvbOjG9IZKwqqTrt6Yr8Sj2XXis/qpJay+FmKr9SFWRhqCW/qpKqipAZym/FeiWaxYw+HKuSOJ+2/PLqGKMqsBPHRBttsP+K37NWSSXfpDf7AAAAAElFTkSuQmCC"
                            alt="2-key">
                        <h1>My Soft Skills</h1>
                        <p>In addition to technical skills, I believe my interpersonal competencies are essential for
                            success in projects and in the professional environment. I have an easy time working in
                            teams, promoting collaboration and the exchange of ideas to achieve common goals. I am
                            communicative, which helps me understand the needs of colleagues and clients, transforming
                            those demands into practical solutions. Another notable trait is my resilience in the face
                            of challenges: I see every obstacle as an opportunity to learn. My ability to solve problems
                            creatively and efficiently makes me adaptable to different contexts and demands.</p>

                    </div>
                    <div class="card-comp border" id="right">
                        <img class="img-icon"
                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAACXBIWXMAAAsTAAALEwEAmpwYAAADdklEQVR4nO1ZS2sUQRCexAQfKCIStyuJiaCCKB7Ef+DB+Dp5EnxFEkVEQTE+8OIlF8GLKP6IXDcGwcds1cQgOslWbSIBD1mTeBARRSQe8nClZ3s2IcawO5vN9sJ+0Jftrer6pruquqscp4oqqigazQMD60HoIjD2KcHPIDQDQpkSjZlgDcY+vWZr2l1XPAPHcWJMJxTTRAkNX3YoxnGVShwrigSk8Cowzhml7xTT2cZh3O64bp1TKrhunV5DsXcOGN+btWeV0JXIO2FIzCpO3HQymRpntZHJ1CjGrpwd4h0t2CfC4xSQKDNA6HZ2Z/BTQT4DKe9SeJzKshOLkcnUAKNvyHQ6+cJEjIz2CccSKMHz5uP25i/ENKmFAse2BDDitZiPO5G/kOC0FippdCoUvl9vjtZ03jJhDHcsAxRq10oQgRSeVkwDSuiHEpwCwQ/A2L11tH9TxRBRjA9y1w2mARB6DYI/g9+YUg0j7kbriUDKOwiMf4DxixqiveHvW/wXm5Vgf5YM3rWeiBJ8ZJzy+j96k3jY6H5lPxHGl1q2aSixe/FcIycOVAyR5QBCD4u59kA5iWyTxP4Y4yFgepK9/GFc54SKI6IYx+ffFvQtlsTjUXVBOYk0Mp1SSTqjmB7rnGKiVndF+0jDcP9OQ2Y2lvT2VSwRDRB8ahLjNcdaIj09a7LZHMf/9xfFdF/rjgnesjyP0Gggn3L3LDkv9NyE4JN2X1GE7pnM/rZJ3ObchOvWLZj7qp/TVhPZ9bFvLTBh8NUFp4IdYOzRxhvf+KXzShTdsOrO7vv1SuiGLucoxu9K8Lc+cvoeFku6O6KqBZuiVjGAyESsfOpS4URsKj6owTetkYnosqVjCRqTdCEyEe2s9hXoKAKRbDW8q6RG5mNPyruz0KYoO6Lf3nPBdaI8RezagIR+x2hbou8IdubaCox+ULYc8VqiPozyjk4jXktMsF0xDZq1NZGOCETmK42K6QgIjS3c2lUeY8DYFqnSuLj2C76/IWi8CPWCUDokWpqB02aNuC6ih3eyMPwWVvtlemZb+I0Jthui8byFgsanXeG3doG/dOQtp7tCYdHAsvCb1rfrgoR1J1W/ra0JvxLY0hZJj+6kBgrKHX5FN2TxclF6dSdVNyHLGH7TkXdiKZ8JkmM2JE6WOvyq7Bpx7dgF+0QVVTgrir//6kqzIqV+owAAAABJRU5ErkJggg=="
                            alt="3-key">
                        <h1>My Professional Goal</h1>
                        <p>As a future full stack developer, my main goal is to establish myself as a prominent
                            professional in the technology field. I want to contribute to the creation of innovative and
                            impactful projects that can positively transform people's lives. I am driven by a passion
                            for technology and a constant desire for learning, which motivates me to stay updated with
                            industry trends. Additionally, I aim to build a solid career based on delivering quality
                            results and strengthening trustworthy professional relationships. My focus is to grow
                            alongside the companies and projects I dedicate myself to, making a difference through my
                            work.</p>

                    </div>

                </div>
            </div>
        </section>
        <section class="sobre-mim" id="contato">
            <div class="me">
                <div class="flex justify-center align-center flex-wrap max-w-screen-xl gap-4 me-dentro">
                    <div class="card-me">
                        <div class="name">
                            <img src="img/foto.png" alt="">
                            <h1 id="typewriter-name" class=" text-base text-white">
                                Guilherme Vidichosqui Men <br>
                                <span class="text-transparent bg-clip-text title-degradad  ">@Guimen </span>
                            </h1>
                        </div>
                        <div class="texts">
                            <h1>Hello!</h1><br>
                            <h2>My name is <span>Guilherme!</span></h2>
                            <p class="text-white">
                                I am a <span>future full stack developer!</span>, with a passion for technology and a
                                solid background in
                                <span>systems development.</span> <br><br> I am always seeking new challenges and
                                opportunities to
                                grow and <span>improve my programming skills.</span> I am eager to contribute to
                                innovative projects and create impactful digital solutions.
                            </p>

                        </div>
                        <div class="flex gap-2">
                            <?php
                            foreach ($socials as $social) {
                                echo '<a href="' . $social['link'] . '" target="_blank" class="inline-flex">
                                       <img src="' . $social['icon'] . '" alt="' . $social['name'] . '" class=' . $social['class'] . '></a>
                         
                        
                                
                                ';
                            }
                            ?>
                        </div>
                    </div>
                </div>
        </section>
        <?php Footer($footer); ?>
    </main>
    <script src="js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
    <script src="tailwind.config.js"></script>

</body>

</html>