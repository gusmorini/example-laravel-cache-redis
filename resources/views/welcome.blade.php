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
            width: 900px;
            max-width: 90%;
            margin: 1rem auto;
            display: grid;
            grid-template-columns: 1fr;
            grid-gap: 2rem;
        }

        @media (min-width: 576px) {
            .container {
                grid-template-columns: 1fr 1fr;
            }
        }

        @media (min-width: 992px) {
            .container {
                grid-template-columns: 1fr 1fr 1fr;
            }
        }

        .new {
            box-shadow: 0px 10px 15px -3px rgba(0, 0, 0, 0.1);
            background-color: #fbfbfb;
        }

        .new h1 {
            font-size: 1.2rem;
            background-color: #8faeb7;
            color: white;
            padding: 1rem 2rem;
            border-top-right-radius: 0.5rem;
            border-top-left-radius: 0.5rem;
        }

        .new p {
            padding: 2rem;
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
