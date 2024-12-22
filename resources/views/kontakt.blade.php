<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontakt</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    </head>
<body>
    <h1></h1>
    <!-- Authentication Links -->
    <div class="welcome">
        @auth
        <a href="{{ url('/profile/partials/edit') }}">
        Witaj, {{ Auth::user()->name }}
        </a>
        @endauth
    </div>
    <div class="auth-links">
        @auth
        <a href="{{ route('logout') }}"
           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            Wyloguj
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
        @else
            <a href="{{ route('login') }}">Logowanie</a>
            @if (Route::has('register'))
                <a href="{{ route('register') }}">Rejestracja</a>
            @endif
        @endauth
    </div>


    <div id="menu">
        <ul id="nav">
            <li><a href="{{ url('/') }}">Home</a></li>
            <li><a href="{{ url('/formularz') }}">Zamów zioła</a></li>
            <li><a href="{{ url('/kontakt') }}">Kontakt</a></li>
        </ul>
    </div>
    

    <div class="map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d27475.896421746987!2d22.546039775856727!3d51.20597787317929!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2spl!4v1718104888643!5m2!1sen!2spl" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

    <div class="contact-info">
        <p><strong>Adres:</strong> ul.Żeglarska 8, 20-443 Lublin</p>
        <p><strong>Telefon:</strong> +48 675 456 789</p>
        <p><strong>Email:</strong> serwer@roslin.com</p>
    </div>

    
</body>
</html>
