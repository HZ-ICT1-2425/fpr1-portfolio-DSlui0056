<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Damian's Portfolio</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <script src="{{ asset('js/scroll.js') }}" defer></script>
</head>
<body>
<main>
    <nav>
        <div class="topnav">
            <a class="active" href="{{ route('home') }}">Home</a>
            <a href="{{ route('profile') }}">Profiel</a>
            <a href="{{ route('dashboard') }}">Dashboard</a>
            <a href="{{ route('faq.index') }}">FAQ</a>
            <a href="{{ route('blogs.index') }}">Blogs</a>
        </div>
    </nav>

    <section class="section">
        <div class="container">
            @yield('content')
        </div>
    </section>


<footer>
    <div class="footer-container">
        <div class="footer-links">
            <ul>
                <li><a href="https://www.linkedin.com/in/damian-van-der-sluis/" target="_blank">Mijn LinkedIn</a></li>
                <li><a href="https://learn.hz.nl" target="_blank">Learn Environment</a></li>
                <li><a href="https://portal.hz.nl/" target="_blank">MyHZ Portal</a></li>
                <li><a href="https://github.com/HZ-HBO-ICT" target="_blank">GitHub Environment</a></li>
                <li><a href="https://apps.hz.nl/rooster/Default.aspx?menu=110239084080170187101166073161084015193018067002" target="_blank">HZ Rooster</a></li>
            </ul>
        </div>
        <p>&copy; 2024 Damian Portfolio.</p>
        <div class="footer-logo">
            <img src="{{ asset('images/hzlogo.png') }}" alt="HZ Logo">
        </div>
    </div>
</footer>
</main>
</body>
</html>
