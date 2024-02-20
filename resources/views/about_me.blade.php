<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Me</title>
</head>
<body>
    <h1>About Me</h1>
    <p>Hello!</p>
    
    <a href="{{ route('skills') }}"><button>Skills</button></a>
    <a href="{{ route('hobbies') }}"><button>Hobbies</button></a>

    <h2>Personal Information</h2>
    <ul>
        <li>Name: {{ $data['name'] }}</li>
        <li>Age: {{ $data['age'] }}</li>
        <li>Occupation: {{ $data['occupation'] }}</li>
    </ul>
</body>
</html>
