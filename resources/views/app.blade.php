<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/css/style.css">
    <link rel="stylesheet" href="css/css/detailbaru.css">
    <link rel="stylesheet" href="css/css/responsive.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <title>Nestlin</title>
</head>
<body>

    @include('component.navbar')

    @yield('content')

    @include('component.footer')

    <script src="js/js/main.js"></script>
    <script src="js/js/create.js"></script>
    <script src="js/js/login.js"></script>
    <script src="js/js/masuk.js"></script>
</body>
</html>
