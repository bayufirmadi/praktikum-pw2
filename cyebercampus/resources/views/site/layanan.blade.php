<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Layanan</title>
</head>
<body>
    <h1>Layanan</h1>
    <p>Layanan program studi sistem informasi meliputi:</p>
    <ol>
        @foreach($list_layanan as $ls)
        <li>{{$ls}}</li>
        @endforeach
    </ol>
</body>
</html>