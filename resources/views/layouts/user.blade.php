<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=PT+Serif&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
        <script defer src="js/activePage.js"></script>
        <link rel="stylesheet" href="css/style.css">
        <title>Museum Bahari | {{ $title }} </title>
    </head>
    <body>
    
        @include('partials.navbar')

        <!-- Untuk Halaman Home -->
        <div>
        @yield('about')
        @yield('home')
        @yield('gallery')
        </div>

    </body>
    </html> 