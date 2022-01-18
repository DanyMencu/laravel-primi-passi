<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <style>
        a { 
            color : blue;
            text-decoration : none;
            font-weight: 600;
            font-size: 20px;
        }
    </style>
</head>
<body>
    <nav>
        <ul>
            <li>
                <a href="/">Home</a>
            </li>
            <li>
                <a href="{{ $url_contact }}">Contact</a>
            </li>
        </ul>
    </nav>
    <main>
        <h1>{{ $title }}</h1>
        <p>{{ $content }}</p>
    </main>
</body>
</html>