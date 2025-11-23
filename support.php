<?php
//support.php visar information från formuläret
//content type visar på att det är html
if ($_SERVER['REQUEST_METHOD'] !== 'POST'){
   header("Content-Type: text/html; charset=utf-8");
   echo "<!doctype html><html lang='sv'><head><meta charset='utf-8'><title>Fel</title></head><body>";
   echo "<p>Detta dokument ska nås via formuläret. <a href='index.html'>Gå tillbaka</a>.</p></body></html>";
   exit;
}

//funktion som gör text säkrare att visa i html
function esc($s){ return htmlspecialchars($s, ENT_QUOTES, 'utf-8'); }

//hämtar alla värden från formuläret
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
        <title>Supportärande</title>
        <!--länkar till styling i css för php filen-->
        <link rel="stylesheet" href="style.php.css">
    </head>

    <body>
        <!--container för hela support sidan-->
        <div id="support-container">
            <h1>Supportärende</h1>
            <p>Ditt ärende har nu registrerats, vi återkopplar så snart vi kan.</p>
            
            <!--denna del visar all info som skickas i formuläret-->
            <h3>Informationen vi fått är följande:</h3>
            <p>
                <b>Namn:</b> <?php echo $namn; ?>
                <b>Prioritet:</b> <?php echo $prioritet; ?>
                <b>Telefon:</b> <?php echo $telefon; ?>
                <b>Ort:</b> <?php echo $ort; ?>
                <b>Kategori:</b> <?php echo $kategori; ?>
                <b>Rubrik:</b> <?php echo $rubrik; ?>
                <b>Beskrivning:</b> <?php echo $beskrivning; ?>
            </p>
        </div>
    </body>
</html>    