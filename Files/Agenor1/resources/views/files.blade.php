<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <title>Fájlok listázása</title>
	<link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">
</head>
<body>
<hr>
    <div class="container mt-4">
        <h1>Fájlok a mappában</h1>
        <ul class="list-group">
            @foreach($files as $file)
                <li class="list-group-item"><a href="{{ $file }}">{{ basename($file) }}</a></li>
            @endforeach
        </ul>
    </div>
</body>
</html>