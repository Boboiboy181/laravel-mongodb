<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap w/ Vite</title>
    @vite('resources/js/app.js')
</head>
<body>
<div class="d-flex justify-content-center flex-column align-items-center">
<h1 class="pt-4 px-4 mb-4 text-primary">Laravel + MongoDB</h1>
@yield('content')
</div>
</body>
</html>
