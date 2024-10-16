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
    <main>
        <h1 class="py-3 text-4xl text-center">Olive</h1>
        <div class="grid grid-cols-3 gap-3">
            <div class="px-2 py-3 m-4">
                <div class="py-6">
                    <h2 class="text-2xl">Extra Virgin Quality</h2>
                    <li>Made from the first pressing of olives, ensuring the purest and highest quality.</li>
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
                    <h2 class="text-2xl">Extra Virgin Quality</h2>
                    <li>Made from the first pressing of olives, ensuring the purest and highest quality.</li>
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
        </div>
    </main>
</body>

</html>