<!DOCTYPE html>
<html>
<head>
    <title>My Gallery</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>
<body>
    <h1>Photo Gallery</h1>
    <p>Here are 15 photos of me:</p>

    <div class="gallery-grid">
        @for ($i = 1; $i <= 15; $i++)
            <img src="{{ asset('images/P' . $i . '.jpg') }}" alt="Photo {{ $i }}">
        @endfor
    </div>

    <p><a href="/">Home</a> | <a href="/about">About Me</a></p>
</body>
</html>
