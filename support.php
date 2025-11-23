<?php
// support.php

// Endast acceptera POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    // Om någon öppnar filen direkt, visa enkel instruktion.
    header("Content-Type: text/html; charset=utf-8");
    echo "<!doctype html><html lang='sv'><head><meta charset='utf-8'><title>Fel</title></head><body>";
    echo "<p>Detta dokument ska nås via formuläret. <a href='index.html'>Gå tillbaka</a>.</p></body></html>";
    exit;
}

// Hämta och trimma värden
function in($key) {
    return isset($_POST[$key]) ? trim($_POST[$key]) : '';
}

$namn = in('namn');
$telefon = in('telefon');
$prioritet = in('prioritet');
$ort = in('ort');
$kategori = in('kategori');
$rubrik = in('rubrik');
$beskrivning = in('beskrivning');

// Enkel validering: alla fält krävs
$errors = [];
if ($namn === '') $errors[] = "Namn saknas.";
if ($telefon === '') $errors[] = "Telefon saknas.";
if ($rubrik === '') $errors[] = "Rubrik saknas.";
if ($beskrivning === '') $errors[] = "Beskrivning saknas.";
if ($ort === '') $errors[] = "Ort är inte vald.";

// Visa fel om något saknas
if (!empty($errors)) {
    header("Content-Type: text/html; charset=utf-8");
    ?>
    <!DOCTYPE html>
    <html lang="sv">
    <head>
      <meta charset="utf-8">
      <title>Fel - Supportärende</title>
      <style>
        body{ font-family: Arial, sans-serif; width:600px; margin:20px auto; }
        h1{ font-family: "Times New Roman", Georgia, serif; font-size:32px; }
        ul{ color: #900; }
      </style>
    </head>
    <body>
      <h1>Fel vid inskick</h1>
      <p>Följande fält måste fyllas i:</p>
      <ul>
        <?php foreach ($errors as $e) echo "<li>" . htmlspecialchars($e, ENT_QUOTES, 'utf-8') . "</li>"; ?>
      </ul>
      <p><a href="index.html">Tillbaka till formuläret</a></p>
    </body>
    </html>
    <?php
    exit;
}

// Allt ok — visa supportärende
function esc($s){ return htmlspecialchars($s, ENT_QUOTES, 'utf-8'); }

?>
<!DOCTYPE html>
<html lang="sv">
<head>
<meta charset="utf-8">
<title>Supportärende</title>
<style>
  body{ font-family: Arial, sans-serif; width:700px; margin:20px auto; line-height:1.6; color:#000; }
  h1{ font-family: "Times New Roman", Georgia, serif; font-size:36px; margin:0 0 8px 0; }
  h3{ margin-top:18px; }
  b{ font-size:16px; }
</style>
</head>
<body>

<h1>Supportärende</h1>

<p>Ditt ärende har nu registrerats, vi återkopplar så snart vi kan.</p>

<h3>Informationen vi fått är följande:</h3>

<p>
<b>Namn:</b> <?php echo esc($namn); ?><br>
<b>Prioritet:</b> <?php echo esc($prioritet); ?><br>
<b>Telefon:</b> <?php echo esc($telefon); ?><br>
<b>Ort:</b> <?php echo esc($ort); ?><br>
<b>Kategori:</b> <?php echo esc($kategori); ?><br>
<b>Rubrik:</b> <?php echo esc($rubrik); ?><br>
<b>Beskrivning:</b> <?php echo nl2br(esc($beskrivning)); ?><br>
</p>
</body>
</html>