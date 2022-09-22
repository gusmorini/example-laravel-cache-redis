<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>example cache redis</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet" />

    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            font-family: 'Nunito';
        }

        body {
            background-color: #f3f1ef;
            color: #343a3a;
        }

        .container {
            width: 700px;
            margin: 0 auto;
        }

        .new {
            margin-bottom: 0.5rem;
            padding-bottom: 0.5rem;
            border-bottom: 1px dotted rgb(235, 235, 235);
        }

        .new h1 {
            font-size: 1.4rem;
            background-color: #8faeb7;
            color: white;
            padding: 0.2rem 0.6rem;
        }

        .new p {
            background-color: #fbfbfb;
            padding: 0.6rem;
        }
    </style>

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
