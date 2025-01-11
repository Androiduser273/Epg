<?php
// Proxy dla embedowania strony

// URL, który chcesz osadzić
$url = "https://moviesvault.ru/embed/alt1.php";

// Pobierz zawartość strony docelowej
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HEADER, false);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$response = curl_exec($ch);
curl_close($ch);

// Wyświetl zawartość pobraną z URL
header("Content-Type: text/html");
echo $response;
?>
