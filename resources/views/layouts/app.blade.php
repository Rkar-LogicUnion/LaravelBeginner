<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        .item{
            background-color: #4CAF50;
            color: white;
            margin: 10px;
            padding: 10px;
        }
        a{
            display: inline-block;
            background-color: white;
            color:#4CAF50;
            padding: 5px 8px;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <h1>Student Info</h1>
    <div>
        <a href="/students">Home</a>
        <a href="/students/sort/age">Sort by Age</a>
        <a href="/students/trash/data/show">Trash</a>
    </div>
    <div>
        @yield('content')
    </div>
</body>
</html>