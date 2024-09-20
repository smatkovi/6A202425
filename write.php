<?php

// Aktuellen Wert auslesen und um +1 erhöhen
$handle = fopen("counter.txt","r");
$counter = fgets($handle);
$counter++;
fclose($handle);

// Wert um +1 erhöhen
$handle = fopen("counter.txt","w");
fwrite($handle,$counter);
fclose($handle);

?>

<html><head></head><body>

<p>Aktuelle Besucher: </p>

<p>
<?php
// Anzeige im Browserfenster:
echo $counter
?>
</p>

</body></html>
                                    

