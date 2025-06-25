## Projekt zaliczeniowy z laboratorium "Programowanie aplikacji internetowych"

## Tematyka projektu: internetowy sklep z ziołami

##Funkcjonalności:##
-uwierzytelnianie
-przeglądanie informacji o roślinach
-zamawianie mieszanek ziołowych 
-wyświetlanie mapki z lokalizacją sklepu
-możliwość edycji danych konta 

**w przyszłej wersji aplikacji funkcjonalności będą rozwijane o dodanie opcji przeglądania historii zamówień dla zalogowanych użytkowników. Na ten moment złożone zamówienia są dostępne tylko po stronie serwera w bazie danych.

## Narzędzia i technologie:
- strona serwera: Laravel
- baza danych: MySql
- strona klienta: Laravel Blade, TailwindCSS, Vite

## Wymagania ##

Wersje programów wykorzystane do tworzenia aplikacji (aplikacja nie została przetestowana z kompatybilnością wcześniejszych wersji):

- Laravel Framework 11.36.1
- PHP 8.2.26
- Composer 2.8.4
- Node v22.12.0
- mysql  Ver 15.1 Distrib 10.11.6-MariaDB


    
## Uruchomienie ##

1. Plik projektowy `zielnik.com` należy umieścić w `XAMPP\htdocs`
2. W folderze projektu, w terminalu wpisać `npm install` w celu instalacji zaleznosci `node_modules`
3. W folderze projektu, w terminalu wpisać `composer install` w celu instalacji zaleznosci `vendor`
4. Włączyć XAMPP MySQL Database oraz Apache Web Server
5. Migracja baz danych: `php artisan migrate`, aby utworzyły się potrzebne tabele
6. Uruchomienie klienta poprzez wpisanie w terminalu `npm run dev`
7. Uruchomienie serwera poprzez wpisanie komendy: `php artisan serve`
8. Uruchomienie aplikacji w przeglądarce pod adresem: `localhost:8000`
   
#Uwagi

projekt można również sklonować z github'a: 'git clone https://github.com/jagfoljersolen/laravel_zielnik.com.git'

##Konto testowe

 **Test**
    -   Login: test@test.com
    -   Hasło: test1234
