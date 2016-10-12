<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('lb', array (
  'validators' => 
  array (
    'This value should be false.' => 'Dëse Wäert sollt falsch sinn.',
    'This value should be true.' => 'Dëse Wäert sollt wouer sinn.',
    'This value should be of type {{ type }}.' => 'Dëse Wäert sollt vum Typ {{ type }} sinn.',
    'This value should be blank.' => 'Dëse Wäert sollt eidel sinn.',
    'The value you selected is not a valid choice.' => 'Dëse Wäert sollt enger vun de Wielméiglechkeeten entspriechen.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'Et muss mindestens {{ limit }} Méiglechkeet ausgewielt ginn.|Et musse mindestens {{ limit }} Méiglechkeeten ausgewielt ginn.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'Et dierf héchstens {{ limit }} Méiglechkeet ausgewielt ginn.|Et dierfen héchstens {{ limit }} Méiglechkeeten ausgewielt ginn.',
    'One or more of the given values is invalid.' => 'Een oder méi vun de Wäerter ass ongëlteg.',
    'The fields {{ fields }} were not expected.' => 'D\'Felder {{ fields }} goufen net erwaart.',
    'The fields {{ fields }} are missing.' => 'D\'Felder {{ fields }} feelen.',
    'This value is not a valid date.' => 'Dëse Wäert entsprécht kenger gëlteger Datumsangab.',
    'This value is not a valid datetime.' => 'Dëse Wäert entsprécht kenger gëlteger Datums- an Zäitangab.',
    'This value is not a valid email address.' => 'Dëse Wäert ass keng gëlteg Email-Adress.',
    'The file could not be found.' => 'De Fichier gouf net fonnt.',
    'The file is not readable.' => 'De Fichier ass net liesbar.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'De Fichier ass ze grouss ({{ size }} {{ suffix }}). Déi zougeloosse Maximalgréisst bedréit {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'Den Typ vum Fichier ass ongëlteg ({{ type }}). Erlaabten Type sinn {{ types }}.',
    'This value should be {{ limit }} or less.' => 'Dëse Wäert soll méi kleng oder gläich {{ limit }} sinn.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'Dës Zeecheketten ass ze laang. Se sollt héchstens {{ limit }} Zeechen hunn.',
    'This value should be {{ limit }} or more.' => 'Dëse Wäert sollt méi grouss oder gläich {{ limit }} sinn.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'Dës Zeecheketten ass ze kuerz. Se sollt mindestens {{ limit }} Zeechen hunn.',
    'This value should not be blank.' => 'Dëse Wäert sollt net eidel sinn.',
    'This value should not be null.' => 'Dëst sollt keen Null-Wäert sinn.',
    'This value should be null.' => 'Dëst sollt keen Null-Wäert sinn.',
    'This value is not valid.' => 'Dëse Wäert ass net gëlteg.',
    'This value is not a valid time.' => 'Dëse Wäert entsprécht kenger gëlteger Zäitangab.',
    'This value is not a valid URL.' => 'Dëse Wäert ass keng gëlteg URL.',
    'The two values should be equal.' => 'Béid Wäerter sollten identesch sinn.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'De fichier ass ze grouss. Déi maximal Gréisst dierf {{ limit }} {{ suffix }} net depasséieren.',
    'The file is too large.' => 'De Fichier ass ze grouss.',
    'The file could not be uploaded.' => 'De Fichier konnt net eropgeluede ginn.',
    'This value should be a valid number.' => 'Dëse Wäert sollt eng gëlteg Zuel sinn.',
    'This file is not a valid image.' => 'Dëse Fichier ass kee gëltegt Bild.',
    'This is not a valid IP address.' => 'Dëst ass keng gëlteg IP-Adress.',
    'This value is not a valid language.' => 'Dëse Wäert aentsprécht kenger gëlteger Sprooch.',
    'This value is not a valid locale.' => 'Dëse Wäert entsprécht kengem gëltege Gebittsschema.',
    'This value is not a valid country.' => 'Dëse Wäert entsprécht kengem gëltege Land.',
    'This value is already used.' => 'Dëse Wäert gëtt scho benotzt.',
    'The size of the image could not be detected.' => 'D\'Gréisst vum Bild konnt net detektéiert ginn.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'D\'Breet vum Bild ass ze grouss ({{ width }}px). Déi erlaabte maximal Breet ass {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'D\'Breet vum Bild ass ze kleng ({{ width }}px). Déi minimal Breet ass {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'D\'Héicht vum Bild ass ze grouss ({{ height }}px). Déi erlaabte maximal Héicht ass {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'D\'Héicht vum Bild ass ze kleng ({{ height }}px). Déi minimal Héicht ass {{ min_height }}px.',
    'This value should be the user\'s current password.' => 'Dëse Wäert sollt dem aktuelle Benotzerpasswuert entspriechen.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'Dëse Wäert sollt exactly {{ limit }} Buschtaf hunn.|Dëse Wäert sollt exakt {{ limit }} Buschtawen hunn.',
    'The file was only partially uploaded.' => 'De Fichier gouf just deelweis eropgelueden.',
    'No file was uploaded.' => 'Et gouf kee Fichier eropgelueden.',
    'No temporary folder was configured in php.ini.' => 'Et gouf keen temporären Dossier an der php.ini konfiguréiert.',
    'Cannot write temporary file to disk.' => 'Den temporäre Fichier kann net gespäichert ginn.',
    'A PHP extension caused the upload to fail.' => 'Eng PHP-Erweiderung huet den Upload verhënnert.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'Dës Sammlung sollt {{ limit }} oder méi Elementer hunn.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'Dës Sammlung sollt {{ limit }} oder manner Elementer hunn.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'Dës Sammlung sollt exakt {{ limit }} Element hunn.|Dës Sammlung sollt exakt {{ limit }} Elementer hunn.',
    'Invalid card number.' => 'Ongëlteg Kaartennummer.',
    'Unsupported card type or invalid card number.' => 'Net ënnerstëtzte Kaartentyp oder ongëlteg Kaartennummer.',
    'This is not a valid International Bank Account Number (IBAN).' => 'Dëst ass keng gëlteg IBAN-Kontonummer.',
    'This value is not a valid ISBN-10.' => 'Dëse Wäert ass keng gëlteg ISBN-10.',
    'This value is not a valid ISBN-13.' => 'Dëse Wäert ass keng gëlteg ISBN-13.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'Dëse Wäert ass weder eng gëlteg ISBN-10 nach eng gëlteg ISBN-13.',
    'This value is not a valid ISSN.' => 'Dëse Wäert ass keng gëlteg ISSN.',
    'This value is not a valid currency.' => 'Dëse Wäert ass keng gëlteg Währung.',
    'This value should be equal to {{ compared_value }}.' => 'Dëse Wäert sollt {{ compared_value }} sinn.',
    'This value should be greater than {{ compared_value }}.' => 'Dëse Wäert sollt méi grouss wéi {{ compared_value }} sinn.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'Dëse Wäert sollt méi grouss wéi oder gläich {{ compared_value }} sinn.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Dëse Wäert sollt identesch si mat {{ compared_value_type }} {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'Dëse Wäert sollt méi kleng wéi {{ compared_value }} sinn.',
    'This value should be less than or equal to {{ compared_value }}.' => 'Dëse Wäert sollt méi kleng wéi oder gläich {{ compared_value }} sinn.',
    'This value should not be equal to {{ compared_value }}.' => 'Dëse Wäert sollt net {{ compared_value }} sinn.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Dëse Wäert sollt net identesch si mat {{ compared_value_type }} {{ compared_value }}.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'D\'Säiteverhältnis vum Bild ass ze grouss ({{ ratio }}). Den erlaabte Maximalwäert ass {{ max_ratio }}.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'D\'Säiteverhältnis vum Bild ass ze kleng ({{ ratio }}). Den erwaarte Minimalwäert ass {{ min_ratio }}.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'D\'Bild ass quadratesch ({{ width }}x{{ height }}px). Quadratesch Biller sinn net erlaabt.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'D\'Bild ass am Queeschformat ({{ width }}x{{ height }}px). Biller am Queeschformat sinn net erlaabt.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'D\'Bild ass am Héichformat ({{ width }}x{{ height }}px). Biller am Héichformat sinn net erlaabt.',
    'An empty file is not allowed.' => 'En eidele Fichier ass net erlaabt.',
    'The host could not be resolved.' => 'Den Domain-Numm konnt net opgeléist ginn.',
    'This value does not match the expected {{ charset }} charset.' => 'Dëse Wäert entsprécht net dem erwaarten Zeechesaz {{ charset }}.',
    'This is not a valid Business Identifier Code (BIC).' => 'Dëst ass kee gëltege "Business Identifier Code" (BIC).',
    'This form should not contain extra fields.' => 'Dës Feldergrupp sollt keng zousätzlech Felder enthalen.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'De geschécktene Fichier ass ze grouss. Versicht wann ech gelift ee méi klenge Fichier eropzelueden.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'Den CSRF-Token ass ongëlteg. Versicht wann ech gelift de Formulaire nach eng Kéier ze schécken.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'Bei der Authentifikatioun ass e Feeler opgetrueden.',
    'Authentication credentials could not be found.' => 'Et konnte keng Zouganksdate fonnt ginn.',
    'Authentication request could not be processed due to a system problem.' => 'D\'Ufro fir eng Authentifikatioun konnt wéinst engem Problem vum System net beaarbecht ginn.',
    'Invalid credentials.' => 'Ongëlteg Zouganksdaten.',
    'Cookie has already been used by someone else.' => 'De Cookie gouf scho vun engem anere benotzt.',
    'Not privileged to request the resource.' => 'Keng Rechter fir d\'Ressource unzefroen.',
    'Invalid CSRF token.' => 'Ongëltegen CSRF-Token.',
    'Digest nonce has expired.' => 'Den eemolege Schlëssel ass ofgelaf.',
    'No authentication provider found to support the authentication token.' => 'Et gouf keen Authentifizéierungs-Provider fonnt deen den Authentifizéierungs-Token ënnerstëtzt.',
    'No session available, it either timed out or cookies are not enabled.' => 'Keng Sëtzung disponibel. Entweder ass se ofgelaf oder Cookies sinn net aktivéiert.',
    'No token could be found.' => 'Et konnt keen Token fonnt ginn.',
    'Username could not be found.' => 'De Benotzernumm konnt net fonnt ginn.',
    'Account has expired.' => 'Den Account ass ofgelaf.',
    'Credentials have expired.' => 'D\'Zouganksdate sinn ofgelaf.',
    'Account is disabled.' => 'De Konto ass deaktivéiert.',
    'Account is locked.' => 'De Konto ass gespaart.',
  ),
  'FOSUserBundle' => 
  array (
    'group.edit.submit' => 'Grupp aktualiséieren',
    'group.show.name' => 'Gruppennumm',
    'group.new.submit' => 'Grupp creéieren',
    'group.flash.updated' => 'D\'Grupp gouf aktualiséiert',
    'group.flash.created' => 'D\'Grupp gouf creéiert',
    'group.flash.deleted' => 'D\'Grupp gouf geläscht',
    'security.login.username' => 'Benotzernumm',
    'security.login.password' => 'Passwuert',
    'security.login.remember_me' => 'U mech erënneren',
    'security.login.submit' => 'Umellen',
    'profile.show.username' => 'Benotzernumm',
    'profile.show.email' => 'E-Mail',
    'profile.edit.submit' => 'Benotzer aktualiséieren',
    'profile.flash.updated' => 'De Benotzerprofil gouf aktualiséiert',
    'change_password.submit' => 'Passwuert ännern',
    'change_password.flash.success' => 'D\'Passwuert gouf geännert',
    'registration.check_email' => 'Eng E-Mail gouf un %email% geschéckt. Se enthält e Link deen s Du uklicke muss, fir Däi Benotzerkonto ze bestätegen.',
    'registration.confirmed' => 'Gléckwonsch %username%, Däi Benutzerkonto ass elo bestätegt.',
    'registration.submit' => 'Registréieren',
    'registration.flash.user_created' => 'De Benotzer gouf erfollegräich creéiert',
    'registration.email.subject' => 'Wëllkomm %username%!',
    'registration.email.message' => 'Hallo %username%!

Fir Däi Benotzerkonto ze bestätegen, besich wann ech gelift d\'Säit %confirmationUrl%

Mat beschte Gréiss,
d\'Equipe.
',
    'resetting.password_already_requested' => 'Een neit Passwuert gouf an de vergaangene 24 Stunden fir dëse Benotzer schon emol ugefrot.',
    'resetting.check_email' => 'Eng E-Mail gouf un %email% geschéckt. Se enthält e Link, deen s Du uklicke muss, fir Däi Passwort zeréckzesetzen.',
    'resetting.request.invalid_username' => 'De Benotzer "%username%" existéiert net.',
    'resetting.request.username' => 'Benotzernumm',
    'resetting.request.submit' => 'Passwuert zerécksetzen',
    'resetting.reset.submit' => 'Passwuert ännern',
    'resetting.flash.success' => 'D\'Passwuert gouf erfollegräich zeréckgesat',
    'resetting.email.subject' => 'Wëllkomm %username%!',
    'resetting.email.message' => 'Hallo %username%!

Fir Däi Passwuert zeréckzesetzen, besich wann ech gelift d\'Säit %confirmationUrl%

Mat beschte Gréiss,
d\'Equipe.
',
    'layout.logout' => 'Ofmellen',
    'layout.login' => 'Umellen',
    'layout.register' => 'Registréieren',
    'layout.logged_in_as' => 'Ugemellt als %username%',
    'form.group_name' => 'Gruppennumm',
    'form.username' => 'Benotzernumm',
    'form.email' => 'E-Mail-Adress',
    'form.current_password' => 'Aktuellt Passwuert',
    'form.password' => 'Passwuert',
    'form.password_confirmation' => 'Bestätegung',
    'form.new_password' => 'Neit Passwuert',
    'form.new_password_confirmation' => 'Bestätegung',
  ),
));

$cataloguePl = new MessageCatalogue('pl', array (
  'validators' => 
  array (
    'This value should be false.' => 'Ta wartość powinna być fałszem.',
    'This value should be true.' => 'Ta wartość powinna być prawdą.',
    'This value should be of type {{ type }}.' => 'Ta wartość powinna być typu {{ type }}.',
    'This value should be blank.' => 'Ta wartość powinna być pusta.',
    'The value you selected is not a valid choice.' => 'Ta wartość powinna być jedną z podanych opcji.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'Powinieneś wybrać co najmniej {{ limit }} opcję.|Powinieneś wybrać co najmniej {{ limit }} opcje.|Powinieneś wybrać co najmniej {{ limit }} opcji.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'Powinieneś wybrać maksymalnie {{ limit }} opcję.|Powinieneś wybrać maksymalnie {{ limit }} opcje.|Powinieneś wybrać maksymalnie {{ limit }} opcji.',
    'One or more of the given values is invalid.' => 'Jedna lub więcej z podanych wartości jest nieprawidłowa.',
    'This field was not expected.' => 'To pole nie spodziewano.',
    'This field is missing.' => 'To pole jest chybianie.',
    'This value is not a valid date.' => 'Ta wartość nie jest prawidłową datą.',
    'This value is not a valid datetime.' => 'Ta wartość nie jest prawidłową datą i czasem.',
    'This value is not a valid email address.' => 'Ta wartość nie jest prawidłowym adresem email.',
    'The file could not be found.' => 'Plik nie mógł zostać odnaleziony.',
    'The file is not readable.' => 'Nie można odczytać pliku.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Plik jest za duży ({{ size }} {{ suffix }}). Maksymalny dozwolony rozmiar to {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'Nieprawidłowy typ mime pliku ({{ type }}). Dozwolone typy mime to {{ types }}.',
    'This value should be {{ limit }} or less.' => 'Ta wartość powinna wynosić {{ limit }} lub mniej.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'Ta wartość jest zbyt długa. Powinna mieć {{ limit }} lub mniej znaków.|Ta wartość jest zbyt długa. Powinna mieć {{ limit }} lub mniej znaków.|Ta wartość jest zbyt długa. Powinna mieć {{ limit }} lub mniej znaków.',
    'This value should be {{ limit }} or more.' => 'Ta wartość powinna wynosić {{ limit }} lub więcej.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'Ta wartość jest zbyt krótka. Powinna mieć {{ limit }} lub więcej znaków.|Ta wartość jest zbyt krótka. Powinna mieć {{ limit }} lub więcej znaków.|Ta wartość jest zbyt krótka. Powinna mieć {{ limit }} lub więcej znaków.',
    'This value should not be blank.' => 'Ta wartość nie powinna być pusta.',
    'This value should not be null.' => 'Ta wartość nie powinna być nullem.',
    'This value should be null.' => 'Ta wartość powinna być nullem.',
    'This value is not valid.' => 'Ta wartość jest nieprawidłowa.',
    'This value is not a valid time.' => 'Ta wartość nie jest prawidłowym czasem.',
    'This value is not a valid URL.' => 'Ta wartość nie jest prawidłowym adresem URL.',
    'The two values should be equal.' => 'Obie wartości powinny być równe.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Plik jest za duży. Maksymalny dozwolony rozmiar to {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'Plik jest za duży.',
    'The file could not be uploaded.' => 'Plik nie mógł być wgrany.',
    'This value should be a valid number.' => 'Ta wartość powinna być prawidłową liczbą.',
    'This file is not a valid image.' => 'Ten plik nie jest obrazem.',
    'This is not a valid IP address.' => 'To nie jest prawidłowy adres IP.',
    'This value is not a valid language.' => 'Ta wartość nie jest prawidłowym językiem.',
    'This value is not a valid locale.' => 'Ta wartość nie jest prawidłową lokalizacją.',
    'This value is not a valid country.' => 'Ta wartość nie jest prawidłową nazwą kraju.',
    'This value is already used.' => 'Ta wartość jest już wykorzystywana.',
    'The size of the image could not be detected.' => 'Nie można wykryć rozmiaru obrazka.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'Szerokość obrazka jest zbyt duża ({{ width }}px). Maksymalna dopuszczalna szerokość to {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'Szerokość obrazka jest zbyt mała ({{ width }}px). Oczekiwana minimalna szerokość to {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'Wysokość obrazka jest zbyt duża ({{ height }}px). Maksymalna dopuszczalna wysokość to {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'Wysokość obrazka jest zbyt mała ({{ height }}px). Oczekiwana minimalna wysokość to {{ min_height }}px.',
    'This value should be the user\'s current password.' => 'Ta wartość powinna być aktualnym hasłem użytkownika.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'Ta wartość powinna mieć dokładnie {{ limit }} znak.|Ta wartość powinna mieć dokładnie {{ limit }} znaki.|Ta wartość powinna mieć dokładnie {{ limit }} znaków.',
    'The file was only partially uploaded.' => 'Plik został wgrany tylko częściowo.',
    'No file was uploaded.' => 'Żaden plik nie został wgrany.',
    'No temporary folder was configured in php.ini.' => 'Nie skonfigurowano folderu tymczasowego w php.ini.',
    'Cannot write temporary file to disk.' => 'Nie można zapisać pliku tymczasowego na dysku.',
    'A PHP extension caused the upload to fail.' => 'Rozszerzenie PHP spowodowało błąd podczas wgrywania.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'Ten zbiór powinien zawierać {{ limit }} lub więcej elementów.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'Ten zbiór powinien zawierać {{ limit }} lub mniej elementów.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'Ten zbiór powinien zawierać dokładnie {{ limit }} element.|Ten zbiór powinien zawierać dokładnie {{ limit }} elementy.|Ten zbiór powinien zawierać dokładnie {{ limit }} elementów.',
    'Invalid card number.' => 'Nieprawidłowy numer karty.',
    'Unsupported card type or invalid card number.' => 'Nieobsługiwany rodzaj karty lub nieprawidłowy numer karty.',
    'This is not a valid International Bank Account Number (IBAN).' => 'Nieprawidłowy międzynarodowy numer rachunku bankowego (IBAN).',
    'This value is not a valid ISBN-10.' => 'Ta wartość nie jest prawidłowym numerem ISBN-10.',
    'This value is not a valid ISBN-13.' => 'Ta wartość nie jest prawidłowym numerem ISBN-13.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'Ta wartość nie jest prawidłowym numerem ISBN-10 ani ISBN-13.',
    'This value is not a valid ISSN.' => 'Ta wartość nie jest prawidłowym numerem ISSN.',
    'This value is not a valid currency.' => 'Ta wartość nie jest prawidłową walutą.',
    'This value should be equal to {{ compared_value }}.' => 'Ta wartość powinna być równa {{ compared_value }}.',
    'This value should be greater than {{ compared_value }}.' => 'Ta wartość powinna być większa niż {{ compared_value }}.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'Ta wartość powinna być większa bądź równa {{ compared_value }}.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Ta wartość powinna być identycznego typu {{ compared_value_type }} oraz wartości {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'Ta wartość powinna być mniejsza niż {{ compared_value }}.',
    'This value should be less than or equal to {{ compared_value }}.' => 'Ta wartość powinna być mniejsza bądź równa {{ compared_value }}.',
    'This value should not be equal to {{ compared_value }}.' => 'Ta wartość nie powinna być równa {{ compared_value }}.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Ta wartość nie powinna być identycznego typu {{ compared_value_type }} oraz wartości {{ compared_value }}.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'Proporcje obrazu są zbyt duże ({{ ratio }}). Maksymalne proporcje to {{ max_ratio }}.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'Proporcje obrazu są zbyt małe ({{ ratio }}). Minimalne proporcje to {{ min_ratio }}.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'Obraz jest kwadratem ({{ width }}x{{ height }}px). Kwadratowe obrazy nie są akceptowane.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'Obraz jest panoramiczny ({{ width }}x{{ height }}px). Panoramiczne zdjęcia nie są akceptowane.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'Obraz jest portretowy ({{ width }}x{{ height }}px). Portretowe zdjęcia nie są akceptowane.',
    'An empty file is not allowed.' => 'Plik nie może być pusty.',
    'The host could not be resolved.' => 'Nazwa hosta nie została rozpoznana.',
    'This value does not match the expected {{ charset }} charset.' => 'Ta wartość nie pasuje do oczekiwanego zestawu znaków {{ charset }}.',
    'This form should not contain extra fields.' => 'Ten formularz nie powinien zawierać dodatkowych pól.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'Wgrany plik był za duży. Proszę spróbować wgrać mniejszy plik.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'Token CSRF jest nieprawidłowy. Proszę spróbować wysłać formularz ponownie.',
    'fos_user.username.already_used' => 'Ta nazwa użytkownika jest już zajęta',
    'fos_user.username.blank' => 'Proszę podać nazwę użytkownika',
    'fos_user.username.short' => 'Nazwa użytkownika jest za krótka',
    'fos_user.username.long' => 'Nazwa użytkownika jest za długa',
    'fos_user.email.already_used' => 'Podany email jest zajęty',
    'fos_user.email.blank' => 'Proszę podać adres email',
    'fos_user.email.short' => 'Podany email jest za krótki',
    'fos_user.email.long' => 'Podany email jest za długi',
    'fos_user.email.invalid' => 'Podany adres email jest nieprawidłowy',
    'fos_user.password.blank' => 'Proszę podać hasło',
    'fos_user.password.short' => 'Podane hasło jest za krótkie',
    'fos_user.password.mismatch' => 'Hasła nie pasują do siebie',
    'fos_user.new_password.blank' => 'Proszę podać nowe hasło',
    'fos_user.new_password.short' => 'Podane nowe hasło jest za krótkie',
    'fos_user.current_password.invalid' => 'Podane hasło jest nieprawidłowe',
    'fos_user.group.blank' => 'Proszę podać nazwę',
    'fos_user.group.short' => 'Podana nazwa jest za krótka',
    'fos_user.group.long' => 'Podana nazwa jest za długa',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'Wystąpił błąd uwierzytelniania.',
    'Authentication credentials could not be found.' => 'Dane uwierzytelniania nie zostały znalezione.',
    'Authentication request could not be processed due to a system problem.' => 'Żądanie uwierzytelniania nie mogło zostać pomyślnie zakończone z powodu problemu z systemem.',
    'Invalid credentials.' => 'Nieprawidłowe dane.',
    'Cookie has already been used by someone else.' => 'To ciasteczko jest używane przez kogoś innego.',
    'Not privileged to request the resource.' => 'Brak uprawnień dla żądania wskazanego zasobu.',
    'Invalid CSRF token.' => 'Nieprawidłowy token CSRF.',
    'Digest nonce has expired.' => 'Kod dostępu wygasł.',
    'No authentication provider found to support the authentication token.' => 'Nie znaleziono mechanizmu uwierzytelniania zdolnego do obsługi przesłanego tokenu.',
    'No session available, it either timed out or cookies are not enabled.' => 'Brak danych sesji, sesja wygasła lub ciasteczka nie są włączone.',
    'No token could be found.' => 'Nie znaleziono tokenu.',
    'Username could not be found.' => 'Użytkownik o podanej nazwie nie istnieje.',
    'Account has expired.' => 'Konto wygasło.',
    'Credentials have expired.' => 'Dane uwierzytelniania wygasły.',
    'Account is disabled.' => 'Konto jest wyłączone.',
    'Account is locked.' => 'Konto jest zablokowane.',
  ),
  'FOSUserBundle' => 
  array (
    'group.edit.submit' => 'Edytuj grupę',
    'group.show.name' => 'Nazwa grupy',
    'group.new.submit' => 'Utwórz grupę',
    'group.flash.updated' => 'Grupa została zaktualizowana',
    'group.flash.created' => 'Grupa została utworzona',
    'group.flash.deleted' => 'Grupa została usunięta',
    'security.login.username' => 'Nazwa użytkownika',
    'security.login.password' => 'Hasło',
    'security.login.remember_me' => 'Nie wylogowuj mnie',
    'security.login.submit' => 'Zaloguj',
    'profile.show.username' => 'Nazwa użytkownika',
    'profile.show.email' => 'E-mail',
    'profile.edit.submit' => 'Edytuj użytkownika',
    'profile.flash.updated' => 'Zapisano zmiany w profilu',
    'change_password.submit' => 'Zmień hasło',
    'change_password.flash.success' => 'Hasło zostało zmienione',
    'registration.check_email' => 'Na adres %email% wysłano wiadomość e-mail. Zawiera ona link, na który należy kliknąć, aby aktywować konto.',
    'registration.confirmed' => 'Gratulacje %username%, potwierdziłeś konto.',
    'registration.back' => 'Powrót do poprzedniej strony.',
    'registration.submit' => 'Zarejestruj',
    'registration.flash.user_created' => 'Stworzono użytkownika',
    'registration.email.subject' => 'Witaj %username%!',
    'registration.email.message' => 'Cześć %username%!

Aby potwierdzić swoje konto - proszę przejść do %confirmationUrl%

Pozdrawiamy,
Zespół.
',
    'resetting.password_already_requested' => 'W przeciągu ostatnich 24 godzin nastąpiła już próba odzyskania hasła.',
    'resetting.check_email' => 'Na adres %email% wysłano wiadomość e-mail. Zawiera ona link, w którego należy kliknąć, aby zresetować hasło.',
    'resetting.request.invalid_username' => 'Nazwa użytkownika lub e-mail "%username%" nie istnieje.',
    'resetting.request.username' => 'Nazwa użytkownika lub e-mail',
    'resetting.request.submit' => 'Resetuj hasło',
    'resetting.reset.submit' => 'Zmień hasło',
    'resetting.flash.success' => 'Hasło zostało zresetowane',
    'resetting.email.subject' => 'Resetowanie hasła',
    'resetting.email.message' => 'Cześć %username%!

Aby zresetować hasło - proszę przejść do %confirmationUrl%

Pozdrawiamy,
Zespół.
',
    'layout.logout' => 'Wyloguj',
    'layout.login' => 'Zaloguj',
    'layout.register' => 'Zarejestruj',
    'layout.logged_in_as' => 'Zalogowano jako %username%',
    'form.group_name' => 'Nazwa grupy',
    'form.username' => 'Nazwa użytkownika',
    'form.email' => 'E-mail',
    'form.current_password' => 'Obecne hasło',
    'form.password' => 'Hasło',
    'form.password_confirmation' => 'Powtórz hasło',
    'form.new_password' => 'Nowe hasło',
    'form.new_password_confirmation' => 'Powtórz hasło',
  ),
));
$catalogue->addFallbackCatalogue($cataloguePl);

return $catalogue;