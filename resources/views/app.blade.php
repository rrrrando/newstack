<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @production
    @php
    $manifest = json_decode(file_get_contents(public_path('dist/manifest.json')), true);
    @endphp
    <script type="module" src="/dist/{{ $manifest['index.html']['file'] }}"></script>
    <link rel="stylesheet" href="/dist/{{ $manifest['index.html']['css'][0] }}">
    @else
    <script type="module" src="http://localhost:3000/@@vite/client"></script>
    <script type="module" src="http://localhost:3000/resources/js/app.js"></script>
    @endproduction
</head>

<body>
    @inertia
</body>

</html>