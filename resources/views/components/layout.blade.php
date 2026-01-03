
<!DOCTYPE html>
<html lang="en" data-theme="lofi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SPT Brabčák</title>

    <!--<link rel="stylesheet" href="output.css">-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" href="https://media.b2m.cz/webpodnik/sptbrabcak-cz/icon.png" type="image/ico">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.14.1/dist/cdn.min.js"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen flex flex-col bg-base-200">
    <div class="sticky top-0 z-10 drop-shadow-xl bg-white">
        <nav class="w-full h-16 md:h-20 flex items-center justify-between px-4">
            <!-- Logo a odkazy na levé straně, zarovnané úplně vlevo -->
            <div class="flex items-center space-x-4 uppercase">
                <a href="https://_domain_"><img class="lg:h-20 lg:w-35 h-16 w-18 p-2"
                        src="https://media.b2m.cz/webpodnik/sptbrabcak-cz/Logo-new.jpg" alt="Logo"></a>
                <!-- Desktop navigace -->
                <div class="hidden md:flex items-baseline space-x-4 text-lg font-medium text-black">
                    <a href="#uvod"
                        class="rounded-md px-3 py-2 hover:bg-lime-600 hover:text-white transition duration-500 ease-in-out">Úvod</a>
                    <a href="#about"
                        class="rounded-md px-3 py-2 hover:bg-lime-600 hover:text-white transition duration-500 ease-in-out">Co
                        nás čeká?</a>
                    <a href="#info"
                        class="rounded-md px-3 py-2 hover:bg-lime-600 hover:text-white transition duration-500 ease-in-out">Informace</a>
                    <a href="#vedouci"
                        class="rounded-md px-3 py-2 hover:bg-lime-600 hover:text-white transition duration-500 ease-in-out">Náš
                        Tým</a>
                    <a href="#rezervace"
                        class="rounded-md px-3 py-2 hover:bg-lime-600 hover:text-white transition duration-500 ease-in-out">Registrace</a>
                </div>
            </div>

            <div class="flex items-center justify-center uppercase hidden lg:block">
                <a href="#rezervace"
                    class="relative flex px-8 py-4 items-center text-xl font-semibold rounded-lg justify-center bg-lime-700 text-white hover:bg-lime-500 transition duration-500 ease-in-out">
                    <span class="relative z-10">Přihlásit se</span>
                </a>
            </div>

            <div class="md:hidden" x-data="{ open: false }">
                <button @click="open = !open" class="text-black focus:outline-none">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16m-7 6h7" />
                    </svg>
                </button>





                <div x-show="open" @click.outside="open = false"
                    class="absolute top-16 left-0 right-0 flex  flex-col bg-lime-700 text-white space-y-2 py-4 text-center font-semibold  ">
                    <a href="#uvod"
                        class="inline-block rounded-md mx-10 py-4 hover:bg-lime-600 hover:text-white transition duration-500 ease-in-out ">Úvod</a>
                    <a href="#about"
                        class="inline-block rounded-md hover:bg-lime-600 mx-10 py-4 hover:text-white transition duration-500 ease-in-out">Co
                        nás čeká?</a>
                    <a href="#informace"
                        class="inline-block rounded-md hover:bg-lime-600 mx-10 py-4 hover:text-white transition duration-500 ease-in-out">Informace</a>
                    <a href="#vedouci"
                        class="inline-block rounded-md hover:bg-lime-600 mx-10 py-4 hover:text-white transition duration-500 ease-in-out">Náš
                        Tým</a>
                    <a href="#rezervace"
                        class="inline-block rounded-md hover:bg-lime-600 mx-10 py-4 hover:text-white transition duration-500 ease-in-out">Registrace</a>

                    <div class="flex items-center justify-center ">
                        <a href="#rezervace"
                            class="relative flex px-10 py-4 items-center text-2xl rounded-lg bg-lime-700 text-white hover:bg-lime-500 transition duration-500 ease-in-out">
                            <span class="relative ">PŘIHLÁSIT SE</span>
                        </a>
                    </div>
                </div>
            </div>
        </nav>
    </div>

    <main class="flex-1 container mx-auto px-4 py-8">
        {{ $slot }}
    </main>

   <section class="">
        <!-- Patička -->
        <footer class="text-white py-8 bg-lime-800">
            <div class="container mx-auto px-4">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-10 text-center md:text-left">

                    <div class="">
                        <h3 class="text-lg font-semibold mb-2">Kontakt</h3>
                        <p class="mt-5"><i class="fa-regular fa-phone"></i> Telefon: <a href="tel: 420733454760"> +420
                                733 454 760</a></p>
                        <p> <i class="fa-light fa-envelope"></i> Email:<a href="mailto:info@sptbrabcak.cz">
                                info@sptbrabcak.cz</a> </p>

                    </div>

                    <!-- Rychlé odkazy -->
                    <div class="">
                        <h3 class="text-lg font-bold text-center mb-2">SPT Brabčák</h3>
                        <div class="flex justify-center items-center divide-x mt-6">
                            <a href="https://www.facebook.com">
                                <i class="fa fa-facebook-f mr-8" style="font-size:36px;color:white"></i>
                            </a>
                            <a href="https://www.instagram.com">
                                <i class="fa fa-instagram ml-7" style="font-size:36px;color:white "></i>
                            </a>
                        </div>
                    </div>


                    <div class="flex justify-center md:justify-end">
                        <img src="https://media.b2m.cz/webpodnik/sptbrabcak-cz/prvniLogo.jpg"
                            class="h-full w-1/3 scale-x-[1]" alt="Logo" />
                    </div>
                </div>

                <div class="mt-3 border-t border-gray-400 pt-4 text-center text-sm">
                    <p>&copy; 2025 Sportovní Příměstký Tábor Brabčák. Všechna práva vyhrazena. <a href="https://media.b2m.cz/webpodnik/sptbrabcak-cz/ObchodniPodminky.pdf" class="hover:undeline">Obchodní podmínky</a></p>
                </div>
            </div>
        </footer>
    </section>
</body>
</html>