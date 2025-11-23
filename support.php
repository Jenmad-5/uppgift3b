<?php
// support.php

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header("Content-Type: text/html; charset=utf-8");
    echo "<!doctype html><html lang='sv'><head><meta charset='utf-8'><title>Fel</title></head><body>";
    echo "<p>Detta dokument ska nås via formuläret. <a href='index.html'>Gå tillbaka</a>.</p></body></html>";
    exit;
}

// Funktion för säker HTML-output
function esc($s){ return htmlspecialchars($s, ENT_QUOTES, 'utf-8'); }

// Hämta formulärdata
$namn = esc($_POST['namn'] ?? '');
$telefon = esc($_POST['telefon'] ?? '');
$prioritet = esc($_POST['prioritet'] ?? '');
$ort = esc($_POST['ort'] ?? '');
$kategori = esc($_POST['kategori'] ?? '');
$rubrik = esc($_POST['rubrik'] ?? '');
$beskrivning = esc($_POST['beskrivning'] ?? '');

?>
<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <title>Supportärende</title>
    <link rel="stylesheet" href="style.php.css">
</head>
<body>
<div id="support-container">

    <h1>Supportärende</h1>
    <p>Ditt ärende har nu registrerats, vi återkopplar så snart vi kan.</p>

    <h3>Informationen vi fått är följande:</h3>
    <p>
        <b>Namn:</b> <?php echo $namn; ?><br>
        <b>Prioritet:</b> <?php echo $prioritet; ?><br>
        <b>Telefon:</b> <?php echo $telefon; ?><br>
        <b>Ort:</b> <?php echo $ort; ?><br>
        <b>Kategori:</b> <?php echo $kategori; ?><br>
        <b>Rubrik:</b> <?php echo $rubrik; ?><br>
        <b>Beskrivning:</b> <?php echo nl2br($beskrivning); ?><br>
    </p>

</div>
</body>
</html>
