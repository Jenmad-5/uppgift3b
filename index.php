<?php
//denna fil skickar användaren direkt till index.html och exit ser till att ingen annan kod körs efter redirecten
header('Location: index.html');
exit;