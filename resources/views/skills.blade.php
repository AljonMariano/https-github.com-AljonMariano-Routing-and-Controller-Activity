<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skills</title>
</head>
<body>
    <h1>Skills</h1>
    <p>here are my Skills</p>
    
    <a href="{{ route('about') }}"><button>About Me</button></a>
    <a href="{{ route('hobbies') }}"><button>Hobbies</button></a>

    <h2>Skills List</h2>
    <ul>
        @foreach($skills as $skill)
            <li>{{ $skill }}</li>
        @endforeach
    </ul>
</body>
</html>
