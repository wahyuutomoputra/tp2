<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sign In</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body class="container text-center">
    <div class="jumbotron mt-3">
        <h1>Selamat datang {{$users['fullname']}}</h1>
        <p class="lead">Anda login sebagai {{$roles['nama_role']}}</p>
        <a class="btn btn-lg btn-primary" href="../../components/navbar/" role="button">Lihat menu &raquo;</a>
    </div>
</body>

</html>