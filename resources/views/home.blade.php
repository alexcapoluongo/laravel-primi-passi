


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/style.css">
</head>
<body>
    <header>
        <ul>
            @foreach ($menu as $item)
            <li><a href="{{ $item['viewLink'] }}"> {{ $item['name'] }} </li>
            @endforeach
        </ul>
    </header>
</body>
</html>