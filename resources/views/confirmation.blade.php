<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Potwierdzenie zamówienia</title>
</head>
<script>
    function goBack() {
        window.history.back();
    }
</script>
<body>
    <div>
        <ul id="nav">
            <li><a href="{{ url('/') }}">Powrót do strony głównej</a></li>
        </ul>
    </div>
    
    <div class="confirmation">
        <h4>Twoje zamówienie zostało złożone. </h4>
            <br> <p>Wszystkie swoje zamówienia możesz przeglądać w zakładce <a href="#">"zamówienia"</a>.</p>
    </div>
    
</body>
</html>
