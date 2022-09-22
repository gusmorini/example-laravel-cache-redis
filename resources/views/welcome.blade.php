<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>example cache redis</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="css/app.css">
</head>

<body>
    <div class="container">
        @foreach ($news as $new)
            <div class="new">
                <h1>{{ $new->title }}</h1>
                <p>{{ $new->content }}</p>
            </div>
        @endforeach
    </div>
</body>

</html>
