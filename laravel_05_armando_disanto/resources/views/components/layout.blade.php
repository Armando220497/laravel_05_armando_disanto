<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <x-navbar></x-navbar>
    <div class="container-fluid min-vh-100 bg-custom">
        {{ $slot }}
    </div>
    <footer class="bg-success py-4">
        <div class="container text-center">
            <p>&copy; 2024 Piante&Co. Tutti i diritti riservati.</p>
            <p>Termini di servizio | Privacy</p>
        </div>
    </footer>
</body>

</html>
