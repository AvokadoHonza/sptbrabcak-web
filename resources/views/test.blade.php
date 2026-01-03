<!DOCTYPE html>
<html lang="en">
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
<body>
    

<x-layout>
    <x-slot:title>
        Test
    </x-slot:title>

    <div class="max-w-2xl mx-auto">
        <div class="card bg-base-100 shadow mt-8">
            <div class="card-body">
                <div>
                    <h1 class="text-3xl font-bold">Welcome to Test!</h1>
                    <p class="mt-4 text-base-content/60">TEST FUNGUJEEEEEEEEEEEEE!</p>
                </div>
            </div>
        </div>
    </div>
</x-layout>
</body>
</html>