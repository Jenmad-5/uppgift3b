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
</body>
</html>
