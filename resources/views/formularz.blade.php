<!DOCTYPE html>
<html lang="pl">

<head>
    <title>Zamów zioła</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="{{ asset('js/formularz.js') }}"></script>
    </head>

<body>
    <div id="menu">
        <ul id="nav">
            <li><a href="{{ url('/') }}">Home</a></li>
            <li><a href="{{ url('/formularz') }}">Zamów zioła</a></li>
            <li><a href="{{ url('/kontakt') }}">Kontakt</a></li>
        </ul>
    </div>
    <div id="cennik">
        <h2>Cennik</h2>
        <ul>
            <li>50g - 15zł</li>
            <li>100g - 24zł</li>
            <li>150g - 33zł</li>
            <li>200g - 42zł</li>
        </ul>
    </div>
    <div>
        <form id="order" action="#" method="get">
            <fieldset>
                <legend>Wybierz mieszankę</legend>
                <p>
                    <input type="radio" name="mix" value="ready" id="ready">
                    <label for="ready">Gotowa mieszanka</label>
                    <input type="radio" name="mix" value="custom" id="custom">
                    <label for="custom">Własna mieszanka</label>
                </p>
                <fieldset id="readyMixOptions">
                    <legend>Gotowa mieszanka</legend>
                    <p>
                        <input type="radio" name="ready" value="spokój" id="spokój">
                        <label for="spokój">Spokój (melisa, kozłek lekarski, passiflora, mięta)</label><br>
                        <input type="radio" name="ready" value="przeziebienie" id="przeziebienie">
                        <label for="przeziebienie">Przeziębienie (owoc czarnego bzu, kwiat lipy, tymianek, hibiskus,
                            owoc maliny)</label><br>
                        <input type="radio" name="ready" value="trawienie" id="trawienie">
                        <label for="trawienie">Trawienie (mięta, dziurawiec, korzeń arcydzięgla)</label><br>
                        <input type="radio" name="ready" value="gardlo" id="gardlo">
                        <label for="gardlo">Gardło (tymianek, podbiał, prawoślaz, siemię lniane)</label><br>
                        <input type="radio" name="ready" value="samopoczucie" id="samopoczucie">
                        <label for="samopoczucie">Dobre samopoczucie (melisa, natka pietruszki, passiflora, hibiskus,
                            pigwa)</label><br>
                    </p>
                </fieldset>
                <fieldset id="customMixOptions">
                    <legend>Skomponuj własną mieszankę</legend>
                    <p>

                        <select name="ziola" id="ziola" multiple required>
                            <option value="mieta">mięta</option>
                            <option value="rumianek">rumianek</option>
                            <option value="szałwia">szałwia</option>
                            <option value="pokrzywa">pokrzywa</option>
                            <option value="bez">kwiat czarnego bzu</option>
                            <option value="lipa">lipa</option>
                            <option value="melisa">melisa</option>
                        </select>
                    </p>
                </fieldset>
                <p>
                    Ilość:
                    <input type="radio" id="1" name="quantity" value="50">50g
                    <input type="radio" id="2" name="quantity" value="100">100g
                    <input type="radio" id="3" name="quantity" value="150">150g
                    <input type="radio" id="4" name="quantity" value="200">200g
                     
                </p>
            </fieldset>

            <p>
                <button type="button" onclick="addToCart()">Dodaj do koszyka</button>
            </p>
        </form>
    </div>
    <div id="cart">
        <h3>Koszyk</h3>
        <p>Koszyk jest pusty</p>
    </div>
    <form id="info">
    <fieldset>
        <legend>Dane osobowe</legend>
        <p>
            <label for="imie">Imię*:</label><br>
            <input type="text" id="imie" name="imie" required
                pattern="^[a-zA-ZąćęłńóśżźĄĆĘŁŃÓŚŻŹ]{2,20}( [a-zA-ZąćęłńóśżźĄĆĘŁŃÓŚŻŹ]{2,20})?$"><br>
            <span id="imieError" class="error">Proszę podać poprawne imię.</span>
        </p>
        <p>
            <label for="nazwisko">Nazwisko*: </label><br>
            <input type="text" id="nazwisko" name="nazwisko" required
                pattern="^[a-zA-ZąćęłńóśżźĄĆĘŁŃÓŚŻŹ]{2,40}(-[a-zA-ZąćęłńóśżźĄĆĘŁŃÓŚŻŹ]{2,20})?$"><br>
            <span id="nazwiskoError" class="error">Proszę podać poprawne nazwisko.</span>
        </p>
        <p>
            <label for="email">Email*:</label><br>
            <input type="email" id="email" name="email" required
                pattern="^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$"><br>
            <span id="emailError" class="error">Proszę podać poprawny adres email.</span>
        </p>
        <p>
            <label for="telefon">Telefon:</label><br>
            <input type="tel" id="telefon" name="telefon"
                pattern="^[0-9]{9,15}$"><br>
            <span id="telefonError" class="error">Proszę podać poprawny numer telefonu.</span>
        </p>
    </fieldset>
    <p>
        <button type="button" onclick="submitOrder()">Złóż zamówienie</button>
        <button type="button" onclick="resetForm()">Wyczyść dane osobowe</button>
    </p>
</form>
</body>

</html>