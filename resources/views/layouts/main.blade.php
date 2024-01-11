<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="/css/main.css">
    <title>@yield('title')</title>
</head>

<body>
    <div class="navbar">
        <ul class="nav justify-content-center bg-dark">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{ route('projects') }}">Projetos</a>
        </ul>
    </div>

    @yield('content')

    <footer id="footer" class="footer bg-dark">
        <div class="textos">
            <p class="text-footer">Portfolio Gustavo Pacheco &copy; {{ date('Y') }}</p>
            <p class="text-git">Email: gupachecos@gmail.com</p>
            <a href="https://github.com/Gupacheco">
                <p class="text-git">GitHub</p>
            </a>
        </div>
    </footer>

</body>



</html>
