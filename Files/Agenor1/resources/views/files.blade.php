<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <title>Fájlok listázása</title>
</head>
<body>
    <h1>Fájlok a mappában</h1>
    <ul>
        @foreach($files as $file)
            <li>{{ $file->getFilename() }}</li>
        @endforeach
    </ul>
</body>
</html>
