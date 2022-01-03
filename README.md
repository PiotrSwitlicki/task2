<img src="task.jpg" alt="faktury" width="800" height="800">

ZADANIE 
Brief: Utwórz model Event, który będzie zawierał następujące informacje:
id
Nazwa wydarzenia
Data rozpoczęcia wydarzenia (data, godzina)
Data zakończenia wydarzenia (data, godzina)
Status wydarzenia
Slug wydarzenia
Organizator wydarzenia (User)
Utwórz endpoint API (/events), który zwróci JSON z listą wszystkich Eventów, który, będzie zawierał: id, nazwa wydarzenia, data rozpoczęcia, slug wydarzenia, nazwę Usera.
Stwórz warstwę do dodawania i edycji modelu Event dla zalogowanych Userów.
Założenia:
User jest standardowym użytkownikiem frameworka Laravel
1 User może posiadać więcej niż 1 Event
Slug wydarzenia będzie automatycznie generowany z nazwy wydarzenia, np. dla nazwy wydarzenia „Targi pracy” sług będzie miał wartość „targi-pracy”
Wymagania:
Laravel 8
PHP7.4+
MariaDB/MySQL
Ocenianie: Czytelność i uniwersalność kodu
