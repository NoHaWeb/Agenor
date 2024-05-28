<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Lists of files</title>
</head>
<body>
    <h1>Files in folder</h1>

    @if(session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

    <div>
        <h2>Uploaded Files</h2>
        <ul>
            @foreach($files as $file)
                <li>{{ basename($file) }} - <a href="{{($file)}}">Download</a></li>
            @endforeach
        </ul>
    </div>
</body>
</html>