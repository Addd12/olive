<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body>
    @include("layouts.navigation")
    <main class="mx-auto max-w-7xl">
        <h1 class="py-3 text-4xl text-center">Olive</h1>
        <div class="grid grid-cols-3 gap-3 my-6">
            <div class="px-2 py-3 m-4">
                <div class="py-6">
                    <h2 class="text-2xl">Extra Virgin Quality</h2>
                    <hr class="" />
                    <li class="px-4 pt-2">Made from the first pressing of olives, ensuring the purest and highest
                        quality.</li>
                </div>
                <div class="py-6">
                    <h2 class="text-2xl">Cold-Pressed Extraction</h2>
                    <li>Extracted without heat to preserve natural flavors and nutrients.</li>
                </div>
                <div class="py-6">
                    <h2 class="text-2xl">Rich in Antioxidants</h2>
                    <li>Contains beneficial compounds like polyphenols and vitamin E, promoting overall health.</li>
                </div>
            </div>
            <div>
                <img src="{{Vite::asset('resources/img/olive-oil-bottle.png')}}" alt="">
            </div>
            <div class="px-2 py-3 m-4">
                <div class="py-6">
                    <h2 class="text-2xl">100% Natural Ingredients</h2>
                    <li>Free from chemicals and additives, offering pure, natural olive oil.</li>
                </div>
                <div class="py-6">
                    <h2 class="text-2xl">Sustainably Sourced</h2>
                    <li>Harvested using environmentally friendly and ethical farming practices.</li>
                </div>
                <div class="py-6">
                    <h2 class="text-2xl">Versatile Culinary Use</h2>
                    <li>Perfect for dressing, cooking, frying, and finishing, adding richness to every meal.</li>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-4 gap-4 text-center py-6 mx-3">
            <div class="p-3 py-6 border border-gray-300 rounded-md shadow-lg">
                <div>
                    <h3 class="text-2xl mb-2">Title 1</h3>
                </div>
                <p>Description 1</p>
            </div>
            <div class="p-3 py-6 border border-gray-300 rounded-md shadow-lg">
                <div>
                    <h3 class="text-2xl mb-2">Title 1</h3>
                </div>
                <p>Description 1</p>
            </div>
            <div class="p-3 py-6 border border-gray-300 rounded-md shadow-lg">
                <div>
                    <h3 class="text-2xl mb-2">Title 1</h3>
                </div>
                <p>Description 1</p>
            </div>
            <div class="p-3 py-6 border border-gray-300 rounded-md shadow-lg">
                <div>
                    <h3 class="text-2xl mb-2">Title 1</h3>
                </div>
                <p>Description 1</p>
            </div>
        </div>

        <div class="my-3 p-10 text-center">
            <h3 class="text-3xl pb-3 ">Some title</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent pretium maximus eros, eget mattis erat
                dictum vel. Aliquam mollis posuere mauris ut aliquam. Morbi hendrerit bibendum leo eu egestas. Morbi
                hendrerit bibendum leo eu egestas. Vivamus vehicula, nunc id bibendum congue, nisl eros sagittis augue,
                quis ultrices urna libero vitae magna. In non maximus velit.</p>
        </div>
    </main>
    @include("layouts.footer")