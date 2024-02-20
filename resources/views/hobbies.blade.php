<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hobbies</title>
</head>
<body>
    <h1>Hobbies</h1>
    <p>Here are my hobbies</p>
    
    <a href="{{ route('about') }}"><button>About Me</button></a>
    <a href="{{ route('skills') }}"><button>Skills</button></a>

    <h2>Hobbies List</h2>
    <ul>
        @foreach($hobbies as $hobby)
            <li>{{ $hobby }}</li>
        @endforeach
    </ul>
</body>
</html>
