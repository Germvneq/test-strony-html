<?php
// ========= WALIDACJA ZGODY NA DANE OSOBOWE =========
if (!isset($_POST['dane'])) {
    die("Musisz wyrazić zgodę na przetwarzanie danych osobowych.");
}

// ========= POBIERANIE DANYCH Z FORMULARZA =========
$nazwisko = $_POST['nazwisko']??'';
$imie = $_POST['imie']??'';
$plec = $_POST['plec']??'';
$email = $_POST['email']??'';
$motywacja = $_POST['motywacja']??'';

$zgoda_dane = isset($_POST['dane']) ? 'Tak' : 'Nie';
$zgoda_wizerunek = isset($_POST['wizerunek']) ? 'Tak' : 'Nie';

//========= ADRES ODBIORCY =========
$to = "germvnek@gmail.com";

// ========= TEMAT WIADOMOŚCI =========
$messade =
"Nowe zgłoszenie:\n\n". 
"Nazwisko: $nazwisko\n".
"Imię: $imie\n".
"Płeć: $plec\n".
"Email: $email\n".
"Motywacja: $motywacja\n".
"Zgoda na przetwarzanie danych osobowych: $zgoda_dane\n".
"Zgoda na wykorzystanie wizerunku: $zgoda_wizerunek\n";

// ========= NAGŁÓWKI WIADOMOŚCI =========
$headers = "From: no-reply@cyfrowe-gra.pl";

// ========= WYSYŁANIE WIADOMOŚCI =========
mail($to, $subject, $messade, $headers);

// ========= POTWIERDZENIE DLA UŻYTKOWNIKA =========
echo "Dziękujemy za przesłanie formularza. Skontaktujemy się z Tobą wkrótce.";

// ========= PRZEKIEROWANIE DO STRONY GŁÓWNEJ PO 5 SEKUNDACH =========
header("refresh:5;url=index.html");
?>