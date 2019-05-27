# Uprawnienia dla `kursLogin`@`localhost`

GRANT USAGE ON *.* TO 'kursLogin'@'localhost' IDENTIFIED BY PASSWORD '*4E1FEECCEE8B3726B3FFF6D6F5687C7BA3C887F3';

GRANT SELECT ON `projektkurs`.* TO 'kursLogin'@'localhost';

GRANT SELECT (haslo, id_user, admin, login) ON `projektkurs`.`uzytkownicy` TO 'kursLogin'@'localhost';


# Uprawnienia dla `kursRegi`@`localhost`

GRANT USAGE ON *.* TO 'kursRegi'@'localhost' IDENTIFIED BY PASSWORD '*4E1FEECCEE8B3726B3FFF6D6F5687C7BA3C887F3';

GRANT SELECT (login, email), INSERT ON `projektkurs`.`uzytkownicy` TO 'kursRegi'@'localhost';


# Uprawnienia dla `kursUser`@`localhost`

GRANT USAGE ON *.* TO 'kursUser'@'localhost' IDENTIFIED BY PASSWORD '*4E1FEECCEE8B3726B3FFF6D6F5687C7BA3C887F3';

GRANT SELECT, INSERT ON `projektkurs`.`testy_uzytkownikow` TO 'kursUser'@'localhost';

GRANT SELECT ON `projektkurs`.`uzytkownicy` TO 'kursUser'@'localhost';

GRANT SELECT ON `projektkurs`.`testy` TO 'kursUser'@'localhost';

GRANT SELECT ON `projektkurs`.`pytania` TO 'kursUser'@'localhost';