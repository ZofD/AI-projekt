# Uprawnienia dla `kursLogin`@`%`

GRANT USAGE ON *.* TO 'kursLogin'@'%' IDENTIFIED BY PASSWORD '*4E1FEECCEE8B3726B3FFF6D6F5687C7BA3C887F3';

GRANT SELECT (login, haslo) ON `projektkurs`.`uzytkownicy` TO 'kursLogin'@'%';


# Uprawnienia dla `kursRegi`@`%`

GRANT USAGE ON *.* TO 'kursRegi'@'%' IDENTIFIED BY PASSWORD '*4E1FEECCEE8B3726B3FFF6D6F5687C7BA3C887F3';

GRANT SELECT (PESEL, email, login), INSERT (imie, PESEL, poczta, email, ulica, haslo, kod_pocztowy, login, nr_budynku, miejscowosc, nazwisko, nr_lokalu) ON `projektkurs`.`uzytkownicy` TO 'kursRegi'@'%';