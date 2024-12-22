<!DOCTYPE HTML>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>zielnik.com</title>
</head>
<body>
    <h1>Serwer Roślin</h1>

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

        

    
    <div class="zielnik">
        <ul class="galeria">
            <li class="obrazek">
                <a>
                    <img src="{{ asset('images/rumianek_draw.jpg') }}" alt="image1" class="gallery-img">
                    <div class="description">Rumianek (Matricaria L.) – rodzaj roślin z rodziny astrowatych. Obejmuje 5 gatunków i występują w całej strefie umiarkowanej półkuli północnej.
                        <br><br>Posiada szereg właściwości leczniczych, w tym przeciwzapalne, przeciwbakteryjne, przeciwbólowe, wspierające trawienie, relaksujące, poprawiające sen oraz wspomagające proces gojenia się ran.
                    </div>
                </a>
            </li>
            <li class="obrazek">
                <a>
                    <img src="{{ asset('images/pokrzywa_draw.jpg') }}" alt="image2" class="gallery-img">
                    <div class="description">Pokrzywa (Urtica L.) – rodzaj jednorocznych roślin zielnych lub bylin z rodziny pokrzywowatych. Należy do niej co najmniej 68 gatunków rozpowszechnionych na całej kuli ziemskiej z wyjątkiem Antarktydy.
                        <br>Pokrzywa zwyczajna to roślina bogata w związki biologicznie czynne. Są to miedzy innymi witaminy: B2, B5, K i C oraz karotenoidy (np. karoten, likopen) i flawonoidy (m.in. kwercetyna, kemferol i rutyna).
                        Ma działanie przeciwzapalne, odkażające, wzmacniające organizm. 

                    </div>
                </a>
            </li>
            <li class="obrazek">
                <a>
                    <img src="{{ asset('images/szalwia_draw.jpg') }}" alt="image3" class="gallery-img">
                    <div class="description">Szałwia (Salvia L.) – rodzaj roślin z rodziny jasnotowatych. Szałwie występują w stanie dzikim na całej kuli ziemskiej, z wyjątkiem obszarów o klimacie polarnym. 
                        <br><br>Szałwia posiada właściwości przeciwzapalne i przeciwbakteryjne, poprawia trawienie, łagodzi objawy menopauzy, wspiera układ odporonościowy, ułatwia relaks i dobry sen a także poprawia koncentrację.
                    </div>
                </a>
            </li>
            <li class="obrazek">
                <a>
                    <img src="{{ asset('images/mieta_draw.jpg') }}" alt="image4" class="gallery-img">
                    <div class="description">Mięta (Mentha L.) – rodzaj roślin z rodziny jasnotowatych (Lamiaceae). Zasięg rodzaju obejmuje wszystkie kontynenty z wyjątkiem Antarktydy i Ameryki Południowej.
                        <br><br>Mięta pobudza wydzielanie soku żołądkowego, działa żółciopędnie, przez co ułatwia trawienie i jest zalecana przy niestrawności. Eliminuje wzdęcia oraz reguluje perystaltykę jelit. Działa również odświeżająco w jamie ustnej. Nie zaleca się jednak zbyt długiego stosowania, gdyż może podrażnić ściany żołądka.
                    </div>
                </a>
            </li>
            <li class="obrazek">
                <a>
                    <img src="{{ asset('images/tymianek_draw.jpg') }}" alt="image5" class="gallery-img">
                    <div class="description">Macierzanka tymianek (Thymus vulgaris L.) – gatunek rośliny należący do rodziny jasnotowatych. W naturze rośnie w zachodniej części basenu Morza Śródziemnego, w miejscach suchych i skalistych.
                        <br><br>Zawiera olejek tymiankowy o działaniu bakterio- i grzybostatycznym. Tymianek wykazuje działanie wspierające układ oddechowy, a także zwalczające infekcje takie jak: kaszel, katar czy ból gardła.
                    </div>
                </a>
            </li>
            <li class="obrazek">
                <a>
                    <img src="{{ asset('images/melisa_draw.jpg') }}" alt="image6" class="gallery-img">
                    <div class="description">Melisa (Melissa L.) – rodzaj roślin należących do rodziny jasnotowatych. Należą do niego cztery gatunki. W Europie rośnie jeden gatunek, uprawiany także w Polsce – melisa lekarska M. officinalis.
                        <br><br>Napar z melisy odpręża, rozluźnia, ułatwia zasypianie, wykazano także, że wpływa pozytywnie na koncentrację.
            
                    </div>
                </a>
            </li>
            <li class="obrazek">
                <a>
                    <img src="{{ asset('images/dziurawiec_draw.jpg') }}" alt="image7" class="gallery-img">
                    <div class="description">Dziurawiec (Hypericum L.) – rodzaj roślin z rodziny dziurawcowatych. Obejmuje co najmniej 507 gatunków - w tym 8 w Polsce. Zasiedla bardzo zróżnicowane środowiska.
                        <br><br>Ma bardzo szerokie zastosowanie w ziołolecznictwie m.in reguluje procesy trawienne oraz układ nerwowy w stanach obniżenia samopoczucia. Podwyższa wrażliwość skóry na promienie słoneczne.
                        Z tego powodu zaleca się stosować w sezonie jesienno-zimowym.
            
                    </div>
                </a>
            </li>
            
        </ul>
    </div>
    
    
</body>
</html>
