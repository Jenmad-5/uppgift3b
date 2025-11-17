<?php
// Ta emot formulärdata
$namn = $_POST['namn'] ?? '';
$telefon = $_POST['telefon'] ?? '';
$prioritet = $_POST['prioritet'] ?? '';
$ort = $_POST['ort'] ?? '';
$kategori = $_POST['kategori'] ?? '';
$rubrik = $_POST['rubrik'] ?? '';
$beskrivning = $_POST['beskrivning'] ?? '';
?>
<!DOCTYPE html>
<html lang="sv">
<head>
<meta charset="UTF-8">
<title>Supportärende</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<h1>Supportärende</h1>

<p>Ditt ärende har nu registrerats, vi återkopplar så snart vi kan.</p>

<p><strong>Informationen vi fått är följande:</strong></p>

<p>
<strong>Namn:</strong> <?= htmlspecialchars($namn) ?><br>
<strong>Prioritet:</strong> <?= htmlspecialchars($prioritet) ?><br>
<strong>Telefon:</strong> <?= htmlspecialchars($telefon) ?><br>
<strong>Ort:</strong> <?= htmlspecialchars($ort) ?><br>
<strong>Kategori:</strong> <?= htmlspecialchars($kategori) ?><br>
<strong>Rubrik:</strong> <?= htmlspecialchars($rubrik) ?><br>
<strong>Beskrivning:</strong> <?= nl2br(htmlspecialchars($beskrivning)) ?>
</p>

<p>
Om man inte får information vid alla rubriker innebär det att man inte har fyllt i alla fält eller att det är något fel i din kod.
Det som händer när man klickar på Submit är att formulärets data skickas till en php-sida som tolkar data och presenterar resultatet.
Denna php-sida är klar och fungerande så den biten behöver du inte bry dig om.
</p>

</body>
</html>
